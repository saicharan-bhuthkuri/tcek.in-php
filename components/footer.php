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
</footer>

<script>
    // Hamburger Menu Toggle
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navLinks.classList.toggle('active');
        document.body.classList.toggle('no-scroll'); // Lock body scroll
    });

    // Close mobile menu when a link is clicked
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