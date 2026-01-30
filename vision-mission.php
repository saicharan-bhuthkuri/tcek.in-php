<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vision & Mission - Trinity College of Engineering & Technology</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        /* Shared Styles */
        body {
            font-family: 'Poppins', sans-serif;
            color: #2d3436;
        }

        .page-header {
            background: #00b894;
            padding: 80px 20px 30px;
            text-align: center;
            color: #fff;
        }

        .page-header h1 {
            font-size: 40px;
            margin-bottom: 10px;
        }

        /* Vision Section */
        .vision-section {
            padding: 100px 20px;
            background: #fff;
            position: relative;
            overflow: hidden;
        }

        .section-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 60px;
        }

        .vision-content {
            flex: 1;
        }

        .vision-visual {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .large-icon-box {
            width: 200px;
            height: 200px;
            background: rgba(0, 184, 148, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 80px;
            color: #00b894;
            position: relative;
        }

        .large-icon-box::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px dashed #00b894;
            animation: spin 20s linear infinite;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }

        .section-title {
            font-size: 36px;
            font-weight: 700;
            margin-bottom: 20px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 4px;
            background: #00b894;
            border-radius: 2px;
        }

        .vision-text {
            font-size: 18px;
            line-height: 1.8;
            color: #636e72;
        }

        /* Mission Section */
        .mission-section {
            padding: 100px 20px;
            background: #f9fbfd;
            border-top: 1px solid #eee;
        }

        /* Reverse layout for mission */
        .mission-container {
            flex-direction: row-reverse;
        }

        .mission-list {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        .mission-list li {
            position: relative;
            padding-left: 35px;
            margin-bottom: 20px;
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }

        .mission-list li::before {
            content: '\f101';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            color: #00b894;
            position: absolute;
            left: 0;
            top: 2px;
            font-size: 18px;
        }

        /* Responsive */
        @media (max-width: 900px) {

            .section-container,
            .mission-container {
                flex-direction: column;
                text-align: center;
                gap: 40px;
            }

            .section-title::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .mission-list li {
                padding-left: 0;
                text-align: center;
                margin-bottom: 25px;
            }

            .mission-list li::before {
                position: static;
                display: block;
                margin: 0 auto 10px;
            }
        }
    </style>
</head>

<body>
    <!-- Top Header -->
    <header class="main-header">
        <div class="header-container">
            <div class="logo-section">
                <img src="assets/Top Header/header_banner.png" alt="Trinity College Logo" class="main-logo">
            </div>
            <div class="accreditation-logos">
                <img src="assets/Top Header/naac_logo.png" alt="NAAC">
                <img src="assets/Top Header/jntuh_logo.png" alt="JNTUH">
                <img src="assets/Top Header/nptel_logo.png" alt="NPTEL">
                <img src="assets/Top Header/ISO-LOGO.png" alt="ISO">
                <img src="assets/Top Header/nss_logo.png" alt="NSS">
                <img src="assets/Top Header/aicte_logo.png" alt="AICTE">
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav>
        <div class="nav-container">
            <div class="mobile-brand">
                <img src="assets/Top Header/logo.jpg" alt="Logo" class="mobile-logo">
                <span>TCEK</span>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about-us.php" class="active">About Us</a></li>
                <li><a href="academics.php">Academics</a></li>
                <li><a href="departments.php">Departments</a></li>
                <li><a href="admission.php">Admissions</a></li>
                <li><a href="examinations.php">Examinations</a></li>
                <li><a href="placement-cell.php">Placement Cell</a></li>
                <li><a href="facilities.php">Facilities</a></li>
                <li><a href="research-publications.php">Research Publications</a></li>
                <li><a href="e-content.php">E-CONTENT</a></li>
                <li><a href="committees.php">Committees</a></li>
                <li><a href="policies.php">Policies</a></li>
                <li><a href="affiliation.php">Affiliation</a></li>
                <li><a href="nba.php">NBA</a></li>
                <li><a href="nirf.php">NIRF</a></li>
                <li><a href="naac.php">NAAC</a></li>
                <li><a href="iqac.php">IQAC</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Notification Bar -->
    <div class="news-ticker">
        <div class="ticker-content">
            We Proudly Announce That We Got JNTUH & UGC AUTONOMOUS Status for Five Years From The Academic Year
            2025-2026 to 2029-2030 &nbsp;&nbsp;|&nbsp;&nbsp; We are proud to be the first and only NAAC Accredited
            Engineering College in Peddapalli District &nbsp;&nbsp;|&nbsp;&nbsp; Diploma , BTech and MBA Admissions are
            in progress for 2024-25 &nbsp;&nbsp;|&nbsp;&nbsp; For Admissions Contact: 7396903383, 8522954369
        </div>
    </div>

    <!-- Admission Codes Banner -->
    <div class="admission-banner">
        <div class="container admission-container">
            <div class="admission-code-group">
                <i class="fas fa-university admission-label-icon"></i>
                <span>POLYCET / ECET / EAPCET / ICET CODE:</span>
                <span class="code-badge">TCEK</span>
            </div>

            <div class="admission-contact-group">
                <div class="contact-icon-box"><i class="fas fa-phone-alt"></i></div>
                <span>For Admissions Contact:</span>
                <div>
                    <a href="tel:7396903383" class="phone-link">7396903383</a>
                    <span class="contact-divider">|</span>
                    <a href="tel:8522954369" class="phone-link">8522954369</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Header -->
    <section class="page-header">
        <h1>Vision & Mission</h1>
        <p><a href="about-us.php" style="color: #fff; text-decoration: underline;">About Us</a> / Vision & Mission</p>
    </section>

    <!-- Vision Section -->
    <section class="vision-section">
        <div class="section-container">
            <div class="vision-content">
                <h2 class="section-title">Our Vision</h2>
                <div class="vision-text">
                    <p>Our institution vision is becoming a vibrant knowledge hub and a center of excellence in
                        education. Generating cutting edge technology using research and innovation to make India a
                        developed nation. Creating leaders in the field of science, technology and management by
                        providing quality education. To be the fountain head in producing highly skilled, globally
                        competent engineers.</p>
                </div>
            </div>
            <div class="vision-visual">
                <div class="large-icon-box">
                    <i class="fas fa-eye"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-section">
        <div class="section-container mission-container">
            <div class="vision-content">
                <h2 class="section-title">Our Mission</h2>
                <p style="margin-bottom: 20px; font-size: 16px; color: #555;">Trinity has been established with a
                    commitment to making higher education available to all those who are deprived of object-oriented
                    modular education with an emphasis on practical knowledge keeping in view the emerging industrial
                    needs, business opportunities, and research requirements globally in different areas of science,
                    technology, and management.</p>
                <ul class="mission-list">
                    <li>Our mission is our direction to think and act. To provide an affordable high-quality education
                        student centered teaching-learning processes.</li>
                    <li>To impart skill-based and job oriented training on cutting-edge technologies and achieve 100%
                        placements.</li>
                    <li>To create a healthy and conducive atmosphere among the faculty, students both professionally and
                        ethically and have an effective interaction with industry professional, alumni academicians of
                        premier institutions.</li>
                    <li>To generate technically sound and knowledge Engineers to cater the needs of the nation. To
                        promote research activities, among the students.</li>
                </ul>
            </div>
            <div class="vision-visual">
                <div class="large-icon-box" style="background: rgba(45, 52, 54, 0.05); color: #2d3436; border: none;">
                    <i class="fas fa-bullseye"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Trinity College</h3>
                <p>Peddapalli, Telangana. Approved by AICTE, Affiliated to JNTUH.</p>
                <div class="footer-banners">
                    <img src="assets/footer/college_logo_banner.png" alt="College Logo Banner">
                    <img src="assets/footer/branding_banner.png" alt="Branding Banner">
                </div>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="admission.php">Admissions</a></li>
                    <li><a href="courses.php">Courses</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-section">
                <h3>Contact Info</h3>
                <ul class="contact-list">
                    <li>
                        <div>
                            <strong>Location:</strong><br>
                            Trinity College of Engineering and Technology, Bandarikunta, Peddapalli, Telangana-505172
                        </div>
                    </li>
                    <li>
                        <div>
                            <strong>Email:</strong> <a href="mailto:officetcek@gmail.com">officetcek@gmail.com</a>
                        </div>
                    </li>
                    <li>
                        <div>
                            <strong>Phone:</strong> <a href="tel:+917396903383">7396903383</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Trinity College of Engineering & Technology. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navLinks.classList.toggle('active');
        });
    </script>
</body>

</html>
