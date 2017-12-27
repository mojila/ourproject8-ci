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
                                <p><span> Availability: </span> In stock</p>
                                <p class="category"><span>CATEGORIES: </span><a href="product-grid.html">Cupcake</a>,<a href="product-grid.html"> organic</a>,<a href="product-grid.html"> sugar</a>,<a href="product-grid.html"> sweet</a>,<a href="product-grid.html"> bio</a></p>
                            </div>
                            <div class="form-group ps-product__size">
                                <label>Size:</label>
                                <select class="ps-select" data-placeholder="Popupar product">
                                    <option value="01">CHOOSE AN OPTION</option>
                                    <option value="01">Item 01</option>
                                    <option value="02">Item 02</option>
                                    <option value="03">Item 03</option>
                                </select>
                            </div>
                            <div class="ps-product__shop">
                                <div class="form-group--number">
                                    <button class="minus"><span>-</span></button>
                                    <input class="form-control" type="text" value="1">
                                    <button class="plus"><span>+</span></button>
                                </div>
                                <ul class="ps-product__action">
                                    <li><a href="#" data-tooltip="Add to wishlist"><i class="ps-icon--heart"></i></a></li>
                                    <li><a href="#" data-tooltip="Compare"><i class="ps-icon--reload"></i></a></li>
                                </ul>
                            </div>
                        </header>
                        <footer>
                            <div class="row">
                                <div class="col-lg-6 col-md-5 col-sm-6 col-xs-12 "><a class="ps-btn--fullwidth ps-btn" href="#">Purchase Now<i class="fa fa-angle-right"></i></a>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12 ">
                                    <p class="ps-product__sharing">Share with:<a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-twitter"></i></a></p>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>