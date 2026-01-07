<?php
$current_page = 'contact';
$page_title = 'Contact Me - My Portfolio';
include 'includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title" data-aos="fade-down">Contact Me</h1>
        <nav aria-label="breadcrumb" data-aos="fade-up">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-content-section">
    <div class="container">
        <div class="row g-4">
            <!-- Contact Info -->
            <div class="col-lg-4" data-aos="fade-right">
                <div class="contact-info-card">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div>
                            <h4>Location</h4>
                            <p>Delhi, India</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div>
                            <h4>Email</h4>
                            <p>ravi1331996@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-phone-fill"></i>
                        </div>
                        <div>
                            <h4>Phone</h4>
                            <p>+91 8700742689</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div>
                            <h4>Availability</h4>
                            <p>Mon - Fri: 9:00 AM - 6:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-8" data-aos="fade-left">
                <div class="contact-form-card">
                    <h3 class="mb-4">Send Me a Message</h3>
                    
                    <!-- Alert Messages -->
                    <div id="alertMessage"></div>
                    
                    <form id="contactForm" method="POST" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Full Name *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback">Please enter a valid email.</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="subject" class="form-label">Subject *</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                                <div class="invalid-feedback">Please enter a subject.</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message *</label>
                            <textarea class="form-control" id="message" name="message" rows="6" required></textarea>
                            <div class="invalid-feedback">Please enter your message.</div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="bi bi-send-fill me-2"></i>Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
