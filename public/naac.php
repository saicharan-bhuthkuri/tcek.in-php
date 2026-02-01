<!DOCTYPE html>
<html lang="en">
<head>
    <title>NAAC Accreditation - TCEK</title>
    <?php include 'components/head.php'; ?>
    <style>
        /* --- Page Base --- */
        body {
            background-color: #f8f9fa;
        }

        /* --- Page Header --- */
        .page-header-section {
            background: #00b894;
            background-size: cover;
            background-position: center;
            padding: 120px 0;
            text-align: center;
            color: #fff;
            margin-bottom: 30px;
        }

        .page-header-section h1 {
            font-size: 3rem;
            margin-bottom: 15px;
            font-weight: 800;
            text-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }

        .page-header-section p {
            font-size: 1.2rem;
            color: #dfe6e9;
            font-weight: 500;
            letter-spacing: 0.5px;
        }

        /* --- Content Layout --- */
        .naac-container {
            padding: 40px 20px 80px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-header h2 {
            font-size: 2.2rem;
            color: #2d3436;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }

        .section-header h2::after {
            content: '';
            width: 60px;
            height: 4px;
            background: #00b894;
            display: block;
            margin: 10px auto 0;
            border-radius: 2px;
        }

        /* --- SSR Hero Card --- */
        .ssr-card {
            background: #fff;
            border-radius: 15px;
            padding: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border-left: 5px solid #00b894;
            margin-bottom: 60px;
            transition: transform 0.3s ease;
        }

        .ssr-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.12);
        }

        .ssr-content h3 {
            font-size: 1.8rem;
            color: #2d3436;
            margin-bottom: 10px;
        }

        .ssr-content p {
            color: #636e72;
            font-size: 1.1rem;
        }

        .ssr-btn {
            background: #00b894;
            color: #fff;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 184, 148, 0.3);
        }

        .ssr-btn:hover {
            background: #00a884;
            transform: scale(1.05);
        }

        /* --- Cards Grid --- */
        .grid-layout {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 25px;
            margin-bottom: 60px;
        }

        .doc-card {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: flex-start;
            gap: 20px;
            border: 1px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .doc-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: #dfe6e9; /* Default border color */
            transition: background 0.3s ease;
        }

        .doc-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.1);
            border-color: rgba(0, 184, 148, 0.2);
        }

        .doc-card:hover::before {
            background: #00b894; /* Active border color */
        }

        .card-icon {
            width: 50px;
            height: 50px;
            background: rgba(0, 184, 148, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #00b894;
            flex-shrink: 0;
        }

        .card-content h4 {
            font-size: 1.2rem;
            color: #2d3436;
            margin-bottom: 5px;
            font-weight: 700;
        }

        .card-content p {
            font-size: 0.95rem;
            color: #636e72;
            margin: 0;
        }

        /* --- Quick Links Bar --- */
        .quick-links-bar {
            background: #fff;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 20px;
        }

        .quick-link-item {
            text-align: center;
            text-decoration: none;
            color: #636e72;
            transition: transform 0.3s ease;
        }

        .quick-link-item:hover {
            transform: translateY(-3px);
            color: #0984e3;
        }

        .quick-icon {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #74b9ff;
            display: block;
        }

        .quick-label {
            font-weight: 600;
            display: block;
        }

        /* --- Responsive --- */
        @media (max-width: 768px) {
            .page-header-section {
                padding: 80px 0;
            }

            .page-header-section h1 {
                font-size: 2rem;
            }

            .ssr-card {
                flex-direction: column;
                text-align: center;
                align-items: center;
                gap: 20px;
            }

            .ssr-card {
                padding: 30px;
            }

            .ssr-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <?php $page = 'naac'; include 'components/header.php'; ?>

    <!-- Page Header -->
    <header class="page-header-section">
        <h1>NAAC Accreditation</h1>
        <p>COMMITMENT TO QUALITY AND EXCELLENCE</p>
    </header>

    <div class="naac-container">
        
        <!-- SSR Section -->
        <div class="ssr-card">
            <div class="ssr-content">
                <h3>Self Study Report (SSR)</h3>
                <p>Comprehensive report for Cycle-1 accreditation.</p>
            </div>
            <a href="#" class="ssr-btn">
                <i class="fas fa-file-pdf"></i> Download SSR Cycle-1
            </a>
        </div>

        <!-- Criteria Section -->
        <div class="section-header">
            <h2>Accreditation Criteria</h2>
        </div>
        
        <div class="grid-layout">
            <a href="#" class="doc-card">
                <div class="card-icon"><i class="fas fa-book-open"></i></div>
                <div class="card-content">
                    <h4>Criteria 1</h4>
                    <p>Curricular Aspects</p>
                </div>
            </a>
            
            <a href="#" class="doc-card">
                <div class="card-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                <div class="card-content">
                    <h4>Criteria 2</h4>
                    <p>Teaching-Learning & Evaluation</p>
                </div>
            </a>

            <a href="#" class="doc-card">
                <div class="card-icon"><i class="fas fa-microscope"></i></div>
                <div class="card-content">
                    <h4>Criteria 3</h4>
                    <p>Research, Innovations & Extension</p>
                </div>
            </a>

            <a href="#" class="doc-card">
                <div class="card-icon"><i class="fas fa-school"></i></div>
                <div class="card-content">
                    <h4>Criteria 4</h4>
                    <p>Infrastructure & Learning Resources</p>
                </div>
            </a>

            <a href="#" class="doc-card">
                <div class="card-icon"><i class="fas fa-user-graduate"></i></div>
                <div class="card-content">
                    <h4>Criteria 5</h4>
                    <p>Student Support & Progression</p>
                </div>
            </a>

            <a href="#" class="doc-card">
                <div class="card-icon"><i class="fas fa-tasks"></i></div>
                <div class="card-content">
                    <h4>Criteria 6</h4>
                    <p>Governance, Leadership & Management</p>
                </div>
            </a>

            <a href="#" class="doc-card">
                <div class="card-icon"><i class="fas fa-hand-holding-heart"></i></div>
                <div class="card-content">
                    <h4>Criteria 7</h4>
                    <p>Institutional Values & Best Practices</p>
                </div>
            </a>
        </div>

        <!-- Other Documents Section -->
        <div class="section-header">
            <h2>Additional Reports</h2>
        </div>

        <div class="quick-links-bar">
            <!-- IIQA -->
            <a href="#" class="quick-link-item">
                <i class="fas fa-file-contract quick-icon"></i>
                <span class="quick-label">IIQA</span>
            </a>

            <!-- AQAR -->
            <a href="#" class="quick-link-item">
                <i class="fas fa-chart-pie quick-icon"></i>
                <span class="quick-label">AQAR Reports</span>
            </a>

            <!-- DVV -->
            <a href="#" class="quick-link-item">
                <i class="fas fa-check-double quick-icon"></i>
                <span class="quick-label">DVV Clarifications</span>
            </a>
        </div>

    </div>

    <?php include 'components/footer.php'; ?>
</body>
</html>
