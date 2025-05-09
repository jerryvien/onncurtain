<?php
// Determine directory and URL path for portfolio images
$portfolioDir = __DIR__ . '/assets/img/portfolio';
$files = glob($portfolioDir . '/*.{jpg,png,gif}', GLOB_BRACE);
// Build web-accessible URLs (relative to this script)
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
    .gallery { display: grid; grid-template-columns: repeat(auto-fill, minmax(200px,1fr)); grid-auto-rows:10px; gap:15px; }
    .gallery-item { overflow:hidden; border-radius:8px; background:#fff; box-shadow:0 2px 6px rgba(0,0,0,0.1); }
    .gallery-item img { width:100%; display:block; }
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
    if (!images.length) {
      gallery.innerHTML = '<p>No images found in <code>assets/img/portfolio</code>.</p>';
    } else {
      images.forEach(src => {
        const item = document.createElement('div');
        item.className = 'gallery-item';
        item.style.gridColumnEnd = 'span ' + (Math.floor(Math.random()*2)+1);
        item.style.gridRowEnd    = 'span ' + (Math.floor(Math.random()*3)+1);
        const img = document.createElement('img'); img.src = src; img.alt = '';
        item.appendChild(img);
        gallery.appendChild(item);
      });
    }
  </script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
