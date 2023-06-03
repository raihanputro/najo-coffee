<div style="background-color: #2C3639; padding-top: 80px; padding-right: 40px; padding-left: 40px;" class="container-fluid">
    <div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php foreach($slider as $key => $s) { ?>
                <li data-target="#carouselExampleCaptions" data-slide-to="<?= $key ?>" class="<?= $key==0?'active':'' ?>"></li>
                <?php } ?>
            </ol>
            <div  style="border-radius: 10px" class="carousel-inner">
                <?php foreach($slider as $key => $s) { ?>
                <div class="carousel-item <?= $key==0?'active':'' ?>">
                    <img src="<?php echo base_url('uploads/slider/'.$s->gambar) ?>" class="img-fluid w-100" style="height: 400px;" alt="...">
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
    
    <form  
        style=" margin-top: 20px; display: flex; margin-left: 25%; flex-direction: row; justify-content: center;" 
        class="col-md-6">
        <input type="text" class="form-control my-2 mr-2" name="cari" placeholder="Cari Menu...">
        <button style="background-Color: #FF4C29; font-weight: bolder; width: 20%; height: 40px;" class="btn text-white mt-2">Cari</button>
    </form>
    
    <div class="row text-center mt-3 mx-0">
        <?php foreach ($menu as $mnu) : ?>
        <div class="col-6 col-md-2 mb-3 px-1">
            <a href="<?= base_url('dashboard/detail/'.$mnu->id_menu) ?>" style="text-decoration:none;" class="text-dark">
                <div style="border: none; height: 360px" class="card">
                    <img src="<?php echo base_url().'/uploads/'.$mnu->gambar ?>" class="card-img-top" alt="..." />
                    <div class="card-body">
                        <h5 style="font-weight: bolder"  class="card-title mb-1"><?php echo $mnu->nama_menu ?></h5>
                        <span style="font-size: 20px">Rp. <?php echo number_format($mnu->harga, 0,',','.') ?></span> <br>
                        <small class="text-muted">Terjual : <?= $mnu->terjual ?></small>
                        <!--<?php echo anchor('dashboard/tambah_ke_keranjang/' .$mnu->id_menu, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>-->
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach ?>
    </div>
<div>