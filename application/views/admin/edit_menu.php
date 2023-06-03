<style>
    .editmenu {
        background-color: #2C3639;
        padding-top: 30px; 
        height: 100%;
    }

    .editmenutitle {
        font-weight: bolder;
        color: white;
    }

    label {
        color: white;
    }

    .editmenubutton {
        font-weight: bolder;
    }
</style>

<div class="container-fluid editmenu">
    <h3 class="editmenutitle"><i class="fas fa-edit"></i>EDIT DATA MENU</h3>
    <?php foreach($menu as $mnu) : ?>
    <form method="post" action="<?php echo base_url().'admin/data_menu/update'  ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label>GAMBAR</label>
            <input style="height: 45px" type="file" name="gambar" class="form-control">
        </div>
        
        <input type="hidden" name="gambar_old" class="form-control" value="<?php echo $mnu->gambar ?>">
        
        <div class="form-group">
            <label>NAMA MENU</label>
            <input type="text" name="nama_menu" class="form-control" value="<?php echo $mnu->nama_menu ?>">
        </div>
        <div class="form-group">
            <label>KETERANGAN</label>
            <input type="hidden" name="id_menu" class="form-control" value="<?php echo $mnu->id_menu ?>">
            <input type="text" name="keterangan" class="form-control" value="<?php echo $mnu->keterangan ?>">
        </div>
        <div class="form-group">
            <label>KATEGORI</label>
            <select class="form-control" name="kategori_id">
                <?php foreach($kategori as $item) { ?>
                <option value="<?= $item->id ?>" <?= $mnu->kategori_id==$item->id?'selected':'' ?>><?= $item->nama ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>HARGA</label>
            <input type="text" name="harga" class="form-control" value="<?php echo $mnu->harga ?>">
        </div>
        <div class="form-group">
            <label>STOK</label>
            <input type="text" name="stok" class="form-control" value="<?php echo $mnu->stok ?>">
        </div>
        <button  type="submit" class="editmenubutton btn btn-primary btn-sm">SIMPAN</button>
    </form>
    <?php endforeach ?>
</div>