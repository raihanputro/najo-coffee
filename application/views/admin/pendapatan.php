<style>
     table {
        background-color: white;
        border-radius: 5px;
        border-collapse: separate;
        border-spacing: 0
    }
    
    th {
        color: black;
        text-align: center;
    }
    
    tr {
        color: black;
        text-align: center;
    }
</style>

<div style="background-color: #2C3639;  padding-top: 30px; height: 100%" class="container-fluid">
<h4 style="font-weight: bolder; color: white"  class="text-center">PENDAPATAN</h4>
<form>
  <div class="form-group">
    <label style="color: white" for="exampleInputEmail1">Dari</label>
    <input type="date" name="dari" value="<?= @$_GET['dari'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label style="color: white" for="exampleInputPassword1">Sampai</label>
    <input type="date" name="sampai" value="<?= @$_GET['sampai'] ?>" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary">Cari</button>
  <a href="<?= base_url('admin/dashboard_admin/pendapatan') ?>" class="btn btn-dark">Reset</a>
</form>

<div class="mt-4"></div>


<table class="table table-bordered table-striped">
    <tr>
        <th style="color:black; border: solid 1.5px #000; border-style: none solid solid none;">No</th>
        <th style="color:black; border: solid 1.5px #000; border-style: none solid solid none;">Nama</th>
        <th style="color:black; border: solid 1.5px #000; border-style: none solid solid none;">Tanggal</th>
        <th  style="color:black; border: solid 1.5px #000; border-style: none solid solid none;">Alamat</th>
        <th  style="color:black; border: solid 1.5px #000; border-style: none solid solid none;">Ongkir</th>
        <th  style="color:black; border: solid 1.5px #000; border-style: none solid solid none;">Subtotal</th>
        <th style="color:black; border: solid 1.5px #000; border-style: none none solid none;">Total</th>
    </tr>
    <?php
      $total = 0;  
    ?>
    <?php foreach($pendapatan as $i => $item) { ?>
    <?php
        $total += $item['ongkir']+$item['subtotal'];
    ?>
    <tr>
        <td style="color:black; border: solid 1.5px #000; border-style: none solid solid none;"><?= $i+=1 ?></td>
        <td style="color:black; border: solid 1.5px #000; border-style: none solid solid none;"><?= $item['nama'] ?></td>
        <td style="color:black; border: solid 1.5px #000; border-style: none solid solid none;"><?= date('d-m-Y',strtotime($item['tgl_pesan'])) ?></td>
        <td style="color:black; border: solid 1.5px #000; border-style: none solid solid none;"><?= $item['alamat'] ?></td>
        <td style="color:black; border: solid 1.5px #000; border-style: none solid solid none;"><?= number_format($item['ongkir']) ?></td>
        <td style="color:black; border: solid 1.5px #000; border-style: none solid solid none;"><?= number_format($item['subtotal']) ?></td>
        <td style="color:black; border: solid 1.5px #000; border-style: none none solid none;" align="center"><?= number_format($item['ongkir']+$item['subtotal']) ?></td>
    </tr>
    <?php } ?>
    <tr>
        <td style="font-weight: 700; color:black; border: solid 1.5px #000; border-style: none solid none none;" colspan="6" align="center">Total Pendapatan</td>
        <td style="font-weight: 700" colspan="1" align="center"><?= number_format($total) ?></td>
    </tr>
</table>

</div>

