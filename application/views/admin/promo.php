<div class="row">
    <div class="col col-md-4">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Upload Gambar Promo</h3>
            </div>
            <form action="<?php echo base_url('promos/tambah'); ?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
                <div class="col col-md-12">
                    <div class="form-group">
                        <label for="">Judul Promo</label>
                        <input type="text" class="form-control" name="judul" id="judul">
                    </div>
                </div>
                <div class="col col-md-12">
                    <center><img src="" alt="Belum Ada Gambar" id="preview_gambar_promo" class="img-responsive pad"></center>
                </div>
                <div class="col col-md-12">
                    <input type="file" name="gambar_promo" id="gambar_promo" style="display: none;">
                    <center><a href="#" id="unggah_gambar_promo" class="btn btn-default btn-flat"><i class="fa fa-image"></i> Upload</a></center>
                </div>
            </div>
            <div class="box-footer">
                <button class="btn btn-primary btn-flat pull-right"><i class="fa fa-plus"></i> Tambah Promo</button>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="col col-md-12">
        <div class="box box-default">
            <div class="box-body">
            <table id="list_promo" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Promo</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach ($promo as $item) {
                            echo '
                            <tr>
                                <td>'.$item->judul.'</td>
                                <td>
                                    <button class="btn btn-danger btn-flat" onclick="$.hapusPromo('.$item->id.')"><i class="fa fa-trash"></i> Hapus</button>
                                </td>
                            </tr>
                            ';
                        }
                    ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Promo</th>
                  <th>Opsi</th>                  
                </tr>
                </tfoot>
              </table>
            </div>
        </div>
    </div>
</div>