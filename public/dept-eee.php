<!DOCTYPE html>
<html lang="en">

<head>
    <title>EEE Department - Trinity College of Engineering & Technology</title>
    <?php include 'components/head.php'; ?>
    <style>
        /* Department Page Layout */
        .dept-container {
            display: flex;
            gap: 30px;
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
        }

        /* Sidebar Navigation */
        .dept-sidebar {
            flex: 0 0 280px;
            position: sticky;
            top: 100px; /* Adjust based on header height */
            height: fit-content;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            border: 1px solid #eee;
        }

        .dept-sidebar-title {
            font-size: 20px;
            color: #2d3436;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #00b894;
            font-weight: 600;
        }

        .sidebar-nav {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-nav li {
            margin-bottom: 10px;
        }

        .sidebar-nav a {
            display: block;
            padding: 12px 15px;
            color: #636e72;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .sidebar-nav a:hover,
        .sidebar-nav a.active {
            background: #00b894;
            color: white;
            padding-left: 20px;
        }

        /* Main Content Area */
        .dept-content {
            flex: 1;
            min-width: 0; /* Prevents overflow issues */
        }

        .section-card {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            margin-bottom: 30px;
            border: 1px solid #eee;
        }

        .section-title {
            font-size: 24px;
            color: #00b894;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .dept-img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .hod-img {
            max-width: 300px;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .lab-list {
            list-style: none;
            padding: 0;
        }

        .lab-list li {
            padding: 10px 0;
            border-bottom: 1px dashed #eee;
            color: #2d3436;
            font-weight: 500;
        }
        
        .lab-list li:last-child {
            border-bottom: none;
        }

        /* Responsive Table */
        .table-responsive {
            overflow-x: auto;
        }

        .faculty-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        .faculty-table th, 
        .faculty-table td {
            padding: 12px;
            border: 1px solid #eee;
            text-align: left;
            font-size: 14px;
        }

        .faculty-table th {
            background: #00b894;
            color: white;
            font-weight: 600;
        }

        .faculty-table tr:nth-child(even) {
            background: #f9f9f9; 
        }

        /* Mobile Cards for Faculty */
        .faculty-cards {
            display: none; /* Hidden on desktop */
            gap: 20px;
        }

        .faculty-card {
            background: white;
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }

        .f-card-header {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        .f-avatar {
            width: 50px;
            height: 50px;
            background: #f1f2f6;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #00b894;
            font-size: 20px;
        }

        .f-info h4 {
            margin: 0;
            font-size: 16px;
            color: #2d3436;
        }
        .f-info span {
            font-size: 12px;
            color: #636e72;
        }

        .f-details div {
            font-size: 13px;
            color: #636e72;
            margin-bottom: 5px;
        }
        
        .f-details strong {
            color: #2d3436;
        }

        /* Gallery Grid */
        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
        }

        .gallery-item {
            border-radius: 8px;
            overflow: hidden;
            height: 150px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        /* Mobile Responsiveness */
        @media (max-width: 991px) {
            /* Main Content Adjustments */
            .dept-container {
                flex-direction: column;
                padding: 0; /* Remove padding for full-width feel on mobile */
            }
            
            .dept-content {
                padding: 20px 15px; /* Add padding back to content */
            }
            
            .dept-sidebar {
                position: sticky;
                top: 60px; /* Adjust for header */
                z-index: 999;
                width: 100%;
                margin: 0;
                border-radius: 0;
                border-left: none;
                border-right: none;
                border-top: 1px solid #eee;
                background: #fff;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                padding: 10px 15px;
                box-shadow: 0 4px 10px rgba(0,0,0,0.05);
                display: block; /* Ensure block layout */
            }

            .sidebar-nav {
                display: flex;
                gap: 10px;
                width: max-content; /* Ensure items layout horizontally */
            }

            .section-card {
                padding: 20px;
                border-radius: 8px; /* Slightly smaller radius */
            }
            
            /* Hide scrolling bar visually but allow touch scroll */
            .dept-sidebar::-webkit-scrollbar {
                height: 0px;
                background: transparent;
            }

            /* Main Content Adjustments */
            .section-card {
                padding: 20px;
            }
            
            .section-title {
                font-size: 20px;
            }

            /* Faculty Table to Cards at this breakpoint */
            .faculty-table {
                display: none;
            }
            .faculty-cards {
                display: flex;
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <?php $page = 'departments'; include 'components/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <h1>Electrical & Electronics Engineering</h1>
        <p><a href="departments.php" style="color: #fff; text-decoration: underline;">Departments</a> / EEE</p>
    </section>

    <!-- Content -->
    <div class="dept-container">
        <!-- Sidebar -->
        <aside class="dept-sidebar">
            <div class="dept-sidebar-title">EEE Department</div>
            <ul class="sidebar-nav">
                <li><a href="#about" class="active">About Department</a></li>
                <li><a href="#hod">Head of the Department</a></li>
                <li><a href="#faculty">Faculty</a></li>
                <li><a href="#syllabus">Syllabus</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#peos">PEOs & PSOs</a></li>
            </ul>
        </aside>

        <!-- Main Content -->
        <main class="dept-content">
            
            <!-- About Section -->
            <section id="about" class="section-card">
                <h2 class="section-title">About Department</h2>
                <p>The Department of Electrical Engineering was formed with the primary objective of providing quality education in the field of Electrical Engineering, while addressing the problems of today and tomorrow. Right from its inception, the department has been offering excellent infrastructural facilities with a variety of platforms for aspiring professional students to meet the growing demands of the Electrical industry.</p>
                <p>The Department of Electrical and Electronics Engineering was established in 2008 with Undergraduate Programme B.Tech. Electrical and Electronics Engineering. The department endeavours to produce confident professionals tuned to real time working environment. The department offers excellent academic environment with a team of highly qualified faculty members to inspire the students to develop their technical skills and inculcate the spirit of team work in them. The strength of the department lies in the highly motivated students who understand the dynamics of the industry and hone their skills accordingly. We focus on bridging the gap between campus education and industry needs through internships, guest lectures and workshops.</p>
                
                <h3 style="color: #2d3436; margin: 30px 0 15px;">Laboratory Facilities</h3>
                <ul class="lab-list">
                    <li>Electrical Machines Laboratory</li>
                    <li>Power Electronics Laboratory</li>
                    <li>Control System Laboratory</li>
                    <li>Power System Laboratory</li>
                    <li>Measurement and Instrumentation Laboratory</li>
                    <li>Electric Circuits Laboratory</li>
                    <li>Engineering Workshop Laboratory</li>
                </ul>

                <hr style="margin: 30px 0; border: 0; border-top: 1px solid #eee;">

                <h4>Electrical Machines Laboratory</h4>
                <p>The Electrical Machines Laboratory supports teaching; research and consultancy work on Electrical machines and drives. Through hands-on experiments with real machines, students gain practical experience on transformers and various types of machine drives. The laboratory can also be used for project work related to electrical machines and energy conversion.</p>

                <h4>Power Electronics Laboratory</h4>
                <p>Circuits and devices used for switching power converters, solid-state motor drives, and power controllers; dc-dc, ac-dc, and dc-ac converters and applications; high-power transistors and magnetic components; design considerations including heat transfer.</p>

                <h4>Control System Laboratory</h4>
                <p>The Control Systems Laboratory introduces students to the implementation of PID-controllers, and two-step controllers, to first order delay, as well as third order delay, systems using educational PID boards and DC servo boards. Six numbers of PLC kits available for doing industrial application based experiments. Experimentations and analysis use industrial standard oscilloscopes, and data-acquisition boards interfaced via SIMULINK/MATLAB.</p>
                
                <h4>Power System Laboratory</h4>
                <p>Power System Simulation Laboratory is a computer model that mimics the operation of a real or proposed Power Engineering system. Simulation tool helps in validating the ideas and new concepts which born’s in an engineer’s mind which seeks for solution to a problem. Sophisticated Computer programs are used in Power Engineering Simulation Laboratory for the purpose of analysis and design in the following domains.</p>
                
                <h4>Measurement and Instrumentation Laboratory</h4>
                <p>The Measurement and Instrumentation laboratory in Electrical and Electronics Engineering (EEE) Department has the objective to familiarize the student with the operation of basic laboratory instrumentation such as Energy meter, multimeter, frequency counter, voltmeter, Ammeter and also with personal computers and circuit simulators such as Pspice and Workbench etc. To understand the experiments student must understand the theory of the circuits under test, and the instruments used to test them.</p>

                <h4>Electric Circuits Laboratory</h4>
                <p>In the Electrical Circuit Lab students can create their own electrical circuits and do measurements on it. The electrical circuits are limited to DC (direct current). There is also a version of the Electrical Circuit Lab in which data can be collected. Students can analyze the collected data by creating graphs of the data and use the graphs in the conclusion tool. Harmonic Analyzer is also available for measuring and analyzing the data’s.</p>

                <h4>Engineering Workshop Laboratory</h4>
                <p>Engineering workshop Lab covers all the basic engineering lab practices in the Civil, Mechanical, Electrical and Electronics areas. The lab deals with the various tools to be used and exercises to be practiced in the application of engineering.</p>
            </section>

            <!-- HOD Section -->
            <section id="hod" class="section-card">
                <h2 class="section-title">Head of the Department</h2>
                <div style="display: flex; gap: 30px; flex-wrap: wrap;">
                    <div style="flex: 0 0 auto;">
                        <img src="assets/Dept/hod-eee.jpeg" alt="Dr. K. Natarajan" class="hod-img">
                    </div>
                    <div style="flex: 1;">
                        <h3>Dr. K. Natarajan</h3>
                        <p style="color: #00b894; font-weight: 600;">Head of Department</p>
                        <p>Dr. K.Natarajan obtained his B.E (Electrical and Electronics Engineering) from Sri Ramakrishna Institute of Technology, Coimbatore and M.E (Electrical Machines) from P.S.G college of Technology, Coimbatore. He finished his MBA in the field of Educational Management. He also completed his Ph.D degree from Anna University, Chennai in the year of 2017.</p>
                        <p>He has over 14 years of teaching experience at UG and PG level and guided a number of projects in Electrical Engineering and published / presented many articles in Journals and conferences.</p>
                    </div>
                </div>
            </section>

            <!-- Faculty Section -->
            <section id="faculty" class="section-card">
                <h2 class="section-title">Faculty</h2>
                
                <!-- PC Table View -->
                <div class="table-responsive">
                    <table class="faculty-table">
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name of the Faculty</th>
                                <th>Designation</th>
                                <th>Department</th>
                                <th>Registration ID</th>
                                <th>Experience</th>
                                <th>Photo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>VAMSHI KRISHNA KOMURAVELLI</td>
                                <td>Assistant Professor</td>
                                <td>M.Tech</td>
                                <td>75150405-174823</td>
                                <td>15 Years</td>
                                <td>description here</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>SHIVA KUMAR MUNJAM</td>
                                <td>Assistant Professor</td>
                                <td>M.Tech</td>
                                <td>7734-150412-151225</td>
                                <td>20 Years</td>
                                <td>description here</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>SANTHOSH BANDI</td>
                                <td>Assistant Professor</td>
                                <td>M.Tech</td>
                                <td>4224-150416-153422</td>
                                <td>16 Years</td>
                                <td>description here</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>ARPULA KRISHNAIAH</td>
                                <td>Assistant Professor</td>
                                <td>M.Tech</td>
                                <td>1777-150419-12802</td>
                                <td>15 Years</td>
                                <td>description here</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>KOPPULA SRINIVAS</td>
                                <td>Assistant Professor</td>
                                <td>M.Tech</td>
                                <td>0016-170119-101553</td>
                                <td>15 Years</td>
                                <td>description here</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>CHUNDURI SUPRIYA</td>
                                <td>Assistant Professor</td>
                                <td>M.Tech</td>
                                <td>7565-180130-151342</td>
                                <td>12 Years</td>
                                <td>description here</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>VELPULA SWARUPA</td>
                                <td>Assistant Professor</td>
                                <td>M.Tech</td>
                                <td>8793-170126-091552</td>
                                <td>8 Years</td>
                                <td>description here</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>ASHOK KUMAR GUDA</td>
                                <td>Assistant Professor</td>
                                <td>M.Tech</td>
                                <td>5286-150506-163956</td>
                                <td>15 Years</td>
                                <td>description here</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Card View -->
                <div class="faculty-cards">
                    <div class="faculty-card">
                        <div class="f-card-header">
                            <div class="f-avatar"><i class="fas fa-user-tie"></i></div>
                            <div class="f-info">
                                <h4>VAMSHI KRISHNA KOMURAVELLI</h4>
                                <span>Assistant Professor</span>
                            </div>
                        </div>
                        <div class="f-details">
                            <div><strong>Dept:</strong> M.Tech</div>
                            <div><strong>ID:</strong> 75150405-174823</div>
                            <div><strong>Exp:</strong> 15 Years</div>
                        </div>
                    </div>

                    <div class="faculty-card">
                        <div class="f-card-header">
                            <div class="f-avatar"><i class="fas fa-user-tie"></i></div>
                            <div class="f-info">
                                <h4>SHIVA KUMAR MUNJAM</h4>
                                <span>Assistant Professor</span>
                            </div>
                        </div>
                        <div class="f-details">
                            <div><strong>Dept:</strong> M.Tech</div>
                            <div><strong>ID:</strong> 7734-150412-151225</div>
                            <div><strong>Exp:</strong> 20 Years</div>
                        </div>
                    </div>

                    <div class="faculty-card">
                        <div class="f-card-header">
                            <div class="f-avatar"><i class="fas fa-user-tie"></i></div>
                            <div class="f-info">
                                <h4>SANTHOSH BANDI</h4>
                                <span>Assistant Professor</span>
                            </div>
                        </div>
                        <div class="f-details">
                            <div><strong>Dept:</strong> M.Tech</div>
                            <div><strong>ID:</strong> 4224-150416-153422</div>
                            <div><strong>Exp:</strong> 16 Years</div>
                        </div>
                    </div>

                    <div class="faculty-card">
                        <div class="f-card-header">
                            <div class="f-avatar"><i class="fas fa-user-tie"></i></div>
                            <div class="f-info">
                                <h4>ARPULA KRISHNAIAH</h4>
                                <span>Assistant Professor</span>
                            </div>
                        </div>
                        <div class="f-details">
                            <div><strong>Dept:</strong> M.Tech</div>
                            <div><strong>ID:</strong> 1777-150419-12802</div>
                            <div><strong>Exp:</strong> 15 Years</div>
                        </div>
                    </div>
                    
                    <div class="faculty-card">
                        <div class="f-card-header">
                            <div class="f-avatar"><i class="fas fa-user-tie"></i></div>
                            <div class="f-info">
                                <h4>KOPPULA SRINIVAS</h4>
                                <span>Assistant Professor</span>
                            </div>
                        </div>
                        <div class="f-details">
                            <div><strong>Dept:</strong> M.Tech</div>
                            <div><strong>ID:</strong> 0016-170119-101553</div>
                            <div><strong>Exp:</strong> 15 Years</div>
                        </div>
                    </div>

                    <div class="faculty-card">
                        <div class="f-card-header">
                            <div class="f-avatar"><i class="fas fa-user-tie"></i></div>
                            <div class="f-info">
                                <h4>CHUNDURI SUPRIYA</h4>
                                <span>Assistant Professor</span>
                            </div>
                        </div>
                        <div class="f-details">
                            <div><strong>Dept:</strong> M.Tech</div>
                            <div><strong>ID:</strong> 7565-180130-151342</div>
                            <div><strong>Exp:</strong> 12 Years</div>
                        </div>
                    </div>

                    <div class="faculty-card">
                        <div class="f-card-header">
                            <div class="f-avatar"><i class="fas fa-user-tie"></i></div>
                            <div class="f-info">
                                <h4>VELPULA SWARUPA</h4>
                                <span>Assistant Professor</span>
                            </div>
                        </div>
                        <div class="f-details">
                            <div><strong>Dept:</strong> M.Tech</div>
                            <div><strong>ID:</strong> 8793-170126-091552</div>
                            <div><strong>Exp:</strong> 8 Years</div>
                        </div>
                    </div>

                    <div class="faculty-card">
                        <div class="f-card-header">
                            <div class="f-avatar"><i class="fas fa-user-tie"></i></div>
                            <div class="f-info">
                                <h4>ASHOK KUMAR GUDA</h4>
                                <span>Assistant Professor</span>
                            </div>
                        </div>
                        <div class="f-details">
                            <div><strong>Dept:</strong> M.Tech</div>
                            <div><strong>ID:</strong> 5286-150506-163956</div>
                            <div><strong>Exp:</strong> 15 Years</div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Syllabus Section -->
            <section id="syllabus" class="section-card">
                <h2 class="section-title">Syllabus</h2>
                <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; border-left: 4px solid #00b894;">
                    <h3 style="margin-top: 0; font-size: 18px; color: #2d3436;">EEE I And II Year Syllabus</h3>
                    <p>JAWAHARLAL NEHRU TECHNOLOGICAL UNIVERSITY HYDERABAD B.Tech. in ELECTRICAL AND ELECTRONICS ENGINEERING I YEAR COURSE STRUCTURE & SYLLABUS (R22 Regulations)</p>
                    <a href="assets/Dept/R22B.Tech.EEEIandIIYearSyllabus2.pdf" class="btn btn-primary" target="_blank" style="margin-top: 10px; display: inline-block;">
                        <i class="fas fa-file-pdf"></i> Download Syllabus
                    </a>
                </div>
            </section>

            <!-- Gallery Section -->
            <section id="gallery" class="section-card">
                <h2 class="section-title">Gallery</h2>
                <div class="gallery-grid">
                    <?php 
                    for($i=1; $i<=10; $i++) {
                        echo '<div class="gallery-item">';
                        echo '<img src="assets/Dept/'.$i.'.jpeg" alt="EEE Dept Image '.$i.'">';
                        echo '</div>';
                    }
                    ?>
                </div>
            </section>

            <!-- PEOs & PSOs Section -->
            <section id="peos" class="section-card">
                <h2 class="section-title">PEOs & PSOs</h2>
                <div style="text-align: center; padding: 40px; background: #f8f9fa; border-radius: 8px;">
                    <i class="fas fa-file-word" style="font-size: 48px; color: #2980b9; margin-bottom: 20px;"></i>
                    <h3>Program Educational Objectives & Program Specific Outcomes</h3>
                    <p>Click below to download the detailed PEOs and PSOs document.</p>
                    <a href="assets/Dept/peos_psos.docx" class="btn btn-secondary" style="background: #2980b9;">
                        <i class="fas fa-download"></i> Download Document
                    </a>
                </div>
            </section>

        </main>
    </div>

    <?php include 'components/footer.php'; ?>

    <script>
        // Sidebar active state on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.sidebar-nav a');

            window.addEventListener('scroll', () => {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (pageYOffset >= (sectionTop - 150)) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href').includes(current)) {
                        link.classList.add('active');
                    }
                });
            });

            // Smooth scroll for sidebar links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>
</html>
