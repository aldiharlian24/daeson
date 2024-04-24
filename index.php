<!doctype html>
<?php
include "koneksi.php";
?>
<html lang="en">
<!-- Head -->
<head>
  <!-- Page Meta Tags-->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="">

  <!-- Custom Google Fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto"
    rel="stylesheet">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/logo.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/logo.png">
  <link rel="mask-icon" href="./assets/images/favicon/logo.png" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="./assets/css/theme.bundle.css" />

  <!-- Fix for custom scrollbar if JS is disabled-->
  <noscript>
    <style>
      /**
          * Reinstate scrolling for non-JS clients
          */
      .simplebar-content-wrapper {
        overflow: auto;
      }
    </style>
  </noscript>

  <!-- Page Title -->
  <title>DAESON | Waskat Karya Metal</title>

</head>
<body class="">

    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white flex-column border-0  ">
        <div class="container-fluid">
            <div class="w-100">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
    
                    <!-- Logo-->
                    <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 order-0" href="./index.php">
                        <div class="d-flex align-items-center">
                            <img src ="./assets/images/favicon/logopjg.png" svg class="f-w-60" viewBox="0 0 77.53 72.26"><path d="M10.43,54.2h0L0,36.13,10.43,18.06,20.86,0H41.72L10.43,54.2Zm67.1-7.83L73,54.2,68.49,62,45,48.47,31.29,72.26H20.86l-5.22-9L52.15,0H62.58l5.21,9L54.06,32.82,77.53,46.37Z" fill="currentColor" fill-rule="evenodd"/></svg>
                        </div>
                    </a>
                    <!-- / Logo-->
    
                    <!-- Navbar Icons-->
                    <ul class="list-unstyled mb-0 d-flex align-items-center order-1 order-lg-2 nav-sidelinks">
    
                        <!-- Mobile Nav Toggler-->
                        <li class="d-lg-none">
                            <span class="nav-link text-body d-flex align-items-center cursor-pointer" data-bs-toggle="collapse"
                                data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                                aria-label="Toggle navigation"><i class="ri-menu-line ri-lg me-1"></i> Menu</span>
                        </li>
                        <!-- /Mobile Nav Toggler-->
    
                        <!-- Navbar Search--
                        <li class="d-none d-sm-block">
                            <span class="nav-link text-body search-trigger cursor-pointer">Cari</span>
    
                            <!-- Search navbar overlay-->
                            <div class="navbar-search d-none">
                                <div class="input-group mb-3 h-100">
                                    <span class="input-group-text px-4 bg-transparent border-0"><i
                                            class="ri-search-line ri-lg"></i></span>
                                    <input type="text" class="form-control text-body bg-transparent border-0"
                                        placeholder="Enter your search terms...">
                                    <span
                                        class="input-group-text px-4 cursor-pointer disable-child-pointer close-search bg-transparent border-0"><i
                                            class="ri-close-circle-line ri-lg"></i></span>
                                </div>
                            </div>
                            <div class="search-overlay"></div>
                            <!-- / Search navbar overlay-->
    
                        </li>
                        <!-- /Navbar Search-->
    
                        <!-- Navbar Login-->
                        <li class="ms-1 d-none d-lg-inline-block">
                            <a class="nav-link text-body" class="tombollogin" href="./login.php" id="alerta">
                                VISIT WEB
                            </a>
                            <script>
                                    document.getElementById("alerta").addEventListener("click", function() {
                                        alert('Login Terlebih Dahulu Untuk Bisa Mengakses');
                                    });
                                  </script>
                        </li>
                        <li class="ms-1 d-none d-lg-inline-block">
                            <a class="nav-link text-body" class="tombollogin" href="./login.php">
                                LOGIN
                            </a>
                        </li>
                        <li class="ms-1 d-none d-lg-inline-block">
                            <a class="nav-link text-body" class="tombollogin" href="./register.php">
                                SIGN UP
                            </a>
                        </li>
                        <!-- /Navbar Login-->
    
                        <!-- Navbar Cart Icon-
                        <li class="ms-1 d-inline-block position-relative dropdown-cart">
                            <button class="nav-link me-0 disable-child-pointer border-0 p-0 bg-transparent text-body"
                                type="button">
                                Keranjang
                            </button>
                            <div class="cart-dropdown dropdown-menu">
                            
                                <!-- Cart Header-
                                <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-4">
                                    <h6 class="fw-bolder m-0">Keranjang</h6>
                                    <i class="ri-close-circle-line text-muted ri-lg cursor-pointer btn-close-cart"></i>
                                </div>
                                <!-- / Cart Header-->
                            
                                <!-- Cart Items-->
                                <div>
                            
                                    <!-- Cart Product-
                                    <div class="row mx-0 py-4 g-0 border-bottom">
                                        <div class="col-2 position-relative">
                                            <picture class="d-block ">
                                                <img class="img-fluid" src="./assets/images/products/product-cart-1.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                            </picture>
                                        </div>
                                        <div class="col-9 offset-1">
                                            <div>
                                                <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                    Nike Air VaporMax 2021
                                                    <i class="ri-close-line ms-3"></i>
                                                </h6>
                                                <span class="d-block text-muted fw-bolder text-uppercase fs-9">Size: 9 / Qty: 1</span>
                                            </div>
                                            <p class="fw-bolder text-end text-muted m-0">$85.00</p>
                                        </div>
                                    </div>
                                    <!-- Cart Product--
                                    <div class="row mx-0 py-4 g-0 border-bottom">
                                        <div class="col-2 position-relative">
                                            <picture class="d-block ">
                                                <img class="img-fluid" src="./assets/images/products/product-cart-2.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                            </picture>
                                        </div>
                                        <div class="col-9 offset-1">
                                            <div>
                                                <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                    Nike ZoomX Vaporfly
                                                    <i class="ri-close-line ms-3"></i>
                                                </h6>
                                                <span class="d-block text-muted fw-bolder text-uppercase fs-9">Size: 11 / Qty: 1</span>
                                            </div>
                                            <p class="fw-bolder text-end text-muted m-0">$125.00</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cart Items-->
                            
                                <!-- Cart Summary--
                                <div>
                                    <div class="pt-3">
                                        <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-start mb-4 mb-md-2">
                                            <div>
                                                <p class="m-0 fw-bold fs-5">Grand Total</p>
                                                <span class="text-muted small">Inc $45.89 sales tax</span>
                                            </div>
                                            <p class="m-0 fs-5 fw-bold">$422.99</p>
                                        </div>
                                    </div>
                                    <a href="./cart.php" class="btn btn-outline-dark w-100 text-center mt-4" role="button">View Cart</a>
                                    <a href="./checkout.php" class="btn btn-dark w-100 text-center mt-2" role="button">Proceed To Checkout</a>
                                </div>
                                <!-- / Cart Summary-->
                              </div>
                            
    
                        </li>
                        <!-- /Navbar Cart Icon-->
    
                    </ul>
                    <!-- Navbar Icons-->                
    
                    <!-- Main Navigation-->
                    <div class="flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1 order-2 order-lg-1"
                        id="navbarNavDropdown">
    
                        <!-- Menu-
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item dropdown dropdown position-static">
                              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                KATALOG
                              </a>
                                <!-- Menswear dropdown menu-->
                                <div class="dropdown-menu dropdown-megamenu">
                                  <div class="container-fluid">
                                      <div class="row g-0 g-lg-3">
                                          <!-- Menswear Dropdown Menu Links Section-->
                                          <div class="col col-lg-8 py-lg-5">
                                              <div class="row py-3 py-lg-0 flex-wrap gx-4 gy-6">
                                                  <!-- menu row-->
                                                  <div class="col">
                                                      <h6 class="dropdown-heading">Katalog</h6>
                                                      <ul class="list-unstyled">
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Komponen Pintu Besi Garasi</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Pintu Besi Sliding</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Pintu Besi Folding</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Pintu Tunggal / Double</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category.php">View All</a></li>
                                                      </ul>
                                                  </div>
                                                  <!-- / menu row-->
                                              
                                                  <!-- menu row-
                                                  <div class="col">
                                                      <h6 class="dropdown-heading">Katalog</h6>
                                                      <ul class="list-unstyled">
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Insulated Jackets</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Bodywarmers</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Parkas</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Baselayers & Thermals</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Winter Hats</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category.php">View All</a></li>
                                                      </ul>
                                                  </div>
                                                  <!-- / menu row-->
                                              
                                                  <!-- menu row--
                                                  <div class="d-none d-xxl-block col">
                                                      <h6 class="dropdown-heading">Footwear</h6>
                                                      <ul class="list-unstyled">
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Lifestyle & Casual</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Walking Shoes</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Running Shoes</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Military Boots</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Fabric Walking Boots</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category.php">View All</a></li>
                                                      </ul>
                                                  </div>
                                                  <!-- / menu row-->  
                                                  
                                                  <!-- menu row--
                                                  <div class="col">
                                                      <h6 class="dropdown-heading text-danger">Special Promo</h6>
                                                      <ul class="list-unstyled">
                                                          <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.php">Insulated Jackets</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.php">Bodywarmers</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.php">Parkas</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.php">Baselayers & Thermals</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.php">Winter Hats</a></li>
                                                          <li class="dropdown-list-item"><a class="dropdown-item text-danger dropdown-link-all" href="./category.php">View All</a></li>
                                                      </ul>
                                                  </div>
                                                  <!-- / menu row-->      
                                              </div>
                                              
                                              <div class="align-items-center justify-content-between mt-5 d-none d-lg-flex">
                                                  <div class="me-5 f-w-20">
                                                      <a class="d-block" href="./category.php">
                                                          <picture>
                                                              <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logopjg.png" alt="">
                                                          </picture>
                                                      </a>
                                                  </div>
                                                  <div class="me-5 f-w-20">
                                                      <a class="d-block" href="./category.php">
                                                          <picture>
                                                              <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logopjg.png" alt="">
                                                          </picture>
                                                      </a>
                                                  </div>
                                                  <div class="me-5 f-w-20">
                                                      <a class="d-block" href="./category.php">
                                                          <picture>
                                                              <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logopjg.png" alt="">
                                                          </picture>
                                                      </a>
                                                  </div>
                                                  <div class="me-5 f-w-20">
                                                      <a class="d-block" href="./category.php">
                                                          <picture>
                                                              <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logopjg.png" alt="">
                                                          </picture>
                                                      </a>
                                                  </div>
                                                  <div class="me-5 f-w-20">
                                                      <a class="d-block" href="./category.php">
                                                          <picture>
                                                              <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logopjg.png" alt="">
                                                          </picture>
                                                      </a>
                                                  </div>
                                                  <div class="me-5 f-w-20">
                                                      <a class="d-block" href="./category.php">
                                                          <picture>
                                                              <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logopjg.png" alt="">
                                                          </picture>
                                                      </a>
                                                  </div>
                                              </div>                  </div>
                                          <!-- /Menswear Dropdown Menu Links Section-->
                        
                                          <!-- Menswear Dropdown Menu Images Section-->
                                          <div class="col-lg-4 d-none d-lg-block">
                                              <div class="vw-50 border-start h-100 position-absolute"></div>
                                              <div class="py-lg-5 position-relative z-index-10 px-lg-4">
                                                  <div class="row g-4">
                                                      <div class="col-12 col-md-6">
                                                          <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                              <picture class="w-100 d-block mb-2 mx-auto">
                                                                  <img class="w-100 rounded" title="" src="./assets/images/banners/katalog1.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                                              </picture>
                                                              <a class="fw-bolder link-cover" href="./category.php">Komponen Pintu Besi Garasi</a>
                                                          </div>
                                                      </div>
                                                      <div class="col-12 col-md-6">
                                                          <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                              <picture class="w-100 d-block mb-2 mx-auto">
                                                                  <img class="w-100 rounded" title="" src="./assets/images/banners/katalog2.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                                              </picture>
                                                              <a class="fw-bolder link-cover" href="./category.php">Pintu Besi Sliding</a>
                                                          </div>
                                                      </div>
                                                      <div class="col-12 col-md-6">
                                                          <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                              <picture class="w-100 d-block mb-2 mx-auto">
                                                                  <img class="w-100 rounded" title="" src="./assets/images/banners/katalog3.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                                              </picture>
                                                              <a class="fw-bolder link-cover" href="./category.php">Pintu Besi Folding</a>
                                                          </div>
                                                      </div>
                                                      <div class="col-12 col-md-6">
                                                          <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                              <picture class="w-100 d-block mb-2 mx-auto">
                                                                  <img class="w-100 rounded" title="" src="./assets/images/banners/katalog4.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                                              </picture>
                                                              <a class="fw-bolder link-cover" href="./category.php">Pintu Tunggal/Double</a>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <a href="./category.php" class="btn btn-link p-0 fw-bolder text-link-border mt-5 text-dark mx-auto d-table">Visit More</a>
                                              </div>
                                          </div>
                                          <!-- Menswear Dropdown Menu Images Section-->
                                      </div>
                                  </div>
                              </div>
                              <!-- / Menswear dropdown menu-->
                            <!--</li>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Pages
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="./index.php">Home</a></li>
                                  <li><a class="dropdown-item"href="./login.php" id="alerta">Katalog</a></li>
                                  <script>
                                    document.getElementById("alerta").addEventListener("click", function() {
                                        alert('Login Terlebih Dahulu Untuk Bisa Mengakses');
                                    });
                                  </script>-->
                                  <!--<li><a class="dropdown-item" href="./product.php">Produk</a></li>-->
                                  <!--<li><a class="dropdown-item" href="./cart.php">Keranjang</a></li>-->
                                  <!--<li><a class="dropdown-item" href="./checkout.php">Pesan</a></li>--
                                  <li><a class="dropdown-item" href="./login.php">Masuk</a></li>
                                  <li><a class="dropdown-item" href="./register.php">Daftar</a></li>
                                  <!--<li><a class="dropdown-item" href="./forgotten-password.php">Lupa Kata Sandi</a></li>-->
                                </ul>
                              </li>
                          </ul>                    <!-- / Menu-->
    
                    </div>
                    <!-- / Main Navigation-->
                
                </div>
            </div>
        </div>
    </nav>
    <!-- / Navbar-->    <!-- / Navbar-->

    <!-- Main Section-->
    <section class="mt-0 overflow-hidden ">
        <!-- Page Content Goes Here -->

        <!-- / Top banner -->
        <section class="vh-75 vh-lg-60 container-fluid rounded overflow-hidden" data-aos="fade-in">
            <!-- Swiper Info -->
            <div class="swiper-container overflow-hidden rounded h-100 bg-light" data-swiper data-options='{
              "spaceBetween": 0,
              "slidesPerView": 1,
              "effect": "fade",
              "speed": 1000,
              "loop": true,
              "parallax": true,
              "observer": true,
              "observeParents": true,
              "lazy": {
                "loadPrevNext": true
                },
                "autoplay": {
                  "delay": 5000,
                  "disableOnInteraction": false
              },
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
                }
              }'>
              <div class="swiper-wrapper">
            
                <!-- Slide-->
                <div class="swiper-slide position-relative h-100 w-100">
                  <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                    <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100"
                      style=" will-change: transform; background-image: url(./assets/images/banners/pintubesi.jpeg)">
                    </div>
                  </div>
                  <div
                    class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                    <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">SIGN UP NOW AND JOIN OUR NEWS LETTER</p>
                    <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                      <span class="text-outline-light">WASKAT</span> KARYA METAL</h2>
                    <div data-swiper-parallax-y="-25">
                      <a href="login.php" class="btn btn-psuedo text-white" role="button">SIGN UP</a>
                    </div>
                  </div>
                </div>
                <!-- /Slide-->
            
                <!-- Slide-->
                <div class="swiper-slide position-relative h-100 w-100">
                  <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                    <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100"
                      style=" will-change: transform; background-image: url(./assets/images/banners/pintubesi2.jpeg)">
                    </div>
                  </div>
                  <div
                    class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                    <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">SIGN UP NOW AND JOIN OUR NEWS LETTER</p>
                    <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                      WASKAT <span class="text-outline-light">KARYA METAL</span></h2>
                    <div data-swiper-parallax-y="-25">
                      <a href="login.php" class="btn btn-psuedo text-white" role="button">SIGN UP NOW</a>
                    </div>
                  </div>
                </div>
                <!--/Slide-->
            
                <!-- Slide-->
                <div class="swiper-slide position-relative h-100 w-100">
                  <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                    <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100"
                      style=" will-change: transform; background-image: url(./assets/images/banners/pintubesi3.jpeg)">
                    </div>
                  </div>
                  <div
                    class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                    <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">SIGN UP NOW AND JOIN OUR NEWS LETTER</p>
                    <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                      WASKAT <span class="text-outline-light">KARYA METAL</span></h2>
                    <div data-swiper-parallax-y="-25">
                      <a href="login.php" class="btn btn-psuedo text-white" role="button">SIGN UP NOW</a>
                    </div>
                  </div>
                </div>
                <!-- /Slide-->
            
                <!--Slide-->
                <div class="swiper-slide position-relative h-100 w-100">
                  <div class="w-100 h-100 overflow-hidden position-absolute z-index-1 top-0 start-0 end-0 bottom-0">
                    <div class="w-100 h-100 bg-img-cover bg-pos-center-center overflow-hidden" data-swiper-parallax="-100"
                      style=" will-change: transform; background-image: url(./assets/images/banners/pintubesi4.jpeg)">
                    </div>
                  </div>
                  <div
                    class="container position-relative z-index-10 d-flex h-100 align-items-start flex-column justify-content-center">
                    <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">SIGN UP NOW AND JOIN OUR NEWS LETTER</p>
                    <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                      <span class="text-outline-light">WASKAT</span>KARYA METAL</h2>
                    <div data-swiper-parallax-y="-25">
                      <a href="login.php" class="btn btn-psuedo text-white" role="button">SIGN UP NOW</a>
                    </div>
                  </div>
                </div>
                <!--/Slide-->
            
              </div>
            
              <div class="swiper-pagination swiper-pagination-bullet-light"></div>
            
            </div>
            <!-- / Swiper Info-->        </section>
        <!--/ Top Banner-->

        <!-- Featured Brands-->
        <!--/ Featured Brands-->

        <div class="container-fluid">

            <!-- Featured Categories-->
            <div class="m-0">
                    <!-- Swiper Latest -->
                    <!--<div class="swiper-container overflow-hidden overflow-lg-visible"
                      data-swiper
                      data-options='{
                        "spaceBetween": 25,
                        "slidesPerView": 1,
                        "observer": true,
                        "observeParents": true,
                        "breakpoints": {     
                          "540": {
                            "slidesPerView": 1,
                            "spaceBetween": 0
                          },
                          "770": {
                            "slidesPerView": 2
                          },
                          "1024": {
                            "slidesPerView": 3
                          },
                          "1200": {
                            "slidesPerView": 4
                          },
                          "1500": {
                            "slidesPerView": 5
                          }
                        },   
                        "navigation": {
                          "nextEl": ".swiper-next",
                          "prevEl": ".swiper-prev"
                        }
                      }'>
                      <div class="swiper-wrapper">
                          <div class="swiper-slide align-self-stretch bg-transparent h-auto">
                            <div class="me-xl-n4 me-xxl-n5" data-aos="fade-up" data-aos-delay="000">
                                <picture class="d-block mb-4 img-clip-shape-one">
                                    <img class="w-100" title="" src="./assets/images/banners/katalog1.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                </picture>
                                <p class="title-small mb-2 text-muted">Paket Komponen</p>
                                <h4 class="lead fw-bold">Lipat D800</h4>
                                <a href="./category.php" class="btn btn-psuedo align-self-start">Shop Now</a>
                            </div>
                          </div>
                          <div class="swiper-slide align-self-stretch bg-transparent h-auto">
                            <div class="me-xl-n4 me-xxl-n5" data-aos="fade-up" data-aos-delay="100">
                                <picture class="d-block mb-4 img-clip-shape-one">
                                    <img class="w-100" title="" src="./assets/images/banners/katalog4.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                </picture>
                                <p class="title-small mb-2 text-muted">Paket Komponen</p>
                                <h4 class="lead fw-bold">Tikung D300</h4>
                                <a href="./category.php" class="btn btn-psuedo align-self-start">Shop Now</a>
                            </div>
                          </div>
                          <div class="swiper-slide align-self-stretch bg-transparent h-auto">
                            <div class="me-xl-n4 me-xxl-n5" data-aos="fade-up" data-aos-delay="200">
                                <picture class="d-block mb-4 img-clip-shape-one">
                                    <img class="w-100" title="" src="./assets/images/banners/katalog2.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                </picture>
                                <p class="title-small mb-2 text-muted">Paket Komponen</p>
                                <h4 class="lead fw-bold">Pintu Besi</h4>
                                <a href="./category.php" class="btn btn-psuedo align-self-start">Shop Now</a>
                            </div>
                          </div>
                          <div class="swiper-slide align-self-stretch bg-transparent h-auto">
                            <div class="me-xl-n4 me-xxl-n5" data-aos="fade-up" data-aos-delay="300">
                                <picture class="d-block mb-4 img-clip-shape-one">
                                    <img class="w-100" title="" src="./assets/images/banners/pintubesi.jpeg" alt="Aldi Harlian Wijaya">
                                </picture>
                                <p class="title-small mb-2 text-muted">Model Pintu Besi</p>
                                <h4 class="lead fw-bold">Minimalis</h4>
                                <a href="./category.php" class="btn btn-psuedo align-self-start">Shop Now</a>
                            </div>
                          </div>
                          <div class="swiper-slide align-self-stretch bg-transparent h-auto">
                            <div class="me-xl-n4 me-xxl-n5" data-aos="fade-up" data-aos-delay="400">
                                <picture class="d-block mb-4 img-clip-shape-one">
                                    <img class="w-100" title="" src="./assets/images/banners/pintubesi2.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                </picture>
                                <p class="title-small mb-2 text-muted">Model Pintu Besi</p>
                                <h4 class="lead fw-bold">Kaca Jalusi Panel</h4>
                                <a href="./category.php" class="btn btn-psuedo align-self-start">Shop Now</a>
                            </div>
                          </div>
                          <div class="swiper-slide align-self-stretch bg-transparent h-auto">
                            <div class="me-xl-n4 me-xxl-n5" data-aos="fade-up" data-aos-delay="500">
                                <picture class="d-block mb-4 img-clip-shape-one">
                                    <img class="w-100" title="" src="./assets/images/banners/pintubesi3.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                </picture>
                                <p class="title-small mb-2 text-muted">Model Pintu Besi</p>
                                <h4 class="lead fw-bold">Jalusi Panel</h4>
                                <a href="./category.php" class="btn btn-psuedo align-self-start">Shop Now</a>
                            </div>
                          </div>
                      </div>
                    
                      <div class="swiper-btn swiper-prev swiper-disabled-hide swiper-btn-side btn-icon bg-white text-dark ms-3 shadow mt-n5"><i class="ri-arrow-left-s-line "></i></div>
                      <div class="swiper-btn swiper-next swiper-disabled-hide swiper-btn-side swiper-btn-side-right btn-icon bg-white text-dark me-3 shadow mt-n5"><i class="ri-arrow-right-s-line ri-lg"></i></div>
                    
                    </div>
                    <!-- / Swiper Latest-->                <!-- SVG Used for Clipath on featured images above-->
                <svg width="0" height="0">
                  <defs>
                  <clipPath id="svg-slanted-one" clipPathUnits="objectBoundingBox">
                      <path d="M0.822,1 H0.016 a0.015,0.015,0,0,1,-0.016,-0.015 L0.158,0.015 A0.016,0.015,0,0,1,0.173,0 L0.984,0 a0.016,0.015,0,0,1,0.016,0.015 L0.837,0.985 A0.016,0.015,0,0,1,0.822,1"></path>
                  </clipPath>
                  </defs>
                </svg>            </div>
            <!-- /Featured Categories-->

            <!-- Homepage Intro-->
            
    <!-- Footer -->
        <!-- / Footer-->


    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>
</body>

</html>