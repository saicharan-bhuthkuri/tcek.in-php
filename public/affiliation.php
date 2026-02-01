<!DOCTYPE html>
<html lang="en">

<head>
    <title>Affiliation - Trinity College of Engineering & Technology</title>
    <?php include 'head.php'; ?>
    <style>
        .affiliation-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            padding: 10px 20px 60px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .affiliation-card {
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
        }

        .affiliation-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 184, 148, 0.15);
            border-color: #00b894;
        }

        .affiliation-icon {
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

        .affiliation-card:hover .affiliation-icon {
            background: #00b894;
            color: #fff;
        }

        .affiliation-card h3 {
            font-size: 18px;
            color: #2d3436;
            margin-bottom: 10px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .affiliation-card p {
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
    <?php $page = 'affiliation'; include 'header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>Affiliation</h1>
        <p>Recognitions, approvals, and accreditations.</p>
    </section>

    <!-- Affiliation Grid -->
    <section>
        <div class="affiliation-grid">
            <!-- JNTU AFFILIATION -->
            <a href="assets/Affiliation/JNTUHAFFILIATION2024-25.pdf" target="_blank" class="affiliation-card">
                <div class="affiliation-icon"><i class="fas fa-university"></i></div>
                <h3>JNTU AFFILIATION</h3>
                <p>Affiliation letter from JNTU Hyderabad.</p>
            </a>

            <!-- NBA -->
            <a href="nba.php" class="affiliation-card">
                <div class="affiliation-icon"><i class="fas fa-certificate"></i></div>
                <h3>NBA</h3>
                <p>National Board of Accreditation details.</p>
            </a>

            <!-- NAAC I Cycle -->
            <a href="assets/Affiliation/NAACCERTIFICATE.pdf" target="_blank" class="affiliation-card">
                <div class="affiliation-icon"><i class="fas fa-award"></i></div>
                <h3>NAAC I Cycle</h3>
                <p>NAAC Accreditation Certificate.</p>
            </a>

            <!-- UGC AUTONOMOUS -->
            <a href="assets/Affiliation/UGCAutonomousStatus.pdf" target="_blank" class="affiliation-card">
                <div class="affiliation-icon"><i class="fas fa-user-graduate"></i></div>
                <h3>UGC AUTONOMOUS</h3>
                <p>UGC Autonomous Status confirmation.</p>
            </a>

            <!-- JNTUH AUTONOMOUS -->
            <a href="assets/Affiliation/JNTUHAutonomousStatus.pdf" target="_blank" class="affiliation-card">
                <div class="affiliation-icon"><i class="fas fa-building"></i></div>
                <h3>JNTUH AUTONOMOUS</h3>
                <p>Autonomous status granted by JNTUH.</p>
            </a>

            <!-- 2(f) & 12(B) -->
            <a href="assets/Affiliation/2FAPPROVALLETTER.pdf" target="_blank" class="affiliation-card">
                <div class="affiliation-icon"><i class="fas fa-file-contract"></i></div>
                <h3>2(f) & 12(B)</h3>
                <p>UGC 2(f) & 12(B) Approval Letter.</p>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>