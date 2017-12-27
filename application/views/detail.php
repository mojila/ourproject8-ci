<div class="page_wrap">
    <div class="ps-section--hero pt-100 pb-100">
        <div class="ps-section__content text-center">
            <h3 class="ps-section__title">OUR PROJECT 8</h3>
            <div class="ps-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
                    <li class="active">Product Detail</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="ps-section pt-80 pb-80">
        <div class="container">
            <div class="ps-product--detail">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 ">
                        <div class="ps-product__thumbnail">
                            <img src="<?php echo base_url('dist/img/').$gambar_produk[0]->file; ?>" alt="" class="img-responsive pad">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 ">
                        <header>
                            <h3 class="ps-product__name"><?php echo $product->nama; ?></h3>
                            <select class="ps-rating">
                                <?php 
                                    $bintang_off = 5;
                                    $bintang_on = $product->bintang;
                                    $bintang_sisa = $bintang_off - $bintang_on;
                                    for($b = 1; $b <= $bintang_on; $b++){
                                        echo '<option value="1">'.$b.'</option>';
                                    }
                                    if($bintang_sisa != 0){
                                        for($c = $bintang_sisa; $c <= $bintang_off; $c++) {
                                            echo '<option value="5">'.$c.'</option>';
                                        }
                                    }
                                ?>
                            </select>
                            <a class="ps-product__quickview popup-modal" href="#quickview-modal" data-effect="mfp-zoom-out">Keterangan Produk</a>
                            <div class="ps-product__description">
                                <?php echo $product->keterangan; ?>
                            </div>
                            <div class="ps-product__meta">
                                <p class="category"><span>CATEGORIES: </span><a href="<?php echo base_url('category/').$product->kode; ?>">
                                <?php
                                    foreach($kategori as $k) {
                                        if($k->id == $product->id_kategori){
                                            echo $k->nama;
                                        }
                                    }
                                ?>
                                </a>
                                <?php echo $product->ukuran; ?>
                            </div>
                            <div class="form-group ps-product__size">
                            </div>
                            <div class="ps-product__shop">
                            
                            </div>
                        </header>
                        <footer>
                            <div class="row">
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12 ">
                                    <a class="ps-btn ps-btn--sm" style="background: #00B833 !important;" href="https://line.me/R/ti/p/%40ourproject8"><img src="https://media.line.me/img/web/lineit_select_line_icon_02.png" alt="" height="16"> Line</a>
                                    <a class="ps-btn ps-btn--sm" style="background: #00E676 !important;" href="https://api.whatsapp.com/send?phone=6281249647753&amp;text=Saya%20Mau%20Order%20|%20<?php echo base_url('home/product_detail/').$product->kode; ?>"><img src="https://cdn.iconverticons.com/files/png/1c3a93787b4867ca_256x256.png" alt="" height="16"> WA</a>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>