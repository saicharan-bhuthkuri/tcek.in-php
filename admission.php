<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions - Trinity College of Engineering & Technology</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .page-header {
            background: linear-gradient(135deg, #00b894, #00cec9);
            padding: 80px 20px 40px;
            text-align: center;
            color: #fff;
            margin-bottom: 0;
        }

        .page-header h1 {
            font-size: 42px;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .page-header p {
            opacity: 0.9;
            font-size: 18px;
        }

        .admission-content {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .intro-box {
            display: flex;
            gap: 50px;
            margin-bottom: 70px;
            align-items: center;
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .intro-text h2 {
            color: #2d3436;
            margin-bottom: 25px;
            font-size: 32px;
            position: relative;
            display: inline-block;
        }

        .intro-text h2::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: #00b894;
            margin-top: 10px;
            border-radius: 2px;
        }

        .intro-text p {
            font-size: 16px;
            line-height: 1.8;
            color: #636e72;
            text-align: justify;
        }

        .principal-img-box {
            flex: 0 0 400px;
            position: relative;
        }

        .principal-img-box img {
            width: 100%;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transform: rotate(2deg);
            transition: transform 0.3s;
        }

        .principal-img-box:hover img {
            transform: rotate(0deg);
        }

        .exams-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .exam-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .exam-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #00b894, #0984e3);
        }

        .exam-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .exam-icon {
            width: 60px;
            height: 60px;
            background: rgba(0, 184, 148, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #00b894;
            margin-bottom: 25px;
        }

        .exam-card h3 {
            color: #2d3436;
            font-size: 20px;
            margin-bottom: 15px;
            font-weight: 700;
            line-height: 1.4;
        }

        .exam-card p {
            color: #636e72;
            line-height: 1.6;
            margin-bottom: 25px;
            flex-grow: 1;
            font-size: 15px;
        }

        .btn-visit {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 25px;
            background-color: #00b894;
            color: #fff;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s;
            align-self: flex-start;
        }

        .btn-visit:hover {
            background-color: #00a282;
            transform: translateX(5px);
        }

        .btn-visit i {
            margin-left: 8px;
            font-size: 14px;
        }

        .contact-box {
            background: #fff;
            padding: 50px;
            border-radius: 20px;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
            border: 1px solid #eee;
        }

        .contact-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: #00b894;
        }

        .contact-box h3 {
            font-size: 28px;
            margin-bottom: 30px;
            color: #2d3436;
        }

        .contact-details-grid {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .contact-item-lg {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-item-lg i {
            font-size: 30px;
            color: #00b894;
            margin-bottom: 15px;
        }

        .contact-item-lg strong {
            display: block;
            font-size: 18px;
            color: #2d3436;
            margin-bottom: 5px;
        }

        .contact-item-lg span {
            color: #636e72;
        }

        @media (max-width: 900px) {
            .intro-box {
                flex-direction: column;
                padding: 30px;
            }

            .principal-img-box {
                flex: none;
                width: 100%;
                max-width: 400px;
            }

            .principal-img-box img {
                transform: none;
            }

            .exams-grid {
                grid-template-columns: 1fr;
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
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="academics.php">Academics</a></li>
                <li><a href="departments.php">Departments</a></li>
                <li><a href="admission.php" class="active">Admissions</a></li>
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
        <h1>Admissions</h1>
        <p>Your Gateway to Excellence</p>
    </section>

    <!-- Main Content -->
    <section class="admission-content">
        <div class="container">

            <!-- Introduction & Image -->
            <div class="intro-box">
                <div class="intro-text" style="flex: 1;">
                    <h2>Admission Procedure</h2>
                    <p>Admissions to the B.Tech/Diploma/MBA program shall be made subject to the eligibility,
                        qualifications, and specialization prescribed by the university from time to time. Admissions at
                        the top engineering colleges in Telangana is made on the basis of merit rank obtained by the
                        qualifying candidate at an Entrance Test conducted by the University, subjected to reservations
                        prescribed by the university from time to time.</p>
                </div>
                <!-- Image -->
                <div class="principal-img-box">
                    <img src="assets/Admission/principal.jpg" alt="Admission Procedure"
                        onerror="this.style.display='none'">
                </div>
            </div>

            <!-- Exam Cards Grid -->
            <div class="exams-grid">

                <!-- EAPCET -->
                <div class="exam-card">
                    <div class="exam-icon"><i class="fas fa-laptop-code"></i></div>
                    <h3>EAPCET</h3>
                    <p
                        style="font-size: 14px; margin-top: -10px; margin-bottom: 15px; font-weight: 500; color: #00b894;">
                        Engineering, Agriculture & Pharmacy Common Entrance Test</p>
                    <p>Gateway for entry into professional courses. Qualifying EAPCET Exam is compulsory for B.Tech
                        admission through counselling (70%) or management quota (30%).</p>
                    <a href="https://tseapcet.nic.in" target="_blank" class="btn-visit">Visit Website <i
                            class="fas fa-arrow-right"></i></a>
                </div>

                <!-- CEEP -->
                <div class="exam-card">
                    <div class="exam-icon"><i class="fas fa-drafting-compass"></i></div>
                    <h3>CEEP (POLYCET)</h3>
                    <p
                        style="font-size: 14px; margin-top: -10px; margin-bottom: 15px; font-weight: 500; color: #00b894;">
                        Common Entrance Examination for Polytechnic</p>
                    <p>Admission to Diploma Courses in Engineering/Technology. Detailed information on eligibility, age,
                        and syllabus is available in the CEEP Booklet.</p>
                    <a href="https://tspolycet.nic.in" target="_blank" class="btn-visit">Visit Website <i
                            class="fas fa-arrow-right"></i></a>
                </div>

                <!-- I-CET -->
                <div class="exam-card">
                    <div class="exam-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>TS ICET</h3>
                    <p
                        style="font-size: 14px; margin-top: -10px; margin-bottom: 15px; font-weight: 500; color: #00b894;">
                        Integrated Common Entrance Test</p>
                    <p>Conducted for admission into the 1st year of MBA Degree Course in the University and Affiliated
                        colleges. Join the best MBA program in Telangana.</p>
                    <a href="https://icet.tsche.ac.in" target="_blank" class="btn-visit">Visit Website <i
                            class="fas fa-arrow-right"></i></a>
                </div>

            </div>



        </div>
    </section>

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
                <div class="footer-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60496.9805815677!2d79.367374!3d18.616313!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcd2cb4da64275b%3A0x8feb86f26d6d0771!2sTrinity%20College%20Of%20Engineering%20And%20Technology!5e0!3m2!1sen!2sus!4v1766890480055!5m2!1sen!2sus"
                        width="100%" height="150" style="border:0; border-radius: 10px;" allowfullscreen=""
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Trinity College of Engineering & Technology. All Rights Reserved.</p>
            <p style="color: #00b894; font-weight: 700; margin-top: 10px;">Created and maintained by the Department of
                AI & ML.</p>
        </div>
    </footer>

    <script>
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navLinks.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        });
    </script>
</body>

</html>
