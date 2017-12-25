<div class="header--sidebar"></div>
    <header class="header" data-responsive="1199">  
        <nav class="navigation">
            <div class="container">
              <div class="menu-toggle"><span></span></div>
              <div class="navigation__left">
                  <ul class="menu menu--left">
                      <li class="<?php if(strtolower($page['judul']) == 'home'){ echo 'current'; } ?>"><a href="<?php echo base_url(); ?>">Home</a></li>
                      <li class="<?php if(strtolower($page['judul']) == 'about'){ echo 'current'; } ?>"><a href="<?php echo base_url('home/about'); ?>">About</a></li>
                      <li class="<?php if(strtolower($page['judul']) == 'product'){ echo 'current'; } ?>"><a href="<?php echo base_url('home/product'); ?>">Products</a></li>
                  </ul>
              </div>
              <a class="ps-logo" href="index-2.html"><img src="<?php echo base_url('dist/img/').$situs->logo; ?>" alt=""></a>
              <div class="navigation__right">
                  <ul class="menu menu--right">
                      <li><a href="#">Gallery</a></li>
                      <li><a href="#">How To Order</a></li>
                      <li><a href="#">Promo</a></li>
                  </ul>
              </div>
            </div>
          </nav>
    </header>
    <div id="back2top"><i class="fa fa-angle-up"></i></div>