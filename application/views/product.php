<div class="ps-section--hero pb-10">
  <img src="<?php echo base_url('dist/img/hero/01.jpg'); ?>" alt="">
  <div class="ps-section__content text-center">
    <h3 class="ps-section__title">OURPROJECT8</h3>
    <div class="ps-breadcrumb">
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">Product</li>
      </ol>
    </div>
  </div>
</div>
<!-- Page Content -->
<div class="ps-section--page">
  <div class="container">
    <div class="row">
      <!-- Main -->
      <div class="col col-lg-9 col-md-9 col-sm-12 col-xs-12 col-lg-push-3 col-md-push-3">
        <div class="ps-shop-listing pt-80 pb-40">
          <!-- Fitur -->
          <div class="row">
            <?php
                foreach($promo as $pr) {
                  echo '<div class="col col-md-4 col-xs-6 pt-10">
                      <img src="'.base_url('dist/img/').$pr->gambar.'" alt="Gagal Dimuat" height="160" class="img-responsive pad" />
                  </div>';
                }
            ?>
          </div>
          <hr>
          <div class="row">
            <!-- product-list -->
            <div class="ps-shop">
              <!-- item -->
              <?php
                $icon = array(
                  'wa' => 'https://cdn.iconverticons.com/files/png/1c3a93787b4867ca_256x256.png',
                  'line' => 'https://media.line.me/img/web/lineit_select_line_icon_02.png'
                );

                foreach ($produk as $p) {
                  # code...
                  echo '
                    <div class="ps-product--list ps-product--list-large">
                      <div class="ps-product__thumbnail">
                        <a href="'.base_url('home/product_detail/').$p->kode.'" class="ps-product__overlay"></a>
                  ';
                  foreach ($gambar_produk as $g) {
                    # code...
                    if ($g->kode_produk == $p->kode) {
                      if ($g->urutan == 1) {
                        echo '<img src="'.base_url('dist/img/').$g->file.'" alt="">';
                      }
                    }
                  }
                  echo '
                      </div>
                      <div class="ps-product__content">
                        <h4 class="ps-product__title pt-20">'.$p->nama.'</h4>
                        <select class="ps-rating" name="">
                  ';
                  $bintang_off = 5;
                  $bintang_on = $p->bintang;
                  $bintang_sisa = $bintang_off - $bintang_on;
                  for ($b=1; $b <= $bintang_on; $b++) {
                    # code...
                    echo '<option value="1">'.$b.'</option>';
                  }
                  if ($bintang_sisa != 0) {
                    for ($c=$bintang_sisa; $c <= $bintang_off; $c++) {
                      # code...
                      echo '<option value="5">'.$c.'</option>';
                    }
                  }
                  echo '
                        </select>
                        <p class="ps-product__price">Keterangan</p>
                        <p>Isi dari keterangan</p>
                        <footer class="ps-product__footer clearfix">
                          <a href="'.base_url('home/product_detail/').$p->kode.'" class="ps-btn ps-btn--sm">Detail <i class="fa fa-angle-right"></i></a>
                          <ul class="ps-product__action">
                            <li><a data-tooltip="Line" style="background: #00B833 !important;" href="https://line.me/R/ti/p/%40ourproject8"><img src="'.$icon['line'].'" alt="" height="32" style="margin-top: 0.65rem;"></a></li>
                            <li><a data-tooltip="Whatsapp" style="background: #0F9D58 !important;" href="https://api.whatsapp.com/send?phone=6281249647753&amp;text=Saya%20Mau%20Order%20|%20'.base_url('home/product_detail/').$p->kode.'"><img src="'.$icon['wa'].'" alt="" height="32" style="margin-top: 0.65rem;"></a></li>
                          </ul>
                        </footer>
                      </div>
                    </div>
                    <hr>
                  ';
                }
              ?>
              <!-- /item -->
            </div>
          </div>
          <!-- /product-list -->
          <!-- pagination -->
          <div class="row">
            <div class="ps-pagination">
              <ul class="pagination">
                  <?php
                    if ((!isset($kategori['pilihan'])) || (!isset($pencarian['keyword']))) {
                      $total_halaman = round($jumlah_produk / 10 + (($jumlah_produk / 10) > round($jumlah_produk / 10) ? 1:0));

                      if (isset($halaman)) {
                        if ($halaman > 1) {
                          echo '<li><a href="'.base_url('/produk/halaman/').($halaman - 1).'"><i class="fa fa-arrow-left"></i></a></li>';
                        }
                      }
                      // iterasi halaman
                      echo '<li class="active"><a href="'.base_url('produk').'">1</a></li>';
                      if ($total_halaman > 1) {
                        for ($pg = 1; $pg < $total_halaman; $pg++) {
                          echo '<li class="'.($halaman == ($pg+1) ? 'active':'').'"><a href="'.base_url('produk/halaman/').($pg+1).'">'.($pg+1).'</a></li>';
                        }
                      }

                      if ($jumlah_produk > 10) {
                        echo '<li><a href="'.base_url('/produk/halaman/').($halaman + 1).'"><i class="fa fa-arrow-right"></i></a></li>';
                      }
                    }
                  ?>
              </ul>
            </div>
          </div>
          <!-- /pagination -->
        </div>
      </div>
      <!-- Sidebar -->
      <div class="col col-lg-3 col-md-3 col-sm-12 col-xs-12 col-lg-pull-9 col-md-pull-9">
        <div class="ps-sidebar">
          <!-- Search -->
          <aside class="ps-widget ps-widget--sidebar ps-widget--search">
            <form class="" action="<?php echo base_url('produk/pencarian'); ?>" method="post">
              <input class="form-control" style="color: #444;" type="text" name="keyword" value="<?php echo (isset($pencarian['keyword']) ? $pencarian['keyword']:'') ?>" placeholder="Pencarian ...">
              <button type="submit"><i class="ps-icon--search"></i></button>
            </form>
          </aside>
          <aside class="ps-widget ps-widget--sidebar ps-widget--category">
            <div class="ps-widget__header">
                <h3 class="ps-widget__title">Kategori</h3>
            </div>
            <div class="ps-widget__content">
              <ul class="ps-list--circle">
                <li class="<?php echo (isset($kategori['pilihan']) ? '':'current'); ?>"><a href="<?php echo base_url('/produk'); ?>"><span class="circle"></span> Semua Produk</a></li>
                <?php
                  foreach ($kategori['item'] as $k ) {
                    echo '<li class="'.(isset($kategori['pilihan']) && $kategori['pilihan'] == $k->id ? 'current':'').'"><a href="'.base_url('/produk/kategori/').$k->id.'"><span class="circle"></span> '.$k->nama.'</a></li>';
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
