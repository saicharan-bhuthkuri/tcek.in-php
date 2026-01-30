<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academics - Trinity College of Engineering & Technology</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Specific styles for Academics page tables if needed overrides */
        .academics-section {
            padding: 60px 0;
            background: #fdfdfd;
        }

        .has-link {
            color: #00b894;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s;
        }

        .has-link:hover {
            color: #008f72;
            text-decoration: underline;
        }

        /* Center the tabs */
        .tabs-container {
            margin-top: 40px;
        }

        .page-header {
            background: #00b894;
            /* website green */
            padding: 80px 20px 30px;
            text-align: center;
            color: #fff;
        }

        .page-header h1 {
            font-size: 40px;
            margin-bottom: 20px;
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
                <li><a href="academics.php" class="active">Academics</a></li>
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

    <!-- Main Content -->
    <main>
        <!-- Page Header -->
        <section class="page-header">
            <h1>Academics</h1>
            <p>Calendars and Regulations</p>
        </section>

        <section class="academics-section">
            <div class="container">

                <!-- Tab Buttons -->
                <div class="tabs-container">
                    <button class="tab-btn active" onclick="openCourseTab(event, 'academic-calendars')">Academic
                        Calendars</button>
                    <button class="tab-btn" onclick="openCourseTab(event, 'academic-regulations')">Academic
                        Regulations</button>
                </div>

                <!-- Academic Calendars Content -->
                <div id="academic-calendars" class="tab-content" style="display: block;">
                    <div class="table-scroll">
                        <table class="comparison-table">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name of the Courses</th>
                                    <th>Academic Year</th>
                                    <th>Academic calender</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="S.No.">1</td>
                                    <td data-label="Name of the Courses">B.Tech I Year II Semester Revised Academic
                                        Calendar for AY 2024-25</td>
                                    <td data-label="Academic Year">2024-25</td>
                                    <td data-label="Academic calender"><a
                                            href="assets/academic/B.Tech_._I_YEAR_I_II_SEMESTERS_.pdf" target="_blank"
                                            class="has-link">View</a></td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">2</td>
                                    <td data-label="Name of the Courses">B.Tech/B.Pharm.III YEAR I & II SEMESTERS</td>
                                    <td data-label="Academic Year">2022-23</td>
                                    <td data-label="Academic calender"><a
                                            href="assets/academic/B.Tech_B_.Pharm_III_YEAR_I_II_SEMESTERS_.pdf"
                                            target="_blank" class="has-link">View</a></td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">3</td>
                                    <td data-label="Name of the Courses">B.Tech IV YEAR I & II SEMESTERS</td>
                                    <td data-label="Academic Year">2021-22</td>
                                    <td data-label="Academic calender"><a href="#" class="has-link">View</a></td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">4</td>
                                    <td data-label="Name of the Courses">MBA and MCA II YEAR I & II SEMESTERS</td>
                                    <td data-label="Academic Year">2023-24</td>
                                    <td data-label="Academic calender"><a
                                            href="assets/academic/MBAandMCAIIYEARIIISEMESTERS.pdf" target="_blank"
                                            class="has-link">View</a></td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">5</td>
                                    <td data-label="Name of the Courses">MBA MCA I YEAR I & II SEMESTERS</td>
                                    <td data-label="Academic Year">2024-25</td>
                                    <td data-label="Academic calender"><a href="#" class="has-link">View</a></td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">6</td>
                                    <td data-label="Name of the Courses">Revised B.Tech & B.Pharm IV YEAR I & II
                                        Semesters Academic Calendar for 2023-24</td>
                                    <td data-label="Academic Year">2023-24</td>
                                    <td data-label="Academic calender"><a
                                            href="assets/academic/Revised_B._Tech_.B_._Pharm_._IV_YEAR_I_II_Semesters_Academic_Calendar_for_2023-24_.pdf"
                                            target="_blank" class="has-link">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Academic Regulations Content -->
                <div id="academic-regulations" class="tab-content">
                    <div class="table-scroll">
                        <table class="comparison-table">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name of the Regulations</th>
                                    <th>Academic Regulations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="S.No.">1</td>
                                    <td data-label="Name of the Regulations">R18 B.TECH Academic Regulations</td>
                                    <td data-label="Academic Regulations"><a
                                            href="assets/academic/R18 B.TECH. Regulations.pdf" target="_blank"
                                            class="has-link">View</a></td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">2</td>
                                    <td data-label="Name of the Regulations">R22 B.Tech. Academic Regulations</td>
                                    <td data-label="Academic Regulations"><a
                                            href="assets/academic/R22 B.Tech. Academic Regulations.pdf" target="_blank"
                                            class="has-link">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section>

    </main>

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

    <script src="js/tabs.js"></script>
    <script>
        // Hamburger Menu Toggle
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navLinks.classList.toggle('active');
            document.body.classList.toggle('no-scroll');
        });

        const links = document.querySelectorAll('.nav-links a');
        links.forEach(link => {
            link.addEventListener('click', () => {
                hamburger.classList.remove('active');
                navLinks.classList.remove('active');
                document.body.classList.remove('no-scroll');
            });
        });

        // Navbar Scroll Effect
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });

        // Ensure default tab is open because js/tabs.js might look for .tab-btn and click it, 
        // effectively resetting to first tab.
        // The HTML has active class on the first button and display:block on the first content manually set
        // so it should work even without JS for initial render, and JS handles switching.
    </script>
</body>

</html>
