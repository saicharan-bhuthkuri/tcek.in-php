<!DOCTYPE html>
<html lang="en">
<head>
    <title>MBA Department - TCEK</title>
    <?php include 'components/head.php'; ?>
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
        
        .focus-points {
            list-style-type: none;
            padding: 0;
            margin-top: 15px;
        }
        
        .focus-points li {
             margin-bottom: 10px;
             position: relative;
             padding-left: 25px;
             color: #636e72;
        }
        
        .focus-points li::before {
            content: "✔";
            color: #00b894;
            position: absolute;
            left: 0;
            font-weight: bold;
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
    <?php $page = 'departments'; include 'components/header.php'; ?>

    <section class="dept-header">
        <h1>Department of Business Administration (MBA)</h1>
        <p>Shaping Future Business Leaders</p>
        <p><a href="departments.php" style="color: #fff; text-decoration: underline;">Departments</a> / MBA</p>
    </section>

    <div class="container" style="padding: 30px 20px;">
        
        <!-- About Department -->
        <div class="content-box">
            <h2 class="section-title">About Department</h2>
            <p class="dept-desc-text" style="margin-bottom: 15px;">
                The MBA Programme provides a graduate with a flexible degree which can help increase the awareness of general business knowledge and enhance understanding in any particular business domain.
            </p>
            <p class="dept-desc-text" style="margin-bottom: 15px;">
                The Department of Business Administration is renowned for cutting edge research and for imparting state of art education. The Department provides an outstanding research environment complemented by excellence in teaching.
            </p>
            <p class="dept-desc-text" style="margin-bottom: 15px;">
                Our faculty aims at delivering top class education blending their rich research experience with classroom teaching. It also promotes active industry-institute collaboration by identifying areas of interest and taking part in sponsored research projects and consultancy services. The Department has undertaken many research projects funded both by multinationals and government agencies.
            </p>
            <h4 style="color: #2d3436; margin-top: 20px; font-weight: 600;">Focus Points:</h4>
            <ul class="focus-points">
                <li>Highly qualified, experienced, competent, motivated and matured faculty.</li>
                <li>Confidence building and personality development measures.</li>
                <li>Communication skills and soft skills improvement with the help of English lab with audio-visual equipment.</li>
                <li>Major focus on co-curricular and extra curricular activities.</li>
            </ul>
        </div>
        
        <!-- Vision & Mission -->
        <div class="content-box">
            <h2 class="section-title">Vision & Mission</h2>
            
            <h3 style="color: #00b894; margin-bottom: 15px;">Vision</h3>
            <p class="dept-desc-text" style="margin-bottom: 30px;">
                To emerge as a center of excellence to meet the global standards in business practices and research through value based educational system.
            </p>
            
            <h3 style="color: #00b894; margin-bottom: 15px;">Mission</h3>
            <ul class="mission-list">
                <li>To transforms the lives through value based educational system.</li>
                <li>To enhance the employability skills and provide adequate opportunities.</li>
                <li>To promote innovative ideas and skills for entrepreneurship.</li>
                <li>To inculcate the principles of social responsibility and ethical values.</li>
            </ul>
        </div>

        <!-- HOD Section -->
        <div class="content-box">
            <h2 class="section-title">Head of the Department</h2>
            <div class="hod-card">
                <img src="assets/Dept/hod-mba.jpg" alt="Dr. ARIF ARAFAT" class="hod-img" onerror="this.src='assets/Dept/hod-eee.jpeg'"> <!-- Fallback to EEE HOD if MBA not found temp -->
                <div class="hod-info">
                    <h3>Dr. Arif Arafat</h3>
                    <h4>HOD & Associate Professor</h4>
                    <p class="dept-desc-text" style="margin-bottom: 15px;">
                        Dr. ARIF ARAFAT, Head, Department of MBA has a total experience of more than 17 years. Out of which, he also has an industry exposure in Customer and sales. Apart from that, he has comprehensive teaching experience of around 15 years, which also include training and development experience.
                    </p>
                    <p class="dept-desc-text">
                        He completed his MBA in 2006 and his Doctorate in 2019. He is skilled primarily in the training of students and making them ready for industry. He also publishes a number of research papers both national and international.
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
                            <th>Qualification</th>
                            <th>Registration ID</th>
                            <th>Experience</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td data-label="S.No">1</td><td data-label="Name">Dr.ARIF ARFAT</td><td data-label="Designation">HOD-Associate Professor</td><td data-label="Qual">MBA, M.Com, NET, SET, Ph.D</td><td data-label="Reg ID">0506-150408-132239</td><td data-label="Exp">17 Years</td></tr>
                        <tr><td data-label="S.No">2</td><td data-label="Name">Dr. AMBIKA</td><td data-label="Designation">Associate Professor</td><td data-label="Qual">MBA, Ph.D</td><td data-label="Reg ID">0506-150408-132239</td><td data-label="Exp">14 Years</td></tr>
                        <tr><td data-label="S.No">3</td><td data-label="Name">Dr.RAJIDI RAMMOHAN REDDY</td><td data-label="Designation">Associate Professor</td><td data-label="Qual">MBA, NET, Ph.D</td><td data-label="Reg ID">3696-150422-172652</td><td data-label="Exp">15 Years</td></tr>
                        <tr><td data-label="S.No">4</td><td data-label="Name">PARSHA RAMESH</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">MBA</td><td data-label="Reg ID">9898-170915-153011</td><td data-label="Exp">10 Years</td></tr>
                        <tr><td data-label="S.No">5</td><td data-label="Name">VENKATESWARLU NAGULA</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">MBA</td><td data-label="Reg ID">2590-150415-181625</td><td data-label="Exp">10 Years</td></tr>
                        <tr><td data-label="S.No">6</td><td data-label="Name">VAMSI KRISHNA BARIBADDALA</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">MBA; M.Com; SET</td><td data-label="Reg ID">52150405-120550</td><td data-label="Exp">11 Years</td></tr>
                        <tr><td data-label="S.No">7</td><td data-label="Name">NASPURI SAI SHRAVANI</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">MBA</td><td data-label="Reg ID">5545-220124-130408</td><td data-label="Exp">3 Years</td></tr>
                        <tr><td data-label="S.No">8</td><td data-label="Name">SRIDHAR SUDDALA</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">MBA</td><td data-label="Reg ID">5495-190219-181935</td><td data-label="Exp">0 Years</td></tr>
                        <tr><td data-label="S.No">9</td><td data-label="Name">VANITHA THATIKONDA</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">MBA</td><td data-label="Reg ID">6562-150418-210707</td><td data-label="Exp">0 Years</td></tr>
                        <tr><td data-label="S.No">10</td><td data-label="Name">MOHAMMAD</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">MBA</td><td data-label="Reg ID">5607-170126-134229</td><td data-label="Exp">0 Years</td></tr>
                        <tr><td data-label="S.No">11</td><td data-label="Name">GOURISHETTI SANTHOSHKUMAR</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">MBA</td><td data-label="Reg ID">4451-170129-115234</td><td data-label="Exp">0 Years</td></tr>
                        <tr><td data-label="S.No">12</td><td data-label="Name">SRI LATHA THANGELLAPALLI</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">MBA</td><td data-label="Reg ID">0755-150408-1404212</td><td data-label="Exp">5 Years</td></tr>
                        <tr><td data-label="S.No">13</td><td data-label="Name">KATTA RAJANI</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">MBA</td><td data-label="Reg ID">9485-170205-152608</td><td data-label="Exp">0 Years</td></tr>
                        <tr><td data-label="S.No">14</td><td data-label="Name">SANA</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">MBA</td><td data-label="Reg ID">9485-170205-152608</td><td data-label="Exp">0 Years</td></tr>
                        <tr><td data-label="S.No">15</td><td data-label="Name">SRAVANTHI SIRIPURAM</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">MBA</td><td data-label="Reg ID">4462-170213-160019</td><td data-label="Exp">0 Years</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Syllabus & PEOs Grid -->
        <div class="info-grid">
            <div class="content-box" style="margin-bottom: 0; text-align: center;">
                <h2 class="section-title">Syllabus</h2>
                <a href="assets/Dept/MBA_Syllabus.pdf" target="_blank" class="download-btn">
                    <i class="fas fa-download" style="margin-right: 10px;"></i> Download Syllabus
                </a>
            </div>

            <div class="content-box" style="margin-bottom: 0; text-align: center;">
                <h2 class="section-title">POs</h2>
                <p style="margin-bottom: 20px; color: #636e72;">POs of MBA</p>
                <a href="assets/Dept/mba_pos.docx" class="download-btn" style="background: #0984e3;">
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

    <?php include 'components/footer.php'; ?>
</body>
</html>
