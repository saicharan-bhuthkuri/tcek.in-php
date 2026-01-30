<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-Learning - Trinity College of Engineering & Technology</title>
    <?php include 'components/head.php'; ?>
</head>

<body>
    <?php $page = ''; include 'components/header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>E-Learning & Internet</h1>
        <p><a href="facilities.php" style="color: #fff; text-decoration: underline;">Facilities</a> / E-Learning</p>
    </section>

    <section class="content-section">
        <div class="container">

            <div
                style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); margin-bottom: 50px;">
                <h3
                    style="color: #2d3436; font-size: 28px; margin-bottom: 20px; border-left: 5px solid #00b894; padding-left: 15px;">
                    What is E-Learning?
                </h3>
                <p style="font-size: 18px; line-height: 1.8; color: #636e72;">
                    E-learning -- also called electronic learning or web-based training -- is anywhere, anytime
                    instruction delivered over the internet or a corporate intranet to students and other learners via a
                    browser.
                </p>
            </div>

            <!-- Image Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <div class="card" style="padding: 10px;">
                    <img src="assets/facilities/e-learn.jpg" alt="E-Learning"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px;">
                </div>
                <div class="card" style="padding: 10px;">
                    <img src="assets/facilities/edu.jpg" alt="Education"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px;">
                </div>
                <div class="card" style="padding: 10px;">
                    <img src="assets/facilities/engagement.jpg" alt="Engagement"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px;">
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>