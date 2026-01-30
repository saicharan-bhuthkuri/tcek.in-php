<!DOCTYPE html>
<html lang="en">

<head>
    <title>NIRF - Trinity College of Engineering & Technology</title>
    <?php include 'components/head.php'; ?>
    <style>
        .nirf-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            padding: 10px 20px 60px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .nirf-card {
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

        .nirf-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 184, 148, 0.15);
            border-color: #00b894;
        }

        .nirf-icon {
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

        .nirf-card:hover .nirf-icon {
            background: #00b894;
            color: #fff;
        }

        .nirf-card h3 {
            font-size: 18px;
            color: #2d3436;
            margin-bottom: 10px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .nirf-card p {
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
    <?php $page = 'nirf'; include 'components/header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>NIRF</h1>
        <p>National Institutional Ranking Framework Details.</p>
    </section>

    <!-- NIRF Grid -->
    <section>
        <div class="nirf-grid">
            <!-- ENGINEERING -->
            <a href="assets/NIRF/NIRFENGG.pdf" target="_blank" class="nirf-card">
                <div class="nirf-icon"><i class="fas fa-cogs"></i></div>
                <h3>ENGINEERING</h3>
                <p>NIRF Report for Engineering Discipline.</p>
            </a>

            <!-- MANAGEMENT -->
            <a href="assets/NIRF/NIRFMGNT.pdf" target="_blank" class="nirf-card">
                <div class="nirf-icon"><i class="fas fa-chart-line"></i></div>
                <h3>MANAGEMENT</h3>
                <p>NIRF Report for Management Discipline.</p>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>