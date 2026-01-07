<?php
$current_page = 'gallery';
$page_title = 'Gallery - My Portfolio';
include 'includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title" data-aos="fade-down">My Gallery</h1>
        <nav aria-label="breadcrumb" data-aos="fade-up">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Gallery</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Portfolio Filter -->
<section class="portfolio-section">
    <div class="container">
        <div class="portfolio-filters text-center mb-5" data-aos="fade-up">
            <button class="filter-btn active" data-filter="all">All Projects</button>
            <button class="filter-btn" data-filter="web">Web Apps</button>
            <button class="filter-btn" data-filter="design">Design</button>
            <button class="filter-btn" data-filter="mobile">Mobile</button>
        </div>

        <!-- Portfolio Grid -->
        <div class="row portfolio-grid g-4">
            <!-- Project 1 -->
            <div class="col-lg-4 col-md-6 portfolio-item" data-category="web" data-aos="fade-up">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="images/gallery/project1.png" alt="IFFCO Dealer Management System">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h3>Dr Path Lab</h3>
                                <p>PHP Laravel</p>
                                <div class="portfolio-links">
                                    <a href="images/gallery/project1.jpg" class="portfolio-link" data-bs-toggle="modal" data-bs-target="#projectModal1">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="#" class="portfolio-link">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="col-lg-4 col-md-6 portfolio-item" data-category="web" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="images/gallery/project2.png" alt="MNREGA Card Generator">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h3>Admin Panel</h3>
                                <p>PHP PDF Generation</p>
                                <div class="portfolio-links">
                                    <a href="images/gallery/project2.jpg" class="portfolio-link" data-bs-toggle="modal" data-bs-target="#projectModal2">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="#" class="portfolio-link">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-lg-4 col-md-6 portfolio-item" data-category="design" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="images/gallery/project3.png" alt="Course Management System">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h3>Social Media</h3>
                                <p>PHP</p>
                                <div class="portfolio-links">
                                    <a href="images/gallery/project3.jpg" class="portfolio-link" data-bs-toggle="modal" data-bs-target="#projectModal3">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="#" class="portfolio-link">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <!-- <div class="col-lg-4 col-md-6 portfolio-item" data-category="web" data-aos="fade-up">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="images/gallery/project4.jpg" alt="E-commerce Platform">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h3>E-commerce Platform</h3>
                                <p>React + Laravel API</p>
                                <div class="portfolio-links">
                                    <a href="images/gallery/project4.jpg" class="portfolio-link">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="#" class="portfolio-link">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Project 5 -->
            <!-- <div class="col-lg-4 col-md-6 portfolio-item" data-category="mobile" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="images/gallery/project5.jpg" alt="Mobile App UI">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h3>Mobile App Design</h3>
                                <p>UI/UX Design</p>
                                <div class="portfolio-links">
                                    <a href="images/gallery/project5.jpg" class="portfolio-link">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="#" class="portfolio-link">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Project 6 -->
            <!-- <div class="col-lg-4 col-md-6 portfolio-item" data-category="design" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-card">
                    <div class="portfolio-image">
                        <img src="images/gallery/project6.jpg" alt="Dashboard Design">
                        <div class="portfolio-overlay">
                            <div class="portfolio-info">
                                <h3>Admin Dashboard</h3>
                                <p>Bootstrap 5</p>
                                <div class="portfolio-links">
                                    <a href="images/gallery/project6.jpg" class="portfolio-link">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <a href="#" class="portfolio-link">
                                        <i class="bi bi-link-45deg"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
