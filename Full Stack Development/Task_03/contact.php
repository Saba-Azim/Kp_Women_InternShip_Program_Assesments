<?php
$pageTitle = "Contact Us - Tenagon";
// $pageHeader = "Contact Us";
$pageDescription = "Tenagon - A sovereign digital nation, built on trust, transparency, and AI-powered governance";
$pageKeywords = "Tenagon, digital nation, AI governance, sovereign";
$bodyClass = "index-page";
?>

<?php include 'include/header.php'; ?>


<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

    <img src="https://images.pexels.com/photos/30547574/pexels-photo-30547574/free-photo-of-abstract-digital-circuitry-art-with-led-glow.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
        alt="" data-aos="fade-in">

    <div class="container d-flex flex-column align-items-center">
        <h2 data-aos="fade-up" data-aos-delay="100">Tenagon</h2>
        <p data-aos="fade-up" data-aos-delay="200">“Tenagon — Sovereign AI Networks for Resilient Economies”</p>
        <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
            <a href="" class="btn-get-started">Learn More</a>
        </div>
    </div>

</section><!-- /Hero Section -->
<!-- Contact Section -->
<section id="" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>"His needs will be met as a result"</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <div class="col-lg-6 ">
                <div class="row gy-4">

                    <div class="col-lg-12">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt"></i>
                            <h3>Address</h3>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone"></i>
                            <h3>Call Us</h3>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="col-md-6">
                        <div class="info-item d-flex flex-column justify-content-center align-items-center"
                            data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope"></i>
                            <h3>Email Us</h3>
                            <p>info@example.com</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>
            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                    data-aos-delay="500">
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
                            <textarea class="form-control" name="message" rows="4" placeholder="Message"
                                required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <!-- <div class="error-message"></div> -->
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->



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