<!--------------------------
| Your Page Content Here |
-------------------------->
<div class="row">
    <div class="col col-md-4">
        <div class="box box-warning">
            <div class="box-header with-border">
                <h3 class="box-title">Identitas Situs</h3>
            </div>
            <form role="form">
            <div class="box-body">
                <div class="form-group">
                    <label>Nama Situs</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama situs ..." value="<?php echo $site->nama; ?>">
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" id="" rows="2"></textarea>
                </div>                
            </div>
            <div class="box-footer">
                <div class="btn btn-warning btn-flat pull-right">Simpan</div>                        
            </div>
            </form>
        </div>
    </div>
    <div class="col col-md-4">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Logo Situs</h3>
            </div>
            <form role="form" action="<?php echo base_url('site/image_update'); ?>" enctype="multipart/form-data">
            <div class="box-body">
                <div class="row">
                    <div class="col col-md-12">
                        <center><img id="logo_upload_preview" src="<?php echo $site->logo; ?>" alt="Belum Ada Logo" class="img-responsive pad"></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col col-md-12">
                        <input type="file" name="logo" id="input_logo" style="visibility: hidden;">
                        <center><span id="unggah_logo" class="btn btn-default btn-flat">Unggah Logo (64 x 64)</span></center>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <div class="btn btn-success btn-flat pull-right">Simpan</div>                        
            </div>
            </form>
        </div>
    </div>
    <div class="col col-md-4">
    <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><?php echo $site->nama; ?></h3>
              <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">3,200</h5>
                    <span class="description-text">SALES</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <h5 class="description-header">13,000</h5>
                    <span class="description-text">FOLLOWERS</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
                <div class="col-sm-4">
                  <div class="description-block">
                    <h5 class="description-header">35</h5>
                    <span class="description-text">PRODUCTS</span>
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
            <form role="form">
            <div class="box-body pad">
                <textarea id="tentang" name="tentang" rows="10" cols="80">

                </textarea>
            </div>
            <div class="box-footer">
                <div class="btn btn-primary btn-flat pull-right">Simpan</div>
            </div>
            </form>
        </div>
    </div>
</div>