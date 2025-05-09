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
    /* Simple flex gallery where each box wraps image size */
    .gallery {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      justify-content: flex-start;
    }
    .gallery-item {
      border-radius: 8px;
      overflow: hidden;
      background: #fff;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      display: inline-block;
    }
    .gallery-item img {
      display: block;
      height: auto;
      width: auto;
      max-width: 200px; /* Optional: limit max width */
    }
  </style>
</head>
<body>
  <?php include 'header.php'; ?>

  <main class="container py-4">
    <h1 class="mb-4">Portfolio</h1>
    <div id="gallery" class="gallery">
      <?php if(empty($images)): ?>
        <p>No images found in <code>assets/img/portfolio</code>.</p>
      <?php else: ?>
        <?php foreach($images as $src): ?>
          <div class="gallery-item">
            <img src="<?= $src ?>" alt="">
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </main>

  <?php include 'footer.php'; ?>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
