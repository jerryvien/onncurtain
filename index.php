<!-- index.php -->
<?php include('header.php'); ?>

<main class="main">

<!-- put this in your existing <head> (or a linked CSS) -->
<style>
  /* full‐page slider container */
  .slider {
    position: relative;
    width: 100vw;
    height: 100vh;
    overflow: hidden;
    margin: 0;
    padding: 0;
  }

  /* each slide stacked & hidden by default */
  .slider .slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
  }
  .slider .slide.active {
    opacity: 1;
  }

  /* image covers full slide */
  .slider img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  /* optional nav buttons */
  .slider .nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0,0,0,0.4);
    color: #fff;
    border: none;
    padding: 0.5em 1em;
    cursor: pointer;
    font-size: 1.2em;
  }
  .slider .nav.prev { left: 10px; }
  .slider .nav.next { right: 10px; }

  /* add to your existing slider CSS */
.slider-mask {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.4);
  z-index: 1;
}

.slider-overlay {
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  z-index: 2;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding: 0 10%;
  pointer-events: none;
}

.slider-overlay small,
.slider-overlay h1,
.slider-overlay h2 {
  color: #fff;
  margin: 0;
}
.slider-overlay small {
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: .5em;
  font-size: .9rem;
}
.slider-overlay h1 {
  font-size: 3rem;
  line-height: 1.2;
}
.slider-overlay h2 {
  font-size: 1.5rem;
  margin-top: .5em;
}

/* center & constrain the carousel */
.category-carousel-container {
    max-width: 1200px;
    margin: 0 auto;
  }
  /* make each card perfectly square */
  .category-card {
    position: relative;
    overflow: hidden;
    aspect-ratio: 1/1;
    border-radius: 0.5rem;
  }
  .category-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }
  .category-card .label {
    position: absolute;
    bottom: 1rem;
    left: 1rem;
    color: #fff;
    font-weight: 600;
    text-transform: uppercase;
    text-shadow: 0 0 5px rgba(0,0,0,0.7);
  }

</style>

<!-- put this in your existing <body> where you want the slider -->
<section class="slider">
  <!-- inside your existing <section class="slider">…</section>, insert: -->
<div class="slider-mask"></div>
<div class="slider-overlay">
  <small>We Are On Curtain</small>
  <h1>Creating ambiance, uplifting interiors, 
    and making spaces truly yours.</h1>
  <h2>Curtains | Sheers | Blinds | Wallpaper</h2>
</div>

  <div class="slide active">
    <img src="/assets/img/1-28399422.jpg" alt="Slide 1">
  </div>
  <div class="slide">
    <img src="/assets/img/2-28399422.jpg" alt="Slide 2">
  </div>
  <div class="slide">
    <img src="/assets/img/3-28399422.jpg" alt="Slide 3">
  </div>


</section>

<!-- put this at the end of your <body> (or in your bundle) -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const slider   = document.querySelector('.slider');
  const slides   = slider.querySelectorAll('.slide');
  const prevBtn  = slider.querySelector('.nav.prev');
  const nextBtn  = slider.querySelector('.nav.next');
  let   current  = 0,
        total    = slides.length;

  function goTo(n) {
    slides[current].classList.remove('active');
    current = (n + total) % total;
    slides[current].classList.add('active');
  }

  prevBtn.addEventListener('click', () => goTo(current - 1));
  nextBtn.addEventListener('click', () => goTo(current + 1));

  setInterval(() => goTo(current + 1), 5000);
});
</script>


<!-- About Section -->
<section id="about" class="about section">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2" data-aos="fade-up" data-aos-delay="400">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 1,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="assets/img/minimalistic-living-room-design.jpg" alt="Curtain Design" class="img-fluid">
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <div class="col-lg-4 order-lg-1">
        <span class="section-subtitle" data-aos="fade-up">Welcome to On Curtain</span>
        <h1 class="mb-4" data-aos="fade-up">
          Elevating Your Interiors with Exquisite Curtain Designs
        </h1>
        <p class="mt-5" data-aos="fade-up">
          <a href="#" class="btn btn-get-started">Discover Our Collection</a>
        </p>
      </div>
    </div>
  </div>
</section>
<!-- /About Section -->

