<div class="row">
    <form action="<?php echo base_url('products/tambah'); ?>" id="tambah_produk" role="form" method="post" enctype="multipart/form-data">
        <div class="col col-md-6">
            <div class="row">
                <div class="col col-md-12">
                    <div class="box box-default">
                        <div class="box-header">
                            <input type="hidden" name="kode" value="<?php echo $kode_produk; ?>">
                            <h3 class="box-title">Kode Produk : <?php echo $kode_produk; ?></a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-12">
                    <div class="box box-default">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Kategori Produk <a href="#" id="tambah_kategori">[ <i class="fa fa-plus"></i> Tambah Kategori ]</a> <a href="#" id="hapus_kategori">[ <i class="fa fa-trash"></i> Hapus Kategori ]</a></label>
                                <select name="id_kategori" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    <?php 
                                        foreach($kategori as $item) {
                                            echo '<option value="'.$item->id.'">'.$item->nama.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="display: none;" id="kategori_baru">
                <div class="col col-md-12">
                    <div class="box box-default">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Kategori Baru</label>
                                <input type="text" name="nama_kategori" class="form-control">
                            </div>
                        </div>
                        <div class="box-footer">
                            <button class="btn btn-success btn-flat pull-right">Buat</button>
                            <a id="batal_tambah_kategori" class="btn btn-danger btn-flat pull-right pull-right" style="margin-right: 1em;">Batal</a>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="display: none;" id="kategori_list">
                <div class="col col-md-12">
                    <div class="box box-default">
                        <div class="box-body">
                            <div class="form-group">
                                <label>Hapus Kategori</label>
                                <select name="id_kategori_hapus" class="form-control">
                                    <option value="">Pilih Kategori</option>
                                    <?php 
                                        foreach($kategori as $item) {
                                            echo '<option value="'.$item->id.'">'.$item->nama.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button class="btn btn-danger btn-flat pull-right">Hapus</button>
                            <a id="batal_hapus_kategori" class="btn btn-default btn-flat pull-right pull-right" style="margin-right: 1em;">Batal</a>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-12">
                    <div class="box box-default">
                        <div class="box-body">
                            <div class="row">
                                <div class="col col-md-10">
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama produk ...">
                                    </div>
                                </div>
                                <div class="col col-md-2">
                                    <div class="form-group">
                                        <label>Bintang</label>
                                        <input type="number" name="bintang" class="form-control" placeholder="..." min="0" max="5">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col col-md-8">
                                    <div class="form-group">
                                        <label>Variasi</label>
                                        <input type="text" name="variasi" class="form-control" placeholder="Masukkan variasi produk ...">
                                    </div>
                                </div>
                                <div class="col col-md-4">
                                        <div class="form-group">
                                            <label>Min. Order</label>
                                            <input type="number" name="minimal_order" min="1" class="form-control" placeholder="..." value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-12">
                    <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Gambar Produk</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col col-md-12">
                                <center><img id="upload_gambar_produk_utama" src="" alt="Gambar Utama" class="img-responsive pad"></center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-md-3">
                                <center><img id="preview_gambar_produk_1" src="" alt="Gambar 1" class="img-responsive pad"></center>
                                
                                <input type="file" name="gambar_produk_1" accept=".jpg,.jpeg,.png" id="gambar_produk_1" style="visibility: hidden;">
                            </div>
                            <div class="col col-md-3">
                                <center><img id="preview_gambar_produk_2" src="" alt="Gambar 2" class="img-responsive pad"></center>

                                <input type="file" name="gambar_produk_2" accept=".jpg,.jpeg,.png" id="gambar_produk_2" style="visibility: hidden;">
                            </div>
                            <div class="col col-md-3">
                                <center><img id="preview_gambar_produk_3" src="" alt="Gambar 3" class="img-responsive pad"></center>           

                                <input type="file" name="gambar_produk_3" accept=".jpg,.jpeg,.png" id="gambar_produk_3" style="visibility: hidden;">
                            </div>
                            <div class="col col-md-3">
                                <center><img id="preview_gambar_produk_4" src="" alt="Gambar 4" class="img-responsive pad"></center>

                                <input type="file" name="gambar_produk_4" accept=".jpg,.jpeg,.png" id="gambar_produk_4" style="visibility: hidden;">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="col col-md-3">
                            <a id="unggah_gambar_produk1" class="btn btn-app btn-flat">
                                <i class="fa fa-picture-o"></i> Gambar 1
                            </a>
                        </div>
                        <div class="col col-md-3">
                            <a id="unggah_gambar_produk2" class="btn btn-app btn-flat">
                                <i class="fa fa-picture-o"></i> Gambar 2
                            </a>
                        </div>
                        <div class="col col-md-3">
                            <a id="unggah_gambar_produk3" class="btn btn-app btn-flat">
                                <i class="fa fa-picture-o"></i> Gambar 3
                            </a>
                        </div>
                        <div class="col col-md-3">
                            <a id="unggah_gambar_produk4" class="btn btn-app btn-flat">
                                <i class="fa fa-picture-o"></i> Gambar 4
                            </a>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title">Detail Produk</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label>Keterangan Produk</label>
                                <textarea name="keterangan" id="keterangan" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="form-group">
                                <label>Ukuran Produk</label>
                                <textarea name="ukuran" id="ukuran" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button class="btn btn-primary btn-flat pull-right">Buat</button>
                </div>
            </div>
        </div>
    </form>
</div>