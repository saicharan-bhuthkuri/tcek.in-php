<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions - Trinity College of Engineering & Technology</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .page-header {
            background: linear-gradient(135deg, #00b894, #00cec9);
            padding: 80px 20px 40px;
            text-align: center;
            color: #fff;
            margin-bottom: 0;
        }

        .page-header h1 {
            font-size: 42px;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .page-header p {
            opacity: 0.9;
            font-size: 18px;
        }

        .admission-content {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .intro-box {
            display: flex;
            gap: 50px;
            margin-bottom: 70px;
            align-items: center;
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .intro-text h2 {
            color: #2d3436;
            margin-bottom: 25px;
            font-size: 32px;
            position: relative;
            display: inline-block;
        }

        .intro-text h2::after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: #00b894;
            margin-top: 10px;
            border-radius: 2px;
        }

        .intro-text p {
            font-size: 16px;
            line-height: 1.8;
            color: #636e72;
            text-align: justify;
        }

        .principal-img-box {
            flex: 0 0 400px;
            position: relative;
        }

        .principal-img-box img {
            width: 100%;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transform: rotate(2deg);
            transition: transform 0.3s;
        }

        .principal-img-box:hover img {
            transform: rotate(0deg);
        }

        .exams-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .exam-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .exam-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #00b894, #0984e3);
        }

        .exam-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .exam-icon {
            width: 60px;
            height: 60px;
            background: rgba(0, 184, 148, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #00b894;
            margin-bottom: 25px;
        }

        .exam-card h3 {
            color: #2d3436;
            font-size: 20px;
            margin-bottom: 15px;
            font-weight: 700;
            line-height: 1.4;
        }

        .exam-card p {
            color: #636e72;
            line-height: 1.6;
            margin-bottom: 25px;
            flex-grow: 1;
            font-size: 15px;
        }

        .btn-visit {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 25px;
            background-color: #00b894;
            color: #fff;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s;
            align-self: flex-start;
        }

        .btn-visit:hover {
            background-color: #00a282;
            transform: translateX(5px);
        }

        .btn-visit i {
            margin-left: 8px;
            font-size: 14px;
        }

        .contact-box {
            background: #fff;
            padding: 50px;
            border-radius: 20px;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
            border: 1px solid #eee;
        }

        .contact-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background: #00b894;
        }

        .contact-box h3 {
            font-size: 28px;
            margin-bottom: 30px;
            color: #2d3436;
        }

        .contact-details-grid {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .contact-item-lg {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact-item-lg i {
            font-size: 30px;
            color: #00b894;
            margin-bottom: 15px;
        }

        .contact-item-lg strong {
            display: block;
            font-size: 18px;
            color: #2d3436;
            margin-bottom: 5px;
        }

        .contact-item-lg span {
            color: #636e72;
        }

        @media (max-width: 900px) {
            .intro-box {
                flex-direction: column;
                padding: 30px;
            }

            .principal-img-box {
                flex: none;
                width: 100%;
                max-width: 400px;
            }

            .principal-img-box img {
                transform: none;
            }

            .exams-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <?php $page = 'admission'; include 'header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>Admissions</h1>
        <p>Your Gateway to Excellence</p>
    </section>

    <!-- Main Content -->
    <section class="admission-content">
        <div class="container">

            <!-- Introduction & Image -->
            <div class="intro-box">
                <div class="intro-text" style="flex: 1;">
                    <h2>Admission Procedure</h2>
                    <p>Admissions to the B.Tech/Diploma/MBA program shall be made subject to the eligibility,
                        qualifications, and specialization prescribed by the university from time to time. Admissions at
                        the top engineering colleges in Telangana is made on the basis of merit rank obtained by the
                        qualifying candidate at an Entrance Test conducted by the University, subjected to reservations
                        prescribed by the university from time to time.</p>
                </div>
                <!-- Image -->
                <div class="principal-img-box">
                    <img src="assets/Admission/principal.jpg" alt="Admission Procedure"
                        onerror="this.style.display='none'">
                </div>
            </div>

            <!-- Exam Cards Grid -->
            <div class="exams-grid">

                <!-- EAPCET -->
                <div class="exam-card">
                    <div class="exam-icon"><i class="fas fa-laptop-code"></i></div>
                    <h3>EAPCET</h3>
                    <p
                        style="font-size: 14px; margin-top: -10px; margin-bottom: 15px; font-weight: 500; color: #00b894;">
                        Engineering, Agriculture & Pharmacy Common Entrance Test</p>
                    <p>Gateway for entry into professional courses. Qualifying EAPCET Exam is compulsory for B.Tech
                        admission through counselling (70%) or management quota (30%).</p>
                    <a href="https://tseapcet.nic.in" target="_blank" class="btn-visit">Visit Website <i
                            class="fas fa-arrow-right"></i></a>
                </div>

                <!-- CEEP -->
                <div class="exam-card">
                    <div class="exam-icon"><i class="fas fa-drafting-compass"></i></div>
                    <h3>CEEP (POLYCET)</h3>
                    <p
                        style="font-size: 14px; margin-top: -10px; margin-bottom: 15px; font-weight: 500; color: #00b894;">
                        Common Entrance Examination for Polytechnic</p>
                    <p>Admission to Diploma Courses in Engineering/Technology. Detailed information on eligibility, age,
                        and syllabus is available in the CEEP Booklet.</p>
                    <a href="https://tspolycet.nic.in" target="_blank" class="btn-visit">Visit Website <i
                            class="fas fa-arrow-right"></i></a>
                </div>

                <!-- I-CET -->
                <div class="exam-card">
                    <div class="exam-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>TS ICET</h3>
                    <p
                        style="font-size: 14px; margin-top: -10px; margin-bottom: 15px; font-weight: 500; color: #00b894;">
                        Integrated Common Entrance Test</p>
                    <p>Conducted for admission into the 1st year of MBA Degree Course in the University and Affiliated
                        colleges. Join the best MBA program in Telangana.</p>
                    <a href="https://icet.tsche.ac.in" target="_blank" class="btn-visit">Visit Website <i
                            class="fas fa-arrow-right"></i></a>
                </div>

            </div>



        </div>
    </section>

    <?php include 'footer.php'; ?>