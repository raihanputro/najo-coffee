<style>
    table {
        background-color: white;
        border-radius: 5px;
        border-collapse: separate;
        border-spacing: 0
    }

    td {
        color: black;
    }
</style>

<div style="background-color: #2C3639;  padding-top: 30px; padding-bottom: 30px;" class="container-fluid">
    <h4 style="font-weight: bolder; color: white;">Detail Pesanan <div style="font-weight: bolder; color: white;" class="btn btn-sl btn-success">No. Invoice : <?php echo $invoice->id ?></div></h4>
    
    <h6 style="font-weight: bolder; color: white;">Update Status</h6>
    <form action="<?= base_url('admin/invoice/updatestatus/'.$invoice->id) ?>" method="post">
        <select class="form-control mb-2" name="status">
            <option value="Pending" <?= $invoice->status=='Pending'?'selected':'' ?> >Pending</option>
            <option value="Proses" <?= $invoice->status=='Proses'?'selected':'' ?>>Proses</option>
            <option value="Selesai" <?= $invoice->status=='Selesai'?'selected':'' ?>>Selesai</option>
            <option value="Gagal" <?= $invoice->status=='Gagal'?'selected':'' ?>>Gagal</option>
        </select>
        <button style="font-weight: bolder; color: white;" class="btn btn-primary mb-3">Update</button>    
    </form>
    
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid none none; font-weight: bolder">Nama Pemesan</td>
            <td><?= $invoice->nama ?></td>
        </tr>
        <tr>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid none none; font-weight: bolder">Alamat</td>
            <td><?= $invoice->alamat ?></td>
        </tr>
        <tr>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid none none; font-weight: bolder">No Hp</td>
            <td><?= $invoice->hp ?></td>
        </tr>
        <tr>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid none none; font-weight: bolder">Kecamatan</td>
            <td><?= $invoice->kecamatan ?></td>
        </tr>
        <tr>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid none none; font-weight: bolder">Metode</td>
            <td><?= $invoice->metode ?></td>
        </tr>
        <tr>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid none none; font-weight: bolder">Metode</td>
            <td><?= $invoice->ekspedisi ?></td>
        </tr>
        <tr>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid none none; font-weight: bolder">Tanggal Pesan</td>
            <td><?= date('d-m-Y H:i:s',strtotime($invoice->tgl_pesan)) ?></td>
        </tr>
        <tr>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid none none; font-weight: bolder">Batas Bayar</td>
            <td><?= date('d-m-Y H:i:s',strtotime($invoice->batas_bayar)) ?></td>
        </tr>
        <tr>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid none none; font-weight: bolder">Bukti Bayar</td>
            <td> <?php if ($invoice->bukti != '') { ?>
       <button  class="btn btn-sm mb-3" data-toggle="modal" data-target="#tambah_menu"><img src="<?= base_url('uploads/bukti/'.$invoice->bukti) ?>" class="img-fluid" width="200" /></button>
    <?php } ?></td>
        </tr>
    </table>
    
    <table class="table table-bordered table-hover table-striped text-center">
        <tr>
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

            <tr>
                <td style="color: black; border: solid 1.5px #000; border-style: none solid none none;"><?php echo $psn->id_menu ?></td>
                <td style="color: black; border: solid 1.5px #000; border-style: none solid none none;"><?php echo $psn->nama_menu ?></td>
                <td style="color: black; border: solid 1.5px #000; border-style: none solid none none;"><?php echo $psn->jumlah ?></td>
                <td style="color: black; border: solid 1.5px #000; border-style: none solid none none;">Rp. <?php echo number_format($psn->harga, 0,',','.') ?></td>
                <td style="color: black; border: solid 1.5px #000; border-style: none none none none;">Rp. <?php echo number_format($subtotal, 0,',','.') ?></td>
            </tr>

        <?php endforeach ?>
        <tr>
            <td style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: solid solid none none; text-align: center" colspan="4">Ongkir</td>
            <td  style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: solid none none none; text-align: center">Rp. <?php echo number_format($invoice->ongkir, 0,',','.') ?></td>
        </tr>
        <tr>
            <td style="color: black; font-weight: bolder; border: solid 1.5px #000; border-style: none solid none none; text-align: center" colspan="4" >Grand Total</td>
            <td  align="center">Rp. <?php echo number_format($total+$invoice->ongkir, 0,',','.') ?></td>
        </tr>
    </table>

    <a href="<?php echo base_url('admin/invoice/index') ?>"><div style="font-weight: bolder; color: white;" class="btn btn-sm btn-primary">Kembali</div></a>
</div>

<div class="modal fade" id="tambah_menu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" width="700">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color: black; font-weight: bolder; text-align: center" class="modal-title text-center" id="exampleModalLabel">Bukti Bayar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img  src="<?= base_url('uploads/bukti/'.$invoice->bukti) ?>" class="img-fluid" width="700" />
        </div>
    </div>
</div>