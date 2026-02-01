<!DOCTYPE html>
<html lang="en">
<head>
    <title>H&S Department - TCEK</title>
    <?php include 'head.php'; ?>
    <style>
        /* --- Global & Desktop Styles --- */
        
        .dept-header {
            background: linear-gradient(rgba(0, 184, 148, 0.8), rgba(0, 184, 148, 0.8)), url('assets/top-header/banner.jpg');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            text-align: center;
            color: #fff;
        }

        .page-header {
            padding: 60px 15px 30px;
            text-align: center;
        }

        .page-header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            color: #2d3436;
        }

        .page-header p {
            color: #636e72;
            font-size: 1.1rem;
        }

        .section-title {
            font-size: 2rem;
            color: #00b894;
            margin-bottom: 30px;
            font-weight: 700;
            text-align: center;
        }

        .content-box {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 40px;
        }

        .dept-desc-text {
            line-height: 1.8;
            color: #636e72;
            font-size: 1.05rem;
        }
        
        .mission-list {
            list-style-type: none;
            padding: 0;
        }
        
        .mission-list li {
            margin-bottom: 15px;
            padding-left: 20px;
            position: relative;
            color: #636e72;
             line-height: 1.8;
        }
        
        .mission-list li::before {
            content: "•";
            color: #00b894;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }

        /* HOD Section */
        .hod-card {
            display: flex;
            gap: 30px;
            align-items: flex-start;
        }
        
        .hod-img {
            width: 250px;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            flex-shrink: 0;
        }

        .hod-info h3 {
            color: #2d3436;
            margin-bottom: 5px;
            font-size: 1.8rem;
        }
        
        .hod-info h4 {
            color: #00b894;
            margin-bottom: 20px;
            font-size: 1.2rem;
            font-weight: 600;
        }

        /* Faculty Table */
        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        .faculty-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: #fff;
        }

        .faculty-table th, .faculty-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        .faculty-table th {
            background: #00b894;
            color: white;
            font-weight: 600;
        }

        .faculty-table tr:hover {
            background-color: #f9f9f9;
        }

        /* Info Grid (Syllabus & PEOs) */
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .download-btn {
            display: inline-block; 
            background: #00b894; 
            color: white; 
            padding: 15px 30px; 
            border-radius: 50px; 
            text-decoration: none; 
            font-weight: 600; 
            margin-top: 15px;
            transition: transform 0.2s;
        }

        .download-btn:hover {
            transform: translateY(-2px);
        }

        /* Gallery */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }

        .gallery-item {
            border-radius: 8px;
            overflow: hidden;
            height: 200px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover {
            transform: scale(1.02);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* --- Mobile Responsive Overrides --- */
        @media only screen and (max-width: 900px) {
            
            /* Header adjustments */
            .dept-header {
                padding: 50px 0;
            }

            .page-header h1 {
                font-size: 1.8rem;
            }
            
            .content-box {
                padding: 25px 20px;
            }

            .section-title {
                font-size: 1.6rem;
            }

            /* HOD Section Stack */
            .hod-card {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .hod-img {
                width: 100%;
                max-width: 280px;
                height: auto;
                aspect-ratio: 3/4;
                margin-bottom: 20px;
            }

            /* Info Grid Stack */
            .info-grid {
                grid-template-columns: 1fr;
                gap: 25px;
            }

            /* Gallery Adjustment */
            .gallery-grid {
                grid-template-columns: repeat(2, 1fr); /* 2 columns on mobile */
                gap: 10px;
            }

            /* Faculty Table Card View Transformation */
            .faculty-table thead {
                display: none; /* Hide header */
            }

            .faculty-table, 
            .faculty-table tbody, 
            .faculty-table tr, 
            .faculty-table td {
                display: block;
                width: 100%;
            }

            .faculty-table tr {
                margin-bottom: 20px;
                border: 1px solid #e0e0e0;
                border-radius: 10px;
                box-shadow: 0 2px 8px rgba(0,0,0,0.08);
                background: #fff;
                padding: 10px;
            }

            .faculty-table td {
                display: flex;
                justify-content: space-between;
                align-items: center;
                text-align: right;
                padding: 10px 0;
                border-bottom: 1px solid #f0f0f0;
                font-size: 0.95rem;
            }

            .faculty-table td:last-child {
                border-bottom: none;
            }

            .faculty-table td::before {
                content: attr(data-label);
                float: left;
                font-weight: 700;
                color: #00b894;
                text-transform: uppercase;
                font-size: 0.85rem;
                margin-right: 15px;
                text-align: left;
            }
        }

        /* Ultra-small screens */
        @media only screen and (max-width: 480px) {
            .gallery-grid {
                grid-template-columns: 1fr; /* 1 column on very small screens */
            }
        }
    </style>
</head>
<body>
    <?php $page = 'departments'; include 'header.php'; ?>

    <section class="dept-header">
        <h1>Department of Humanities and Sciences</h1>
        <p>Foundation for Engineering Excellence</p>
        <p><a href="departments.php" style="color: #fff; text-decoration: underline;">Departments</a> / H&S</p>
    </section>

    <div class="container" style="padding: 30px 20px;">
        
        <!-- About Department -->
        <div class="content-box">
            <h2 class="section-title">About Department</h2>
            <p class="dept-desc-text" style="margin-bottom: 15px;">
                The department of Humanities and Sciences (H & S) comprises the disciplines of English, Mathematics, Physics and Chemistry. A blend of experience and enthusiasm, the department plays an instrumental role in moulding students from the first year itself.
            </p>
            <p class="dept-desc-text">
                The objective of the department is to prepare students to face challenges in a globalised world by imparting intensive training in English Language and Communication Skills, Mathematics, Physics and Chemistry that will help them apply their core knowledge to related fields. The department caters to the placement related needs of the students by training them in areas like Verbal Ability, Group Discussions, Interview Techniques, Quantitative Aptitude, etc.
            </p>
        </div>

        <!-- HOD Section -->
        <div class="content-box">
            <h2 class="section-title">Head of the Department</h2>
            <div class="hod-card">
                <img src="assets/Dept/hod-h&s.jpeg" alt="PADMINI PACHWA" class="hod-img" onerror="this.src='assets/Dept/hod-eee.jpeg'"> <!-- Fallback to EEE HOD if H&S not found temp -->
                <div class="hod-info">
                    <h3>Mrs. Padmini Pachwa</h3>
                    <h4>HOD & Assistant Professor</h4>
                    <p class="dept-desc-text" style="margin-bottom: 15px;">
                        PADMINI PACHWA, Head, Department of Humanities & Sciences has a total experience of more than 15 years. Out of which, she also has an industry exposure in marketing and sales. Apart from that, she has comprehensive teaching experience, which also includes training and development experience.
                    </p>
                    <p class="dept-desc-text">
                        She completed her Msc in 2001. She is skilled primarily in the training of students and making them ready for industry. She also publishes a number of research papers both national and international.
                    </p>
                </div>
            </div>
        </div>

        <!-- Faculty Section -->
        <div class="content-box">
            <h2 class="section-title">Faculty</h2>
            <div class="table-responsive">
                <table class="faculty-table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name of the Faculty</th>
                            <th>Designation</th>
                            <th>Department</th>
                            <th>Qualification</th>
                            <th>Experience</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td data-label="S.No">1</td><td data-label="Name">Dr. Ashok Kumar Vootla</td><td data-label="Designation">Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">Ph.D</td><td data-label="Exp">17 Years</td></tr>
                        <tr><td data-label="S.No">2</td><td data-label="Name">P.PADMIINI</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.SC (MATHEMATICS)</td><td data-label="Exp">10 Years</td></tr>
                        <tr><td data-label="S.No">3</td><td data-label="Name">N.MAHENDAR</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.A (ENGLISH)</td><td data-label="Exp">7 Years</td></tr>
                        <tr><td data-label="S.No">4</td><td data-label="Name">G.SRINIVAS</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.A (ENGLISH)</td><td data-label="Exp">3 Years</td></tr>
                        <tr><td data-label="S.No">5</td><td data-label="Name">ASIA BEGUM</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.A (ENGLISH)</td><td data-label="Exp">3 Years</td></tr>
                        <tr><td data-label="S.No">6</td><td data-label="Name">V.SRINIVAS</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.SC(CHEMISTRY)</td><td data-label="Exp">6 Years</td></tr>
                        <tr><td data-label="S.No">7</td><td data-label="Name">HUMERA AMREEN</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.SC(CHEMISTRY)</td><td data-label="Exp">3 Years</td></tr>
                        <tr><td data-label="S.No">8</td><td data-label="Name">M.SUSHMA RANI</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.SC(CHEMISTRY)</td><td data-label="Exp">1 Year</td></tr>
                        <tr><td data-label="S.No">9</td><td data-label="Name">B.JHASI RANI</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.SC(PHYSICS)</td><td data-label="Exp">3 Years</td></tr>
                        <tr><td data-label="S.No">10</td><td data-label="Name">T.NANDITHA</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.SC(PHYSICS)</td><td data-label="Exp">2 Years</td></tr>
                        <tr><td data-label="S.No">11</td><td data-label="Name">SD.KALIMUNISSA</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.SC(PHYSICS)</td><td data-label="Exp">3 Years</td></tr>
                        <tr><td data-label="S.No">12</td><td data-label="Name">B.RAMAMURTHY</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.TECH (MECHANICAL)</td><td data-label="Exp">5 Years</td></tr>
                        <tr><td data-label="S.No">13</td><td data-label="Name">S.VINAY KUMAR</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.TECH (MECHANICAL)</td><td data-label="Exp">4 Years</td></tr>
                        <tr><td data-label="S.No">14</td><td data-label="Name">A.VIKAS</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.TECH (MECHANICAL)</td><td data-label="Exp">1 Year</td></tr>
                        <tr><td data-label="S.No">15</td><td data-label="Name">V.MAMATHA</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.TECH(ECE)</td><td data-label="Exp">3 Years</td></tr>
                        <tr><td data-label="S.No">16</td><td data-label="Name">T.SAMPATH KUMAR</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.TECH(ECE)</td><td data-label="Exp">2 Years</td></tr>
                        <tr><td data-label="S.No">17</td><td data-label="Name">J.SURESH</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.TECH(EEE)</td><td data-label="Exp">3 Years</td></tr>
                        <tr><td data-label="S.No">18</td><td data-label="Name">A.SRILATHA</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.B.A</td><td data-label="Exp">3 Years</td></tr>
                        <tr><td data-label="S.No">19</td><td data-label="Name">N.ARUNA JYOTHI</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.B.A</td><td data-label="Exp">3 Year</td></tr>
                        <tr><td data-label="S.No">20</td><td data-label="Name">K.SRINIVAS</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">M.B.A</td><td data-label="Exp">3 Year</td></tr>
                        <tr><td data-label="S.No">21</td><td data-label="Name">A.VIJAYA</td><td data-label="Designation">Assistant Professor</td><td data-label="Dept">H&S</td><td data-label="Qual">MLIC (LIBRARIAN)</td><td data-label="Exp">11 Year</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Syllabus & PEOs Grid -->
        <div class="info-grid">
            <div class="content-box" style="margin-bottom: 0; text-align: center;">
                <h2 class="section-title">Syllabus</h2>
                <a href="assets/Dept/HS_Syllabus.pdf" target="_blank" class="download-btn">
                    <i class="fas fa-download" style="margin-right: 10px;"></i> Download Syllabus
                </a>
            </div>

            <div class="content-box" style="margin-bottom: 0; text-align: center;">
                <h2 class="section-title">PEOs & PSOs</h2>
                <p style="margin-bottom: 20px; color: #636e72;">PEOs & PSOs of B.Tech (UG Program)</p>
                <a href="assets/Dept/peos_psos.docx" class="download-btn" style="background: #0984e3;">
                    Click Here to View
                </a>
            </div>
        </div>

        <!-- Gallery Section -->
        <div class="content-box">
            <h2 class="section-title">Gallery</h2>
            <div class="gallery-grid">
                <?php 
                $images = ['1.jpeg', '2.jpeg', '3.jpeg', '4.jpeg', '5.jpeg', '6.jpeg', '7.jpeg', '8.jpeg', '9.jpeg', '10.jpeg'];
                foreach($images as $img): 
                ?>
                <div class="gallery-item">
                    <img src="assets/Dept/<?php echo $img; ?>" alt="Department Event">
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
