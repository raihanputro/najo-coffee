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

<div style="background-color: #2C3639;  padding-top: 30px; padding-bottom: 30px;" class="container-fluid">
    <h4 style="font-weight: bolder; color: white"  class="text-center">DATA MENU</h4>
    <button style="font-weight: bolder" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_menu"><i
            class="fas fa-plus fa-sm"></i> Tambah Menu</button>
    <table class="table table-bordered table-striped table-hover text-center">
        <tr class="text-center">
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">NO</th>
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">NAMA MENU</th>
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">KETERANGAN</th>
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">KATEGORI</th>
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">HARGA</th>
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none solid solid none;">STOK</th>
            <th style="color:black; border: solid 1.5px #3F4E4F; border-style: none none solid none;" colspan="2">AKSI</th>
        </tr>

        <?php
        $no=1;
        foreach($menu as $mnu) : ?>

        <tr>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?php echo $no++ ?></td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?php echo $mnu->nama_menu ?></td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?php echo $mnu->keterangan ?></td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?php echo $mnu->kategori ?></td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?php echo $mnu->harga ?></td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;"><?php echo $mnu->stok ?></td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none solid none none;">
                <?php echo anchor('admin/data_menu/edit/' .$mnu->id_menu, '<div class="btn btn-primary btn-sm"><i
                        class="fas fa-edit"></i>
                </div>') ?>
            </td>
            <td style="border: solid 1.5px #3F4E4F; border-style: none none none none;">
                <?php echo anchor('admin/data_menu/hapus/' .$mnu->id_menu, '<div class="btn btn-danger btn-sm"><i
                        class="fas fa-trash"></i>
                </div>') ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_menu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="color: black; font-weight: bolder; text-align: center" class="modal-title text-center" id="exampleModalLabel">FORM INPUT menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url(). 'admin/data_menu/tambah_aksi'; ?>" method="post"
                    enctype="multipart/form-data">

                    <div class="form-group">
                        <label style="color: black;">Nama Menu</label>
                        <input type="text" name="nama_menu" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="color: black;">Keterangan</label>
                        <input type="text" name="keterangan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="color: black;">Kategori</label>
                        <select class="form-control" name="kategori_id">
                            <?php foreach($kategori as $item) { ?>
                            <option value="<?= $item->id ?>"><?= $item->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label style="color: black;">Harga</label>
                        <input type="text" name="harga" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="color: black;">Stok</label>
                        <input type="text" name="stok" class="form-control">
                    </div>

                    <div class="form-group">
                        <label style="color: black;">Gambar Produk</label><br>
                        <input style= "height: 10%" type="file" name="gambar" class="form-control">
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