<!-- Services Section -->
<section id="services" class="services section light-background">
  <div class="container">
    <div class="row gy-4 justify-content-center">
      <div class="col-lg-3">
        <div class="services-item" data-aos="fade-up">
          <div class="services-icon">
            <i class="bi bi-bullseye"></i>
          </div>
          <div>
            <h3>Bespoke Curtain Designs</h3>
            <p>Expertly crafted designs that reflect your unique style and elevate your living space.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="services-item" data-aos="fade-up" data-aos-delay="100">
          <div class="services-icon">
            <i class="bi bi-command"></i>
          </div>
          <div>
            <h3>Premium Fabrics</h3>
            <p>We use only the finest materials to ensure luxurious quality and lasting beauty.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="services-item" data-aos="fade-up" data-aos-delay="200">
          <div class="services-icon">
            <i class="bi bi-bar-chart"></i>
          </div>
          <div>
            <h3>Expert Installation</h3>
            <p>Our experienced team ensures flawless installation with attention to every detail.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Services Section -->

<!-- 2) Insert this where you want the carousel -->
<div class="container category-carousel-container my-5">
  <div id="categoryCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- Slide #1 with 4 items -->
      <div class="carousel-item active">
        <div class="row g-3">
          <div class="col-6 col-sm-3">
            <a href="#" class="category-card">
              <img src="assets/img/curtain.png" alt="Curtains">
              <div class="label">Curtains</div>
            </a>
          </div>
          <div class="col-6 col-sm-3">
            <a href="#" class="category-card">
              <img src="assets/img/blind.png" alt="Blinds">
              <div class="label">Blinds</div>
            </a>
          </div>
          <div class="col-6 col-sm-3">
            <a href="#" class="category-card">
              <img src="assets/img/wallpaper.png" alt="Wallpaper">
              <div class="label">Wallpaper</div>
            </a>
          </div>
          <div class="col-6 col-sm-3">
            <a href="#" class="category-card">
              <img src="assets/img/sheer.png" alt="Sheer">
              <div class="label">Sheer</div>
            </a>
          </div>
        </div>
      </div>
      <!-- You can duplicate .carousel-item for Slide #2, #3, etc. -->
    </div>

    <!-- Prev/Next controls -->
    <button class="carousel-control-prev" type="button"
            data-bs-target="#categoryCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button"
            data-bs-target="#categoryCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</div>
<!-- /Category Carousel -->

<!-- Stats Section -->
<section id="stats" class="stats section light-background">
  <div class="container">
    <div class="row gy-4 justify-content-center">
      <div class="col-lg-5">
        <div class="images-overlap">
          <img src="/assets/img/1-0116a3fb.jpeg" alt="Elegant Curtain Showcase" class="img-fluid img-1" data-aos="fade-up">
        </div>
      </div>
      <div class="col-lg-4 ps-lg-5">
        <span class="content-subtitle">Why Choose On Curtain</span>
        <h2 class="content-title">Crafting Elegance in Every Detail</h2>
        <p class="lead">
          At On Curtain, every curtain is a blend of art and precision. Our commitment to quality and bespoke design transforms each space into an elegant retreat.
        </p>
        <p class="mb-5">
          We pride ourselves on meticulous craftsmanship and a passion for creating stunning window treatments that enhance your home’s beauty.
        </p>
        <div class="row mb-5 count-numbers">
          <div class="col-4 counter" data-aos="fade-up" data-aos-delay="100">
            <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="1" class="purecounter number"></span>
            <span class="d-block">Happy Clients</span>
          </div>
          <div class="col-4 counter" data-aos="fade-up" data-aos-delay="200">
            <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="350" data-purecounter-duration="1" class="purecounter number"></span>
            <span class="d-block">Unique Designs</span>
          </div>
          <div class="col-4 counter" data-aos="fade-up" data-aos-delay="300">
            <span data-purecounter-separator="true" data-purecounter-start="0" data-purecounter-end="480" data-purecounter-duration="1" class="purecounter number"></span>
            <span class="d-block">Projects Completed</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Stats Section -->




<!-- Blog Posts Section -->
  <section id="blog-posts" class="blog-posts section">
    <div class="container section-title" data-aos="fade-up">
      <p>Sheer & Curtain Inspirations</p>
      <h2>Curtain & Sheer Blog</h2>
    </div>
    <div class="container">
      <div class="row gy-4">
        <!-- Blog post 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="post-entry" data-aos="fade-up" data-aos-delay="100">
            <a href="#" class="thumb d-block">
