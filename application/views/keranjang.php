<div style="background-color: #2C3639; padding-top: 80px; padding-bottom: 25%;" class="container-fluid">
    <h4 style="font-weight: bolder; color: white" class="text-center mb-3">KERANJANG BELANJA</h4>

    <table style="background-color: white; border-radius: 5px; border-collapse: separate; border-spacing: 0" class="table table-bordered table-striped table-hover text-center">
        <tr>
            <th style="color:black; border: solid 1.5px #000; border-style: none solid solid none;">NO</th>
            <th style="color:black; border: solid 1.5px #000; border-style: none solid solid none;">NAMA MENU</th>
            <th style="color:black; border: solid 1.5px #000; border-style: none solid solid none;">JUMLAH</th>
            <th style="color:black; border: solid 1.5px #000; border-style: none solid solid none;">HARGA</th>
            <th style="color:black; border: solid 1.5px #000; border-style: none solid solid none;">SUB-TOTAL</th>
            <th style="color:black; border: solid 1.5px #000; border-style: none none solid none;">AKSI</th>
        <!-- // atas kanan bawah kiri -->
        <?php $no=1; foreach($this->cart->contents() as $items) : ?>

            <tr>
                <td style="color:black; border: solid 1.5px #000; border-style: none none none none;" ><?php echo $no++ ?></td>
                <td style="border: solid 1.5px #000; color: black; border-style: none solid none solid;"><?php echo $items['name'] ?></td>
                <td  style="color:black; border: solid 1.5px #000; border-style: none solid none none;">    
                    <form action="<?= base_url('dashboard/update_item/'.$items['rowid']) ?>">
                        <div style="padding-right: 10px; padding-left: 10px" class="row">
                        <input  type="number" name="qty" value="<?php echo $items['qty'] ?>" class="form-control col-md-6 text-center" min="0">
                        
                        <button style="font-weight: bolder;" type="submit" class="btn btn-primary btn-sm col-md-6">Update</button>
                        </div>
                    </form>
                    
                </td>
                <td style="color:black; border: solid 1.5px #000; border-style: none solid none none;">Rp. <?php echo number_format($items['price'], 0,',','.') ?></td>
                <td style="color:black; border: solid 1.5px #000; border-style: none solid none none;">Rp. <?php echo number_format($items['subtotal'], 0,',','.') ?></td>
                <td style="color:black; border: solid 1.5px #000; border-style: none none none none;">
                    <a href="<?= base_url('dashboard/update_item/'.$items['rowid']) ?>?qty=0" style="font-weight: bolder" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>

        <?php endforeach ?>
            <tr>
                <td style="color:black; font-weight: bolder; border: solid 1.5px #000; border-style: solid solid none none;" colspan="4">TOTAL</td>
                <td style="color:black; border: solid 1.5px #000; border-style: solid solid none none; font-weight: bolder" colspan="2">Rp. <?php echo number_format($this->cart->total(), 0,',','.' ) ?></td>
            </tr> 
    </table>
    <div align="right">
        <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
            <div style="font-weight: bolder;" class="btn btn-sm btn-danger mr-2">Hapus Keranjang</div>
        </a>
        <a href="<?php echo base_url('welcome') ?>">
            <div style="font-weight: bolder;" class="btn btn-sm btn-primary mr-2">Lanjutkan belanja</div>
        </a>
        <a href="<?php echo base_url('dashboard/pembayaran') ?>">
            <div style="font-weight: bolder;" class="btn btn-sm btn-success">Pembayaran</div>
        </a>
    </div>
    
    <h4 style="font-weight: bolder; color: white; " class="text-center">FAVORIT</h4>
    
    <div class="row text-center mt-4 mx-0">

        <?php foreach ($wishlist as $mnu) : ?>
        <div class="col-6 col-md-3 mb-2 px-1">
            <a href="<?= base_url('dashboard/detail/'.$mnu->id_menu) ?>" style="text-decoration:none;" class="text-dark">
                <div class="card">
                    <img src="<?php echo base_url().'/uploads/'.$mnu->gambar ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title mb-1"><?php echo $mnu->nama_menu ?></h5>
                        <span class="badge rounded-pill bg-success mb-3">Rp. <?php echo number_format($mnu->harga, 0,',','.') ?></span> <br>
                        <small class="text-muted">Terjual : <?= $mnu->terjual ?></small>
                        <!--<?php echo anchor('dashboard/tambah_ke_keranjang/' .$mnu->id_menu, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>-->
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach ?>
    </div>
</div>