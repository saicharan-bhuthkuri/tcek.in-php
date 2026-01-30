<!DOCTYPE html>
<html lang="en">

<head>
    <title>Vision & Mission - Trinity College of Engineering & Technology</title>
    <?php include 'components/head.php'; ?>
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
    <?php $page = ''; include 'components/header.php'; ?>
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
    <?php include 'components/footer.php'; ?>