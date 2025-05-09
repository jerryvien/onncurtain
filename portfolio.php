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
    /* Masonry-like grid with dynamic row spans based on image height */
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
    <div id="gallery" class="gallery"></div>
  </main>

  <?php include 'footer.php'; ?>

  <script>
    const images = <?php echo json_encode($images, JSON_UNESCAPED_SLASHES); ?>;
    const gallery = document.getElementById('gallery');
    const rowHeight = 10; // matches grid-auto-rows
    const rowGap = 15;

    if (!images.length) {
      gallery.innerHTML = '<p>No images found in <code>assets/img/portfolio</code>.</p>';
    } else {
      images.forEach(src => {
        const item = document.createElement('div');
        item.className = 'gallery-item';

        const img = document.createElement('img');
        img.src = src;
        img.alt = '';
        img.onload = () => {
          // calculate row span based on actual image height
          const span = Math.ceil((img.naturalHeight + rowGap) / (rowHeight + rowGap));
          item.style.gridRowEnd = `span ${span}`;
        };

        item.appendChild(img);
        gallery.appendChild(item);
      });
    }
  </script>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
