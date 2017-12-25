
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Pusat Administrasi
    </div>
    <!-- Default to the left -->
    <strong>Developed At &copy; 2017 By <a href="https://github.com/mojila">Mojila</a>.</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- CK Editor -->
<script src="<?php echo base_url(); ?>bower_components/ckeditor/ckeditor.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- Fastclick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<script>
    $.readURL = function(input, preview) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#' + preview).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $(function() {
        // CKEDITOR
        CKEDITOR.replace('tentang');
        // Unggah Logo
        $('#unggah_logo').on('click', function() {
          $('#input_logo').click();
        });
        // Preview Logo
        $('#input_logo').on('change', function() {
          $.readURL(this, 'logo_upload_preview');
        });
    });

    $(function() {
      // CKEDITOR
      CKEDITOR.replace('keterangan');
      CKEDITOR.replace('ukuran');
      // Unggah Gambar Produk
      $('#unggah_gambar_produk1').on('click', function() {
        $('#gambar_produk_1').click();
      });
      $('#unggah_gambar_produk2').on('click', function() {
        $('#gambar_produk_2').click();
      });
      $('#unggah_gambar_produk3').on('click', function() {
        $('#gambar_produk_3').click();
      });
      $('#unggah_gambar_produk4').on('click', function() {
        $('#gambar_produk_4').click();
      });
      // Preview Logo
      $('#gambar_produk_1').on('change', function() {
        $.readURL(this, 'preview_gambar_produk_1');
        $.readURL(this, 'upload_gambar_produk_utama');
      });
      $('#gambar_produk_2').on('change', function() {
        $.readURL(this, 'preview_gambar_produk_2');
      });
      $('#gambar_produk_3').on('change', function() {
        $.readURL(this, 'preview_gambar_produk_3');
      });
      $('#gambar_produk_4').on('change', function() {
        $.readURL(this, 'preview_gambar_produk_4');
      });
    });
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>