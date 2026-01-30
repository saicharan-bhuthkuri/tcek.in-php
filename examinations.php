<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examinations - Trinity College of Engineering & Technology</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Specific styles for Examinations page tables if needed overrides */
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

        .view-btn {
            display: inline-block;
            padding: 8px 16px;
            background: #00b894;
            /* Solid Green */
            color: #fff;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 184, 148, 0.2);
        }

        .view-btn:hover {
            background: #008f72;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 184, 148, 0.3);
        }

        /* Solid Green Header Table Design */
        .comparison-table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            /* Clips corners */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            /* Subtle shadow for the whole table */
            table-layout: auto;
            /* Allow sizing based on content */
        }

        .table-scroll {
            overflow-x: auto;
            padding-bottom: 5px;
            /* Space for scrollbar */
            width: 100%;
            display: block;
            /* Ensure it behaves as a block to scroll */
        }

        .comparison-table thead tr {
            background: #00b894;
            /* Solid Header Background */
        }

        .comparison-table th {
            color: #fff;
            /* White Text */
            font-weight: 600;
            text-transform: capitalize;
            /* "Date", "Description" etc. */
            font-size: 15px;
            border: none;
            padding: 15px;
            /* Reduced padding to fit better */
            white-space: nowrap;
            vertical-align: middle;
        }

        .comparison-table tbody tr {
            border-bottom: 1px solid #eee;
            transition: background 0.2s;
        }

        .comparison-table tbody tr:last-child {
            border-bottom: none;
        }

        .comparison-table tbody tr:hover {
            background: #f9f9f9;
            /* Subtle hover */
        }

        .comparison-table td {
            background: #fff;
            border-bottom: 1px solid #f0f0f0;
            padding: 15px;
            /* Reduced padding */
            vertical-align: middle;
            color: #2d3436;
            font-size: 15px;
        }

        /* Result Date specific override */
        .result-date {
            color: #2d3436;
            font-weight: 700;
            font-size: 15px;
            display: inline-block;
            white-space: nowrap;
        }

        @media (min-width: 769px) {

            /* Specific Column Overrides - Desktop Only */
            .comparison-table th:nth-child(1),
            .comparison-table td:nth-child(1) {
                width: 80px;
                /* Further reduced from 100px */
                text-align: left;
                /* Align Left like the image */
                font-weight: 700;
            }

            .comparison-table th:nth-child(2),
            .comparison-table td:nth-child(2) {
                width: auto;
                text-align: left;
            }

            .comparison-table th:nth-child(3),
            .comparison-table td:nth-child(3) {
                width: 120px;
                /* Reduced from 150px to save space */
                text-align: center;
                white-space: nowrap !important;
            }

            /* Specific fix for Results Table */
            #results .comparison-table th:nth-child(1),
            #results .comparison-table td:nth-child(1) {
                width: 150px !important;
                padding-left: 25px;
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
                <li><a href="admission.php">Admissions</a></li>
                <li><a href="examinations.php" class="active">Examinations</a></li>
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
            <h1>Examinations</h1>
            <p>Notifications, Time Tables, and Results</p>
        </section>

        <section class="academics-section">
            <div class="container">

                <!-- Tab Buttons -->
                <div class="tabs-container">
                    <button class="tab-btn active" onclick="openCourseTab(event, 'notice-board')">Notice Board</button>
                    <button class="tab-btn" onclick="openCourseTab(event, 'time-table')">Time Table</button>
                    <button class="tab-btn" onclick="openCourseTab(event, 'results')">Results</button>
                </div>

                <!-- Notice Board Content -->
                <div id="notice-board" class="tab-content" style="display: block;">
                    <h2>Examination Notifications</h2>
                    <div class="table-scroll">
                        <table class="comparison-table">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name of the Notifications</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="S.No.">1</td>
                                    <td data-label="Name of the Notifications">B.Tech I Year I Sem (R22) Regular/Supply,
                                        I-I (R18, R16) Supply, I Year (R15, R13) Supply & I Year II Sem (R22, R18, R16)
                                        Supply Examinations.</td>
                                    <td data-label="View"><a href="#" class="view-btn">View</a></td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">2</td>
                                    <td data-label="Name of the Notifications">B.Tech II Year I Sem Regular/Supply & II
                                        Year II Sem Supply Examinations FEB-2024</td>
                                    <td data-label="View"><a href="#" class="view-btn">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Time Table Content -->
                <div id="time-table" class="tab-content">
                    <h2>Time Table</h2>
                    <p>The Examinations Time Table as per the directions of JNTU, Hyderabad.</p>
                    <div style="margin-top: 30px;">
                        <h3 style="margin-bottom: 20px;">B.Tech I Year End Examination Schedules</h3>
                        <div class="table-scroll">
                            <table class="comparison-table">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Name of the Examination</th>
                                        <th>Month/Year</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="S.No.">1</td>
                                        <td data-label="Name of the Examination">I YEAR B.TECH II SEMESTER â€“ R18
                                            REGULATIONS SUPPLEMENTARY EXAMINATIONS</td>
                                        <td data-label="Month/Year">JUNE-2022</td>
                                        <td data-label="View"><a href="#" class="view-btn">View</a></td>
                                    </tr>
                                    <tr>
                                        <td data-label="S.No.">2</td>
                                        <td data-label="Name of the Examination">B.TECH I YEAR I SEMESTER (CSE-ECE) â€“
                                            R18 REGULATIONS REGULAR-SUPPLY EXAMINATIONS</td>
                                        <td data-label="Month/Year">JUNE-2022</td>
                                        <td data-label="View"><a href="#" class="view-btn">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Results Content -->
                <div id="results" class="tab-content">
                    <h2>Results</h2>
                    <div class="table-scroll">
                        <table class="comparison-table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Result Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Date"><span class="result-date">07-09-2019</span></td>
                                    <td data-label="Result Description">B.TECH III-I & III-II RC/RV
                                        REGULAR/SUPPLEMENTARY MAY 2019 EXAMINATIONS RESULTS PUBLISHED.</td>
                                </tr>
                                <tr>
                                    <td data-label="Date"><span class="result-date">04-09-2019</span></td>
                                    <td data-label="Result Description">MBA ALL SEMESTER APRIL 2019 EXAMINATIONS
                                        RECOUNTING / REVALUATION RESULTS PUBLISHED.</td>
                                </tr>
                                <tr>
                                    <td data-label="Date"><span class="result-date">03-09-2019</span></td>
                                    <td data-label="Result Description">B.TECH II-I & II-II RC/RV REGULAR/SUPPLEMENTARY
                                        MAY 2019 EXAMINATIONS RESULTS PUBLISHED.</td>
                                </tr>
                                <tr>
                                    <td data-label="Date"><span class="result-date">03-09-2019</span></td>
                                    <td data-label="Result Description">B.TECH IV-II RC/RV ADVANCED SUPPLEMENTARY JULY
                                        2019 EXAMINATIONS RESULTS PUBLISHED.</td>
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
    </script>
</body>

</html>
