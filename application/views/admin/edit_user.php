<style>
    .editmenu {
        background-color: #2C3639;
        padding-top: 30px; 
        padding-bottom: 20px;
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
    <h3 class="editmenutitle"><i class="fas fa-edit"></i>EDIT DATA USER</h3>
    <?php foreach($user as $usr) : ?>
    <form method="post" action="<?php echo base_url().'admin/user/update/' .$usr->id  ?>" enctype="multipart/form-data">
        <div class="form-group">
            <label>FOTO</label>
            <input style="height: 45px" type="file" name="foto" class="form-control">
        </div>
        
        <input type="hidden" name="foto_old" class="form-control" value="<?php echo $usr->foto ?>">
        
        <div class="form-group">
            <label>NAMA</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $usr->nama ?>">
        </div>
        <div class="form-group">
            <label>USERNAME</label>
            <input type="text" name="username" class="form-control" value="<?php echo $usr->username ?>">
        </div>
        <div class="form-group">
            <label>PASSWORD</label>
            <input type="text" name="password" class="form-control" value="<?php echo $usr->password ?>">
        </div>
        <div class="form-group">
            <label>ALAMAT</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $usr->alamat ?>">
        </div>
        <div class="form-group">
            <label>HP</label>
            <input type="text" name="hp" class="form-control" value="<?php echo $usr->hp ?>">
        </div>
        <div class="form-group">
            <label style="color: white;">Kecamatan</label>
            <select class="form-control" id="kecamatan" name="kecamatan" required>
                <option>PILIH</option>
                <option value="Cempaka Putih" <?= $usr->kecamatan=='Cempaka Putih' ? 'selected' : '' ?>>Cempaka Putih</option>
                <option value="Gambir" <?= $usr->kecamatan=='Gambir' ? 'selected' : '' ?>>Gambir</option>
                <option value="Johar Baru" <?= $usr->kecamatan=='Johar Baru' ? 'selected' : '' ?>>Johar Baru</option>
                <option value="Kemayoran" <?= $usr->kecamatan=='Kemayoran' ? 'selected' : '' ?>>Kemayoran</option>
                <option value="Menteng" <?= $usr->kecamatan=='Menteng' ? 'selected' : '' ?>>Menteng</option>
                <option value="Sawah Besar" <?= $usr->kecamatan=='Sawah Besar' ? 'selected' : '' ?>>Sawah Besar</option>
                <option value="Senen" <?= $usr->kecamatan=='Senen' ? 'selected' : '' ?>>Senen</option>
                <option value="Tanah Abang" <?= $usr->kecamatan=='Tanah Abang' ? 'selected' : '' ?>>Tanah Abang</option>
            </select>
        </div>
        <div class="form-group">
                            <label style="color: white;">Role</label>
                            <select class="form-control" name="role" required>
                                <option>PILIH</option>
                                <option value=1 <?= $usr->role_id==1 ? 'selected' : '' ?>>Admin</option>
                                <option value=2 <?= $usr->role_id==2 ? 'selected' : '' ?>>Pelanggan</option>
                            </select>
                        </div>
       
        <button  type="submit" class="editmenubutton btn btn-primary btn-sm">SIMPAN</button>
    </form>
    <?php endforeach ?>
</div>