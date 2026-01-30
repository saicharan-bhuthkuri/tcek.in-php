<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Us - Trinity College of Engineering & Technology</title>
    <?php include 'components/head.php'; ?>
    <style>
        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            padding: 10px 20px 60px;
            /* Tight spacing to header */
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: all 0.3s ease;
            text-decoration: none !important;
            /* Force remove underline */
            color: #2d3436 !important;
            /* Force dark text color */
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #f0f0f0;
        }

        .about-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 184, 148, 0.15);
            border-color: #00b894;
        }

        .about-icon {
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

        .about-card:hover .about-icon {
            background: #00b894;
            color: #fff;
        }

        .about-card h3 {
            font-size: 20px;
            color: #2d3436;
            margin-bottom: 10px;
            font-weight: 600;
            text-decoration: none;
        }

        .about-card p {
            font-size: 14px;
            color: #636e72;
            line-height: 1.6;
            text-decoration: none;
        }

        .page-header {
            background: #00b894;
            /* website green */
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
    <?php $page = 'about'; include 'components/header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>About Us</h1>
        <p>Discover the leadership and vision behind Trinity College</p>
    </section>

    <!-- About Grid -->
    <section>
        <div class="about-grid">
            <a href="founder.php" class="about-card">
                <div class="about-icon"><i class="fas fa-user-tie"></i></div>
                <h3>Founder</h3>
                <p>Meet the visionary behind our institution.</p>
            </a>

            <a href="chairman.php" class="about-card">
                <div class="about-icon"><i class="fas fa-chair"></i></div>
                <h3>Chairman</h3>
                <p>Leading us towards excellence.</p>
            </a>

            <a href="principal.php" class="about-card">
                <div class="about-icon"><i class="fas fa-user-graduate"></i></div>
                <h3>Principal</h3>
                <p>Academic leadership and administration.</p>
            </a>

            <a href="director-academics.php" class="about-card">
                <div class="about-icon"><i class="fas fa-book-reader"></i></div>
                <h3>Director Academics</h3>
                <p>Overseeing our educational standards.</p>
            </a>

            <a href="administrative-officer.php" class="about-card">
                <div class="about-icon"><i class="fas fa-briefcase"></i></div>
                <h3>Administrative Officer</h3>
                <p>Managing institutional operations.</p>
            </a>

            <a href="vision-mission.php" class="about-card">
                <div class="about-icon"><i class="fas fa-bullseye"></i></div>
                <h3>Vision & Mission</h3>
                <p>Our goals and core values.</p>
            </a>

            <a href="assets/about us/services.pdf" target="_blank" class="about-card">
                <div class="about-icon"><i class="fas fa-gavel"></i></div>
                <h3>Service Rules</h3>
                <p>Guidelines and regulations.</p>
            </a>

            <a href="assets/about us/planning.pdf" target="_blank" class="about-card">
                <div class="about-icon"><i class="fas fa-chess-knight"></i></div>
                <h3>Strategic Plan</h3>
                <p>Our roadmap for the future.</p>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>