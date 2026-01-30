<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Trinity College of Engineering & Technology</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        .gallery-grid {
            column-count: 4;
            column-gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            margin-bottom: 20px;
            break-inside: avoid;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        @media (max-width: 992px) {
            .gallery-grid {
                column-count: 3;
            }
        }

        @media (max-width: 768px) {
            .gallery-grid {
                column-count: 2;
            }
        }

        @media (max-width: 576px) {
            .gallery-grid {
                column-count: 1;
            }
        }

        .gallery-item:hover img {
            transform: scale(1.05);
            /* Subtle zoom */
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .view-btn {
            color: white;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
            backdrop-filter: blur(5px);
        }

        /* Lightbox Styles */
        .lightbox {
            display: none;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .lightbox.active {
            display: flex;
        }

        .lightbox-content {
            max-width: 90%;
            max-height: 90%;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            animation: zoomIn 0.3s ease;
        }

        .close-lightbox {
            position: absolute;
            top: 20px;
            right: 30px;
            color: #fff;
            font-size: 40px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .close-lightbox:hover {
            color: #00b894;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.9);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        .page-header {
            background: #00b894;
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
                <li><a href="gallery.php" class="active">Gallery</a></li>
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
        <h1>Photo Gallery</h1>
        <p>Glimpses of life at Trinity College</p>
    </section>

    <!-- Gallery Grid -->
    <section>
        <div class="gallery-grid">
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/autonomous.jpg" alt="Autonomous Status Celebration">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/naac2.jpg" alt="NAAC Accreditation">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/infosys.jpg" alt="Campus Event">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/im.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/im1.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/im2.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/im3.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/im4.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/im5.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/im6.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/im8.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/IMG-1.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/IMG-4.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/IMG-5.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/IMG-6.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/IMG-7.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/IMG-8.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/IMG2.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/pamplet1.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/paper.jpg" alt="News Paper Clipping">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/paper1.jpg" alt="News Paper Clipping">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/paper2.jpg" alt="News Paper Clipping">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/paper3.jpg" alt="News Paper Clipping">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/paper4.jpg" alt="News Paper Clipping">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/paper5.jpg" alt="News Paper Clipping">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/papers.jpg" alt="News Paper Clipping">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="lightbox" onclick="closeLightbox()">
        <span class="close-lightbox">&times;</span>
        <img id="lightbox-img" class="lightbox-content" src="" alt="Zoomed Image">
    </div>

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

        // Navbar Scroll
        window.addEventListener('scroll', () => {
            const nav = document.querySelector('nav');
            if (window.scrollY > 50) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });

        // Lightbox Functions
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');

        function openLightbox(element) {
            const img = element.querySelector('img');
            lightboxImg.src = img.src;
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        }

        function closeLightbox() {
            lightbox.classList.remove('active');
            document.body.style.overflow = 'auto'; // Restore scrolling
        }
    </script>
</body>

</html>
