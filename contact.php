<?php include('header.php'); ?>

<main class="main" style="padding: 40px 0; background-color: #f9f9f9;">
  <div class="container">
    <h1 class="mb-4">Contact Us</h1>
    <div class="row">
      <div class="col-md-6">
        <div class="info">
          <h3 style="font-weight: bold;">Let's Transform Your Space</h3>
          <p>
            We’re here to help you achieve the perfect blend of elegance and functionality.
            Reach out for a personalized consultation or any inquiries about our bespoke curtain solutions.
          </p>

          <div class="info-item d-flex mb-3">
            <i class="bi bi-geo-alt" style="font-size: 24px; margin-right: 15px; color: #0d6efd;"></i>
            <div>
              <h5>Location:</h5>
              <p>14-2-1 Jalan Medan 3, Medan Putra Business Centre, 52200 Bandar Manjalara, Kuala Lumpur</p>
            </div>
          </div>

          <div class="info-item d-flex mb-3">
            <i class="bi bi-envelope" style="font-size: 24px; margin-right: 15px; color: #0d6efd;"></i>
            <div>
              <h5>Email:</h5>
              <p>oncurtain@gmail.com</p>
            </div>
          </div>

          <div class="info-item d-flex mb-3">
            <i class="bi bi-phone" style="font-size: 24px; margin-right: 15px; color: #0d6efd;"></i>
            <div>
              <h5>Call:</h5>
              <p>012-9853351</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <form action="forms/contact.php" method="post" class="php-email-form">
          <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
          </div>
          <div class="mb-3">
            <input type="text" name="subject" class="form-control" placeholder="Subject" required>
          </div>
          <div class="mb-3">
            <textarea name="message" class="form-control" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="text-start">
            <button type="submit" class="btn btn-primary">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include('footer.php'); ?>
