<?php include('header.php'); ?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title light-background">
    <div class="container">
      <h1>Contact Us</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current">Contact</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Contact Section -->
  <section id="contact" class="contact section">
    <div class="container" data-aos="fade">
      <div class="row gy-5 gx-lg-5">

        <div class="col-lg-4">
          <div class="info">
            <h3>Let's Transform Your Space</h3>
            <p>
              We’re here to help you achieve the perfect blend of elegance and functionality. Reach out for a personalized consultation or any inquiries about our bespoke curtain solutions.
            </p>

            <div class="info-item d-flex">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h4>Location:</h4>
                <p>14-2-1 Jalan Medan 3, Medan Putra Business Centre, 52200 Bandar Manjalara, Kuala Lumpur</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h4>Email:</h4>
                <p>oncurtain@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex">
              <i class="bi bi-phone flex-shrink-0"></i>
              <div>
                <h4>Call:</h4>
                <p>012-9853351</p>
              </div>
            </div><!-- End Info Item -->

          </div>
        </div>

        <div class="col-lg-8">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div><!-- End Contact Form -->

      </div>
    </div>
  </section><!-- /Contact Section -->

</main>

<?php include('footer.php'); ?>
