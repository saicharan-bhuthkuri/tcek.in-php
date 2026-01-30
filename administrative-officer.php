<!DOCTYPE html>
<html lang="en">

<head>
    <title>Administrative Officer - Trinity College of Engineering & Technology</title>
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

        .quote-box {
            background: #f0fdf9;
            border-left: 4px solid #00b894;
            padding: 20px;
            margin: 30px 0;
            font-style: italic;
            color: #555;
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
        <h1>Administrative Officer</h1>
        <p><a href="about-us.php" style="color: #fff; text-decoration: underline;">About Us</a> / Administrative
            Officer</p>
    </section>

    <!-- Profile Section -->
    <section class="profile-section">
        <div class="profile-container">
            <div class="profile-image-box">
                <img src="assets/about us/administrative_officer.png" alt="Mr. K. Suresh">
            </div>
            <div class="profile-content">
                <span class="profile-role">Administrative Officer</span>
                <h2 class="profile-name">Mr. K. Suresh</h2>
                <div class="profile-text">
                    <p>The Trinity College of Engineering and Technology functions under the aegis of Trinity Group of
                        Institutes, which operates many schools and colleges in Telangana State, India.</p>

                    <div class="quote-box">
                        "We are striving hard to look forward that the institute achieves great heights of excellence
                        and become a national level institution. The institute has produced outstanding engineers, who
                        are successfully proved their professional competence in their respective fields. I extend my
                        best wishes to all my students and I am sure that they will create their own path of grand
                        success in life."
                    </div>
                </div>
                <!-- Signature or Footer info if needed -->
                <p style="font-weight: 700; color: #2d3436; margin-top: 20px;">M.Sc (Administrative Officer)</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>