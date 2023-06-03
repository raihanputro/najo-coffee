<div style="background-color: #2C3639;  padding-top: 30px; height: 100%" class="container-fluid">
    <h3 style="font-weight: bolder; color: white"><i class="fas fa-edit"></i> EDIT KATEGORI</h3>

    <form method="post" enctype="multipart/form-data">
        
        <div class="form-group">
            <label style="color: white;">NAMA KATEGORI</label>
            <input type="text" name="nama" class="form-control" value="<?= @$row->nama ?>">
        </div>
        
        <button style="font-weight: bolder" type="submit" class="btn btn-primary btn-sm">SIMPAN</button>
    </form>

</div>