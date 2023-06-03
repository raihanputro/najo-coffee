<div style="background-color: #2C3639; padding-bottom: 30px; padding-top: 60px" class="container-fluid">
    <h3 style="color: white; font-weight: bolder; padding-top: 20px">Ubah Profile</h3>
    
    <form method="post" action="<?= base_url('dashboard/profil') ?>" enctype='multipart/form-data'>
    <div class="form-group">
        <div style="display: flex; flex-direction: column">
          <label style="color: white;" class="mr-1">Foto</label>
          <?php if ($user->foto != '') { ?>
            <img src="<?= base_url('uploads/foto/'.$user->foto) ?>" class="img-fluid rounded-circle mr-1 mb-2" width="60">
          <?php } ?>
          <input style= "height: 10%" type="file" name="foto" class="form-control">
        </div>
      </div>
      
      <input type="hidden" name="gambarold" value="<?= $profil->foto ?>">
      
      <div class="form-group">
        <label style="color: white;">Nama</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?= $profil->nama ?>">
      </div>
      
      <div class="form-group">
        <label style="color: white;">Password</label>
        <input type="text" name="password" class="form-control" placeholder="Password">
      </div>
      
      <div class="form-group">
        <label style="color: white;">Alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?= $profil->alamat ?>">
      </div>
      
       <div class="form-group">
                            <label style="color: white;">Kecamatan</label>
                            <select class="form-control" id="kecamatan" name="kecamatan" required>
                                <option>PILIH</option>
                                <option value="Cempaka Putih" <?= $user->kecamatan=='Cempaka Putih' ? 'selected' : '' ?>>Cempaka Putih</option>
                                <option value="Gambir" <?= $user->kecamatan=='Gambir' ? 'selected' : '' ?>>Gambir</option>
                                <option value="Johar Baru" <?= $user->kecamatan=='Johar Baru' ? 'selected' : '' ?>>Johar Baru</option>
                                <option value="Kemayoran" <?= $user->kecamatan=='Kemayoran' ? 'selected' : '' ?>>Kemayoran</option>
                                <option value="Menteng" <?= $user->kecamatan=='Menteng' ? 'selected' : '' ?>>Menteng</option>
                                <option value="Sawah Besar" <?= $user->kecamatan=='Sawah Besar' ? 'selected' : '' ?>>Sawah Besar</option>
                                <option value="Senen" <?= $user->kecamatan=='Senen' ? 'selected' : '' ?>>Senen</option>
                                <option value="Tanah Abang" <?= $user->kecamatan=='Tanah Abang' ? 'selected' : '' ?>>Tanah Abang</option>
                            </select>
                        </div>
      
      <div class="form-group">
        <label style="color: white;">Telepon</label>
        <input type="text" name="hp" class="form-control" placeholder="Telepon" value="<?= $profil->hp ?>">
      </div>
      
                        
      <button style="background-Color: #FF4C29; color: white; font-weight: bolder" type="submit" class="btn">Update</button>
    </form>
</div>