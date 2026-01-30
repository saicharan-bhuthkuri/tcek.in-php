<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us - Trinity College of Engineering & Technology</title>
    <?php include 'components/head.php'; ?>
    <style>
        .contact-section {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        @media (max-width: 992px) {
            .contact-section {
                grid-template-columns: 1fr;
            }
        }

        .contact-info {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid #f0f0f0;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
        }

        .info-icon {
            width: 50px;
            height: 50px;
            background: rgba(0, 184, 148, 0.1);
            color: #00b894;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            margin-right: 20px;
            flex-shrink: 0;
        }

        .info-content h3 {
            font-size: 18px;
            color: #2d3436;
            margin-bottom: 5px;
            font-weight: 600;
        }

        .info-content p,
        .info-content a {
            font-size: 15px;
            color: #636e72;
            line-height: 1.6;
            text-decoration: none;
        }

        .info-content a:hover {
            color: #00b894;
        }

        .contact-form-container {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid #f0f0f0;
        }

        .form-title {
            font-size: 24px;
            color: #2d3436;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #dfe6e9;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .form-control:focus {
            border-color: #00b894;
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 184, 148, 0.1);
        }

        textarea.form-control {
            resize: vertical;
        }

        .btn-send {
            background: #00b894;
            color: white;
            border: none;
            padding: 14px 30px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s ease;
        }

        .btn-send:hover {
            background: #00a884;
        }

        .map-section {
            width: 100%;
            height: 450px;
            margin-bottom: -7px;
            /* Removes gap at bottom */
        }

        .map-section iframe {
            width: 100%;
            height: 100%;
            border: 0;
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
    <?php $page = 'contact'; include 'components/header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>Contact Us</h1>
        <p>Get in touch with us for any queries or information.</p>
    </section>

    <!-- Contact Content -->
    <section class="contact-section">
        <!-- Contact Information -->
        <div class="contact-info">
            <h2 class="form-title">Get In Touch</h2>

            <div class="info-item">
                <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                <div class="info-content">
                    <h3>Our Location</h3>
                    <p>Trinity College of Engineering and Technology,<br>
                        Bandarikunta, Peddapalli, Telangana-505172</p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon"><i class="fas fa-envelope"></i></div>
                <div class="info-content">
                    <h3>Email Address</h3>
                    <p><a href="mailto:officetcek@gmail.com">officetcek@gmail.com</a></p>
                    <p><a href="mailto:principal.tcek@gmail.com">principal.tcek@gmail.com</a></p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
                <div class="info-content">
                    <h3>Phone Number</h3>
                    <p><a href="tel:+917396903383">+91 7396903383</a></p>
                    <p><a href="tel:+918522954369">+91 8522954369</a></p>
                </div>
            </div>

            <div class="info-item">
                <div class="info-icon"><i class="fas fa-clock"></i></div>
                <div class="info-content">
                    <h3>Working Hours</h3>
                    <p>Monday - Saturday: 9:30 AM - 4:30 PM<br>Sunday: Closed</p>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="contact-form-container">
            <h2 class="form-title">Send Message</h2>
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    <input type="tel" class="form-control" name="phone" placeholder="Your Phone">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Your Message"
                        required></textarea>
                </div>
                <button type="submit" class="btn-send">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Map Section -->
    <div class="map-section">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60496.9805815677!2d79.367374!3d18.616313!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcd2cb4da64275b%3A0x8feb86f26d6d0771!2sTrinity%20College%20Of%20Engineering%20And%20Technology!5e0!3m2!1sen!2sus!4v1766890480055!5m2!1sen!2sus"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>