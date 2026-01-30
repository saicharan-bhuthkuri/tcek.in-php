<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSE Lecture Notes - E-CONTENT</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .search-container {
            max-width: 600px;
            margin: 0 auto 40px;
            display: flex;
            gap: 10px;
        }

        .search-input {
            flex: 1;
            padding: 12px 20px;
            border: 2px solid #eee;
            border-radius: 50px;
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            border-color: #00b894;
            box-shadow: 0 5px 15px rgba(0, 184, 148, 0.1);
        }

        .reset-btn {
            padding: 12px 25px;
            background: #ff7675;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .reset-btn:hover {
            background: #d63031;
        }

        .academic-year-section {
            margin-bottom: 50px;
        }

        .academic-year-title {
            font-size: 24px;
            color: #2d3436;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #00b894;
            display: inline-block;
        }

        .semester-title {
            font-size: 20px;
            color: #00b894;
            margin: 20px 0 15px;
            font-weight: 600;
        }

        .notes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .note-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid #eee;
            transition: transform 0.3s ease;
        }

        .note-card:hover {
            transform: translateY(-5px);
            border-color: #00b894;
        }

        .subject-name {
            font-size: 16px;
            font-weight: 600;
            color: #2d3436;
            margin-bottom: 15px;
            min-height: 48px;
            /* Alignment */
            display: flex;
            align-items: center;
        }

        .download-btn {
            display: inline-block;
            padding: 8px 20px;
            background: #00b894;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        .download-btn:hover {
            background: #00a884;
        }

        .no-results {
            text-align: center;
            padding: 40px;
            color: #636e72;
            font-size: 18px;
            display: none;
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
                <li><a href="examinations.php">Examinations</a></li>
                <li><a href="placement-cell.php">Placement Cell</a></li>
                <li><a href="facilities.php">Facilities</a></li>
                <li><a href="research-publications.php">Research Publications</a></li>
                <li><a href="e-content.php" class="active">E-CONTENT</a></li>
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

    <!-- Page Header -->
    <section class="page-header" style="margin-bottom: 0;">
        <h1>CSE Lecture Notes</h1>
        <p><a href="e-content.php" style="color: #fff; text-decoration: underline;">E-CONTENT</a> / CSE Notes</p>
    </section>

    <section class="content-section">
        <div class="container">

            <!-- Search Bar -->
            <div class="search-container">
                <input type="text" id="searchInput" class="search-input" placeholder="Search notes...">
                <button onclick="resetSearch()" class="reset-btn">Reset</button>
            </div>

            <div id="notesContainer">

                <!-- Year 1 -->
                <div class="academic-year-section">
                    <h2 class="academic-year-title">Year 1</h2>

                    <h3 class="semester-title">Semester 1</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Matrices and Calculus</div>
                            <a href="assets/e-contect/matrices&calculus.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Engineering Chemistry</div>
                            <a href="assets/e-contect/CHEMISTRY.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Programming for Problem Solving</div>
                            <a href="assets/e-contect/PPS.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Basic Electrical Engineering</div>
                            <a href="assets/e-contect/BEE.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Computer Aided Engineering Graphics</div>
                            <a href="assets/e-contect/drawing.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Elements of Computer Science & Engineering</div>
                            <a href="assets/e-contect/ecse.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>

                    <h3 class="semester-title">Semester 2</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Ordinary Differential Equations and Vector Calculus</div>
                            <a href="assets/e-contect/OrdinaryDifferentialEquationsandVectorCalculus.pdf"
                                class="download-btn" target="_blank"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Applied Physics</div>
                            <a href="assets/e-contect/APPLIED-PHYSICS.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Engineering Workshop</div>
                            <a href="assets/e-contect/ews.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">English for Skill Enhancement</div>
                            <a href="assets/e-contect/EnglishforSkillEnhancement.pdf" class="download-btn"
                                target="_blank"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Electronic Devices and Circuits</div>
                            <a href="assets/e-contect/edc.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>
                </div>

                <!-- Year 2 -->
                <div class="academic-year-section">
                    <h2 class="academic-year-title">Year 2</h2>

                    <h3 class="semester-title">Semester 1</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Digital Electronics</div>
                            <a href="assets/e-contect/de.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Data Structures</div>
                            <a href="assets/e-contect/ds.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Computer Oriented Statistical Methods</div>
                            <a href="assets/e-contect/cosm.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Computer Organization and Architecture</div>
                            <a href="assets/e-contect/coa.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Object Oriented Programming through Java</div>
                            <a href="assets/e-contect/java.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Database Management Systems</div>
                            <a href="assets/e-contect/dbms.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>

                    <h3 class="semester-title">Semester 2</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Discrete Mathematics</div>
                            <a href="assets/e-contect/dm.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Business Economics & Financial Analysis</div>
                            <a href="assets/e-contect/befa.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Operating Systems</div>
                            <a href="assets/e-contect/os.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Database Management Systems</div>
                            <a href="assets/e-contect/dbms.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Software Engineering</div>
                            <a href="assets/e-contect/se.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>
                </div>

                <!-- Year 3 -->
                <div class="academic-year-section">
                    <h2 class="academic-year-title">Year 3</h2>

                    <h3 class="semester-title">Semester 1</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Design and Analysis of Algorithms</div>
                            <a href="assets/e-contect/daa.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Computer Networks</div>
                            <a href="assets/e-contect/cn.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">DevOps</div>
                            <a href="assets/e-contect/devops.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Professional Elective-I</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Professional Elective-II</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>

                    <h3 class="semester-title">Semester 2</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Machine Learning</div>
                            <a href="assets/e-contect/ML.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Formal Languages and Automata Theory</div>
                            <a href="assets/e-contect/flat.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Artificial Intelligence</div>
                            <a href="assets/e-contect/ai.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Professional Elective-III</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Open Elective-I</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>
                </div>

                <!-- Year 4 -->
                <div class="academic-year-section">
                    <h2 class="academic-year-title">Year 4</h2>

                    <h3 class="semester-title">Semester 1</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Cryptography and Network Security</div>
                            <a href="assets/e-contect/cns.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Compiler Design</div>
                            <a href="assets/e-contect/cd.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Professional Elective-IV</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Professional Elective-V</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Open Elective-II</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>

                    <h3 class="semester-title">Semester 2</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Organizational Behavior</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Professional Elective-VI</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Open Elective-III</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>
                </div>

            </div>

            <div id="noResults" class="no-results">
                No notes found matching your search.
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
        // Hamburger Menu Toggle
        const hamburger = document.querySelector('.hamburger');
        const navLinks = document.querySelector('.nav-links');

        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navLinks.classList.toggle('active');
        });

        // Search Functionality
        const searchInput = document.getElementById('searchInput');
        const noteCards = document.querySelectorAll('.note-card');
        const noResults = document.getElementById('noResults');
        const notesContainer = document.getElementById('notesContainer');

        searchInput.addEventListener('input', function (e) {
            const searchTerm = e.target.value.toLowerCase();
            let hasResults = false;

            noteCards.forEach(card => {
                const subject = card.querySelector('.subject-name').textContent.toLowerCase();
                if (subject.includes(searchTerm)) {
                    card.style.display = 'block';
                    hasResults = true;
                } else {
                    card.style.display = 'none';
                }
            });

            // Handle empty sections visibility or just show/hide no results
            if (hasResults) {
                noResults.style.display = 'none';
                notesContainer.style.display = 'block';
            } else {
                noResults.style.display = 'block';
                // Optional: hide section titles if needed, but keeping it simple for now
            }
        });

        function resetSearch() {
            searchInput.value = '';
            noteCards.forEach(card => {
                card.style.display = 'block';
            });
            noResults.style.display = 'none';
            notesContainer.style.display = 'block';
        }

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
