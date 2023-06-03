<div style="background-color: #2C3639; padding-top: 80px; padding-right: 40px; padding-left: 40px;" class="container-fluid">
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol style="background-color: transparent" class="carousel-indicators">
                <?php foreach($slider as $key => $s) { ?>
                <li data-target="#carouselExampleCaptions" data-slide-to="<?= $key ?>" class="<?= $key==0?'active':'' ?>"></li>
                <?php } ?>
            </ol>
            <div style="border-radius: 10px" class="carousel-inner">
                <?php foreach($slider as $key => $s) { ?>
                <div class="carousel-item <?= $key==0?'active':'' ?>">
                    <img style="height: 100%; width: 100%" src="<?php echo base_url('uploads/slider/'.$s->gambar) ?>" alt="..." />
                </div>
                <?php } ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <h3 style="color: white; font-weight: bolder; margin-top: 30px;text-align: center">Menu Terlaris di Najo Coffe</h3>
    <div style="justify-content: center" class="row text-center mt-3 mx-0">
        <?php foreach ($menu as $mnu) : ?>
        <div class="col-6 col-md-2 mb-3 px-1">
            <a href="<?= base_url('dashboard/detail/'.$mnu->id_menu) ?>" style="text-decoration:none;" class="text-dark">
                <div style="border: none; height: 360px" class="card">
                    <img src="<?php echo base_url().'/uploads/'.$mnu->gambar ?>" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 style="font-weight: bolder"  class="card-title mb-1"><?php echo $mnu->nama_menu ?></h5>
                        <span style="font-size: 20px">Rp. <?php echo number_format($mnu->harga, 0,',','.') ?></span> <br>
                        <small style="color: black">Terjual : <?= $mnu->terjual ?> 🔥</small>
                        <!--<?php echo anchor('dashboard/tambah_ke_keranjang/' .$mnu->id_menu, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>-->
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach ?>
    </div>
<div>

<div style="padding-bottom: 4%; padding-top: 4%; display: flex; padding-right: 3%; padding-left: 3%; flex-direction: row; margin-bottom: 2%; background: none; border: none" class="card flex-sm-column flex-md-column flex-lg-column flex-xl-row">
<div class="bd-example">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div style="border-radius: 10px;" class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url().'/uploads/tentang/1.jpg'?>" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'/uploads/tentang/2.jpg'?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'/uploads/tentang/3.jpg'?>" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
        <div class="card-body">
            <h2 style="color: white; font-weight: 700; margin-top: 8%" class="text-center">Suasana Najo Coffee</h4>
            <h3 style="color: white; font-weight: 600; text-align   : center">Najo Coffee memiliki tempat yang sangat teduh dan nyaman untuk menikmati secangkir Kopi dan makanan. Cocok untuk tempat berkumpul dengan teman dan keluarga.</h3>
        </div>
    </div>
