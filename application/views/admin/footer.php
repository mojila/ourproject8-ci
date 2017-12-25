
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
<!-- DataTables -->
<script src="<?php echo base_url(); ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- CK Editor -->
<script src="<?php echo base_url(); ?>bower_components/ckeditor/ckeditor.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>dist/js/adminlte.min.js"></script>
<!-- Fastclick -->
<script src="<?php echo base_url(); ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- Sweetalert2 -->
<script src="<?php echo base_url(); ?>bower_components/sweetalert2/dist/sweetalert2.min.js"></script>
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

    // Hapus Produk
    $.hapusProduk = function(id) {
      swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          setTimeout(() => {
            window.location.href = "<?php echo base_url('products/hapus/'); ?>" + id;
          }, 1000);
        }
      })
    };

    // Hapus Pengguna
    $.hapusPengguna = function(id) {
      swal({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.value) {
          setTimeout(() => {
            window.location.href = "<?php echo base_url('users/hapus/'); ?>" + id;
          }, 1000);
        }
      })
    };

    $(function() {
      $('#list_produk').DataTable();
    });

    $(function() {
      $('#list_pengguna').DataTable();
    });
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>