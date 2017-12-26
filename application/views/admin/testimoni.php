<div class="row">
    <div class="col col-md-4">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Upload Gambar Promo</h3>
            </div>
            <form action="<?php echo base_url('testimonials/tambah'); ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
                <div class="col col-md-12">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                </div>
                <div class="col col-md-12">
                    <div class="form-group">
                        <label for="">Isi Testimoni</label>
                        <input type="text" class="form-control" name="isi" id="isi">
                    </div>
                </div>
                <div class="col col-md-12">
                    <center><img src="" alt="Belum Ada Foto" id="preview_foto_testimoni" class="img-responsive pad"></center>
                </div>
                <div class="col col-md-12">
                    <input type="file" name="foto_testimoni" id="foto_testimoni" style="display: none;">
                    <center><a href="#" id="unggah_foto_testimoni" class="btn btn-default btn-flat"><i class="fa fa-image"></i> Upload</a></center>
                </div>
            </div>
            <div class="box-footer">
                <button class="btn btn-primary btn-flat pull-right"><i class="fa fa-plus"></i> Tambah Testimoni</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col col-md-12">
        <div class="box box-default">
            <div class="box-body">
            <table id="list_testimoni" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Isi</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($testimoni as $item) {
                            echo '
                            <tr>
                                <td>'.$item->nama.'</td>
                                <td>'.$item->isi.'</td>
                                <td>
                                    <button class="btn btn-danger btn-flat" onclick="$.hapusTestimoni('.$item->id.')"><i class="fa fa-trash"></i> Hapus</button>
                                </td>
                            </tr>
                            ';
                        }
                    ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nama</th>
                  <th>Isi</th>
                  <th>Opsi</th>                  
                </tr>
                </tfoot>
              </table>
            </div>
        </div>
    </div>
</div>