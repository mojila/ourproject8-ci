    <div class="page-wrap">
        <!-- Heros-->
        <div class="ps-section--hero pt-100 pb-100">
            <div class="ps-section__content text-center">
                <h3 class="ps-section__title">OUR PROJECT 8</h3>
                <div class="ps-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo base_url('home/product'); ?>">Home</a></li>
                        <li class="active">Product</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="ps-section--page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">
                        <div class="ps-shop-listing pt-50 pb-40">
                            <div class="ps-shop">
                            <div class="ps-product--list ps-product--list-large">
                                    <?php
                                        if(isset($jumlah)) {
                                            if($jumlah == 0) {
                                                echo '<script>
                                                    alert("Tidak Ditemukan");
                                                    window.location = "'.base_url('home/product').'";
                                                </script>';
                                            } else {
                                                foreach($product as $p) {
                                                    echo '
                                                    <div class="ps-product__thumbnail">
                                                    <a class="ps-product__overlay" href="'.base_url('home/product_detail/').$p->kode.'"></a>
                                                    ';
                                                    foreach($gambar_produk as $g) {
                                                        if($g->kode_produk == $p->kode) {
                                                            if($g->urutan == 1) {
                                                                echo '<img src="'.base_url('dist/img/').$g->file.'" alt="">';
                                                            }
                                                        }
                                                    }
                                                    echo '
                                                    </div>
                                                    <div class="ps-product__content">
                                                    <h4 class="ps-product__title"><a href="'.base_url('home/product_detail/').$p->kode.'">'.$p->nama.'</a></h4>
                                                    <select class="ps-rating">
                                                    ';
                                                    $bintang_off = 5;
                                                    $bintang_on = $p->bintang;
                                                    $bintang_sisa = $bintang_off - $bintang_on;
                                                    for($b = 1; $b <= $bintang_on; $b++){
                                                        echo '<option value="1">'.$b.'</option>';
                                                    }
                                                    if($bintang_sisa != 0){
                                                        for($c = $bintang_sisa; $c <= $bintang_off; $c++) {
                                                            echo '<option value="5">'.$c.'</option>';
                                                        }
                                                    }
                                                    echo '
                                                        </select>
                                                            <p class="ps-product__price">
                                                                Keterangan
                                                            </p>
                                                            '.$p->keterangan.'
                                                            <footer class="ps-product__footer clearfix">
                                                                <div class="row">
                                                                    <div class="col col-md-12">
                                                                        <a class="ps-btn ps-btn--sm" href="'.base_url('home/product_detail/').$p->kode.'">Lihat Detail<i class="fa fa-angle-right"></i></a>
                                                                        <a class="ps-btn ps-btn--sm" style="background: #00B833 !important;" href="https://line.me/R/ti/p/%40ourproject8"><img src="https://media.line.me/img/web/lineit_select_line_icon_02.png" alt="" height="16"> Line</a>
                                                                        <a class="ps-btn ps-btn--sm" style="background: #00E676 !important;" href="https://api.whatsapp.com/send?phone=6281249647753&amp;text=Saya%20Mau%20Order%20|%20'.base_url('home/product_detail').$p->kode.'"><img src="http://diylogodesigns.com/blog/wp-content/uploads/2016/04/whatsapp-official-logo-png-download.png" alt="" height="16"> WA</a>
                                                                    </div>
                                                                </div>
                                                            </footer>
                                                        </div>
                                                    </div>
                                                    ';
                                                }
                                            }
                                        }
                                    ?>
                            </div>
                            <!-- <div class="ps-pagination">
                                <ul class="pagination">
                                    <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-pull-9 col-md-pull-9">
                        <div class="ps-sidebar">
                            <aside class="ps-widget ps-widget--sidebar ps-widget--search">
                                <form method="post" action="<?php echo base_url('home/search'); ?>">
                                    <input name="keyword" class="form-control" type="text" placeholder="Ketikkan nama produk">
                                    <button type="submit"><i class="ps-icon--search"></i></button>
                                </form>
                            </aside>
                            <aside class="ps-widget ps-widget--sidebar ps-widget--best-seller">
                                <div class="ps-widget__header">
                                    <h3 class="ps-widget__title">CATEGORY</h3>
                                </div>
                                <div class="ps-widget__content">
                                    <ul class="ps-list--circle">
                                        <li class="current"><a href="<?php echo base_url('home/product'); ?>"><span class="circle"></span>Semua Produk</a></li>
                                        <?php 
                                            foreach($kategori as $k) {
                                                echo '
                                                    <li><a href="'.base_url('home/category/').$k->nama.'"><span class="circle"></span>'.$k->nama.'</a></li>
                                                ';
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    