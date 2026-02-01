<!DOCTYPE html>
<html lang="en">

<head>
    <title>Facilities - Trinity College of Engineering & Technology</title>
    <?php include 'head.php'; ?>
    <style>
        .facilities-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            padding: 10px 20px 60px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .facility-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: all 0.3s ease;
            text-decoration: none !important;
            color: #2d3436 !important;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #f0f0f0;
            cursor: pointer;
            /* Indicating it's interactive */
        }

        .facility-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 184, 148, 0.15);
            border-color: #00b894;
        }

        /* Icon Styling reused from About Us */
        .facility-icon {
            font-size: 40px;
            color: #00b894;
            margin-bottom: 20px;
            width: 80px;
            height: 80px;
            background: rgba(0, 184, 148, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .facility-card:hover .facility-icon {
            background: #00b894;
            color: #fff;
        }

        .facility-card h3 {
            font-size: 20px;
            color: #2d3436;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .facility-card p {
            font-size: 14px;
            color: #636e72;
            line-height: 1.6;
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
    <?php $page = 'facilities'; include 'header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>Facilities</h1>
        <p>Explore our world-class campus infrastructure</p>
    </section>

    <!-- Facilities Grid -->
    <section>
        <div class="facilities-grid">
            <!-- Library -->
            <a href="library.php" class="facility-card">
                <div class="facility-icon"><i class="fas fa-book"></i></div>
                <h3>Library</h3>
                <p>Comprehensive collection of books and digital resources.</p>
            </a>

            <!-- Hostel -->
            <a href="Hostel.php" class="facility-card">
                <div class="facility-icon"><i class="fas fa-bed"></i></div>
                <h3>Hostel</h3>
                <p>Comfortable accommodation for students.</p>
            </a>

            <!-- Transport -->
            <a href="transport.php" class="facility-card">
                <div class="facility-icon"><i class="fas fa-bus"></i></div>
                <h3>Transport</h3>
                <p>Safe and convenient college bus services.</p>
            </a>

            <!-- Key-Facilities -->
            <a href="key-facilities.php" class="facility-card">
                <div class="facility-icon"><i class="fas fa-key"></i></div>
                <h3>Key Facilities</h3>
                <p>Labs, Workshops, and other essential infrastructure.</p>
            </a>

            <!-- E-learning and Internet -->
            <a href="e-learning.php" class="facility-card">
                <div class="facility-icon"><i class="fas fa-wifi"></i></div>
                <h3>E-learning & Internet</h3>
                <p>High-speed campus Wi-Fi and digital learning platforms.</p>
            </a>

            <!-- Sports -->
            <a href="sports.php" class="facility-card">
                <div class="facility-icon"><i class="fas fa-volleyball-ball"></i></div>
                <h3>Sports</h3>
                <p>Indoor and outdoor sports facilities for physical fitness.</p>
            </a>

            <!-- Cultural -->
            <a href="cultural.php" class="facility-card">
                <div class="facility-icon"><i class="fas fa-theater-masks"></i></div>
                <h3>Cultural</h3>
                <p>Auditorium and spaces for cultural events and arts.</p>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>