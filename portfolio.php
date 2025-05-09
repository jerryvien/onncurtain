<?php
// Fetch images from assets/img/portfolio
$portfolioDir = __DIR__ . '/assets/img/portfolio';
$files = glob($portfolioDir . '/*.{jpg,png,gif}', GLOB_BRACE);
$images = array_map(fn($path) => 'assets/img/portfolio/' . basename($path), $files);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Portfolio Showcase</title>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <style>
    /* CSS Columns Masonry Gallery */
    .gallery {
      column-width: 250px;
      column-gap: 15px;
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
    }
    .gallery-item {
      display: inline-block;
      width: 100%;
      margin: 0 0 15px;
      border-radius: 8px;
      overflow: hidden;
      background: #fff;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }
    .gallery-item img {
      width: 100%;
      height: auto;
      display: block;
    }
  </style>
</head>
<body>
  <?php include 'header.php'; ?>
  <main class="container py-4">
    <h1 class="mb-4">Portfolio</h1>
    <?php if(empty($images)): ?>
      <p>No images found in <code>assets/img/portfolio</code>.</p>
    <?php else: ?>
      <div class="gallery">
        <?php foreach($images as $src): ?>
          <div class="gallery-item">
            <a href="<?= htmlspecialchars($src, ENT_QUOTES) ?>" class="glightbox" data-gallery="gallery">
              <img src="<?= htmlspecialchars($src, ENT_QUOTES) ?>" alt="">
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </main>
  <?php include 'footer.php'; ?>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script>
    const lightbox = GLightbox({ selector: '.glightbox' });
  </script>
</body>
</html>
