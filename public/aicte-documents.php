<!DOCTYPE html>
<html lang="en">

<head>
    <title>AICTE Documents - Trinity College of Engineering & Technology</title>
    <?php include 'components/head.php'; ?>
    <style>
        .aicte-section {
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

        .aicte-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        @media (max-width: 992px) {
            .aicte-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .aicte-grid {
                grid-template-columns: 1fr;
            }
        }

        .aicte-card {
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

        .aicte-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 184, 148, 0.15);
            border-color: #00b894;
        }

        .aicte-icon {
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

        .aicte-card:hover .aicte-icon {
            background: #00b894;
            color: #fff;
        }

        .aicte-card h3 {
            font-size: 18px;
            color: #2d3436;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .aicte-card p {
            font-size: 14px;
            color: #636e72;
            line-height: 1.6;
        }

        /* Add more specific styles here as needed */
        .content-placeholder {
            text-align: center;
            padding: 50px 0;
            color: #636e72;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <?php $page = 'aicte';
    include 'components/header.php'; ?>
    <!-- Page Header -->
    <section class="page-header">
        <h1>AICTE Documents</h1>
        <p>Details and documents related to AICTE.</p>
    </section>

    <!-- Content Section -->
    <section class="aicte-section">

        <div class="aicte-grid">
            <!-- Mandatory Disclosure -->
            <a href="naac-criteria-2.php" class="aicte-card">
                <div class="aicte-icon"><i class="fas fa-file-alt"></i></div>
                <h3>Mandatory Disclosure</h3>
                <p>View Mandatory Disclosure documents.</p>
            </a>

            <!-- Essentials-AICTE -->
            <a href="aicte-essentials.php" class="aicte-card">
                <div class="aicte-icon"><i class="fas fa-check-circle"></i></div>
                <h3>Essentials-AICTE</h3>
                <p>View AICTE Essentials documents.</p>
            </a>

            <!-- Desirable-AICTE -->
            <a href="#" class="aicte-card">
                <div class="aicte-icon"><i class="fas fa-star"></i></div>
                <h3>Desirable-AICTE</h3>
                <p>View AICTE Desirable documents.</p>
            </a>

            <!-- INTAKE -->
            <a href="#" class="aicte-card">
                <div class="aicte-icon"><i class="fas fa-users"></i></div>
                <h3>INTAKE</h3>
                <p>View Intake details.</p>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>
</body>

</html>