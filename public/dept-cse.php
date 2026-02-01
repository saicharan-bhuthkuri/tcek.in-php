<!DOCTYPE html>
<html lang="en">
<head>
    <title>CSE Department - TCEK</title>
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
        <h1>Department of Computer Science and Engineering</h1>
        <p>Innovation in Computing & Technology</p>
        <p><a href="departments.php" style="color: #fff; text-decoration: underline;">Departments</a> / CSE</p>
    </section>

    <div class="container" style="padding: 30px 20px;">
        
        <!-- About Department -->
        <div class="content-box">
            <h2 class="section-title">About Department</h2>
            <p class="dept-desc-text" style="margin-bottom: 15px;">
                The Department of Computer Science and Engineering at TCEK was started in the year 2008 with an intake of 60. Subsequently the intake is enhanced from 60 to 120 in the academic year 2010; The Department offers UG (B.Tech) degrees. The Department has state of the art infrastructure and computing equipment supported by high speed internet and wireless networks.
            </p>
            <p class="dept-desc-text" style="margin-bottom: 15px;">
                The Department of Computer Science and Engineering is renowned for cutting edge research and for imparting state of art education. The Department provides an outstanding research environment complemented by excellence in teaching.
            </p>
            <p class="dept-desc-text" style="margin-bottom: 15px;">
                 Our faculty aims at delivering top class education blending their rich research experience with classroom teaching. It also promotes active industry-institute collaboration by identifying areas of interest and taking part in sponsored research projects and consultancy services. The Department has undertaken many research projects funded both by multinationals and government agencies.
            </p>
             <p class="dept-desc-text">
                The major areas of research include Image Processing, Real time operating Systems, Neural Networks, Data mining, Information retrieval and Web mining, Information Security, Networks, Operating Systems, Distributed Systems, Parallel processing and Human-Computer Interactions.
            </p>
        </div>
        
        <!-- Vision & Mission -->
        <div class="content-box">
            <h2 class="section-title">Vision & Mission</h2>
            
            <h3 style="color: #00b894; margin-bottom: 15px;">Vision</h3>
            <p class="dept-desc-text" style="margin-bottom: 30px;">
                To produce professional Computer Science Engineers who can meet the expectations of the globe and contribute to the advancement of engineering and technology which involves creativity and innovations by providing an excellent learning environment with the best quality facilities.
            </p>
            
            <h3 style="color: #00b894; margin-bottom: 15px;">Mission</h3>
            <ul class="mission-list">
                <li>To provide the students with a practical and qualitative education in a modern technical environment that will help to improve their abilities and skills in solving programming problems effectively with different ideas and knowledge.</li>
                <li>Creating knowledge of fundamental principles and innovative technologies through strong foundation within the core areas of computer science and also in inter-disciplinary topics.</li>
                <li>To Develop Domain and research skills that enable them to constructive research to undertake challenging careers and pursue higher education</li>
            </ul>
        </div>

        <!-- HOD Section -->
        <div class="content-box">
            <h2 class="section-title">Head of the Department</h2>
            <div class="hod-card">
                <img src="assets/Dept/hod-cse.jpeg" alt="J.SWATHI" class="hod-img" onerror="this.src='assets/Dept/hod-cse.jpeg'"> <!-- Fallback to EEE HOD if CSE not found temp -->
                <div class="hod-info">
                    <h3>Mrs. J. Swathi</h3>
                    <h4>HOD & Associate Professor</h4>
                    <p class="dept-desc-text" style="margin-bottom: 15px;">
                        J.SWATHI, is a distinguished academician and researcher with over 14 years of experience in the field of Computer Science and Engineering. He is currently serving as the Head of the Department (HOD) at Trinity College of Engineering and Technology, where he has been instrumental in shaping the curriculum and fostering innovation in emerging technologies.
                    </p>
                    <p class="dept-desc-text">
                        His research interests span across Machine Learning (ML), Deep Learning (DL), and Blockchain Technology, areas where he has contributed through research, publications, and mentorship. He has been actively involved in guiding students and researchers in developing cutting-edge solutions that leverage artificial intelligence and secure decentralized systems. Throughout his career, he has played a pivotal role in bridging the gap between academia and industry by integrating practical applications with theoretical knowledge. His passion for teaching, research, and technological advancements has made a significant impact on the academic community.
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
                        <tr><td data-label="S.No">1</td><td data-label="Name">SWATHI JILLA</td><td data-label="Designation">HOD & Associate Professor</td><td data-label="Qual">M.Tech</td><td data-label="Reg ID">2717-150427-180153</td><td data-label="Exp">15 Years</td></tr>
                        <tr><td data-label="S.No">2</td><td data-label="Name">GADDAM LAKSHMI</td><td data-label="Designation">Associate Professor</td><td data-label="Qual">M.Tech</td><td data-label="Reg ID">7259-150409-113641</td><td data-label="Exp">15 Years</td></tr>
                        <tr><td data-label="S.No">3</td><td data-label="Name">SYED KHAJAPASHA</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">M.Tech</td><td data-label="Reg ID">0802-170126-125051</td><td data-label="Exp">10 Years</td></tr>
                        <tr><td data-label="S.No">4</td><td data-label="Name">ANJALI KOMUROJU</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">M.Tech</td><td data-label="Reg ID">4513-190506-102113</td><td data-label="Exp">8 Years</td></tr>
                        <tr><td data-label="S.No">5</td><td data-label="Name">MOHAMMAD ZIAUDDIN</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">M.Tech</td><td data-label="Reg ID">5682-170203-164956</td><td data-label="Exp">10 Years</td></tr>
                        <tr><td data-label="S.No">6</td><td data-label="Name">SYED MEER SUBHAN ALI</td><td data-label="Designation">Associate Professor</td><td data-label="Qual">M.Tech</td><td data-label="Reg ID">5682-170203-164956</td><td data-label="Exp">15 Years</td></tr>
                        <tr><td data-label="S.No">7</td><td data-label="Name">KOTTE ANUSHA</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">M.Tech</td><td data-label="Reg ID">5682-170203-164956</td><td data-label="Exp">5 Years</td></tr>
                        <tr><td data-label="S.No">8</td><td data-label="Name">PALLA SWATHI</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">M.Tech</td><td data-label="Reg ID">5682-170203-164956</td><td data-label="Exp">5 Years</td></tr>
                        <tr><td data-label="S.No">9</td><td data-label="Name">JITTAVENI SRINIVAS</td><td data-label="Designation">Assistant Professor</td><td data-label="Qual">M.Tech</td><td data-label="Reg ID">5682-170203-164956</td><td data-label="Exp">3 Years</td></tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Syllabus & PEOs Grid -->
        <div class="info-grid">
            <div class="content-box" style="margin-bottom: 0; text-align: center;">
                <h2 class="section-title">Syllabus</h2>
                <a href="assets/Dept/R22B.Tech.CSEIandIIYearSyllabus.pdf" target="_blank" class="download-btn">
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

    <?php include 'components/footer.php'; ?>
</body>
</html>
