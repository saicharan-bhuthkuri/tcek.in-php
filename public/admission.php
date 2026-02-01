<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admissions - Trinity College of Engineering & Technology</title>
    <?php include 'head.php'; ?>
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

    <?php $page = 'admission';
    include 'header.php'; ?>
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

            <style>
                /* New Premium Styles for Admission Documents Section */
                .docs-section {
                    padding: 80px 0;
                    background: #fff;
                }

                .docs-header {
                    text-align: center;
                    margin-bottom: 60px;
                }

                .docs-header h2 {
                    font-size: 36px;
                    color: #2d3436;
                    margin-bottom: 15px;
                    font-weight: 700;
                    position: relative;
                    display: inline-block;
                }

                .docs-header h2::after {
                    content: '';
                    display: block;
                    width: 60px;
                    height: 4px;
                    background: #00b894;
                    margin: 15px auto 0;
                    border-radius: 2px;
                }

                .docs-header p {
                    color: #636e72;
                    font-size: 18px;
                    max-width: 600px;
                    margin: 0 auto;
                }

                .docs-list {
                    display: flex;
                    flex-direction: column;
                    gap: 20px;
                    max-width: 900px;
                    margin: 0 auto;
                }

                .doc-item {
                    display: flex;
                    align-items: center;
                    background: #fff;
                    border: 1px solid #eee;
                    border-radius: 12px;
                    padding: 25px 30px;
                    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
                    position: relative;
                    overflow: hidden;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.02);
                }

                .doc-item:hover {
                    transform: translateY(-3px);
                    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
                    border-color: #00b894;
                }

                .doc-item::before {
                    content: '';
                    position: absolute;
                    left: 0;
                    top: 0;
                    height: 100%;
                    width: 4px;
                    background: #00b894;
                    transform: scaleY(0);
                    transition: transform 0.3s ease;
                    transform-origin: bottom;
                }

                .doc-item:hover::before {
                    transform: scaleY(1);
                }

                .doc-icon {
                    width: 60px;
                    height: 60px;
                    background: rgba(0, 184, 148, 0.08);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: #00b894;
                    font-size: 24px;
                    margin-right: 25px;
                    flex-shrink: 0;
                    transition: all 0.3s ease;
                }

                .doc-item:hover .doc-icon {
                    background: #00b894;
                    color: #fff;
                    transform: scale(1.1);
                }

                .doc-info {
                    flex-grow: 1;
                    padding-right: 20px;
                }

                .doc-info h3 {
                    font-size: 20px;
                    color: #2d3436;
                    margin-bottom: 8px;
                    font-weight: 600;
                }

                .doc-info p {
                    font-size: 15px;
                    color: #636e72;
                    margin: 0;
                }

                .doc-action {
                    flex-shrink: 0;
                }

                .download-btn {
                    display: inline-flex;
                    align-items: center;
                    padding: 12px 24px;
                    background: #fff;
                    color: #00b894;
                    border: 2px solid #00b894;
                    border-radius: 30px;
                    font-weight: 600;
                    text-decoration: none;
                    transition: all 0.3s ease;
                    font-size: 14px;
                }

                .download-btn i {
                    margin-left: 8px;
                    font-size: 16px;
                }

                .download-btn:hover {
                    background: #00b894;
                    color: #fff;
                    box-shadow: 0 5px 15px rgba(0, 184, 148, 0.3);
                }

                @media (max-width: 768px) {
                    .doc-item {
                        flex-direction: column;
                        text-align: center;
                        padding: 30px;
                    }

                    .doc-icon {
                        margin: 0 0 20px 0;
                    }

                    .doc-info {
                        padding: 0 0 20px 0;
                    }
                }
            </style>

            <!-- Admission Downloads Section -->
            <div class="docs-section">
                <div class="container">
                    <div class="docs-header">
                        <h2>Downloads & Resources</h2>
                        <p>Everything you need for your admission process in one place.</p>
                    </div>

                    <div class="docs-list">
                        <!-- Prospects -->
                        <div class="doc-item">
                            <div class="doc-icon"><i class="fas fa-book-reader"></i></div>
                            <div class="doc-info">
                                <h3>College Prospectus</h3>
                                <p>Comprehensive guide to our courses, campus facilities, and student life highlights.</p>
                            </div>
                            <div class="doc-action">
                                <a href="assets/Admission/PROSPECTS.pdf" target="_blank" class="download-btn">
                                    Download PDF <i class="fas fa-file-download"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Admission process & Guidelines -->
                        <div class="doc-item">
                            <div class="doc-icon"><i class="fas fa-tasks"></i></div>
                            <div class="doc-info">
                                <h3>Admission Guidelines</h3>
                                <p>Step-by-step instructions, eligibility criteria, and important dates for applicants.</p>
                            </div>
                            <div class="doc-action">
                                <a href="assets/Admission/Admissions.pdf" target="_blank" class="download-btn">
                                    Download PDF <i class="fas fa-file-download"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Admission Form -->
                        <div class="doc-item">
                            <div class="doc-icon"><i class="fas fa-file-signature"></i></div>
                            <div class="doc-info">
                                <h3>Application Form</h3>
                                <p>Official admission application form. Fill and submit to the administrative office.</p>
                            </div>
                            <div class="doc-action">
                                <a href="assets/Admission/FORM.pdf" target="_blank" class="download-btn">
                                    Download Form <i class="fas fa-file-download"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Admission Fee Structure -->
                        <div class="doc-item">
                            <div class="doc-icon"><i class="fas fa-coins"></i></div>
                            <div class="doc-info">
                                <h3>Fee Structure</h3>
                                <p>Detailed breakdown of tuition fees, hostel charges, and other applicable fees.</p>
                            </div>
                            <div class="doc-action">
                                <a href="assets/Admission/Fee.pdf" target="_blank" class="download-btn">
                                    View Details <i class="fas fa-file-download"></i>
                                </a>
                            </div>
                        </div>

                        <!-- Fee Refund Policy -->
                        <div class="doc-item">
                            <div class="doc-icon"><i class="fas fa-shield-alt"></i></div>
                            <div class="doc-info">
                                <h3>Fee Refund Policy</h3>
                                <p>Terms and conditions regarding fee refunds and admission cancellations.</p>
                            </div>
                            <div class="doc-action">
                                <a href="assets/Admission/FEE REFUND.pdf" target="_blank" class="download-btn">
                                    Read Policy <i class="fas fa-file-download"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>

    <?php include 'footer.php'; ?>