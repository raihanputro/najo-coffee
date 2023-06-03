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
    <h4 style="font-weight: bolder; color: white" class="text-center">DATA KATEGORI</h4>
    <button style="font-weight: bolder" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_kategori"><i
            class="fas fa-plus fa-sm"></i> Tambah Kategori</button>
    
    <table class="table table-bordered table-striped table-hover text-center">
        <tr>
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">NO</th>
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">NAMA</th>
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none none solid none;" colspan="2">AKSI</th>
        </tr>

        <?php
        $no=1;
        foreach($kategori as $item) : ?>

        <tr>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?php echo $no++ ?></td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?php echo $item->nama ?></td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;">
            <?php echo anchor('admin/kategori/edit/' .$item->id, '<div class="btn btn-primary btn-sm"><i
                        class="fas fa-edit"></i>
                </div>') ?>
            </td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none none none none;">
                <?php echo anchor('admin/kategori/delete/' .$item->id, '<div class="btn btn-danger btn-sm"><i
                        class="fas fa-trash"></i>
                </div>') ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
</div>

<div class="modal fade" id="tambah_kategori" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color: black; font-weight: bolder; text-align: center" class="modal-title text-center" id="exampleModalLabel">FORM INPUT menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(). 'admin/kategori/tambah'; ?>" method="post"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <label>NAMA KATEGORI</label>
                        <input type="text" name="nama" class="form-control" value="<?= @$row->nama ?>">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

            </form>

        </div>  
    </div>


