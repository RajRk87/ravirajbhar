<?php
$current_page = 'about';
$page_title = 'About Me - My Portfolio';
include 'includes/header.php';
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <h1 class="page-title" data-aos="fade-down">About Me</h1>
        <nav aria-label="breadcrumb" data-aos="fade-up">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">About</li>
            </ol>
        </nav>
    </div>
</section>

<!-- About Section -->
<section class="about-content-section">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="about-image-wrapper">
                    <img src="images/ravi.png" alt="About Me" class="about-image">
                    <div class="about-experience">
                        <h3>1+</h3>
                        <p>Years Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="about-content">
                    <h2 class="about-title">Full-Stack Developer & Problem Solver</h2>
                    <p class="about-text">
                        I'm a passionate full-stack developer based in India, specializing in creating 
                        innovative web applications that solve real-world problems. With expertise in 
                        PHP/Laravel  I bring ideas to life through clean code and 
                        elegant design.
                    </p>
                    <p class="about-text">
                        My journey in web development has led me to work on diverse projects including 
                        dealer management systems, card generation applications, and custom course 
                        management platforms with Salesforce integration.
                    </p>
                    <div class="about-info">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="info-list">
                                    <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> Ravi Rajbha</li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Location:</strong>Faridabad Haryana, India</li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> ravi1331996@gmail.com</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="info-list">
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> Bachelor's</li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Experience:</strong> 1+ Years </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> Available</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="contact.php" class="btn btn-primary mt-3">Hire Me</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="skills-section">
    <div class="container">
        <div class="section-header text-center" data-aos="fade-up">
            <h2 class="section-title">My Skills</h2>
            <p class="section-subtitle">Technologies I work with</p>
        </div>
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="skill-item">
                    <div class="skill-header">
                        <span class="skill-name">PHP / Laravel</span>
                        <span class="skill-percentage">90%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span class="skill-name">JavaScript</span>
                        <span class="skill-percentage">80%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 80%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span class="skill-name">MySQL Database</span>
                        <span class="skill-percentage">85%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="skill-item">
                    <div class="skill-header">
                        <span class="skill-name">HTML / CSS</span>
                        <span class="skill-percentage">95%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 95%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span class="skill-name">Bootstrap / Tailwind</span>
                        <span class="skill-percentage">90%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-header">
                        <span class="skill-name">API Development</span>
                        <span class="skill-percentage">85%</span>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 85%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
