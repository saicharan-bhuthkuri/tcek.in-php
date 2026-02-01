<!DOCTYPE html>
<html lang="en">
<head>
    <title>Criteria 4 - Infrastructure & Learning Resources - TCEK</title>
    <?php include 'components/head.php'; ?>
    <style>
        /* --- Page Base --- */
        body {
            background-color: #f8f9fa;
        }

        /* --- Page Header --- */
        .page-header-section {
            background: #00b894;
            padding: 80px 0;
            text-align: center;
            color: #fff;
            margin-bottom: 40px;
        }

        .page-header-section h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            font-weight: 800;
        }

        .page-header-section p {
            font-size: 1.2rem;
            color: #dfe6e9;
            font-weight: 500;
        }

        /* --- Content Layout --- */
        .container-box {
            max-width: 1000px;
            margin: 0 auto 80px;
            padding: 0 20px;
        }

        /* --- Criteria Sections --- */
        .criteria-card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            margin-bottom: 30px;
            overflow: hidden;
            border: 1px solid #eee;
        }

        .criteria-header {
            background: #f1f2f6;
            padding: 20px 25px;
            border-bottom: 1px solid #e1e1e1;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .criteria-badge {
            background: #2d3436;
            color: #fff;
            padding: 5px 12px;
            border-radius: 6px;
            font-weight: 700;
            font-size: 1rem;
        }

        .criteria-title {
            font-size: 1.1rem;
            color: #2d3436;
            font-weight: 600;
            margin: 0;
        }

        .doc-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .doc-item {
            border-bottom: 1px solid #f5f5f5;
        }

        .doc-item:last-child {
            border-bottom: none;
        }

        .doc-link {
            display: block;
            padding: 18px 25px;
            text-decoration: none;
            color: #636e72;
            transition: all 0.2s ease;
            position: relative;
            padding-left: 50px;
        }

        .doc-link:before {
            content: '\f1c1'; /* PDF Icon */
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            left: 20px;
            top: 18px;
            color: #e17055;
            font-size: 1.1rem;
        }

        .doc-link:hover {
            background: #f9fbfd;
            color: #0984e3;
            padding-left: 55px;
        }

        .doc-link span {
            display: block;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #636e72;
            text-decoration: none;
            font-weight: 600;
        }
        
        .back-link:hover {
            color: #00b894;
        }

    </style>
</head>
<body>
    <?php $page = 'naac'; include 'components/header.php'; ?>

    <!-- Page Header -->
    <header class="page-header-section">
        <h1>Criteria 4</h1>
        <p>Infrastructure & Learning Resources</p>
    </header>

    <div class="container-box">
        <a href="naac.php" class="back-link"><i class="fas fa-arrow-left"></i> Back to NAAC</a>

        <!-- 4.1.1 -->
        <div class="criteria-card">
            <div class="criteria-header">
                <span class="criteria-badge">4.1.1</span>
                <h3 class="criteria-title">Physical Facilities</h3>
            </div>
            <ul class="doc-list">
                <li class="doc-item">
                    <a href="assets/naac/criteria-4/4.1.1.pdf" target="_blank" class="doc-link">
                        <span>4.1.1 Photographs for Physical Facilities and Academic Facilities</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- 4.3.2 -->
        <div class="criteria-card">
            <div class="criteria-header">
                <span class="criteria-badge">4.3.2</span>
                <h3 class="criteria-title">Student Computer Ratio</h3>
            </div>
            <ul class="doc-list">
                <li class="doc-item">
                    <a href="assets/naac/criteria-4/4.3.2(1).pdf" target="_blank" class="doc-link">
                        <span>4.3.2(1) Student Computer Ratio_20230801_0001</span>
                    </a>
                </li>
                <li class="doc-item">
                    <a href="assets/naac/criteria-4/4.3.2(2).pdf" target="_blank" class="doc-link">
                        <span>4.3.2(2) Invoices of the Computer</span>
                    </a>
                </li>
                 <li class="doc-item">
                    <a href="assets/naac/criteria-4/4.3.2(3).pdf" target="_blank" class="doc-link">
                        <span>4.3.2(3) Stock Register Entry</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>

    <?php include 'components/footer.php'; ?>
</body>
</html>
