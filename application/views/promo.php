    <!-- Heros-->
    <div class="ps-section--hero pt-100 pb-100">
        <div class="ps-section__content text-center">
            <h3 class="ps-section__title">OUR PROJECT 8</h3>
            <div class="ps-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index-2.html">Home</a></li>
                    <li class="active">PROMO</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container pb-50">
        <?php 
            foreach($promo as $p) {
                echo '
                <div class="col col-md-4 col-xs-6 pt-50">
                    <center><a href="#"><img src="'.base_url('dist/img/').$p->gambar.'" alt="" style=" border-radius: 10px;"></a></center>
                </div>
                ';
            }
        ?>
    </div>