<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chairman - Trinity College of Engineering & Technology</title>
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
        <h1>Chairman</h1>
        <p><a href="about-us.php" style="color: #fff; text-decoration: underline;">About Us</a> / Chairman</p>
    </section>

    <!-- Profile Section -->
    <section class="profile-section">
        <div class="profile-container">
            <div class="profile-image-box">
                <img src="assets/about us/chairman.png" alt="Sri Dasari Prashanth Reddy">
            </div>
            <div class="profile-content">
                <span class="profile-role">Chairman</span>
                <h2 class="profile-name">Sri Dasari Prashanth Reddy</h2>
                <div class="profile-text">
                    <p>Sri Dasari Prashanth Reddy, Charisma and Dynamism are synonymous to his splendid personality. His
                        demeanor reflects the essence of elite. He completed M.B.A from London UK. He carved a riche in
                        the field of Education by reshaping his father vision of running educational institutions at
                        various levels i.e., from K.G to P.G, where students enter to grow in wisdom and go out to serve
                        our country.</p>

                    <p>He is cool and his genuine humility is his ultimate style. He exhibits exuberance in managing
                        various institutions. He is a multi-faceted genius with many feathers in his cap. He is an
                        eduprencer who enlightens the potential of education in Global era. He stands as the epitome of
                        great objective with an ideal purpose of life to shape the lives of thousands. He is our
                        inspirational personality Mr. Dasari Prashanth Reddy, secretary and correspondent of Trinity
                        Educational Institutions, Peddapalli and Karimnagar.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>