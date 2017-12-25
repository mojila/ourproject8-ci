<!--------------------------
| Your Page Content Here |
-------------------------->
<div class="row">
    <div class="col col-md-4">
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Identitas Situs</h3>
            </div>
            <form role="form" action="<?php echo base_url('sites/update_identitas'); ?>" method="post">
            <div class="box-body">
                <div class="form-group">
                    <label>Nama Situs</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama situs ..." value="<?php echo $site->nama; ?>">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="" rows="2"><?php echo $site->deskripsi; ?></textarea>
                </div>                
            </div>
            <div class="box-footer">
                <button class="btn btn-warning btn-flat pull-right">Simpan</button>
            </div>
            </form>
        </div>
    </div>
    <div class="col col-md-4">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Logo Situs</h3>
            </div>
            <form role="form" action="<?php echo base_url('sites/update_logo'); ?>" enctype="multipart/form-data" method="post">
            <div class="box-body">
                <div class="row">
                    <div class="col col-md-12">
                        <center><img id="logo_upload_preview" src="<?php echo base_url('dist/img/').$site->logo; ?>" alt="Belum Ada Logo" class="img-responsive pad"></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-12">
                        <input type="file" name="logo" accept=".jpg,.jpeg,.png" id="input_logo" style="visibility: hidden;">
                        <center><span id="unggah_logo" class="btn btn-default btn-flat">Unggah (max 128 x 128)</span></center>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button class="btn btn-success btn-flat pull-right">Simpan</button>
            </div>
            </form>
        </div>
    </div>
    <div class="col col-md-4">
    <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><?php echo $site->nama; ?></h3>
              <h5 class="widget-user-desc"><?php echo $site->deskripsi; ?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="<?php echo base_url('dist/img/').$site->logo; ?>" alt="Logo Situs" style="background-color: #fff;">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">PRODUK</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13</h5>
                    <span class="description-text">PELANGGAN</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">1</h5>
                    <span class="description-text">ADMIN</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
    </div>
</div>
<div class="row">
    <div class="col col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Sunting Tentang Situs</h3>
            </div>
            <form role="form" action="<?php echo base_url('sites/update_tentang') ?>" method="post">
            <div class="box-body pad">
                <textarea id="tentang" name="tentang" rows="10" cols="80"><?php echo $site->tentang ?></textarea>
            </div>
            <div class="box-footer">
                <button class="btn btn-primary btn-flat pull-right">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>