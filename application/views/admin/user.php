<style>
    table {
        background-color: white;
        border-radius: 5px;
        border-collapse: separate;
        border-spacing: 0
    }

    td {
        color: black;
        text-align: center; 
       
    }
</style>
<div style="background-color: #2C3639;  padding-top: 30px; padding-bottom: 10px" class="container-fluid">
    <h4 style="font-weight: bolder; color: white" class="text-center">DATA USER</h4>
	<button style="font-weight: bolder" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_user"><i
            class="fas fa-plus fa-sm"></i> Tambah User</button>

	<table class="table table-bordered table-striped table-hover text-center">
		<tr>
			<th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">ID</th>
			<th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">ROLE</th>
			<th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">NAMA</th>
			<th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">USERNAME</th>
			<th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">ALAMAT</th>
			<th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">HP</th>
			<th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">KECAMATAN</th>
			<th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">FOTO</th>
			<th style="color:black; border: solid 1.5px #3F4E4F; border-style: none none solid none;" colspan="2">AKSI</th>
		</tr>
     
		<?php 
			foreach($user as $usr) :
		 ?>
		<tr >
			<td style="border: solid 1.5px #3F4E4F; border-style: none solid none none; vertical-align: middle;"><?php echo $usr->id ?></td>
			<?php 
            if($usr->role_id == 1 ) { 
                $text = "Admin";
            } elseif($usr->role_id == 2) {
                $text = "Pelanggan";
            } 
            ?>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none; vertical-align: middle;"><?= $text ?></td>
			<td style="border: solid 1.5px #3F4E4F; border-style: none solid none none; vertical-align: middle;"><?php echo $usr->nama ?></td>
			<td style="border: solid 1.5px #3F4E4F; border-style: none solid none none; vertical-align: middle;"><?php echo $usr->username ?></td>
			<td style="border: solid 1.5px #3F4E4F; border-style: none solid none none; vertical-align: middle;"><?php echo $usr->alamat ?></td>
			<td style="border: solid 1.5px #3F4E4F; border-style: none solid none none; vertical-align: middle;"><?php echo $usr->hp ?></td>
			<td style="border: solid 1.5px #3F4E4F; border-style: none solid none none; vertical-align: middle;"><?php echo $usr->kecamatan ?></td>
			<td style="border: solid 1.5px #3F4E4F; border-style: none solid none none; vertical-align: middle;">
			    <?php if($usr->foto == '') { ?>
			        <i style="margin-top: 5%; font-size: 30px" class="fas fa-user-circle mr-1"></i>
			     <?php } else { ?>
			        <img src="<?= base_url('uploads/foto/'.$usr->foto) ?>" class="img-fluid rounded-circle mr-1 mb-2" width="40">
			      <?php } ?>
			</td>
			<td style="border: solid 1.5px #3F4E4F; border-style: none solid none none; vertical-align: middle;">
                <?php echo anchor('admin/user/edit_user/' .$usr->id, '<div class="btn btn-primary btn-sm"><i
                        class="fas fa-edit"></i>
                </div>') ?>
            </td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none none none none; vertical-align: middle;">
                <?php echo anchor('admin/user/hapus/' .$usr->id, '<div class="btn btn-danger btn-sm"><i
                        class="fas fa-trash"></i>
                </div>') ?>
            </td>
		</tr>
		<?php endforeach ?>
	</table>
</div>

<div class="modal fade" id="tambah_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color: black; font-weight: bolder; text-align: center" class="modal-title text-center" id="exampleModalLabel">FORM INPUT USER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(). 'admin/user/tambah_user'; ?>" method="post"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <label style="color: black;">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="color: black;">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>

					<div class="form-group">
                        <label style="color: black;">Password</label>
                        <input type="text" name="password" class="form-control">
                    </div>

					<div class="form-group">
                        <label style="color: black;">Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>

					<div class="form-group">
                        <label style="color: black;">HP</label>
                        <input type="text" name="hp" class="form-control">
                    </div>

					<div class="form-group">
						<label style="color: black;">Kecamatan</label>
                        <select class="form-control" id="kecamatan" name="kecamatan" required>
                           <option data-harga="">Kecamatan</option>
                           <option value="Cempaka Putih">Cempaka Putih</option>
                           <option value="Gambir">Gambir</option>
                           <option value="Johar Baru">Johar Baru</option>
                           <option value="Kemayoran">Kemayoran</option>
                           <option value="Menteng">Menteng</option>
                           <option value="Sawah Besar">Sawah Besar</option>
                           <option value="Senen">Senen</option> 
                           <option value="Tanah Abang">Tanah Abang</option> 
				 		</select>
                    </div>

                    <div class="form-group">
						<label style="color: black;">Role</label>
                        <select class="form-control" name="role" placeholder="Role" required>
							<option>Role</option>
                           <option value=1>Admin</option>
                           <option value=2>Pelanggan</option>
				 		</select>
                    </div>

					<div class="form-group">
                        <label style="color: black;">Foto</label><br>
                        <input style= "height: 10%" type="file" name="foto" class="form-control">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

            </form>

        </div>
    </div>
</div>


