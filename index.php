<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Blvck Paris - Exclusive Streetwear Collection</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="minimalist fashion, elegant clothing, luxury wear, modern apparel, designer clothes, urban fashion, high-quality fabrics, fashion-forward, trendy outfits, sustainable fashion">
  <meta name="description" content="Discover the exclusive Blvck Paris streetwear collection. Shop the latest trends in urban fashion with our unique designs.">
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="css/vendor.css">
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link
  href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&family=Jost:wght@400;600;700&display=swap"
  rel="stylesheet">

</head>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <defs>
      <symbol xmlns="http://www.w3.org/2000/svg" id="link" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="category" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
        <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="check" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="trash" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-outline" viewBox="0 0 15 15">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
          d="M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-solid" viewBox="0 0 15 15">
        <path fill="currentColor"
          d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 15 15">
        <path fill="currentColor"
          d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
      </symbol>

    </defs>
  </svg>

  <div class="preloader-wrapper">
    <div class="preloader">
    </div>
  </div>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasCart" aria-labelledby="My Cart">
    <div class="offcanvas-header justify-content-center">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-4">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-circle pt-2">3</span>
        </h4>

        <ul class="list-group mb-4">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Grey Hoodie</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$120</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Graphic T-Shirt</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$80</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Black T-Shirt</h6>
              <small class="text-body-secondary">Brief description</small>
            </div>
            <span class="text-body-secondary">$50</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span class="fw-bold">Total (USD)</span>
            <strong>$250</strong>
          </li>
        </ul>

        <button class="w-100 btn btn-dark" type="submit">Continue to checkout</button>
      </div>
    </div>
  </div>

  <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasSearch"
    aria-labelledby="Search">
    <div class="offcanvas-header justify-content-center">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

      <div class="order-md-last">
        <h4 class="text-primary text-uppercase mb-3">
          Search
        </h4>
        <div class="search-bar border rounded-2 border-dark-subtle">
          <form id="search-form" class="text-center d-flex align-items-center" action="" method="">
            <input type="text" class="form-control border-0 bg-transparent" placeholder="Search Here" />
            <iconify-icon icon="tabler:search" class="fs-4 me-3"></iconify-icon>
          </form>
        </div>
      </div>
    </div>
  </div>


  <nav class="main-menu d-flex navbar fixed-top navbar-expand-lg py-4 ">
    <div class="container">
      <div class="main-logo">
        <a href="index.php">
          <img src="images/logo1.png" alt="logo" class="img-fluid">
        </a>
      </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

        <div class="offcanvas-header justify-content-center">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body justify-content-between">

          <ul class="navbar-nav menu-list list-unstyled d-flex gap-md-3 ps-lg-5 mb-0">
            <li class="nav-item">
              <a href="index.php" class="nav-link mx-2 active">Home</a>
            </li>
            <li class="nav-item">
              <a href="shop.php" class="nav-link mx-2">Shop</a>
            </li>
            <li class="nav-item">
              <a href="text.html" class="nav-link mx-2">About Us</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link mx-2">Hoodies</a>
            </li>
          </ul>

          

          <div class="d-none d-lg-flex align-items-end">
            <ul class="d-flex justify-content-end list-unstyled m-0">
            <li>
                <?php if (isset($_SESSION['user_id'])): ?>
                <!-- User is logged in, show profile icon or logout link -->
                <a href="profile.php" class="mx-3"> <!-- Adjust `profile.php` to the path of your user profile or dashboard page -->
                    <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
                </a>
                <?php else: ?>
                <!-- User is not logged in, keep the sign-in link -->
                <a href="signIn.html" class="mx-3"> <!-- Make sure the extension is correct, .php if you've converted your pages -->
                    <iconify-icon icon="healthicons:person" class="fs-4"></iconify-icon>
                </a>
                <?php endif; ?>
            </li>

            <li class="">
                <a href="cart.php" class="mx-3">
                    <iconify-icon icon="mdi:cart" class="fs-4 position-relative"></iconify-icon>
                    </span>
                </a>
            </li>

              <li>
                <a href="#" class="mx-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
                  aria-controls="offcanvasSearch">
                  <iconify-icon icon="tabler:search" class="fs-4"></iconify-icon>
                </a>
              </li>

            </ul>

          </div>

        </div>
      </div>

    </div>
    <div class="container d-lg-none">
      <div class="d-flex  align-items-end mt-3">
        <ul class="d-flex justify-content-end list-unstyled m-0">
          <li>
            <a href="account.html" class="me-4">
              <iconify-icon icon="healthicons:person" class="fs-4 me-2"></iconify-icon>
            </a>
          </li>
          <li>
            <a href="wishlist.html" class="me-4">
              <iconify-icon icon="mdi:heart" class="fs-4 me-2"></iconify-icon>
            </a>
          </li>

          <li>
            <a href="#" class="me-4" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart"
              aria-controls="offcanvasCart">
              <iconify-icon icon="mdi:cart" class="fs-4 me-2 position-relative"></iconify-icon>
              <span class="position-absolute translate-middle badge rounded-circle bg-primary">
                03
              </span>
            </a>
          </li>

          <li>
            <a href="#" class="me-4" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSearch"
              aria-controls="offcanvasSearch">
              <iconify-icon icon="tabler:search" class="fs-4 me-2"></iconify-icon>
            </a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <section id="full-screen-hero">
    <div class="hero-box">
      <h1>Discover Modern Style</h1>
      <p>Explore our collection of sustainable streetwear.</p>
      <a href="#" class="btn btn-dark rounded-3">Shop Now</a>
    </div>
  </section>



  <section id="service" class="padding-medium">
    <div class="container">
      <h2 class="display-5 fw-light text-uppercase text-center mb-5">Our Services</h2>
      <div class="row g-md-5 pt-4">
        <!-- Service Item 1 -->
        <div class="col-md-6 col-lg-3 my-3">
          <div class="service-card">
            <div class="service-icon">
              <iconify-icon icon="ci:shopping-cart-02" class="text-primary"></iconify-icon>
            </div>
            <h4 class="service-title">Free Delivery</h4>
            <p class="service-description">Enjoy free shipping on all orders with no minimum purchase requirement.
              Experience fast and secure delivery directly to your doorstep.</p>
          </div>
        </div>
        <!-- Service Item 2 -->
        <div class="col-md-6 col-lg-3 my-3">
          <div class="service-card">
            <div class="service-icon">
              <iconify-icon icon="bi:shield-lock-fill" class="text-primary"></iconify-icon>
            </div>
            <h4 class="service-title">Secure Payment</h4>
            <p class="service-description">We ensure your payment information is protected with the highest security
              standards. Shop with confidence and peace of mind.</p>
          </div>
        </div>
        <!-- Service Item 3 -->
        <div class="col-md-6 col-lg-3 my-3">
          <div class="service-card">
            <div class="service-icon">
              <iconify-icon icon="mdi:quality-high" class="text-primary"></iconify-icon>
            </div>
            <h4 class="service-title">Quality Guarantee</h4>
            <p class="service-description">Our products are made from premium materials with attention to detail. We
              stand behind the quality of our offerings with a satisfaction guarantee.</p>
          </div>
        </div>
        <!-- Service Item 4 -->
        <div class="col-md-6 col-lg-3 my-3">
          <div class="service-card">
            <div class="service-icon">
              <iconify-icon icon="akar-icons:clock" class="text-primary"></iconify-icon>
            </div>
            <h4 class="service-title">24/7 Support</h4>
            <p class="service-description">Our dedicated support team is available around the clock to assist you with
              any inquiries or issues you may encounter.</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="new-arrival" class="product-store">
    <div class="container">
      <h2 class="display-5 fw-light text-uppercase text-center mb-5">New Arrivals</h2>
      <div class="row">
        <div class="col-md-6 col-lg-3 my-4">
          <div class="product-item">
            <div class="image-holder" style="width: 100%; height: 100%;">
              <img src="images/product1.jpg" alt="Books" class="product-image img-fluid">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <a href="#" class="btn-wrap cart-link d-flex align-items-center text-capitalize fs-6 ">add to cart <i
                    class="icon icon-arrow-io pe-1"></i>
                </a>
                <a href="Products/product2.php" class="view-btn">
                  <i class="icon icon-screen-full"></i>
                </a>
                <a href="#" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </a>
              </div>
            </div>
            <div class="product-detail d-flex justify-content-between align-items-center mt-4">
              <h4 class="product-title mb-0">
                <a href="Products/White_tokyo_hoodie.php">White Tokyo Hoodie</a>
              </h4>
              <p class="m-0 fs-5 fw-normal"> Rs 37,500.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 my-4">
          <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            New
          </div>
          <div class="product-item">
            <div class="image-holder">
              <img src="images/product2.jpg" alt="Books" class="product-image img-fluid">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <a href="#" class="btn-wrap cart-link d-flex align-items-center text-capitalize fs-6 ">add to cart <i
                    class="icon icon-arrow-io pe-1"></i>
                </a>
                <a href="single-product.html" class="view-btn">
                  <i class="icon icon-screen-full"></i>
                </a>
                <a href="#" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </a>
              </div>
            </div>
            <div class="product-detail d-flex justify-content-between align-items-center mt-4">
              <h4 class="product-title mb-0">
                <a href="Products/product2.php">Blvck x Whte' Death Kiss Sweater</a>
              </h4>
              <p class="m-0 fs-5 fw-normal">Rs 23,700.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 my-4">
          <div class="product-item">
            <div class="image-holder">
              <img src="images/product3.jpg" alt="Books" class="product-image img-fluid">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <a href="#" class="btn-wrap cart-link d-flex align-items-center text-capitalize fs-6 ">add to cart <i
                    class="icon icon-arrow-io pe-1"></i>
                </a>
                <a href="single-product.html" class="view-btn">
                  <i class="icon icon-screen-full"></i>
                </a>
                <a href="#" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </a>
              </div>
            </div>
            <div class="product-detail d-flex justify-content-between align-items-center mt-4">
              <h4 class="product-title mb-0">
                <a href="Products/product3.php">Whte Signature Hoodie</a>
              </h4>
              <p class="m-0 fs-5 fw-normal">Rs 24,760.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 my-4">
          <div class="z-1 position-absolute rounded-3 m-3 px-3 border border-dark-subtle">
            Sale
          </div>
          <div class="product-item">
            <div class="image-holder">
              <img src="images/product4.jpg" alt="Books" class="product-image img-fluid">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <a href="#" class="btn-wrap cart-link d-flex align-items-center text-capitalize fs-6 ">add to cart <i
                    class="icon icon-arrow-io pe-1"></i>
                </a>
                <a href="single-product.html" class="view-btn">
                  <i class="icon icon-screen-full"></i>
                </a>
                <a href="#" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </a>
              </div>
            </div>
            <div class="product-detail d-flex justify-content-between align-items-center mt-4">
              <h4 class="product-title mb-0">
                <a href="Products/product4.php">Whte Evil Twin Teddy Bear Hoodie</a>
              </h4>
              <p class="m-0 fs-5 fw-normal">Rs 45,765.00</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 my-4">
          <div class="product-item">
            <div class="image-holder">
              <img src="images/product5.jpg" alt="Books" class="product-image img-fluid">
            </div>
            <div class="cart-concern">
              <div class="cart-button d-flex justify-content-between align-items-center">
                <a href="#" class="btn-wrap cart-link d-flex align-items-center text-capitalize fs-6 ">add to cart <i
                    class="icon icon-arrow-io pe-1"></i>
                </a>
                <a href="single-product.html" class="view-btn">
                  <i class="icon icon-screen-full"></i>
                </a>
                <a href="#" class="wishlist-btn">
                  <i class="icon icon-heart"></i>
                </a>
              </div>
            </div>
            <div class="product-detail d-flex justify-content-between align-items-center mt-4">
              <h4 class="product-title mb-0">
                <a href="Products/product5.php">Whte Angel Hoodie</a>
              </h4>
              <p class="m-0 fs-5 fw-normal">Rs 45,765.00</p>
            </div>
          </div>
        </div>

      </div>
      <div class="text-center mt-5 pt-4">
        <button type="submit" class="btn btn-dark rounded-3">View All Products</button>
      </div>
    </div>
  </section>

  <!-- Awards and Recognition Section Enhanced -->
  <section class="padding-medium awards-section">
    <div class="container">
      <h2 class="display-5 fw-light text-uppercase mb-5">Awards & Recognition</h2>
      <div class="row">
        <!-- Award Item -->
        <div class="col-md-4 text-center award-item">
          <div class="award-icon mb-3">
            <i class="fas fa-award fa-3x"></i>
          </div>
          <h5 class="award-title">Best Sustainable Brand 2021</h5>
          <p class="award-description">Awarded by Eco Fashion Week</p>
        </div>

        <div class="col-md-4 text-center award-item">
          <div class="award-icon mb-3">
            <i class="fas fa-award fa-3x"></i>
          </div>
          <h5 class="award-title">Best Sustainable Brand 2021</h5>
          <p class="award-description">Awarded by Eco Fashion Week</p>
        </div>
        <!-- More awards can be added here -->
      </div>
    </div>
  </section>

  <!-- Our Journey Timeline Section -->
  <section class="padding-medium bg-light">
    <div class="container">
      <h2 class="display-5 fw-bold text-uppercase text-center mb-5">Our Journey</h2>
      <div class="timeline-container">
        <!-- Timeline Item 1 -->
        <div class="timeline-item" data-year="2010">
          <div class="timeline-icon">
            <i class="fas fa-seedling"></i>
          </div>
          <div class="timeline-content">
            <h3>Foundation</h3>
            <p>Blvck was founded with a mission to provide sustainable fashion, pioneering the use of
              organic materials in our products.</p>
          </div>
        </div>
        <!-- Timeline Item 2 -->
        <div class="timeline-item" data-year="2015">
          <div class="timeline-icon">
            <i class="fas fa-tshirt"></i>
          </div>
          <div class="timeline-content">
            <h3>First Product Line</h3>
            <p>We launched our first line of eco-friendly t-shirts, receiving critical acclaim for our
              innovative designs and commitment to sustainability.</p>
          </div>
        </div>
        <!-- Timeline Item 3 -->
        <div class="timeline-item" data-year="2018">
          <div class="timeline-icon">
            <i class="fas fa-award"></i>
          </div>
          <div class="timeline-content">
            <h3>Awards & Recognition</h3>
            <p>Blvck was honored with the "Eco-Conscious Brand" award at the Global Fashion Summit,
              recognizing our efforts in promoting sustainable fashion.</p>
          </div>
        </div>
        <!-- Add more timeline events as needed -->
      </div>
    </div>
  </section>

  <section id="register" style="background-image:url(images/CTA\ BG.jpg);">
    <div class="container padding-medium">
      <div class="row banner-content align-items-center">
        <div class="col-md-4 offset-md-1">
          <h2 class="register-text text-white mt-3">Get <span> <em>20% OFF</em> </span> on your first purchase</h2>
          <p class="mb-4">Sign Up for our newsletter and never miss any offers</p>
        </div>
        <div class="col-md-4 offset-md-1">
          <form>
            <div class="mb-3">
              <input type="email" class="form-control form-control-lg rounded-3" name="email" id="email"
                placeholder="Enter Your Email Address">
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-dark btn-lg rounded-3">Register it now</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

  <footer id="footer" class="bg-black">
    <div class="container padding-medium pt-5">
      <div class="row mt-5">
        <div class="col-md-4 offset-md-1">
          <div class="footer-menu">
            <img src="images/logo_dark.png" alt="logo">
            <div class="social-links mt-4">
              <ul class="d-flex list-unstyled gap-3">
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon fs-5 text-white me-4" icon="ri:facebook-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon fs-5 text-white me-4" icon="ri:twitter-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon fs-5 text-white me-4" icon="ri:pinterest-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon fs-5 text-white me-4" icon="ri:instagram-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon fs-5 text-white me-4" icon="ri:youtube-fill"></iconify-icon>
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="footer-menu">
            <h6 class="text-uppercase fw-bold text-white mb-4">Quick Links</h6>
            <ul class="menu-list list-unstyled">
              <li class="menu-item">
                <a href="#" class="footer-link">Home</a>
              </li>
              <li class="menu-item">
                <a href="#" class="footer-link">About us</a>
              </li>
              <li class="menu-item">
                <a href="#" class="footer-link">Offer </a>
              </li>
              <li class="menu-item">
                <a href="#" class="footer-link">Services</a>
              </li>
              <li class="menu-item">
                <a href="#" class="footer-link">Conatct Us</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2">
          <div class="footer-menu">
            <h6 class="text-uppercase fw-bold text-white mb-4">About</h6>
            <ul class="menu-list list-unstyled">
              <li class="menu-item">
                <a href="#" class="footer-link">How It Work</a>
              </li>
              <li class="menu-item">
                <a href="#" class="footer-link">Our Packages</a>
              </li>
              <li class="menu-item">
                <a href="#" class="footer-link">promotions</a>
              </li>
              <li class="menu-item">
                <a href="#" class="footer-link">refer a friend</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2">
          <div class="footer-menu">
            <h6 class="text-uppercase fw-bold text-white mb-4">Help Center</h6>
            <ul class="menu-list list-unstyled">
              <li class="menu-item">
                <a href="#" class="footer-link">Payments</a>
              </li>
              <li class="menu-item">
                <a href="#" class="footer-link">Shipping</a>
              </li>
              <li class="menu-item">
                <a href="#" class="footer-link">Product returns </a>
              </li>
              <li class="menu-item">
                <a href="#" class="footer-link">FAQs</a>
              </li>
              <li class="menu-item">
                <a href="#" class="footer-link">Checkout</a>
              </li>
              <li class="menu-item">
                <a href="#" class="footer-link">other Issues</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>