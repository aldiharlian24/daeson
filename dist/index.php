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
    
                        <!-- Navbar Search-->
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
                            <a class="nav-link text-body" class="tombollogin" href="./login.php">
                                Login
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
    
                        <!-- Menu-->
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
                            </li>
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
                                  </script>
                                  <!--<li><a class="dropdown-item" href="./product.php">Produk</a></li>-->
                                  <!--<li><a class="dropdown-item" href="./cart.php">Keranjang</a></li>-->
                                  <!--<li><a class="dropdown-item" href="./checkout.php">Pesan</a></li>-->
                                  <li><a class="dropdown-item" href="./login.php">Masuk</a></li>
                                  <li><a class="dropdown-item" href="./register.php">Daftar</a></li>
                                  <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
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
                    <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">WE PROVIDE MORE THAN SECURITY</p>
                    <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                      <span class="text-outline-light">WASKAT</span> KARYA METAL</h2>
                    <div data-swiper-parallax-y="-25">
                      <a href="./category.php" class="btn btn-psuedo text-white" role="button">CATALOG</a>
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
                    <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">WE PROVIDE MORE THAN SECURITY</p>
                    <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                      WASKAT <span class="text-outline-light">KARYA METAL</span></h2>
                    <div data-swiper-parallax-y="-25">
                      <a href="./category.php" class="btn btn-psuedo text-white" role="button">KATALOG</a>
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
                    <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">WE PROVIDE MORE THAN SECURITY</p>
                    <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                      WASKAT <span class="text-outline-light">KARYA METAL</span></h2>
                    <div data-swiper-parallax-y="-25">
                      <a href="./category.php" class="btn btn-psuedo text-white" role="button">KATALOG</a>
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
                    <p class="title-small text-white opacity-75 mb-0" data-swiper-parallax="-100">WE PROVIDE MORE THAN SECURITY</p>
                    <h2 class="display-3 tracking-wide fw-bold text-uppercase tracking-wide text-white" data-swiper-parallax="100">
                      <span class="text-outline-light">WASKAT</span>KARYA METAL</h2>
                    <div data-swiper-parallax-y="-25">
                      <a href="./category.php" class="btn btn-psuedo text-white" role="button">KATALOG</a>
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
        <div class="brand-section container-fluid" data-aos="fade-in">
            <div class="bg-overlay-sides-white-to-transparent bg-white py-5 py-md-7">
                <section class="marquee marquee-hover-pause">
                    <div class="marquee-body">
                        <div class="marquee-section animation-marquee-50">
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.php">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logopjg.png" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.php">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logopjg.png" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.php">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logopjg.png" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.php">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logopjg.png" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.php">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logopjg.png" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.php">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logopjg.png" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.php">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logopjg.png" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.php">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logopjg.png" alt="">
                                    </picture>
                                </a>
                            </div>
                            <div class="mx-3 mx-lg-5 f-w-24">
                                <a class="d-block" href="./category.php">
                                    <picture>
                                        <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logopjg.png" alt="">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
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
            <div class="position-relative row my-lg-7 pt-5 pt-lg-0 g-8">
                <div class="bg-text bottom-0 start-0 end-0" data-aos="fade-up">
                    <h2 class="bg-text-title opacity-10"><span class="text-outline-dark">DAE</span>SON</h2>
                </div>
                <div class="col-12 col-md-6 position-relative z-index-20 mb-7 mb-lg-0" data-aos="fade-right">
                    <p class="text-muted title-small">WELCOME</p>
                    <h3 class="display-3 fw-bold mb-5"><span class="text-outline-dark">DAESON</span> - CV. WASKAT KARYA METAL</h3>
                    <p class="lead"><b>UNIT USAHA</b></p>
                    <a href="./#" class="btn btn-psuedo" role="button">Komponen Pintu Besi Garasi </a>
                    <a href="./#" class="btn btn-psuedo" role="button">Pintu Besi Sliding </a>
                    <a href="./#" class="btn btn-psuedo" role="button">Pintu Besi Folding </a>
                    <a href="./#" class="btn btn-psuedo" role="button">Pintu Tunggal/Double </a>
                </div>
                <div class="col-12 col-md-6 position-relative z-index-20 pe-0" data-aos="fade-left">
                    <picture class="w-50 d-block position-relative z-index-10 border border-white border-4 shadow-lg">
                        <img class="img-fluid" src="./assets/images/banners/pintubesi.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                    <picture class="w-60 d-block me-8 mt-n10 shadow-lg border border-white border-4 position-relative z-index-20 ms-auto">
                        <img class="img-fluid" src="./assets/images/banners/pintukayu.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                    <picture class="w-50 d-block me-8 mt-n7 shadow-lg border border-white border-4 position-absolute top-0 end-0 z-index-0 ">
                        <img class="img-fluid" src="./assets/images/banners/pintubesi2.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                    </picture>
                </div>
            </div>
            <!-- / Homepage Intro-->

            <!-- Homepage Banners-->
            <div class="pt-7 mb-5 mb-lg-10">
                <div class="row g-4">
                    <div class="col-12 col-xl-6 position-relative" data-aos="fade-right">
                        <picture class="position-relative z-index-10">
                            <img class="w-100 rounded" src="./assets/images/banners/katalog2.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                        </picture>
                        <div class="position-absolute top-0 bottom-0 start-0 end-0 d-flex justify-content-center align-items-center z-index-20">
                            <div class="py-6 px-5 px-lg-10 text-center w-100">
                                <h2 class="display-1 mb-3 fw-bold text-white"><span class="text-outline-light">Product</span> Highlight</h2>
                                <p class="fs-5 fw-light text-white d-none d-md-block">We Provide More Than Security</p>
                                <a href="./category.php" class="btn btn-psuedo text-white" role="button">Shop All Sale Items</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6" data-aos="fade-left">
                        <div class="row g-4 justify-content-end">
                            <div class="col-12 col-md-6 d-flex">
                                <div class="card position-relative overflow-hidden">
                                    <picture class="position-relative z-index-10 d-block bg-light">
                                        <img class="w-100 rounded" src="./assets/images/banners/katalog1.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <div class="card-overlay">
                                        <p class="lead fw-bolder mb-2">Paket Komponen Lipat D800</p>
                                        <a href="./category.php" class="btn btn-psuedo text-white py-2" role="button">Visit More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex">
                                <div class="card position-relative overflow-hidden">
                                    <picture class="position-relative z-index-10 d-block bg-light">
                                        <img class="w-100 rounded" src="./assets/images/banners/katalog3.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <div class="card-overlay">
                                        <p class="lead fw-bolder mb-2">Pintu Besi</p>
                                        <a href="./category.php" class="btn btn-psuedo text-white py-2" role="button">Visit More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex">
                                <div class="card position-relative overflow-hidden">
                                    <picture class="position-relative z-index-10 d-block bg-light">
                                        <img class="w-100 rounded" src="./assets/images/banners/katalog4.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <div class="card-overlay">
                                        <p class="lead fw-bolder mb-2">Paket Komponen Tikung D300</p>
                                        <a href="./category.php" class="btn btn-psuedo text-white py-2" role="button">Visit More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 d-flex">
                                <div class="card position-relative overflow-hidden">
                                    <picture class="position-relative z-index-10 d-block bg-light">
                                        <img class="w-100 rounded" src="./assets/images/banners/pintubesi3.jpeg" alt="HTML Bootstrap Template by Pixel Rocket">
                                    </picture>
                                    <div class="card-overlay">
                                        <p class="lead fw-bolder mb-2">Sliding Dan Folding</p>
                                        <a href="./category.php" class="btn btn-psuedo text-white py-2" role="button">Visit More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Homepage Banners-->

            <div>
                    <p class="text-muted title-medium">ABOUT US</p>
                    <h3 class="display-3 fw-bold mb-5"><span class="text-outline-dark">DAESON</span> - CV. WASKAT KARYA METAL</h3>
                    <p class="lead"><b>SEKILAS TENTANG  | CV. WASKAT KARYA METAL</b></p>
                    <p class="lead">Memulai usaha yang bergerak dalam bidang pengadaan dan pemasangan komponen garasi, 
                                    penyekat ruangan dengan sistem dorong menikung (Sliding) dan dorong melipat (Folding) 
                                    Di Daerah Bekasi, Jawa Barat Pada Tahun 2010</p>
                    <p class="lead">Sebelumnya Bernama PT. Waskad Karya Metal 
                                    Pada Tahun 1990 dan Berubah Menjadi CV. Waskat Karya Metal Pada Tahun 2010. CV. Waskat Karya Metal Merupakan
                                    bentuk Badan Hukum dengan Surat Izin Usaha Perdagangan (SIUP) Nomor : 510/PK/2821/BPPT4s</p>
                    <a href="./category.php" class="btn btn-psuedo" role="button"></a>

                    <p class="lead"><b>PERKEMBANGAN USAHA</b></p>
                    <p class="lead">Mulai Pertengahan Tahun 2010 CV. Waskat Karya Metal Mulai Mendirikan 
                                    Pabrik Yang Berada di Wilayah Bogor Jawa Barat CV. Waskat Karya Metal 
                                    Selalu Mengutamakan Mutu Pelayanan Terhadap Customer Baik Dalam Segi 
                                    Hasil Produk, Ketepatan Waktu Maupun Harga yang Pantas, Sehingga Jaminan 
                                    Pekerjaan Yang Kami Lakukan Dapat Menjadi Referensi Untuk Pekerjaan Selanjutnya.</p>
                    <p class="lead">Sebelumnya Bernama PT. Waskad Karya Metal 
                                    Pada Tahun 1990 dan Berubah Menjadi CV. Waskat Karya Metal Pada Tahun 2010. CV. Waskat Karya Metal Merupakan
                                    bentuk Badan Hukum dengan Surat Izin Usaha Perdagangan (SIUP) Nomor : 510/PK/2821/BPPT4s</p>
            </div><br><br><br>
            
            <!--maps-->
            <div class="aa-contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.4679693578732!2d107.01905847355404!3d-6.201829360751055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69894f9edeb937%3A0x6d6ccf9580672bf5!2sWaskat%20Karya%20Metal.%20CV!5e0!3m2!1sid!2sid!4v1713858202432!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
           <br><br>
           <div class="">
                 <div class="">
                   <address>
                     <h4> CONTACT US </h4>
                     <p>Daeson - CV. Waskat Karya Metal</p><br>
                     <p><span class="ri-home-fill"></span> Perum Villa Indah Permai, Kec. Bekasi Utara, Kota Bks, Jawa Barat 17121 </p>
                     <p><span class="ri-phone-fill"></span> (021) 88875070 </p>
                     <p><span class="ri-mail-fill"></span> daesonpintubesi@gmail.com </p>
                   </address>
                 </div>
               </div><br><br>

            <!-- Instagram-->
            <!-- Swiper Instagram 
            <div data-aos="fade-in">
              <h3 class="title-small text-muted text-center mb-3 mt-5"><a href="https://www.instagram.com/daeson_pintugarasi?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="ri-instagram-line align-bottom"></i></a>
                DAESON | CV. WASKAT KARYA METAL
            </h3> <br><br>-->
            <div class="overflow-hidden">
              <div class="swiper-container swiper-overflow-visible"
                data-swiper
                data-options='{
                    "spaceBetween": 20,
                    "loop": true,
                    "autoplay": {
                      "delay": 5000,
                      "disableOnInteraction": false
                    },
                    "breakpoints": {
                      "400": {
                        "slidesPerView": 2
                      },
                      "600": {
                        "slidesPerView": 3
                      },       
                      "999": {
                        "slidesPerView": 5
                      },
                      "1024": {
                        "slidesPerView": 6
                      }
                    }
                  }'>
                <div class="swiper-wrapper mb-5">
            
                  <!-- Start of instagram slideshow loop for items-->
                  <div class="swiper-slide flex-column">
                    <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/C2yrwRsvVZm/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/C2yrwRsvVZm/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/C2yrwRsvVZm/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Sebuah kiriman dibagikan oleh DAESON Pintu garasi (@daeson_pintugarasi)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                  </div>
                  <div class="swiper-slide flex-column">
                  </div>
                  <div class="swiper-slide flex-column">
                    <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CtNcM8OPlJ_/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CtNcM8OPlJ_/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CtNcM8OPlJ_/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Sebuah kiriman dibagikan oleh DAESON Pintu garasi (@daeson_pintugarasi)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                  </div>
                  <div class="swiper-slide flex-column">
                  </div>
                  <div class="swiper-slide flex-column">
                    <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CxmbXKsybek/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CxmbXKsybek/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/CxmbXKsybek/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Sebuah kiriman dibagikan oleh DAESON Pintu garasi (@daeson_pintugarasi)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                  </div>
                  <div class="swiper-slide flex-column">
                  </div>
                  <div class="swiper-slide flex-column">
                    <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/Cu7SWmfP0do/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/Cu7SWmfP0do/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">Lihat postingan ini di Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/Cu7SWmfP0do/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">Sebuah kiriman dibagikan oleh DAESON Pintu garasi (@daeson_pintugarasi)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>
                  </div>
                  <div class="swiper-slide flex-column">
                  </div>
                  <!-- / end of items loop-->
                </div>
              </div>
            </div>
            </div>
            <!-- /Swiper Instagram-->
            <!-- / Instagram-->
        </div>
        <!-- /Page Content -->
    </section>
    <!-- / Main Section-->

    <!-- Footer -->
    <footer class="border-top py-5 mt-4  ">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row">
                <div>
                    <ul class="list-unstyled">
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="https://www.instagram.com/daeson_pintugarasi?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i class="ri-instagram-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="https://www.facebook.com/people/Daeson-Pintu-Garasi/pfbid0HacThbLSp8RsDUwffbSTcYWW5ZBEgjsmJ4cs9UYBCnrAMhmrQ1SzCDAd1bWchTwAl/?mibextid=LQQJ4d"><i class="ri-facebook-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href="#"><i class="ri-mail-fill"></i></a></li>
                        <li class="d-inline-block me-1"><a class="text-decoration-none text-dark-hover transition-all"
                                href=""><i class="ri-whatsapp-fill"></i></a></li>
                    </ul>
                </div>
                <div class="d-flex align-items-center justify-content-end flex-column flex-lg-row">
                    <p class="small m-0 text-center text-lg-start">&copy; 2024 | DAESON - CV. WASKAT KARYA METAL</p>
                    <!--<ul class="list-unstyled mb-0 ms-lg-4 mt-3 mt-lg-0 d-flex justify-content-end align-items-center">
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-paypal"></i></li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-mastercard"></i></li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center me-2">
                            <i class="pi pi-sm pi-american-express"></i></li>
                        <li class="bg-light p-2 d-flex align-items-center justify-content-center"><i
                                class="pi pi-sm pi-visa"></i>
                        </li>
                    </ul>-->
                </div>
            </div>
        </div>
    </footer>    <!-- / Footer-->


    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>
</body>

</html>