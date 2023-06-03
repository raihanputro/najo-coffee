<div class="container-fluid">
    <h4 class="text-center mb-3">PENCARIAN</h4>

    
    <div class="row text-center mt-4">

        <?php foreach ($search as $mnu) : ?>
        <div class=" card ml-3" style="width: 16rem;">
            <img src="<?php echo base_url().'/uploads/'.$mnu->gambar ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $mnu->nama_menu ?></h5>
                <small><?php echo $mnu->keterangan ?></small>
                <br>
                <span class="badge rounded-pill bg-success mb-3">Rp. <?php echo number_format($mnu->harga, 0,',','.') ?></span>
                <?php echo anchor('dashboard/tambah_ke_keranjang/' .$mnu->id_menu, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                <?php echo anchor('dashboard/detail/' .$mnu->id_menu, '<div class="btn btn-sm btn-success">Detail</div>') ?>
            </div>
        </div>
        <?php endforeach ?>
    </div>
    
    </div>
</div>