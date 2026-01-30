<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cultural Activities - Trinity College of Engineering & Technology</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <?php $page = ''; include 'header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>Cultural Activities</h1>
        <p><a href="facilities.php" style="color: #fff; text-decoration: underline;">Facilities</a> / Cultural
            Activities</p>
    </section>

    <section class="content-section">
        <div class="container">

            <div
                style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); margin-bottom: 50px;">
                <h3
                    style="color: #2d3436; font-size: 28px; margin-bottom: 20px; border-left: 5px solid #00b894; padding-left: 15px;">
                    Celebrating Culture & Heritage
                </h3>
                <p style="font-size: 18px; line-height: 1.8; color: #636e72;">
                    Cultural activities encompass a range of artistic, social, and educational pursuits that celebrate
                    and promote cultural heritage, fostering a sense of identity and community. At Trinity College, we
                    believe in the holistic development of our students, encouraging them to participate in various
                    cultural events to showcase their talents and explore different art forms.
                </p>
            </div>

            <!-- Image Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px;">
                <div class="card" style="padding: 10px;">
                    <img src="assets/facilities/cultural1.jpg" alt="Cultural Activity 1"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px;">
                </div>
                <div class="card" style="padding: 10px;">
                    <img src="assets/facilities/cultural2.jpg" alt="Cultural Activity 2"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px;">
                </div>
                <div class="card" style="padding: 10px;">
                    <img src="assets/facilities/cultural3.jpg" alt="Cultural Activity 3"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px;">
                </div>
                <div class="card" style="padding: 10px;">
                    <img src="assets/facilities/cultural4.jpg" alt="Cultural Activity 4"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 15px;">
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>