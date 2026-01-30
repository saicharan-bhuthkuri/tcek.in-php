<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IQAC - Trinity College of Engineering & Technology</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        .iqac-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            padding: 10px 20px 60px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .iqac-card {
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

        .iqac-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 184, 148, 0.15);
            border-color: #00b894;
        }

        .iqac-icon {
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

        .iqac-card:hover .iqac-icon {
            background: #00b894;
            color: #fff;
        }

        .iqac-card h3 {
            font-size: 18px;
            color: #2d3436;
            margin-bottom: 10px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .iqac-card p {
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
    <?php $page = 'iqac'; include 'header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>Internal Quality Assurance Cell (IQAC)</h1>
        <p>Ensuring continuous quality improvement.</p>
    </section>

    <!-- IQAC Grid -->
    <section>
        <div class="iqac-grid">
            <!-- IQAC Co-Ordinator -->
            <a href="#" class="iqac-card">
                <div class="iqac-icon"><i class="fas fa-user-check"></i></div>
                <h3>IQAC Co-Ordinator</h3>
                <p>Details of the IQAC Coordinator.</p>
            </a>

            <!-- Final Self Study Report (SSR) -->
            <a href="#" class="iqac-card">
                <div class="iqac-icon"><i class="fas fa-file-alt"></i></div>
                <h3>Final Self Study Report (SSR)</h3>
                <p>Comprehensive report on institutional quality.</p>
            </a>

            <!-- IIQA Reports -->
            <a href="#" class="iqac-card">
                <div class="iqac-icon"><i class="fas fa-clipboard-list"></i></div>
                <h3>IIQA Reports</h3>
                <p>Institutional Information for Quality Assessment.</p>
            </a>

            <!-- Meetings -->
            <a href="#" class="iqac-card">
                <div class="iqac-icon"><i class="fas fa-users"></i></div>
                <h3>Meetings</h3>
                <p>Minutes and details of IQAC meetings.</p>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>