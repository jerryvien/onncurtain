<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>On Curtain</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>
<body class="index-page">

    <style>
    /* limit the logo to the header’s height (60px content box) */
    #header .logo img {
        max-height: 60px;      /* ≤ your header’s height */
        width: auto;           /* preserve aspect ratio */
        object-fit: contain;
    }
    </style>
  <header id="header" class="header d-flex align-items-center sticky-top"
      style="height: 60px; padding: 10px 0; background: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
      <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
          
            <!-- Logo: no inline height/max-height here -->
            <a href="index.php" class="logo d-flex align-items-center">
            <img src="/assets/img/9c0d8d95-5e7c-4a90-ade4-51f496beb3af.png"
                alt="Logo">
            </a>

          <!-- Navigation Menu -->
          <nav id="navmenu" class="navmenu"
              style="display: flex; align-items: center; font-size: 14px;">
              <ul style="display: flex; list-style: none; margin: 0; padding: 0;">
                  <li style="margin: 0 10px;"><a href="index.php" class="active" style="padding: 8px 12px;">Home</a></li>
                  <li style="margin: 0 10px;"><a href="about.php" style="padding: 8px 12px;">About</a></li>
                  <li style="margin: 0 10px;"><a href="services.php" style="padding: 8px 12px;">Services</a></li>
                  <li style="margin: 0 10px;"><a href="contact.php" style="padding: 8px 12px;">Contact</a></li>
              </ul>
              <i class="mobile-nav-toggle d-xl-none bi bi-list" style="font-size: 20px;"></i>
          </nav>
      </div>
  </header>


<!-- End Header -->