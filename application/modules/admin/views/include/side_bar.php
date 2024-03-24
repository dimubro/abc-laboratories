<nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
    <div class="sidebar-sticky">
        <h5 class="mt-1 mb-1 ml-3 admin-title"><?=title?></h5>
        <ul class="nav flex-column">
            <li class="nav-item mt-2">
                <a class="nav-link a-color" href="#">
                    <i class="fas fa-tachometer-alt side-bar-icon"></i> Dashboard
                </a>
            </li>
            
            <!-- <li class="nav-item">
                <a class="nav-link a-color dropdown-toggle" href="#"  role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-shopping-cart side-bar-icon menu-toggle"></i> Orders
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <ul class="nav sub-menu  flex-column pl-3">
                    <li class="nav-item dropdown-item">
                        <a class="nav-link a-color-sub" href="#">- Create</a>
                    </li>
                    <li class="nav-item dropdown-item">
                        <a class="nav-link a-color-sub" href="#">- Manage</a>
                    </li>
                </ul>
            </div>
            </li> -->
            <li class="nav-item">
                <a class="nav-link a-color" href="<?=base_url()?>admin/Rooms">
                    <i class="fas fa-hospital side-bar-icon"></i> Rooms
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link a-color" href="<?=base_url()?>admin/Test-Types">
                    <i class="fas fa-briefcase-medical side-bar-icon"></i> Test Types
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link a-color" href="<?=base_url()?>admin/Tests">
                    <i class="fas fa-vial side-bar-icon"></i> Tests
                </a>
                
            </li>
            <li class="nav-item">
                <a class="nav-link a-color" href="<?=base_url()?>admin/User">
                    <i class="fas fa-users side-bar-icon"></i> User
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link a-color a-color" href="<?=base_url()?>admin/Today-Appointment">
                    <i class="fa fa-calendar side-bar-icon"></i> Appointment
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link a-color" href="<?=base_url()?>admin/All-Appointment">
                    <i class="fa fa-file side-bar-icon"></i> All Appointment
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link a-color" href="<?=base_url()?>admin/Report">
                    <i class="fa fa-file side-bar-icon"></i> Reports
                </a>
            </li> -->
            <li class="nav-item">
                <a class="nav-link a-color" href="<?=base_url()?>admin/login/log_out">
                    <i class="fas fa-sign-out-alt side-bar-icon"></i> Log Out
                </a>
            </li>
        </ul>


    </div>
</nav>
