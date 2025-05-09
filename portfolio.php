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
      cursor: pointer;
    }
    .gallery-item img {
      width: 100%;
      height: auto;
      display: block;
    }
    .lightbox-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(0, 0, 0, 0.8);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
      visibility: hidden;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    .lightbox-overlay.active {
      visibility: visible;
      opacity: 1;
    }
    .lightbox-overlay img {
      max-width: 90vw;
      max-height: 90vh;
      border-radius: 10px;
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
          <div class="gallery-item" onclick="openLightbox('<?= htmlspecialchars($src, ENT_QUOTES) ?>')">
            <img src="<?= htmlspecialchars($src, ENT_QUOTES) ?>" alt="">
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </main>
  <div id="lightbox" class="lightbox-overlay" onclick="closeLightbox()">
    <img id="lightbox-img" src="" alt="Preview">
  </div>
  <?php include 'footer.php'; ?>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    function openLightbox(src) {
      const lightbox = document.getElementById('lightbox');
      const img = document.getElementById('lightbox-img');
      img.src = src;
      lightbox.classList.add('active');
    }
    function closeLightbox() {
      const lightbox = document.getElementById('lightbox');
      lightbox.classList.remove('active');
    }
  </script>
</body>
</html>
