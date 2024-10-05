<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="<?php echo e(route('admin.dashboard')); ?>">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Users Control Center</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo e(route('admin.manage_customers')); ?>">
                        <i class="bi bi-circle"></i><span>Manage Users</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('admin.manage_handymans')); ?>">
                        <i class="bi bi-circle"></i><span>Manage Handymans</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(route('admin.manage_store_owners')); ?>">
                        <i class="bi bi-circle"></i><span>Manage Store Owners</span>
                    </a>
                </li>


        </li>


    </ul>
    </li>
    <!-- End Components Nav -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo e(route('admin.manage_tickets')); ?>">
            <i class="bi bi-card-list"></i>
            <span>Tickets Control Center</span>
        </a>
    </li>
    <!-- End Register Page Nav -->


    <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#gigs-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Gigs Control Center</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="gigs-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                <a href="<?php echo e(route('admin.manage_gigs')); ?>">
                    <i class="bi bi-circle"></i><span>Manage Gigs</span>
                </a>
            </li>
        <li>
            <a href="<?php echo e(route('admin.gigs_overview')); ?>">
                <i class="bi bi-circle"></i><span>Gigs Overview Dashboard</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.all_gigs')); ?>">
                <i class="bi bi-circle"></i><span>All Gigs List</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.reported_gigs')); ?>">
                <i class="bi bi-circle"></i><span>Reported Gigs</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.gig_categories')); ?>">
                <i class="bi bi-circle"></i><span>Gig Categories and Types</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.handyman_performance')); ?>">
                <i class="bi bi-circle"></i><span>Handyman Performance Monitoring</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('admin.communication_center')); ?>">
                <i class="bi bi-circle"></i><span>Customer and Handyman Communication Center</span>
            </a>
        </li>
        <li>
            <a href="<?php echo e(route('gig-policies.index')); ?>">

                <i class="bi bi-circle"></i><span>Gig Policy and Terms Management</span>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-gem"></i><span>Stores Control Center</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo e(route('store_control_center.dashboard')); ?>">
          <i class="bi bi-circle"></i><span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="<?php echo e(route('store_control_center.all_stores')); ?>">
          <i class="bi bi-circle"></i><span>All Stores List</span>
        </a>
      </li>


      <li>
        <a href="<?php echo e(route('store_control_center.reported_stores')); ?>">
          <i class="bi bi-circle"></i><span>Reported Stores</span>
        </a>
      </li>

    </ul>
  </li>




            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo e(route('admin.profile')); ?>">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li><!-- End Profile Page Nav -->

            

            
            


            

        </ul>

</aside><!-- End Sidebar-->
<?php /**PATH C:\xampp\htdocs\Handyman-website\resources\views/partials/sidebar_admin.blade.php ENDPATH**/ ?>