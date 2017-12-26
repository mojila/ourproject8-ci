<div class="row">
    <div class="col col-md-8">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img id="preview_gambar_slide_1" src="<?php echo base_url('/dist/img/').$slide[0]->gambar; ?>" alt="First slide">

                    <div class="carousel-caption">
                        <h3 class="title" id="preview_judul_slide_1"><?php echo $slide[0]->judul; ?></h3>
                        <p id="preview_keterangan_slide_1"><?php echo $slide[0]->keterangan; ?></p>
                        <center><a id="preview_link_slide_1" href="<?php echo $slide[0]->link; ?>" target="_blank" class="btn btn-info">Go To</a></center>
                    </div>
                </div>
                <div class="item">
                    <img id="preview_gambar_slide_2" src="<?php echo base_url('/dist/img/').$slide[1]->gambar; ?>" alt="Second slide">

                    <div class="carousel-caption">
                        <h3 class="title" id="preview_judul_slide_2"><?php echo $slide[1]->judul; ?></h3>
                        <p id="preview_keterangan_slide_2"><?php echo $slide[1]->keterangan; ?></p>
                        <center><a id="preview_link_slide_2" href="<?php echo $slide[1]->link; ?>" target="_blank" class="btn btn-info">Go To</a></center>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="fa fa-angle-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="fa fa-angle-right"></span>
            </a>
        </div>
    </div>
    <div class="col col-md-4">
        <form action="<?php echo base_url('slideshow/update') ?>" role="form" method="post" enctype="multipart/form-data">
        <div class="row" id="slide_1">
            <div class="col col-md-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Slide 1</h3>
                    </div>
                    <div class="box-body">
                        <div class="col col-md-12">
                            <input type="file" name="gambar_slide_1" id="gambar_slide_1" style="display: none;" accept=".jpg,.jpeg,.png">
                            <center>
                                <a id="unggah_gambar_slide1" class="btn btn-app btn-flat">
                                    <i class="fa fa-picture-o"></i> Slide 1
                                </a>
                            </center>
                        </div>
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label>Judul Slide 1</label>
                                <input type="text" id="judul_slide_1" name="judul_slide_1" class="form-control" value="<?php echo $slide[0]->judul; ?>" placeholder="Masukkan Judul Slide 1">
                            </div>
                        </div>
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label>Keterangan Slide 1</label>
                                <textarea name="keterangan_slide_1" id="keterangan_slide_1" cols="2" rows="2" class="form-control" placeholder="Masukkan Keterangan Slide 1"><?php echo $slide[0]->keterangan; ?></textarea>
                            </div>
                        </div>
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label>Link Slide 1</label>
                                <input type="url" name="link_slide_1" id="link_slide_1" class="form-control" placeholder="Contoh: http://google.com" value="<?php echo $slide[0]->link; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-success btn-flat pull-right">Simpan</button>
                        <a href="#" id="go_slide_2" class="btn btn-primary btn-flat pull-left">Slide 2</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="slide_2" style="display: none;">
            <div class="col col-md-12">
                <div class="box box-warning">
                    <div class="box-header with-border">
                        <h3 class="box-title">Slide 2</h3>
                    </div>
                    <div class="box-body">
                        <div class="col col-md-12">
                            <input type="file" name="gambar_slide_2" id="gambar_slide_2" style="display: none;" accept=".jpg,.jpeg,.png">
                            <center>
                                <a id="unggah_gambar_slide2" class="btn btn-app btn-flat">
                                    <i class="fa fa-picture-o"></i> Slide 2
                                </a>
                            </center>
                        </div>
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label>Judul Slide 2</label>
                                <input type="text" id="judul_slide_2" name="judul_slide_2" class="form-control" placeholder="Masukkan Judul Slide 2" value="<?php echo $slide[1]->judul; ?>">
                            </div>
                        </div>
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label>Keterangan Slide 2</label>
                                <textarea name="keterangan_slide_2" id="keterangan_slide_2" cols="2" rows="2" class="form-control" placeholder="Masukkan Keterangan Slide 2"><?php echo $slide[1]->keterangan; ?></textarea>
                            </div>
                        </div>
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label>Link Slide 2</label>
                                <input type="url" name="link_slide_2" id="link_slide_2" class="form-control" placeholder="Contoh: http://google.com" value="<?php echo $slide[1]->link; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-success btn-flat pull-right">Simpan</button>
                        <a href="#" id="go_slide_1" class="btn btn-primary btn-flat pull-left">Slide 1</a>
                    </div>
                </div>
            </div>
        </div>
        </form>        
    </div>
</div>