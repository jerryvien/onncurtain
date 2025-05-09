<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio - Active Bootstrap Template</title>
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

  <style>
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      grid-auto-rows: 10px;
      gap: 15px;
    }
    .gallery-item {
      overflow: hidden;
      border-radius: 8px;
      background: #fff;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .gallery-item img { width: 100%; display: block; }
  </style>
</head>

<body class="portfolio-page">

  <?php include 'header.php'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <h1>Portfolio</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Portfolio</li>
          </ol>
        </nav>
      </div>
    </div>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
      <div class="container">
        <div class="gallery" id="gallery"></div>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="swiper init-swiper">
              <script type="application/json" class="swiper-config">
                {"loop":true,"speed":600,"autoplay":{"delay":5000},"slidesPerView":"auto","pagination":{"el":".swiper-pagination","type":"bullets","clickable":true},"breakpoints":{"320":{"slidesPerView":1,"spaceBetween":40},"1200":{"slidesPerView":1,"spaceBetween":1}}}
              </script>
              <div class="swiper-wrapper">
                <?php include 'testimonials-items.php'; ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php include 'footer.php'; ?>

  <!-- Gallery Script -->
  <?php
    $images = glob(__DIR__ . '/img/*.{jpg,png,gif}', GLOB_BRACE);
    $webImages = array_map(fn($p) => 'img/' . basename($p), $images);
  ?>
  <script>
    const images = <?php echo json_encode($webImages, JSON_UNESCAPED_SLASHES); ?>;
    const gallery = document.getElementById('gallery');
    images.forEach(src => {
      const item = document.createElement('div');
      item.className = 'gallery-item';
      item.style.gridColumnEnd = `span ${Math.floor(Math.random()*2)+1}`;
      item.style.gridRowEnd = `span ${Math.floor(Math.random()*3)+1}`;
      const img = document.createElement('img'); img.src = src; img.alt = '';
      item.appendChild(img);
      gallery.appendChild(item);
    });
  </script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>
