<?php
$pageTitle = "Home | Tenagon";
$pageDescription = "Tenagon - A sovereign digital nation, built on trust, transparency, and AI-powered governance";
$pageKeywords = "Tenagon, digital nation, AI governance, sovereign";
$bodyClass = "index-page";
?>

<?php include 'include/header.php'; ?>

<!-- Hero Section -->


<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <img
    src="https://images.pexels.com/photos/1679768/pexels-photo-1679768.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
    alt="" data-aos="fade-in">

  <div class="container d-flex flex-column align-items-center">
    <h2 data-aos="fade-up" data-aos-delay="100">Tenagon</h2>
    <p data-aos="fade-up" data-aos-delay="200">A sovereign digital nation, built on trust, transparency, and
      AI-powered governance</p>
    <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
      <a href="" class="btn-get-started">Explore Our Constitution</a>
    </div>
  </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">

  <div class="container">

    <div class="row gy-4">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 style="    margin-top: 48px;">What is Tenagon?</h3>
        <p>Tenagon is not just a concept — it’s a fully functioning digital State with all the attributes of a
          modern sovereign nation. <br> Government, law, finance, to healthcare and education — <br>Tenagon
          offers an immersive and transparent digital ecosystem that empowers every citizen.”</p>
        <a href="" class="btn-get-started">Learn More</a>
      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
        <div class="content ps-0 ps-lg-5">




          <div class="position-relative mt-4">
            <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
            <a href="" class="glightbox pulsating-play-btn"></a>
          </div>
        </div>
      </div>
    </div>

  </div>

</section><!-- /About Section -->
<!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div style="    margin-bottom: 102px;" class="container section-title" data-aos="fade-up">
    <h2>Core Pillars —</h2>
    <p>What Makes Tenagon Supreme? <br></p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5">

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-item">
          <div class="img">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
            <a href="" class="stretched-link">
              <h3>Sovereign Governance</h3>
            </a>
            <p> “A fully digital High Assembly creates laws with AI assistance, ensuring fairness and
              evolving justice for all citizens.”</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="service-item">
          <div class="img">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-broadcast"></i>
            </div>
            <a href="" class="stretched-link">
              <h3>AI Constitutional Intelligence</h3>
            </a>
            <p>“Our advanced AI-XIV ensures the Constitution is upheld and adapted, protecting rights and
              freedoms with unbiased precision.”</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="service-item">
          <div class="img">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-easel"></i>
            </div>
            <a href="" class="stretched-link">
              <h3>Universal Digital Citizenship</h3>
            </a>
            <p>“Join a global, borderless community where your digital identity is secure, private, and
              sovereign.”</p>
          </div>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section><!-- /Services Section -->




<!-- Contact Section -->
<section id="" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Join Tenagon</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">
      <div class="col-lg-6 ">
        <div class="row gy-4">

          <div class="col-lg-12">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
              data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
              data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
              data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>info@example.com</p>
            </div>
          </div><!-- End Info Item -->

        </div>
      </div>

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <!-- <div class="error-message"></div> -->
              <div class="sent-message" style="color:green; display:none;">Your message has been sent successfully.
              </div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section><!-- /Contact Section -->


<!-- Services Section -->
<!-- ... rest of your home page content ... -->

<?php include 'include/footer.php'; ?>
<script>
  document.querySelector('.php-email-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);

    // Show loading spinner
    form.querySelector('.loading').style.display = 'block';
    // Hide success and error messages initially
    form.querySelector('.sent-message').style.display = 'none';
    form.querySelectorAll('.error-message').forEach(el => {
      el.style.display = 'none';
      el.textContent = '';
    });
    const generalError = form.querySelector('.general-error');
    if (generalError) {
      generalError.style.display = 'none';
      generalError.textContent = '';
    }

    fetch(form.action, {
      method: 'POST',
      body: formData
    })
      .then(res => res.json())
      .then(data => {
        console.log('Response JSON:', data);
        form.querySelector('.loading').style.display = 'none';

        if (data.success === true) {
          // Show success message properly
          const sentMessage = form.querySelector('.sent-message');
          if (sentMessage) {
            sentMessage.textContent = data.message || 'Your message has been sent successfully.';
            sentMessage.style.display = 'block';
          }
          form.reset();
        } else {
          // Handle errors
          if (data.errors) {
            for (const field in data.errors) {
              const errorDiv = form.querySelector(`.${field}-error`);
              if (errorDiv) {
                errorDiv.textContent = data.errors[field];
                errorDiv.style.display = 'block';
              }
            }
          }

          if (generalError) {
            generalError.textContent = data.message || 'Please fix the errors and try again.';
            generalError.style.display = 'block';
          }
        }
      })
      .catch(() => {
        form.querySelector('.loading').style.display = 'none';
        if (generalError) {
          generalError.textContent = "Submission failed. Try again later.";
          generalError.style.display = 'block';
        }
      });
  });

</script>