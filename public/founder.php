<!DOCTYPE html>
<html lang="en">

<head>
    <title>Founder Chairman - Trinity College of Engineering & Technology</title>
    <?php include 'components/head.php'; ?>
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
    <?php $page = ''; include 'components/header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>Founder</h1>
        <p><a href="about-us.php" style="color: #fff; text-decoration: underline;">About Us</a> / Founder</p>
    </section>

    <!-- Profile Section -->
    <section class="profile-section">
        <div class="profile-container">
            <div class="profile-image-box">
                <img src="assets/about us/founder.png" alt="Sri. Dasari Manohar Reddy">
            </div>
            <div class="profile-content">
                <span class="profile-role">Founder Chairman</span>
                <h2 class="profile-name">Sri. Dasari Manohar Reddy</h2>
                <div class="profile-text">
                    <p>Sri. Dasari Manohar Reddy, Founder Chairman, Trinity Group of Institutions who has achieved the
                        most coveted position as one of the top 20 powerful personalities in the state of Telangana for
                        his contribution in establishing Engineering Institutions providing Quality Technical and
                        Management Education.</p>

                    <p>Sri Dasari Manohar Reddy, the most humble dynamic and charismatic founder chairman is a visionary
                        who brought a revolution in the field of education. Trinity Society for Community Development is
                        providing high quality education in engineering. His high service orientation, philanthropic &
                        holistic attitude led to the establishment of various educational institutions at Peddapalli.
                        Trinity society for community development stood best among the equals because of its
                        perseverance and hard work. The campus has grown by leaps and bounds to become a major learning
                        center with 24 institutions offering almost all Schools, Intermediate, Degree, School of
                        Educations, Engineering, Management and Pharmacy courses.</p>
                </div>
                <!-- Signature or Footer info if needed -->
                <p style="font-weight: 700; color: #2d3436; margin-top: 20px;">(EX. MLA Peddapalli)</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>