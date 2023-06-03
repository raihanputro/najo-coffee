<div style="background-color: #2C3639; padding-top: 30px; padding-bottom: 8%;" class="container-fluid">
    <div style="margin-top: 5%" class="card">
        <h5 style="color: black; font-weight: bolder" class="card-header">Detail menu</h5>
        <div class="card-body">

            <?php foreach($menu as $mnu) : ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo base_url().'/uploads/'.$mnu->gambar ?>" class="card-img-top">
                    </div>
                    <div class="col-md-8">
                        <table class="table">
                            <tr>
                                <td style="color: black; font-weight: bolder">Nama menu</td>
                                <td style="color: black;"><?php echo $mnu->nama_menu ?></td>
                            </tr>

                            <tr>
                                <td style="color: black; font-weight: bolder">Keterangan</td>
                                <td style="color: black; text-align: justify"><?php echo $mnu->keterangan ?></td>
                            </tr>

                            <tr>
                                <td style="color: black; font-weight: bolder">Kategori</td>
                                <td style="color: black;"><?php echo $mnu->kategori ?></td>
                            </tr>

                            <tr>
                                <td style="color: black; font-weight: bolder">Stok</td>
                                <td style="color: black;"><?php echo $mnu->stok ?></td>
                            </tr>

                            <tr>
                                <td style="color: black; font-weight: bolder">Harga</td>
                                <td style="color: black;">Rp. <?php echo number_format($mnu->harga, 0,',','.') ?></td>
                            </tr>
                        </table>
                        
                        <form action="<?= base_url('dashboard/tambah_ke_keranjang/'.$mnu->id_menu) ?>" method="post">
                            <div class="row">
                                <div class="col">
                                    <input type="number" class="form-control mb-2" name="qty" value="1" />
                                </div>
                                <div class="col">
                                    <button style="color: white; font-weight: bolder" type="submit" class="btn btn-primary">Tambah Keranjang</button>
                                </div>
                            </div>
                        </form>
                        <!--<?php echo anchor('dashboard/tambah_ke_keranjang/' .$mnu->id_menu, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>-->
                        <?php echo anchor('welcome', '<div style="color: white; font-weight: bolder" class="d-inline btn btn-sm btn-danger d-inline-block">Kembali</div>') ?>
                        
                        <form action="<?= base_url('dashboard/tambah_wishlist/'.$mnu->id_menu) ?>" method="post" class="d-inline">
                            <input type="hidden" name="status" value="<?= $wishlist==''?'add':'delete' ?>">
                            <button style="color: white; font-weight: bolder" type="submit" class="btn btn-info btn-sm d-inline-block"><?= $wishlist==''?'Tambah Favorit':'Hapus Favorit' ?></button>
                        </form>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>