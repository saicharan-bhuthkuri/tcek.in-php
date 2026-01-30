<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placements - Trinity College of Engineering & Technology</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .page-header {
            background: #00b894;
            padding: 80px 20px 40px;
            text-align: center;
            color: #fff;
        }

        .page-header h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .tpo-section {
            padding: 60px 0;
            background: #fff;
        }

        .tpo-container {
            display: flex;
            gap: 40px;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .tpo-image {
            flex: 0 0 300px;
            text-align: center;
        }

        .tpo-image img {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 15px;
        }

        .tpo-image h3 {
            color: #2d3436;
            margin-bottom: 5px;
        }

        .tpo-image p {
            color: #00b894;
            font-weight: 600;
        }

        .tpo-content {
            flex: 1;
            min-width: 300px;
        }

        .tpo-content p {
            margin-bottom: 15px;
            line-height: 1.8;
            color: #636e72;
            font-size: 16px;
        }

        .tpo-quote {
            background: #f1f2f6;
            padding: 20px;
            border-left: 5px solid #00b894;
            border-radius: 5px;
            margin-top: 20px;
            font-style: italic;
            color: #2d3436;
        }

        /* Tabs Section */
        .tabs-section {
            padding: 60px 0;
            background: #f9f9f9;
        }

        .tabs-nav {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .tab-btn {
            padding: 12px 25px;
            border: none;
            background: #fff;
            color: #636e72;
            cursor: pointer;
            border-radius: 30px;
            font-weight: 600;
            font-size: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .tab-btn.active,
        .tab-btn:hover {
            background: #00b894;
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 184, 148, 0.2);
        }

        .tab-content {
            display: none;
            background: #fff;
            padding: 50px;
            border-radius: 8px;
            /* Slightly rounded corners */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            /* Soft shadow */
            animation: fadeIn 0.5s ease;
            margin-top: 10px;
        }

        .tab-content.active {
            display: block;
        }

        .tab-content h2 {
            color: #2d3436;
            margin-bottom: 25px;
            font-size: 26px;
            font-weight: 700;
            border-bottom: 3px solid #00b894;
            /* Solid green underline */
            display: inline-block;
            padding-bottom: 8px;
            letter-spacing: -0.5px;
        }

        .tab-content p {
            margin-bottom: 20px;
            line-height: 1.8;
            color: #636e72;
            font-size: 16px;
        }

        /* Clean List Styling */
        .tab-content ul {
            margin-left: 20px;
            color: #636e72;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .tab-content li {
            margin-bottom: 10px;
            position: relative;
            padding-left: 10px;
        }

        .tab-content li::marker {
            color: #00b894;
            /* Green bullets */
        }

        .students-grid,
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .students-grid img,
        .gallery-grid img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .students-grid img:hover,
        .gallery-grid img:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .tpo-container {
                flex-direction: column;
                align-items: center;
            }

            .tpo-content {
                text-align: left;
            }
        }
    </style>
</head>

<body>

    <!-- Top Header -->
    <header class="main-header">
        <div class="header-container">
            <div class="logo-section">
                <!-- Assuming header_banner.png is the main college logo/title image -->
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
            <!-- Logo removed as per request -->
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

    <div class="page-header">
        <h1>Training & Placements</h1>
        <p>Shaping Futures, Creating Professionals</p>
    </div>

    <!-- TPO Section -->
    <section class="tpo-section">
        <div class="container tpo-container">
            <div class="tpo-image">
                <img src="assets/placements/dr_arif_arfat.png" alt="Dr. Arif Arfat">
                <h3>Dr. Arif Arfat</h3>
                <p>Training and Placement Officer</p>
            </div>
            <div class="tpo-content">
                <p>The Trinity College of Engineering and Technology functions under the aegis of Trinity Group of
                    Institutes, which operates many schools and colleges in Telangana State, India.</p>
                <p>We are striving hard to look forward that the institute achieves great heights of excellence and
                    becomes a national level institution. The institute has produced outstanding engineers, who have
                    successfully proved their professional competence in their respective fields.</p>
                <div class="tpo-quote">
                    "I extend my best wishes to all my students and I am sure that they will create their own path of
                    grand success in life."
                </div>
            </div>
        </div>
    </section>

    <!-- Tabs Section -->
    <section class="tabs-section">
        <div class="container">
            <div class="tabs-nav">
                <button class="tab-btn active" onclick="openTab(event, 'skill')">Skill Enhancement</button>
                <button class="tab-btn" onclick="openTab(event, 'task')">TASK</button>
                <button class="tab-btn" onclick="openTab(event, 'counselling')">Personal Counselling</button>
                <button class="tab-btn" onclick="openTab(event, 'placed')">Students Placed</button>
                <button class="tab-btn" onclick="openTab(event, 'gallery')">Placements Gallery</button>
            </div>

            <!-- Skill Enhancement Content -->
            <div id="skill" class="tab-content active">
                <h2>Skill Enhancement Program</h2>
                <div class="content-wrapper">
                    <p>Most of the students at Trinity College of Engineering have come from a rural background, and
                        their language skills and employability skills are not up to industry requirements. Moreover,
                        the skill set is evolving rapidly. To cope with the rapid change, students are trained in
                        specific areas that will help them explore new knowledge, attitudes, and skills, both personally
                        and professionally.</p>
                    <p>Hence, the Skill Enhancement Program was introduced at TCEK. Under this program, our students
                        undergo training and learning of about 6 hours in a week.</p>
                    <p>The students undergo training in:</p>
                    <ul style="margin-left: 20px; color: #636e72; line-height: 1.8;">
                        <li>Personality Development Exercises</li>
                        <li>Managing Emotions</li>
                        <li>Time Management</li>
                        <li>Stress Management</li>
                    </ul>
                    <p style="margin-top: 15px;">They are also trained and given opportunities to enhance their skills
                        like public speaking, presentation skills, body language, and preparation of reports.</p>
                </div>
            </div>

            <!-- TASK Content -->
            <div id="task" class="tab-content">
                <h2>TASK (Telangana Academy for Skill and Knowledge)</h2>
                <p>The college is registered with TASK (Telangana Academy for Skill and Knowledge) to enhance skilling
                    synergy among students.</p>
                <p>Through our partnership with TASK, we provide:</p>
                <ul style="margin-left: 20px; color: #636e72; line-height: 1.8;">
                    <li>Access to diverse skill development courses.</li>
                    <li>Industry-relevant training programs.</li>
                    <li>Placement assistance and drives.</li>
                    <li>Workshops and hackathons for hands-on learning.</li>
                </ul>
            </div>

            <!-- Personal Counselling Content -->
            <div id="counselling" class="tab-content">
                <h2>Personal Counselling</h2>
                <p>The aim of providing personal counselling is to facilitate comprehensive guidance programmes that
                    equip the students with necessary attitude, knowledge, behaviour and skills to become sensible and
                    responsible individuals. Personal counselling allows individuals to explore their feelings,
                    behaviours, beliefs and help them to work through challenging or influential memories. It also helps
                    an individual to identify aspects of their lives that they can change for their betterment, set
                    personal goals and work towards desired changes.</p>

                <p>The primary goal to provide counselling session to the students at Trinity college of engineering is
                    to help individuals build upon their strengths and to minimize their weakness and enhance their
                    ability to address their issues of life and personal adjustment. The students who have inferiority
                    complex are also counselled and they are suggested to build self confidence. Special observation is
                    made towards identified the change in their attitude.</p>

                <p>The counsellor clarifies nature of concern, offers supports, encourages a deeper understanding of
                    issues, and provides information and guidelines to work towards a problem â€“ solving solution.</p>

                <p>The personal counselling is done for 250 students on various issues like improper behaviour,
                    irregularity to college, not being punctual to college, being poor in academics subjects etc.</p>
            </div>

            <!-- Students Placed Content -->
            <div id="placed" class="tab-content">
                <h2>Students Placed</h2>
                <p>Our students are placed in top MNCs and reputed core companies.</p>
                <div class="students-grid">
                    <!-- Images will be populated here -->
                    <img src="assets/placements/student1.jpeg" alt="Student Placed">
                    <img src="assets/placements/student2.jpeg" alt="Student Placed">
                    <img src="assets/placements/student3.jpeg" alt="Student Placed">
                    <img src="assets/placements/student4.jpeg" alt="Student Placed">
                    <img src="assets/placements/student5.jpeg" alt="Student Placed">
                    <img src="assets/placements/student6.jpeg" alt="Student Placed">
                    <img src="assets/placements/student7.jpeg" alt="Student Placed">
                    <img src="assets/placements/student8.jpeg" alt="Student Placed">
                    <img src="assets/placements/student9.jpeg" alt="Student Placed">
                    <img src="assets/placements/student11.jpeg" alt="Student Placed">
                    <img src="assets/placements/student12.jpeg" alt="Student Placed">
                    <img src="assets/placements/student13.jpeg" alt="Student Placed">
                    <img src="assets/placements/student15.jpeg" alt="Student Placed">
                </div>
            </div>

            <!-- Placements Gallery Content -->
            <div id="gallery" class="tab-content">
                <h2>Placements Gallery</h2>
                <div class="gallery-grid">
                    <img src="assets/placements/img1.jpeg" alt="Placement Event">
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
                        <!-- <i class="fas fa-map-marker-alt"></i> -->
                        <div>
                            <strong>Location:</strong><br>
                            Trinity College of Engineering and Technology, Bandarikunta, Peddapalli, Telangana-505172
                        </div>
                    </li>
                    <li>
                        <!-- <i class="fas fa-envelope"></i> -->
                        <div>
                            <strong>Email:</strong> <a href="mailto:officetcek@gmail.com">officetcek@gmail.com</a>
                        </div>
                    </li>
                    <li>
                        <!-- <i class="fas fa-phone"></i> -->
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

    <script src="js/main.js"></script>
    <script>
        function openTab(evt, tabName) {
            var i, tabContent, tabBtns;
            tabContent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabContent.length; i++) {
                tabContent[i].style.display = "none";
                tabContent[i].classList.remove("active");
            }
            tabBtns = document.getElementsByClassName("tab-btn");
            for (i = 0; i < tabBtns.length; i++) {
                tabBtns[i].className = tabBtns[i].className.replace(" active", "");
            }
            document.getElementById(tabName).style.display = "block";
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.className += " active";
        }
    </script>
</body>

</html>
