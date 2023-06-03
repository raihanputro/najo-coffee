<style>
    td {
        color: black;
    }
</style>

<div style="background-color: #2C3639; padding-top: 80px; padding-bottom: 35%;" class="container-fluid">
    <h3 style="color: white; font-weight: bolder">Pesanan</h3>
    
    <table style="background-color: white; border-radius: 5px; border-collapse: separate; border-spacing: 0; " class="table table-bordered table-striped table-hover">
        <tr style="font-weight: bolder; color: black" class="text-center">
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">Invoice</td>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">Nama</td>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">Total</td>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">Status</td>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none none solid none;">Aksi</td>
        </tr>
        <?php foreach($pesanan as $item) { ?>
        <tr class="text-center">
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?= $item->id ?></td>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?= $item->nama ?></td>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?= number_format($item->ongkir+$item->subtotal) ?></td>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?= $item->status ?></td>
            <td style="color:black; border: solid 1.5px #3F4E4F; border-style: none none none none;">
                <a style="background-Color: #FF4C29; color: white; font-weight: bolder" href="<?= base_url('dashboard/upload_bukti/'.$item->id) ?>" class="btn">Upload Bukti Pembayaran</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>