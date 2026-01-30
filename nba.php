<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA - Trinity College of Engineering & Technology</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        .nba-section {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            font-size: 28px;
            color: #2d3436;
            margin-bottom: 30px;
            border-bottom: 2px solid #00b894;
            display: inline-block;
            padding-bottom: 10px;
        }

        .nba-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        @media (max-width: 992px) {
            .nba-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .nba-grid {
                grid-template-columns: 1fr;
            }
        }

        .nba-card {
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

        .nba-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 184, 148, 0.15);
            border-color: #00b894;
        }

        .nba-icon {
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

        .nba-card:hover .nba-icon {
            background: #00b894;
            color: #fff;
        }

        .nba-card h3 {
            font-size: 18px;
            color: #2d3436;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .nba-card p {
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
    <?php $page = 'nba'; include 'header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>National Board of Accreditation (NBA)</h1>
        <p>Quality assurance and accreditation details.</p>
    </section>

    <!-- Content Section -->
    <section class="nba-section">
        <h2 class="section-title">Audit Statement</h2>
        <div class="nba-grid">
            <!-- FY Audit Statement 2020-21 -->
            <a href="assets/NBA/FYAuditStatement2020-21.pdf" target="_blank" class="nba-card">
                <div class="nba-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <h3>FY Audit Statement 2020-21</h3>
                <p>Financial Year 2020-2021 Audit Report.</p>
            </a>

            <!-- FY Audit Statement 2021-22 -->
            <a href="assets/NBA/FYAuditStatement2021-22.pdf" target="_blank" class="nba-card">
                <div class="nba-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <h3>FY Audit Statement 2021-22</h3>
                <p>Financial Year 2021-2022 Audit Report.</p>
            </a>

            <!-- FY Audit Statement 2022-23 -->
            <a href="assets/NBA/FYAuditStatement2022-23.pdf" target="_blank" class="nba-card">
                <div class="nba-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <h3>FY Audit Statement 2022-23</h3>
                <p>Financial Year 2022-2023 Audit Report.</p>
            </a>

            <!-- FY Audit Statement 2023-24 -->
            <a href="assets/NBA/FYAuditStatement2023-24.pdf" target="_blank" class="nba-card">
                <div class="nba-icon"><i class="fas fa-file-invoice-dollar"></i></div>
                <h3>FY Audit Statement 2023-24</h3>
                <p>Financial Year 2023-2024 Audit Report.</p>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>