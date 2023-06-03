<body id="page-top">
    <?php 
        $segment1 = $this->uri->segment(1);
        $segment2 = $this->uri->segment(2);
    ?>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav style="background-Color: #3F4E4F; position: fixed; top: 0; width: 100%; z-index: 1110;" class="navbar navbar-expand topbar">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-left">
                                <li class="mr-4">
                                    <img style="height: 40px;" src="<?php echo base_url('uploads/logo/Logo-Najo.png') ?>" class="card-img-right" alt="..." />
                                </li>
                                <li class="mr-4 pt-1">
                                    <a class="nav-link text-center" href="<?php echo base_url('welcome')  ?>"  style="color: white; font-weight: bolder" onMouseOver="this.style.color='#FF7B54'"onMouseOut="this.style.color='white'">
                                        Beranda
                                    </a>
                                </li>
                                <li class="mr-4 pt-1">
                                    <a class="nav-link text-center" href="<?php echo base_url('profil')  ?>"  style="color: white; font-weight: bolder" onMouseOver="this.style.color='#FF7B54'"onMouseOut="this.style.color='white'">
                                        Profil
                                    </a>
                                </li>
                                <li class="mr-4 pt-1">
                                    <a class="nav-link text-center" href="<?php echo base_url('dashboard/menu')  ?>"  style="color: white; font-weight: bolder" onMouseOver="this.style.color='#FF7B54'"onMouseOut="this.style.color='white'">
                                        Menu
                                    </a>
                                </li>
                                <!--<div class="dropdown mr-4 pt-1">-->
                                <!--    <button onMouseOver="this.style.color='#FF7B54'"onMouseOut="this.style.color='white'" style="color: white; font-weight: bolder" class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                                <!--      Menu-->
                                <!--    </button>-->
                                <!--    <div style="margin-left: -40%; margin-top: 10%; background-color: #3F4E4F; border: none;" class="dropdown-menu" role="menu" aria-labelledby="dropdownMenuButton">-->
                                <!--        <a style="color: white; font-weight: bolder; background-color: #3F4E4F" onMouseOver="this.style.color='#FF7B54'"onMouseOut="this.style.color='white'" class="dropdown-item text-center  "href="<?php echo base_url('dashboard/semua_menu/')  ?>">Semua Menu</a>-->
                                <!--        <?php foreach($kategori as $kate) { ?>-->
                                <!--            <a style="color: white; font-weight: bolder; background-color: #3F4E4F" onMouseOver="this.style.color='#FF7B54'"onMouseOut="this.style.color='white'" class="dropdown-item text-center  "href="<?php echo base_url('dashboard/kategori/'.$kate->id)  ?>"><?= $kate->nama ?></a>-->
                                <!--        <?php } ?>-->
                                <!--        </div>-->
                                <!--</div>-->
                                <?php if($this->session->userdata('username')) { ?>
                                    <li class="pt-1">
                                        <a class="nav-link text-center" href="<?php echo base_url('dashboard/pesanan')  ?>" style="color: white; font-weight: bolder" onMouseOver="this.style.color='#FF7B54'"onMouseOut="this.style.color='white'">
                                            Pesanan
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </ul>

                    <ul class="navbar-nav ml-auto">
                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="<?= base_url('dashboard/detail_keranjang') ?>" style="text-decoration:none;">
                                        <i class="fas fa-shopping-cart" style="font-size:22px; color: #FF4C29"></i>
                                        <span class="badge badge-danger"><?= $this->cart->total_items() ?></span>
                                    </a>
                                </li>
                            </ul>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <ul class="nav navbar-nav navbar-right">
                                <?php if($this->session->userdata('username')) { ?>
                                        <li class="ml-2">
                                            <a style="text-decoration: none; color: white;" onMouseOver="this.style.color='#FF7B54'"onMouseOut="this.style.color='white'" href="<?= base_url('dashboard/profil') ?>">
                                                <?php if($user->foto == '') { ?>
                                                <div style="display: flex; flex-direction: row; margin-top: 10px">
                                                    <i style="margin-top: 5%; font-size: 30px" class="fas fa-user-circle mr-1"></i>
                                                    <h1 style="font-weight: bolder; font-size: 20px" class="my-auto ml-1"><?php echo $this->session->userdata('username') ?></h1>
                                                </div>
                                                <?php } else { ?>
                                                <div style="display: flex; flex-direction: row; padding-top: 5px" class="mr-4">
                                                    <img src="<?= base_url('uploads/foto/'.$user->foto) ?>" class="img-fluid rounded-circle mr-1" width="40">
                                                    <p style="font-weight: bolder; " class="my-auto ml-1"><?php echo $this->session->userdata('username') ?></h1>
                                                </div>
                                                <?php } ?>
                                            </a>

                                        </li>
                                        <li class="ml-3 my-auto">
                                            <a style="text-decoration: none; color: white;" href="<?= base_url('auth/logout') ?>">
                                                <div style="display: flex; flex-direction: row; padding-top: 17px">
                                                    <i class="fas fa-sign-out-alt" style="font-size:22px; color: red; margin-right: 9%"></i>
                                                    <p onMouseOver="this.style.color='red'"onMouseOut="this.style.color='white'" style="color: white; text-decoration: none; font-weight: bolder">Keluar</p>
                                                </div>
                                            </a>
                                        </li>
                                <?php } else { ?>
                                         <li class="ml-2">
                                            <a style="text-decoration: none; color: white;" href="<?= base_url('auth/login') ?>">
                                                <div style="display: flex; flex-direction: row; padding-top: 17px"><i class="fas fa-sign-in-alt" style="font-size:22px; color: #5F8D4E; margin-right: 9%"></i><p  onMouseOver="this.style.color='#5F8D4E'"onMouseOut="this.style.color='white'" style="color: white; text-decoration: none; font-weight: bolder">Masuk</p></div>
                                            </a>
                                        </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </ul>
                </nav>
                <!-- End of Topbar -->
            </div>
        </div>
    </div> 
</body>
                