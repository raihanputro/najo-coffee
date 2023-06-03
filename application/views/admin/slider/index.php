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
<div style="background-color: #2C3639;  padding-top: 30px; height: 100%" class="container-fluid">
    <h4 style="font-weight: bolder; color: white" class="text-center">DATA SLIDER</h4>
	<button style="font-weight: bolder" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_menu"><i class="fas fa-plus fa-sm"></i> Tambah slider</button>

	<table class="table table-bordered table-striped table-hover text-center">
		<tr>
			<th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">NO</th>
			<th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">SLIDE</th>
			<th style="color:black; border: solid 1.5px #3F4E4F; border-style: none none solid none;" colspan="2">AKSI</th>
		</tr>
     
		<?php 
			$no=1;
			foreach($menu as $mnu) :
		 ?>
		<tr>
			<td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?php echo $no++ ?></td>
			<td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;"><img src="<?= base_url('uploads/slider/').$mnu->gambar ?>" class="img-fluid" width="100"></td>
			<!-- <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td> -->
			<td><?php echo anchor('admin/slider/hapus/'.$mnu->id,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
		</tr>
		<?php endforeach ?>
	</table>
</div>


<!-- Modal -->
<div class="modal fade" id="tambah_menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 style="color: black; font-weight: bolder; text-align: center" class="modal-title" id="exampleModalLabel">Form Input</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('admin/slider/tambah_aksi') ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label style="color: black;">Gambar</label><br>
                <input style="height: 45px" type="file" name="gambar" class="form-control">
            </div>
        
        <div class="modal-footer">
	        <button style="font-weight: bolder" type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
	        <button style="font-weight: bolder" type="submit" class="btn btn-primary">Simpan</button>
        </div>
	</form>
      </div>
    </div>
  </div>
</div>