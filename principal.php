<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal - Trinity College of Engineering & Technology</title>
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
    <?php $page = ''; include 'header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>Principal</h1>
        <p><a href="about-us.php" style="color: #fff; text-decoration: underline;">About Us</a> / Principal</p>
    </section>

    <!-- Profile Section -->
    <section class="profile-section">
        <div class="profile-container">
            <div class="profile-image-box">
                <img src="assets/about us/principal.png" alt="Dr. M. GANESH">
            </div>
            <div class="profile-content">
                <span class="profile-role">Principal</span>
                <h2 class="profile-name">Dr. M. GANESH</h2>
                <div class="profile-text">
                    <p>Dr. PRINCIPAL obtained his B. E( Electronics and Communication Engineering) from Madras
                        University, Chennai, Tamilnadu in the year 2001, M.E ( Applied Electronics) from Sathyabamma
                        University, Chennai, Tamilnadu in the year 2005 and MBA( Production management) from Annamalai
                        university, Tamilnadu.</p>

                    <p>He has registered for his PhD research programme at Anna university, Coimbatore and awarded
                        Doctoral degree by Anna university in the year 2014 for the Thesis entitled " Investigation on
                        clustering based Image Segmentation method for Multi Resolution Images".</p>

                    <p>He has over 18 years of teaching experience at UG and PG level and guided a number of projects in
                        ECE related topics and published more than 10 articles in Journals and Conference's.</p>

                    <p>He has over 10 years of experience in Head of Department in ECE branch in Self financing
                        Engineering colleges.</p>
                </div>
                <!-- Signature or Footer info if needed -->
                <p style="font-weight: 700; color: #2d3436; margin-top: 20px;">M.E.MBA.Ph.D(ECE)</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>