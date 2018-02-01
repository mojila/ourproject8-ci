
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
      // Unggah Gambar Promo
      $('#unggah_gambar_promo').on('click', function() {
          $('#gambar_promo').click();
        });
        // Preview Logo
        $('#gambar_promo').on('change', function() {
          $.readURL(this, 'preview_gambar_promo');
        });
    });

    $(function() {
      // Unggah Foto Testimoni
      $('#unggah_foto_testimoni').on('click', function() {
          $('#foto_testimoni').click();
        });
        // Preview Logo
        $('#foto_testimoni').on('change', function() {
          $.readURL(this, 'preview_foto_testimoni');
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

    $(function() {
      // Switch
      $('#go_slide_2').on('click', () => {
        $('#slide_1').hide();
        $('#slide_2').show();
      });
      $('#go_slide_1').on('click', () => {
        $('#slide_2').hide();
        $('#slide_1').show();
      });
      // Upload
      $('#unggah_gambar_slide1').on('click', function() {
        $('#gambar_slide_1').click();
      });
      $('#unggah_gambar_slide2').on('click', function() {
        $('#gambar_slide_2').click();
      });
      // Preview Slide
      $('#gambar_slide_1').on('change', function() {
        $.readURL(this, 'preview_gambar_slide_1');
      });
      $('#gambar_slide_2').on('change', function() {
        $.readURL(this, 'preview_gambar_slide_2');
      });
      // Preview Judul
      $('#judul_slide_1').on('keyup', () => {
        $('#preview_judul_slide_1').html($('#judul_slide_1').val());  
      });
      $('#judul_slide_2').on('keyup', () => {
        $('#preview_judul_slide_2').html($('#judul_slide_2').val());  
      });
      // Preview Keterangan
      $('#keterangan_slide_1').on('keyup', () => {
        $('#preview_keterangan_slide_1').html($('#keterangan_slide_1').val());  
      });
      $('#keterangan_slide_2').on('keyup', () => {
        $('#preview_keterangan_slide_2').html($('#keterangan_slide_2').val());  
      });
      // Preview Link
      $('#link_slide_1').on('keyup', () => {
        $('#preview_link_slide_1').attr('href', $('#link_slide_1').val());  
      });
      $('#link_slide_2').on('keyup', () => {
        $('#preview_link_slide_2').attr('href', $('#link_slide_2').val());  
      });
    });

    $(function() {
      $('#tambah_kategori').on('click', () => {
        $('#tambah_produk').attr('action', "<?php echo base_url('products/tambah_kategori'); ?>");
        $('#kategori_baru').show();
        $('#kategori_list').hide();        
      });
      $('#batal_tambah_kategori').on('click', () => {
        $('#tambah_produk').attr('action', "<?php echo base_url('products/tambah'); ?>");
        $('#kategori_baru').hide();
      });
      $('#hapus_kategori').on('click', () => {
        $('#tambah_produk').attr('action', "<?php echo base_url('products/hapus_kategori'); ?>");
        $('#kategori_list').show();
        $('#kategori_baru').hide();        
      });
      $('#batal_hapus_kategori').on('click', () => {
        $('#tambah_produk').attr('action', "<?php echo base_url('products/tambah'); ?>");
        $('#kategori_list').hide();
      });
    });
    $(function() {
      $('#edit_tambah_kategori').on('click', () => {
        $('#edit_produk').attr('action', "<?php echo base_url('products/edit_tambah_kategori'); ?>");
        $('#edit_kategori_baru').show();
        $('#edit_kategori_list').hide();        
      });
      $('#edit_batal_tambah_kategori').on('click', () => {
        $('#edit_produk').attr('action', "<?php echo base_url('products/edit'); ?>");
        $('#edit_kategori_baru').hide();
      });
      $('#edit_hapus_kategori').on('click', () => {
        $('#edit_produk').attr('action', "<?php echo base_url('products/edit_hapus_kategori'); ?>");
        $('#edit_kategori_list').show();
        $('#edit_kategori_baru').hide();        
      });
      $('#edit_batal_hapus_kategori').on('click', () => {
        $('#edit_produk').attr('action', "<?php echo base_url('products/edit'); ?>");
        $('#edit_kategori_list').hide();
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

    // Hapus Langganan
    $.hapusLangganan = function(id) {
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
            window.location.href = "<?php echo base_url('subscribers/hapus/'); ?>" + id;
          }, 1000);
        }
      })
    };

    // Hapus Promo
    $.hapusPromo = function(id) {
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
            window.location.href = "<?php echo base_url('promos/hapus/'); ?>" + id;
          }, 1000);
        }
      })
    };

    // Hapus Testimoni
    $.hapusTestimoni = function(id) {
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
            window.location.href = "<?php echo base_url('testimonials/hapus/'); ?>" + id;
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

    $(function() {
      $('#list_promo').DataTable();
    });

    $(function() {
      $('#list_testimoni').DataTable();
    });
</script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>