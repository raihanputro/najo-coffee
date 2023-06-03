<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
  $( function() {
    $.widget( "custom.iconselectmenu", $.ui.selectmenu, {
      _renderItem: function( ul, item ) {
        var li = $( "<li>" ),
          wrapper = $( "<div>", { text: item.label } );
 
        if ( item.disabled ) {
          li.addClass( "ui-state-disabled" );
        }
 
        $( "<span>", {
          style: item.element.attr( "data-style" ),
          "class": "ui-icon " + item.element.attr( "data-class" )
        })
          .appendTo( wrapper );
 
        return li.append( wrapper ).appendTo( ul );
      }
    });
 
    $( "#metode" )
      .iconselectmenu()
      .iconselectmenu( "menuWidget" )
        .addClass( "ui-menu-icons customicons" );
  } );
</script>

<style>
    .ui-selectmenu-menu .ui-menu.customicons .ui-menu-item-wrapper {
      padding: 0.5em 0 0.5em 3em;
    }
    .ui-selectmenu-menu .ui-menu.customicons .ui-menu-item .ui-icon {
      height: 24px;
      width: 24px;
      top: 0.1em;
    }
    .ui-icon.dana {
      background: url("uploads/logo/dana.png") 0 0 no-repeat;
    }
</style>

<div style="background-color: #2C3639; padding-top: 60px" class="container-fluid pb-3">
    <h4 style="color: white; font-weight: bolder; padding-top: 20px" class="text-center mb-3">PEMBAYARAN</h4>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          
            <h3 style="color: white; font-weight: bolder;" class="text-center">Input alamat pengiriman dan pembayaran</h3>
            <form action="<?php echo base_url('dashboard/proses_pesanan') ?>" method="post">      
                    <div class="form-group">
                        <label style="color: white;">Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="isi nama lengkap anda" class="form-control" value="<?= $user->nama ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label style="color: white;">No. Telepon</label>
                        <input type="text" name="hp" placeholder="isi nomor telepon anda" class="form-control" value="<?= $user->hp ?>" required>
                    </div>
                    
                    <div class="form-group">
                        <label style="color: white;">Alamat Lengkap</label>
                        <input type="text" name="alamat" placeholder="isi alamat lengkap anda" class="form-control" value="<?= $user->alamat ?>" required>
                    </div>
                    
                    <div class="form-group">
                            <label style="color: white;">Kecamatan</label>
                            <select class="form-control" id="kecamatan" name="kecamatan" required>
                                <option data-harga="0">PILIH</option>
                                <option value="Cempaka Putih|5000" data-harga="2000" <?= $user->kecamatan=='Cempaka Putih' ? 'selected' : '' ?>>Cempaka Putih</option>
                                <option value="Gambir|8000" data-harga="8000" <?= $user->kecamatan=='Gambir' ? 'selected' : '' ?>>Gambir</option>
                                <option value="Johar Baru|10000" data-harga="10000" <?= $user->kecamatan=='Johar Baru' ? 'selected' : '' ?>>Johar Baru</option>
                                <option value="Kemayoran|7000" data-harga="7000" <?= $user->kecamatan=='Kemayoran' ? 'selected' : '' ?>>Kemayoran</option>
                                <option value="Menteng|6000" data-harga="6000" <?= $user->kecamatan=='Menteng' ? 'selected' : '' ?>>Menteng</option>
                                <option value="Sawah Besar|7000" data-harga="7000" <?= $user->kecamatan=='Sawah Besar' ? 'selected' : '' ?>>Sawah Besar</option>
                                <option value="Senen|8000" data-harga="8000" <?= $user->kecamatan=='Senen' ? 'selected' : '' ?>>Senen</option>
                                <option value="Tanah Abang|9000" data-harga="9000" <?= $user->kecamatan=='Tanah Abang' ? 'selected' : '' ?>>Tanah Abang</option>
                            </select>
                        </div>
                    
                    <div class="form-group">
                        <label style="color: white;">Jasa Pengiriman</label>
                        <select class="form-control" name="ekspedisi" id="ekspedisi" required>
                            <option value="">PILIH</option>
                            <option value="ANTAR">ANTAR (Hanya melayani pengiriman sesuai kecamatan yang dipilih)</option>
                            <option value="AMBIL DI KEDAI">AMBIL DI KEDAI</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label style="color: white;" for="metode">Pilih Metode Pembayaran</label>
                        <select class="form-control" name="metode" id="metode" required>
                            <option>PILIH</option>
                            <option>DANA 082122848722 A/N ARYANDI SYAHPUTRA</option>
                            <option>GOPAY 082122848722 A/N ARYANDI SYAHPUTRA</option>
                            <option>BANK BNI 0875784169 A/N ARYANDI SYAHPUTRA</option>
                            <option>BANK JAGO 108144123187 A/N ARYANDI SYAHPUTRA</option>
                            <option>Bayar di Kedai</option>
                            <option>COD (Cash On Delivery)</option>
                        </select>
                    </div>
                    <?php 
                    $grand_total = 0;  
                    if($keranjang = $this->cart->contents())
                    {
                        foreach($keranjang as $item)
                        {
                            $grand_total = $grand_total + $item['subtotal'];
                        }

                        echo "<input type='hidden' name='subtotal' value='$grand_total'><span id='subtotal' hidden>$grand_total</span><h4 style='color: white;' id='template' hidden>Total belanja anda : Rp. ".number_format($grand_total, 0,',','.') . "</h4><h4 style='color: white; font-weight: bolder' id='total'>Total belanja anda : Rp. ".number_format($grand_total, 0,',','.') . "</h4>";
                   
                    ?>

                    <button style="font-weight: bolder; color: white; background-Color: #FF4C29;" type="submit" class="btn btn-sm">Pesan</button>
            </form>

            <?php
             }else{
                 echo "<h4>Keranjang belanja masih kosong";
             }
            ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>