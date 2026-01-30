<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport Facility - Trinity College of Engineering & Technology</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <?php $page = ''; include 'header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>Transport Facility</h1>
        <p><a href="facilities.php" style="color: #fff; text-decoration: underline;">Facilities</a> / Transport</p>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="features-grid">
                <!-- Text Content -->
                <div class="card" style="align-self: center;">
                    <h3><i class="fas fa-bus" style="color: #00b894; margin-right: 10px;"></i>College Buses</h3>
                    <p style="font-size: 16px; line-height: 1.8; color: #636e72; margin-bottom: 20px;">
                        The Trinity College has their own six buses for studentsâ€™ transportation. These buses cover all
                        the important stops of Peddapalli city.
                    </p>
                    <ul class="styled-list">
                        <li>Safe and convenient transportation</li>
                        <li>Covers all major routes in Peddapalli</li>
                        <li>Dedicated drivers and staff</li>
                        <li>Regular maintenance for safety</li>
                    </ul>
                </div>

                <!-- Image -->
                <div class="card">
                    <img src="assets/facilities/buses.jpg" alt="College Buses"
                        style="width: 100%; border-radius: 10px; height: auto;">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>