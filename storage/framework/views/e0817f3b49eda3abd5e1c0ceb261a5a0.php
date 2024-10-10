<div class="modal fade" id="paymentStepModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo e(route('payment.process', ['gigId' => $gig->id])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Payment</h5>
                </div>
                <div class="modal-body">
                    <p>Do you want to process the payment?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-info">Yes, Proceed with Payment</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/modals/updateStatus.blade.php ENDPATH**/ ?>