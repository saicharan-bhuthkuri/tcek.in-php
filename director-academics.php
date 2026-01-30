<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Director Academics - Trinity College of Engineering & Technology</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        .profile-section {
            padding: 80px 20px;
            background: #fdfdfd;
        }

        .profile-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            gap: 60px;
            align-items: flex-start;
        }

        .profile-image-box {
            flex: 0 0 400px;
            position: relative;
        }

        .profile-image-box img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 2;
        }

        .profile-image-box::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            width: 100%;
            height: 100%;
            border: 4px solid #00b894;
            border-radius: 20px;
            z-index: 1;
        }

        .profile-content {
            flex: 1;
        }

        .profile-role {
            font-size: 16px;
            color: #00b894;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 700;
            margin-bottom: 10px;
            display: block;
        }

        .profile-name {
            font-size: 36px;
            color: #2d3436;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .profile-text {
            font-size: 16px;
            line-height: 1.8;
            color: #636e72;
            margin-bottom: 20px;
            text-align: justify;
        }

        .profile-text h3 {
            font-size: 20px;
            color: #2d3436;
            margin-top: 25px;
            margin-bottom: 15px;
            border-left: 4px solid #00b894;
            padding-left: 15px;
        }

        .profile-text ul {
            list-style: none;
            padding: 0;
            margin-bottom: 20px;
        }

        .profile-text li {
            position: relative;
            padding-left: 20px;
            margin-bottom: 10px;
        }

        .profile-text li::before {
            content: 'â€¢';
            color: #00b894;
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        .quote-box {
            background: #f0fdf9;
            border-left: 4px solid #00b894;
            padding: 20px;
            margin: 30px 0;
            font-style: italic;
            color: #555;
        }

        .contact-details {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            color: #2d3436;
        }

        .contact-item i {
            width: 30px;
            color: #00b894;
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

        @media (max-width: 900px) {
            .profile-container {
                flex-direction: column;
                align-items: center;
            }

            .profile-image-box {
                flex: 0 0 auto;
                width: 100%;
                max-width: 350px;
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
        <h1>Director Academics</h1>
        <p><a href="about-us.php" style="color: #fff; text-decoration: underline;">About Us</a> / Director Academics
        </p>
    </section>

    <!-- Profile Section -->
    <section class="profile-section">
        <div class="profile-container">
            <div class="profile-image-box">
                <img src="assets/about us/director_academics.png" alt="Dr. Ashok Kumar Vootla">
            </div>
            <div class="profile-content">
                <span class="profile-role">Director Academics</span>
                <h2 class="profile-name">Dr. Ashok Kumar Vootla</h2>
                <div class="profile-text">
                    <p>The Trinity College of Engineering and Technology functions under the aegis of Trinity Group of
                        Institutes, which operates many schools and colleges in Telangana State, India.</p>

                    <p>Dr. Vootla earned his Ph.D. in Mechanical Engineering from JJT University, Rajasthan, an
                        institution widely recognized for its research excellence. Prior to this, he completed his
                        M.Tech in Industrial Engineering from Jawaharlal Nehru Technological University (JNTU),
                        Hyderabad. Throughout his distinguished career, Dr. Vootla has been committed to advancing
                        education and research in the field of mechanical engineering.</p>

                    <h3>Academic and Professional Achievements</h3>
                    <ul>
                        <li>Over 15 years of teaching experience across a wide range of mechanical engineering subjects.
                        </li>
                        <li>Authored four significant books focusing on zinc coating on mild steel and aluminum during
                            friction surfacing, as well as the investigation and analysis of friction stir welding (FSW)
                            of various aluminum alloys.</li>
                        <li>Published and presented numerous technical papers in reputed national and international
                            conferences.</li>
                        <li>Active member of esteemed professional bodies such as ISTE, IAENG, IIW, and IRED.</li>
                        <li>Serves as an International Editorial Advisory Board Member for the IJIEMR Journal.</li>
                    </ul>

                    <h3>Awards and Honors</h3>
                    <ul>
                        <li>Recipient of the Best Teacher Award (Academic) for outstanding contributions to education.
                        </li>
                        <li>Honored with the prestigious "Theressa Award" by TARA Arts Academy in recognition of his
                            relentless service and dedication to the academic field.</li>
                    </ul>

                    <h3>Vision and Leadership</h3>
                    <p>Dr. Ashok Kumar Vootla believes that quality education is the cornerstone of personal and
                        societal growth. Under his academic leadership, Trinity College of Engineering and Technology
                        continues to nurture innovation, research-driven learning, and holistic student development. His
                        strategic vision focuses on integrating modern pedagogical practices with traditional academic
                        values to create a dynamic learning environment.</p>

                    <h3>Message from the Director</h3>
                    <div class="quote-box">
                        "At Trinity, we aspire to mold our students into skilled professionals and responsible citizens
                        who can face global challenges with confidence and integrity. Through innovation, perseverance,
                        and a commitment to excellence, we aim to make a meaningful impact on society."
                    </div>

                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:director@tcek.edu.in"
                                style="color: inherit; text-decoration: none;">director@tcek.edu.in</a>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <a href="tel:+917396903383" style="color: inherit; text-decoration: none;">+91
                                7396903383</a>
                        </div>
                    </div>
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
