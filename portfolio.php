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
  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container">
      <h1>Portfolio</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Portfolio</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->
  <main class="container py-4">
    
    <?php if(empty($images)): ?>
      <p>No images found in <code>assets/img/portfolio</code>.</p>
    <?php else: ?>
      <div class="gallery">
        <?php foreach($images as $src): ?>
          <div class="gallery-item">
            <img src="<?= htmlspecialchars($src, ENT_QUOTES) ?>" alt="">
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </main>
  <?php include 'footer.php'; ?>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