<<<<<<< HEAD
              <img src="assets/img/curtain2.png" alt="Innovative Curtain Design" class="img-fluid rounded">
            </a>
            <div class="post-content">
              <div class="meta">
                <a href="#" class="cat">Sheer Trends</a> •
                <span class="date">September 15, 2023</span>
              </div>
              <h3><a href="#">Brighten Your Room with Sheer Curtains</a></h3>
              <p>
                Learn how lightweight sheers can filter sunlight beautifully while keeping privacy intact.
              </p>
              <div class="d-flex author align-items-center">
                <div class="pic">
                  <img src="assets/img/curtaindesigner.png" alt="Emily Stone" class="img-fluid rounded-circle">
                </div>
                <div class="author-name">
                  <strong class="d-block">Emily Stone</strong>
                  <span class="">Curtain Designer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Blog post 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="post-entry" data-aos="fade-up" data-aos-delay="200">
            <a href="#" class="thumb d-block">
<<<<<<< HEAD
              <img src="assets/img/curtain3.png" alt="Perfect Fabric for Curtains" class="img-fluid rounded">
=======

            </a>
            <div class="post-content">
              <div class="meta">
                <a href="#" class="cat">Fabric Guide</a> •
                <span class="date">September 10, 2023</span>
              </div>
              <h3><a href="#">Choosing the Perfect Curtain Fabric</a></h3>
              <p>
                From velvet to linen, find the ideal material that complements your décor and light needs.
              </p>
              <div class="d-flex author align-items-center">
                <div class="pic">
                  <img src="assets/img/curtaindesigner.png" alt="Michael Lee" class="img-fluid rounded-circle">
                </div>
                <div class="author-name">
                  <strong class="d-block">Michael Lee</strong>
                  <span class="">Fabric Specialist</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Blog post 3 -->
        <div class="col-md-6 col-lg-4">
          <div class="post-entry" data-aos="fade-up" data-aos-delay="300">
            <a href="#" class="thumb d-block">
<<<<<<< HEAD
              <img src="assets/img/curtain4.png" alt="Custom Curtains" class="img-fluid rounded">
=======
            </a>
            <div class="post-content">
              <div class="meta">
                <a href="#" class="cat">Custom Drapery</a> •
                <span class="date">September 5, 2023</span>
              </div>
              <h3><a href="#">Tailored Curtains: Style & Function</a></h3>
              <p>
                Discover how bespoke curtains can transform your space—perfect fit, pattern, and pleat every time.
              </p>
              <div class="d-flex author align-items-center">
                <div class="pic">
                  <img src="assets/img/curtaindesigner.png" alt="Sophia Carter" class="img-fluid rounded-circle">
                </div>
                <div class="author-name">
                  <strong class="d-block">Sophia Carter</strong>
                  <span class="">Drapery Consultant</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- /Blog Posts Section -->


<!-- Faq Section -->
  <section id="faq" class="faq section">
    <div class="container section-title" data-aos="fade-up">
      <p>Support</p>
      <h2>Frequently Asked Questions</h2>
    </div>
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-12">
          <div class="custom-accordion" id="accordion-faq">
            <!-- FAQ Item 1 -->
            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-1">
                  How do I schedule an online consultation?
                </button>
              </h2>
              <div id="collapse-faq-1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-faq">
                <div class="accordion-body">
                  Simply click the "Book Now" button on our Consultation package page and fill out the form to schedule your free online consultation with our experts.
                </div>
              </div>
            </div>
            <!-- FAQ Item 2 -->
            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-2">
                  What customization options do you offer?
                </button>
              </h2>
              <div id="collapse-faq-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faq">
                <div class="accordion-body">
                  We offer a range of customization options including fabric selection, design modifications, and personalized measurements to ensure your curtains perfectly complement your space.
                </div>
              </div>
            </div>
            <!-- FAQ Item 3 -->
            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-3">
                  How long does the installation process take?
                </button>
              </h2>
              <div id="collapse-faq-3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faq">
                <div class="accordion-body">
                  Our expert team ensures a seamless installation, typically completing the process within a day while maintaining the highest standards of quality.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- /Faq Section -->


</main>

<?php include('footer.php'); ?>
