<!DOCTYPE html>
<html lang="en">

<head>
    <title>Departments - Trinity College of Engineering & Technology</title>
    <?php include 'components/head.php'; ?>
    <style>
        /* Reusing and extending existing styles for consistency */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            padding: 20px 0;
        }

        .course-card {
            background: #fff;
            padding: 30px 25px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            text-align: center;
            border: 1px solid #eee;
            position: relative;
            overflow: hidden;
            text-decoration: none;
            display: block;
            color: inherit;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 184, 148, 0.15);
            border-color: #00b894;
        }

        .course-icon-wrapper {
            width: 70px;
            height: 70px;
            background: rgba(0, 184, 148, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: #00b894;
            font-size: 28px;
            transition: all 0.3s ease;
        }

        .course-card:hover .course-icon-wrapper {
            background: #00b894;
            color: white;
            transform: scale(1.1);
        }

        .course-card h3 {
            font-size: 20px;
            color: #2d3436;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .course-card p {
            color: #636e72;
            font-size: 14px;
        }

        /* Tabs Styling */
        .tabs-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 40px;
            flex-wrap: wrap;
        }

        .tab-btn {
            padding: 12px 30px;
            background: #f1f2f6;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            color: #636e72;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tab-btn:hover,
        .tab-btn.active {
            background: #00b894;
            color: white;
            box-shadow: 0 5px 15px rgba(0, 184, 148, 0.3);
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>

<body>
    <?php $page = 'departments'; include 'components/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <h1>Our Departments</h1>
        <p>Explore the diverse academic disciplines at TCEK</p>
    </section>

    <section style="padding: 60px 0;">
        <div class="container">
            
            <!-- Tab Buttons -->
            <div class="tabs-container">
                <button class="tab-btn active" onclick="openCourseTab(event, 'btech')">B.Tech</button>
                <button class="tab-btn" onclick="openCourseTab(event, 'mba')">MBA</button>
                <button class="tab-btn" onclick="openCourseTab(event, 'diploma')">Diploma</button>
            </div>

            <!-- B.Tech Content -->
            <div id="btech" class="tab-content" style="display: block;">
                <div class="features-grid">
                    <a href="dept-eee.php" class="course-card">
                        <div class="course-icon-wrapper"><i class="fas fa-bolt"></i></div>
                        <h3>EEE</h3>
                        <p>Electrical & Electronics Engineering</p>
                    </a>
                    <a href="dept-ece.php" class="course-card">
                        <div class="course-icon-wrapper"><i class="fas fa-microchip"></i></div>
                        <h3>ECE</h3>
                        <p>Electronics & Communication Engineering</p>
                    </a>
                    <a href="dept-cse.php" class="course-card">
                        <div class="course-icon-wrapper"><i class="fas fa-laptop-code"></i></div>
                        <h3>CSE</h3>
                        <p>Computer Science & Engineering</p>
                    </a>
                    <a href="dept-aiml.php" class="course-card">
                        <div class="course-icon-wrapper"><i class="fas fa-brain"></i></div>
                        <h3>AIML</h3>
                        <p>Artificial Intelligence & Machine Learning</p>
                    </a>
                    <a href="dept-cse-aiml.php" class="course-card">
                        <div class="course-icon-wrapper"><i class="fas fa-robot"></i></div>
                        <h3>CSE (AIML)</h3>
                        <p>Computer Science & Engineering (AI & ML)</p>
                    </a>
                     <a href="dept-hs.php" class="course-card">
                        <div class="course-icon-wrapper"><i class="fas fa-flask"></i></div>
                        <h3>H & S</h3>
                        <p>Humanities & Sciences</p>
                    </a>
                </div>
            </div>

            <!-- MBA Content -->
            <div id="mba" class="tab-content">
                <div class="features-grid" style="justify-content: center;">
                    <a href="dept-mba.php" class="course-card" style="max-width: 400px; width: 100%;">
                        <div class="course-icon-wrapper"><i class="fas fa-user-tie"></i></div>
                        <h3>MBA</h3>
                        <p>Master of Business Administration</p>
                    </a>
                </div>
            </div>

            <!-- Diploma Content -->
            <div id="diploma" class="tab-content">
                <div class="features-grid">
                    <a href="coming-soon.php" class="course-card">
                        <div class="course-icon-wrapper"><i class="fas fa-plug"></i></div>
                        <h3>Diploma in EEE</h3>
                        <p>Electrical & Electronics Engineering</p>
                    </a>
                    <a href="coming-soon.php" class="course-card">
                        <div class="course-icon-wrapper"><i class="fas fa-satellite-dish"></i></div>
                        <h3>Diploma in ECE</h3>
                        <p>Electronics & Communication Engineering</p>
                    </a>
                    <a href="coming-soon.php" class="course-card">
                        <div class="course-icon-wrapper"><i class="fas fa-desktop"></i></div>
                        <h3>Diploma in CSE</h3>
                        <p>Computer Science & Engineering</p>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <?php include 'components/footer.php'; ?>

    <script src="js/tabs.js"></script>

</body>
</html>
