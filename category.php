<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Cake&#39;s Dream is Beautiful Template " name="description">
    <meta content="" name="author">
    <link href="assets/images/favicon-32x32.png" rel="shortcut icon">
    <title>Cake's Dreams</title>
    <link href="assets/stylesheets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/stylesheets/css/font-family.css" rel="stylesheet">
    <link href="assets/stylesheets/css/responsive.css" rel="stylesheet">
    <link href="assets/stylesheets/css/slick.css" rel="stylesheet">
    <link href="assets/stylesheets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/stylesheets/css/style.css" rel="stylesheet">
    <link href="assets/stylesheets/css/animate.css" rel="stylesheet">
    <link href="assets/javascripts/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css">
    <link href="assets/stylesheets/css/global.css" rel="stylesheet">
    <link href="assets/stylesheets/css/effect2.css" rel="stylesheet" type="text/css">
    <script src="assets/javascripts/modernizr.custom.js"></script>
  </head>
  <body class="demo-1">
    <div class="ip-container" id="ip-container">
      <!--initial header-->
      <header class="ip-header">
        <div class="ip-loader">
          <svg class="ip-inner" height="60px" viewbox="0 0 80 80" width="60px"><path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"></path><path class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z" id="ip-loader-circle"></path></svg>
        </div>
      </header>
      <!--main content-->
      <div class="ip-main">
        <div class="top-highlight hide">
          &nbsp;
        </div>
        <!-- Start Header Cake -->
        <section class="header-wrapper">
          <header class="wrap-header purple-top-dot">
            <div class="top-absolute">
              <div class="top-header">
                <div class="container">
                  <div class="navbar-header visible-xs">
                    <button class="navbar-toggle toggle-cake show-menu"><span class="sr-only">Toggle Navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand navbar-cake" href="#"><img alt="Logo-White" src="assets/images/logo-100.png"></a>
                  </div>
                  <nav>
                    <ul class="header-nav hidden-xs">
                      <li>
                        <a href="index.php">Home</a>
                      </li>
                      <li>
                        <a href="shop.php?page=1">Shop</a>
                      </li>
                      <li class="pad-top-0i">
                        <img alt="Logo-White" src="assets/images/logo-150.png">
                      </li>
                      <li>
                        <a class="show-menu" href="javascript:void(0);">Themes</a>
                      </li>
                      <li>
                        <a href="blog-center.php">Blog</a>
                      </li>
                    </ul>
                  </nav>
                  <!-- Start Mega Menu Cake -->
                  <div class="mega-menu hide">
                    <div class="tittle-mega">
                      <h4>
                        - Mega Menu -
                      </h4>
                    </div>
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-4">
                          <ul class="list-mega">
                            <li class="bottom-red-border">
                              Blog
                            </li>
                            <li>
                              <a href="blog.php">Blog Left Content</a>
                            </li>
                            <li>
                              <a href="blog-right-content.php">Blog Right Content</a>
                            </li>
                            <li>
                              <a href="blog-center.php">Blog Center</a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-sm-4">
                          <ul class="list-mega">
                            <li class="bottom-red-border">
                              Gallery
                            </li>
                            <li>
                              <a href="gallery.php">Gallery 3 Column</a>
                            </li>
                            <li>
                              <a href="gallery-4-column.php">Gallery 4 Column</a>
                            </li>
                            <li>
                              <a href="gallery-dot.php">Gallery With Text</a>
                            </li>
                          </ul>
                        </div>
                        <div class="col-sm-4">
                          <ul class="list-mega">
                            <li class="bottom-red-border">
                              OTHER PAGE
                            </li>
                            <li>
                              <a href="chart-page.php">Chart Page</a>
                            </li>
                            <li>
                              <a href="product-details-page.php">Product Details</a>
                            </li>
                            <li>
                              <a href="privacy-policy.php">Privacy Policy</a>
                            </li>
                            <li>
                              <a href="terms-of-use.php">Terms Of Use</a>
                            </li>
                            <li>
                              <a href="404.php">404</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="div text-center">
                        <button class="btn btn-pink-cake mar-top-20 close-menu">Close Themes</button>
                      </div>
                    </div>
                  </div>
                  <!-- End Mega Menu Cake -->
                </div>
              </div>
              <div class="triangle">
                &nbsp;
              </div>
            </div>
            <div class="tittle-sub-top pad-top-150">
              <a href="index.php"><div class="container">
                Home</a>
                <h1>
                   /Details
                </h1>
                <h2>
                  Cake
                </h2>
              </div>
            </div>
          </header>
          <div class="purple-arrow">
            &nbsp;
          </div>
          <div class="chart-cake">
            <div class="container">
              <div class="row">
                <?php 
                  $id= $_GET["id"];
                  include 'connect_db.php';
                  $truyvan="SELECT sanpham.MaSP,sanpham.TenSP,sanpham.GIaSP,sanpham.ChiTietSP,sanpham.anh,loaisanpham.TenLoai FROM sanpham, loaisanpham WHERE sanpham.MaLoai=loaisanpham.MaLoai AND loaisanpham.MaLoai='$id'";
                  $result=mysqli_query($conn,$truyvan);
                  while($item=mysqli_fetch_assoc($result)){

                ?>

                <div class="col-sm-6">
                  <img alt="Cake-one" src="./hinhbanhngot/<?php echo $item['TenLoai'];?>/<?php echo $item['anh'];?>">
                </div>
                <div class="col-sm-6">
                  <div class="tittle-chart-cake">
                    <h1 class="pink-color">
                      <?php echo $item['TenSP'];?><span class="grey-color"><i><?php echo $item['TenLoai'];?></i></span>
                    </h1>
                  </div>
                  <div class="tittle-chart-cake mar-top-10">
                    <h1 class="pink-color">
                    <?php echo $item['GIaSP'];?> VNĐ
                    </h1>
                  </div>
                  <p class="mar-top-10 mar-btm-20">
                  <?php echo $item['ChiTietSP'];?>
                  </p>
                  <form action="chart-page.php" class="btn-inline">
                    <button class="btn btn-pink-cake mar-right-10">Add to Chart</button>
                  </form>
                  <form action="#" class="btn-inline">
                    <button formaction="product-details-page.php?id=<?php echo $item['MaSP'] ?>" formmethod="post" class="btn btn-grey-cake" >View Details</button>
                  </form>
                </div>
                <?php 
                }              
            ?>
              </div>
            </div>
          </div>
        </section>
        <!-- End Header Cake -->
        <div class="green-arrow">
          &nbsp;
        </div>
        <!-- Start Footer Cake -->
        <footer>
          <div class="triangle-no-animate">
            &nbsp;
          </div>
          <div class="container">
            <div class="abs-logo-footer">
              <img alt="Logo-Cake" src="assets/images/logo-150.png">
            </div>
            <div class="top-footer">
              <div class="row">
                <div class="col-sm-6">
                  <img alt="Logo-White" class="img-cake-center-res mar-btm-20" src="assets/images/logo-white.png">
                </div>
                <div class="col-sm-6 text-right">
                  <ul class="sosmed-cake">
                    <li>
                      <a href="javascript:void(0);">
                        <div class="center-sosmed">
                          <p class="icon icon-facebook">
                            &nbsp;
                          </p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0);">
                        <div class="center-sosmed">
                          <p class="icon icon-twitter">
                            &nbsp;
                          </p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0);">
                        <div class="center-sosmed">
                          <p class="icon icon-behance">
                            &nbsp;
                          </p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0);">
                        <div class="center-sosmed">
                          <p class="icon icon-dribbble">
                            &nbsp;
                          </p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0);">
                        <div class="center-sosmed">
                          <p class="icon icon-pinterest">
                            &nbsp;
                          </p>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="line-top-white mar-btm-20 mar-top-20">
              &nbsp;
            </div>
            <div class="content-about-footer">
              <!-- Column -->
              <div class="col-sm-4">
                <h4>
                  Cake's Dream
                </h4>
                <p class="mar-btm-20">
                  Cookie apple pie donut gingerbread <br>sweet roll pudding topping <br>marshmallow.<br>
                </p>
                <p class="mar-btm-20">
                  Jl Kalidam RT 05 RW 10 <br>Cimahi Selatan, Indonesia<br>
                </p>
                <p class="mar-btm-20">
                  Telp : <strong>085 327787266</strong>
                </p>
              </div>
              <!-- Column -->
              <div class="col-sm-4 hidden-xs">
                <ul class="list-picture-footer">
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/tag-1.jpg"><img alt="Img-sm-picture" class="img-100" src="assets/images/tag-1.jpg"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/tag-2.jpg"><img alt="Img-sm-picture" class="img-100" src="assets/images/tag-2.jpg"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/tag-3.jpg"><img alt="Img-sm-picture" class="img-100" src="assets/images/tag-3.jpg"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/tag-4.jpg"><img alt="Img-sm-picture" class="img-100" src="assets/images/tag-4.jpg"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/tag-5.jpg"><img alt="Img-sm-picture" class="img-100" src="assets/images/tag-5.jpg"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/tag-6.jpg"><img alt="Img-sm-picture" class="img-100" src="assets/images/tag-6.jpg"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/tag-7.jpg"><img alt="Img-sm-picture" class="img-100" src="assets/images/tag-7.jpg"></a>
                  </li>
                  <li>
                    <a class="fancybox" data-fancybox-group="contentgallery" href="assets/images/tag-8.jpg"><img alt="Img-sm-picture" class="img-100" src="assets/images/tag-8.jpg"></a>
                  </li>
                </ul>
                <div class="clear"></div>
                <p>
                  Cookie apple pie donut gingerbread <br>sweet roll pudding topping
                </p>
              </div>
              <!-- Column -->
              <div class="col-sm-4">
                <ul class="list-link-home">
                  <li>
                    <a href="shop.php">Shop</a>
                  </li>
                  <li>
                    <a href="gallery.php">Gallery</a>
                  </li>
                  <li>
                    <a href="privacy-policy.php">Privacy Policy</a>
                  </li>
                  <li>
                    <a href="terms-of-use.php">Terms Of Use</a>
                  </li>
                  <li>
                    <a href="blog-center.php">Blog</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="logo-dn">
              <img alt="Delip Nugraha" src="assets/images/dn.png">
            </div>
          </div>
        </footer>
        <!-- End Option Cake -->
      </div>
    </div>
    <script src="assets/javascripts/jquery.js"></script>
    <script src="assets/javascripts/fancybox/jquery.fancybox.pack.js"></script>
    <script src="assets/javascripts/slick.js"></script>
    <script src="assets/javascripts/wow/wow.js"></script>
    <script src="assets/javascripts/custom.js"></script>
    <script src="assets/javascripts/bootstrap.js"></script>
    <script src="assets/javascripts/classie.js"></script>
    <script src="assets/javascripts/pathLoader.js"></script>
    <script src="assets/javascripts/main.js"></script>
    <script type="text/javascript">
      new WOW().init();
    </script>
  </body>
</html>
