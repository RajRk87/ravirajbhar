<?php
$current_page = 'home';
$page_title = 'Home - Ravi Rajbhar';
include 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero-section" id="home">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-7" data-aos="fade-right">
                <h1 class="hero-title">
                    Hi, I'm <span class="highlight">Ravi Rajbhar</span>
                </h1>
                <h2 class="hero-subtitle">
                    I'm a <span class="typed-text"></span>
                </h2>
                <p class="hero-description">
                    Full-stack developer passionate about creating elegant solutions to complex problems. 
                    Specializing in PHP, Laravel and modern web technologies.
                </p>
                <div class="hero-buttons">
                    <a href="gallery.php" class="btn btn-primary btn-lg">View My Work</a>
                    <a href="contact.php" class="btn btn-outline-light btn-lg ms-3">Contact Me</a>
                </div>
            </div>
            <div class="col-lg-5" data-aos="fade-left">
                <div class="hero-image-wrapper">
                    <div class="hero-image-bg"></div>
                    <img src="images/ravi.png" alt="Profile" class="hero-image">
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-down">
        <a href="#services"><i class="bi bi-chevron-down"></i></a>
    </div>
</section>

<!-- Services Section -->
<section class="services-section" id="services">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-title">What I Do</h2>
            <p class="section-subtitle">My expertise and services</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-code-slash"></i>
                    </div>
                    <h3 class="service-title">Web Development</h3>
                    <p class="service-description">Building responsive and dynamic websites using modern frameworks like Laravel, React, and Next.js.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-phone"></i>
                    </div>
                    <h3 class="service-title">Responsive Design</h3>
                    <p class="service-description">Creating mobile-first, fully responsive designs that work seamlessly across all devices.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-database"></i>
                    </div>
                    <h3 class="service-title">Database Management</h3>
                    <p class="service-description">Designing and optimizing MySQL databases for efficient data storage and retrieval.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-palette"></i>
                    </div>
                    <h3 class="service-title">UI/UX Design</h3>
                    <p class="service-description">Creating intuitive and beautiful user interfaces with focus on user experience.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-cloud-arrow-up"></i>
                    </div>
                    <h3 class="service-title">API Development</h3>
                    <p class="service-description">Building robust RESTful APIs for seamless integration between frontend and backend.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <h3 class="service-title">Security & Testing</h3>
                    <p class="service-description">Implementing security best practices and thorough testing for reliable applications.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="row align-items-center" data-aos="zoom-in">
            <div class="col-lg-8">
                <h2 class="cta-title">Have a Project in Mind?</h2>
                <p class="cta-text">Let's work together to bring your ideas to life!</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="contact.php" class="btn btn-light btn-lg">Get In Touch</a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
