<!-- Bootstrap core JavaScript-->
</div></div>
<footer style="background-Color: #3F4E4F; padding: 30px 30px; bottom: 0; position: static; width: 100%">
    <div>
        <div class="copyright text-center text-white">
            <span>Copyright &copy; Najo Coffee 2023</span>
        </div>
    </div>
</footer>

            
<script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>

<script>

$(function() {
    $('.disclaimer').hide();
});

function addCommas(nStr) {
    nStr += '';
    var x = nStr.split('.');
    var x1 = x[0];
    var x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}

$('#ekspedisi').change(function() {
      var val = $(this).val();
      var text = $('#template').text();
      var subtotal = $('#subtotal').text();
      let selected = "<?= @$user->kecamatan ?>";
    //   text += '<br> Ongkir : ' + 0 + " <br> Total : " + addCommas(parseInt(subtotal))
      
      $('#total').html(text);
      
      if (val == 'ANTAR') {
          $('#kecamatan').html(`
            <option data-harga="0">PILIH</option>
                                <option value="Cempaka Putih|5000" data-harga="5000" ${selected=='Cempaka Putih' ? 'selected' : ''}>Cempaka Putih</option>
                                <option value="Gambir|8000" data-harga="8000" ${selected=='Gambir' ? 'selected' : ''}>Gambir</option>
                                <option value="Johar Baru|10000" data-harga="10000" ${selected=='Johar Baru' ? 'selected' : ''}>Johar Baru</option>
                                <option value="Kemayoran|7000" data-harga="7000" ${selected=='Kemayoran' ? 'selected' : ''}>Kemayoran</option>
                                <option value="Menteng|6000" data-harga="6000" ${selected=='Menteng' ? 'selected' : ''}>Menteng</option>
                                <option value="Sawah Besar|7000" data-harga="6000" ${selected=='Sawah Besar' ? 'selected' : ''}>Sawah Besar</option>
                                <option value="Senen|8000" data-harga="6000" ${selected=='Senen' ? 'selected' : ''}>Senen</option>
                                <option value="Tanah Abang|9000" data-harga="6000" ${selected=='Tanah Abang' ? 'selected' : ''}>Tanah Abang</option>
          `)
      } else if (val == 'AMBIL DI KEDAI') {
          $('#kecamatan').html(`
            <option data-harga="0">PILIH</option>
                                <option value="Cempaka Putih|0" data-harga="0" ${selected=='Cempaka Putih' ? 'selected' : ''}>Cempaka Putih</option>
                                <option value="Gambir|0" data-harga="0" ${selected=='Gambir' ? 'selected' : ''}>Gambir</option>
                                <option value="Johar Baru|0" data-harga="0" ${selected=='Johar Baru' ? 'selected' : ''}>Johar Baru</option>
                                <option value="Kemayoran|0" data-harga="0" ${selected=='Kemayoran' ? 'selected' : ''}>Kemayoran</option>
                                <option value="Kemayoran|0" data-harga="0" ${selected=='Menteng' ? 'selected' : ''}>Menteng</option>
                                <option value="Sawah Besar|0" data-harga="0" ${selected=='Sawah Besar' ? 'selected' : ''}>Sawah Besar</option>
                                <option value="Senen|0" data-harga="0" ${selected=='Senen' ? 'selected' : ''}>Senen</option>
                                <option value="Tanah Abang|0" data-harga="0" ${selected=='Tanah Abang' ? 'selected' : ''}>Tanah Abang</option>
          `)                    
      }
      
      $('#kecamatan').trigger('change');
    });
    
    
    $('#kecamatan').change(function() {
      var harga = $(this).find(':selected').attr('data-harga');
      var subtotal = $('#subtotal').text();
      var text = $('#template').text();
      text += '<br> Ongkir : ' + addCommas(harga) + " <br> Total : " + addCommas(parseInt(harga)+parseInt(subtotal))
      $('#total').html(text);
    });
</script>

<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>



</body>

</html>