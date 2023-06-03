<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul style="background-Color: #3F4E4F" class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/dashboard_admin') ?>">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-store"></i>
                </div>
                <div class=" sidebar-brand-text mx-3">Admin
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin') ?>">
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Tables -->
             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/data_menu') ?>">
                    <span>Data Menu</span></a>
            </li>
            
             <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/kategori') ?>">
                    <span>Data Kategori</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/invoice') ?>">
                    <span>Data Invoice</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/slider') ?>">
                    <span>Data Slider</span></a>
            </li>
            
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('admin/user') ?>">
                    <span>Data User</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav style="background-Color: #3F4E4F" class="navbar navbar-expand navbar-light topbar static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="navbar">         
                            <ul class="nav navbar-nav navbar-right">
                                <?php if($this->session->userdata('username')) { ?>
                                        <li style="font-weight: bolder" class="my-auto text-white">
                                            <div>Selamat Datang <?php echo $this->session->userdata('username') ?></div>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>  
                                        <a style="text-decoration: none; color: white;" href="<?= base_url('auth/logout') ?>">
                                                <div style="display: flex; flex-direction: row; padding-top: 17px">
                                                    <i class="fas fa-sign-out-alt" style="font-size:22px; color: red; margin-right: 9%"></i>
                                                    <p onMouseOver="this.style.color='red'"onMouseOut="this.style.color='white'" style="color: white; text-decoration: none; font-weight: bolder">Keluar</p>
                                                </div>
                                            </a>
                                <?php } else { ?>
                                        <li>
                                            <?php echo anchor('auth/login', 'Login')  ?>
                                        </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </ul>
                </nav>
