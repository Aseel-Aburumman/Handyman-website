<div class="modal fade" id="updateStatusModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo e(route('gig.updateStatus', ['gigId' => $gig->id, 'status' => 8])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-header">
                    <h5 class="modal-title">Confirm First Visit Completion</h5>
                </div>
                <div class="modal-body">
                    <p>Has the handyman completed the first visit?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Yes, First Visit Done</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/modals/paymentStep.blade.php ENDPATH**/ ?>