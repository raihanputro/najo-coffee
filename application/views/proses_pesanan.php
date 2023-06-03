<style>
    @media only screen and (max-width: 600px) {
        #test {
                padding-bottom: 120%;
            }
    }
</style>


<div id="test" style="background-color: #2C3639; padding-top: 70px; padding-bottom: 10px" class="container-fluid">
<?php if (!isset($from)) { ?>
    <div  style="padding-bottom: 20%; padding-top: 20%;">
        <h4 style="color: white; font-weight: bolder" class="text-center align-middle">Selamat, pesanan anda telah berhasil di proses</p>
        
        <p style="color: white; font-weight: bolder" class="text-center align-middle">Silahkan ke halaman upload bukti pembayaran</p>
    </div>
    <?php } else { ?>
    <h3 style="color: white; font-weight: bolder; padding-top: 10px">Invoice</h3>
    <table style="background-color: white; border-radius: 5px; border-collapse: separate; border-spacing: 0" class="table table-bordered table-striped table-hover">
        <tr>
            <td style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: none solid none none;">Id Invoice</td>
            <td style="color: black; bolder; border: solid 1.5px #000; border-style: none none none none;"><?= $invoice->id ?></td>
        </tr>
        <tr>
            <td style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: none solid none none;">Nama Pemesan</td>
            <td style="color: black; bolder; border: solid 1.5px #000; border-style: none none none none;"><?= $invoice->nama ?></td>
        </tr>
        <tr>
            <td style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: none solid none none;">Alamat</td>
            <td style="color: black;"><?= $invoice->alamat ?></td>
        </tr>
        <tr>
            <td style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: none solid none none;">No Hp</td>
            <td style="color: black;"><?= $invoice->hp ?></td>
        </tr>
        <tr>
            <td style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: none solid none none;">Kecamatan</td>
            <td style="color: black;"><?= $invoice->kecamatan ?></td>
        </tr>
        <tr>
            <td style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: none solid none none;">Metode</td>
            <td style="color: black;"><?= $invoice->metode ?></td>
        </tr>
        <tr>
            <td style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: none solid none none;">Ekspedisi</td>
            <td style="color: black;"><?= $invoice->ekspedisi ?></td>
        </tr>
        <tr>
            <td style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: none solid none none;">Tanggal Pesan</td>
            <td style="color: black;"><?= date('d-m-Y H:i:s',strtotime($invoice->tgl_pesan)) ?></td>
        </tr>
        <tr>
            <td style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: none solid none none;">Batas Bayar</td>
            <td style="color: black;"><?= date('d-m-Y H:i:s',strtotime($invoice->batas_bayar)) ?></td>
        </tr>
        <tr>
            <td style="color: black; font-weight: bolder; font-weight: bolder; border: solid 1.5px #000; border-style: none solid none none;">Status</td>
            <?php 
            if($invoice->status =='Pending') { 
                $text = "Pesanan anda sudah masuk, Akan segera kami layani";
            } elseif($invoice->status =='Proses') {
                $text = "Pesanan Anda sedang di proses";
            } elseif($invoice->status =='Selesai') {
                $text = "Pesanan anda sudah terkirim";
            } elseif($invoice->status == 'Gagal') {
                $text = "Pesanan anda Gagal";
            }
            ?>
            <td style="color: black;"><?= $text ?></td>
        </tr>
    </table>
    
    <table style="background-color: white; border-radius: 5px; border-collapse: separate; border-spacing: 0" class="table table-bordered table-striped table-hover">
        <tr style="text-align: center">
            <th style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: none solid solid none;">ID MENU</th>
            <th style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: none solid solid none;">NAMA MENU</th>
            <th style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: none solid solid none;">JUMLAH PESANAN</th>
            <th style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: none solid solid none;">HARGA SATUAN</th>
            <th style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: none none solid none;">SUB-TOTAL</th>
        </tr>

        <?php 
            $total = 0; 
            foreach($pesanan as $psn) : $subtotal = $psn->jumlah * $psn->harga; $total += $subtotal;
        ?>

            <tr style="text-align: center">
                <td style="color: black; border: solid 1.5px #000; border-style: none solid none none;"><?php echo $psn->id_menu ?></td>
                <td style="color: black; border: solid 1.5px #000; border-style: none solid none none;"><?php echo $psn->nama_menu ?></td>
                <td style="color: black; border: solid 1.5px #000; border-style: none solid none none;"><?php echo $psn->jumlah ?></td>
                <td style="color: black; border: solid 1.5px #000; border-style: none solid none none;">Rp. <?php echo number_format($psn->harga, 0,',','.') ?></td>
                <td style="color: black; border: solid 1.5px #000; border-style: none none none none;">Rp. <?php echo number_format($subtotal, 0,',','.') ?></td>
            </tr>

        <?php endforeach ?>
        <tr>
            <td style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: solid solid none solid; text-align: center" colspan="4">Ongkir</td>
            <td style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: solid none none none; text-align: center; text-align: center">Rp. <?php echo number_format($invoice->ongkir, 0,',','.') ?></td>
        </tr>
        <tr>
            <td style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: none solid none none;" colspan="4" align="center">Grand Total</td>
            <td style="color: black; font-weight: bolder"  align="center">Rp. <?php echo number_format($total+$invoice->ongkir, 0,',','.') ?></td>
        </tr>
    </table>
    
    <h3 style="color: white; font-weight: bolder; margin-top: 40px" class="text-center">Upload Bukti Transfer</h3>
    <?php if ($invoice->bukti != '') { ?>
        <img style="position: static; margin-left: 42%" src="<?= base_url('uploads/bukti/'.$invoice->bukti) ?>" class="img-fluid mb-4" width="200" />
    <?php } ?>
    <form action="<?= base_url('dashboard/upload/'.$id) ?>" method="post" enctype='multipart/form-data'>
        <input style= "height: 10%" type="file" class="form-control mb-3" name="file" />
        <button style="background-Color: #FF4C29; color: white; font-weight: bolder" class="btn">Upload</button>
    </form>
    <?php } ?>
</div>