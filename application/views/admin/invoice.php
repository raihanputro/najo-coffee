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

<div style="background-color: #2C3639;  padding-top: 30px; height: 100%" class="container-fluid text-center">
    <h4 style="font-weight: bolder; color: white;" class="mb-3">DATA INVOICE</h4>

    <table class="table table-bordered table-striped table-hover text-center">
        <tr>
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">ID INVOICE</th>
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">NAMA PEMESAN</th>
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">ALAMAT PENGIRIMAN</th>
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">TANGGAL PEMESANAN</th>
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">JAM PEMESANAN</th>
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">STATUS</th>
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none none solid none;">AKSI</th>
        </tr>

        <?php foreach($invoice as $inv) { ?>

        <tr>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?php echo $inv->id ?></td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?php echo $inv->nama ?></td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?php echo $inv->alamat ?></td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?= date('d-m-Y',strtotime($inv->tgl_pesan)) ?></td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?= date('H:i:s',strtotime($inv->tgl_pesan)) ?></td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?php echo $inv->status ?></td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none none none none;"><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Detail</div>') ?></td>
        </tr>

        <?php } ?>
    </table>
</div>