<!DOCTYPE html>
<html lang="en">

<head>
    <title>ECE Lecture Notes - E-CONTENT</title>
    <?php include 'head.php'; ?>
    <style>
        .search-container {
            max-width: 600px;
            margin: 0 auto 40px;
            display: flex;
            gap: 10px;
        }

        .search-input {
            flex: 1;
            padding: 12px 20px;
            border: 2px solid #eee;
            border-radius: 50px;
            font-size: 16px;
            outline: none;
            transition: all 0.3s ease;
        }

        .search-input:focus {
            border-color: #00b894;
            box-shadow: 0 5px 15px rgba(0, 184, 148, 0.1);
        }

        .reset-btn {
            padding: 12px 25px;
            background: #ff7675;
            color: white;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .reset-btn:hover {
            background: #d63031;
        }

        .academic-year-section {
            margin-bottom: 50px;
        }

        .academic-year-title {
            font-size: 24px;
            color: #2d3436;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #00b894;
            display: inline-block;
        }

        .semester-title {
            font-size: 20px;
            color: #00b894;
            margin: 20px 0 15px;
            font-weight: 600;
        }

        .notes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .note-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid #eee;
            transition: transform 0.3s ease;
        }

        .note-card:hover {
            transform: translateY(-5px);
            border-color: #00b894;
        }

        .subject-name {
            font-size: 16px;
            font-weight: 600;
            color: #2d3436;
            margin-bottom: 15px;
            min-height: 48px;
            /* Alignment */
            display: flex;
            align-items: center;
        }

        .download-btn {
            display: inline-block;
            padding: 8px 20px;
            background: #00b894;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        .download-btn:hover {
            background: #00a884;
        }

        .no-results {
            text-align: center;
            padding: 40px;
            color: #636e72;
            font-size: 18px;
            display: none;
        }
    </style>
</head>

<body>
    <?php $page = ''; include 'header.php'; ?>
<!-- Page Header -->
    <section class="page-header" style="margin-bottom: 0;">
        <h1>ECE Lecture Notes</h1>
        <p><a href="e-content.php" style="color: #fff; text-decoration: underline;">E-CONTENT</a> / ECE Notes</p>
    </section>

    <section class="content-section">
        <div class="container">

            <!-- Search Bar -->
            <div class="search-container">
                <input type="text" id="searchInput" class="search-input" placeholder="Search notes...">
                <button onclick="resetSearch()" class="reset-btn">Reset</button>
            </div>

            <div id="notesContainer">

                <!-- Year 1 -->
                <div class="academic-year-section">
                    <h2 class="academic-year-title">Year 1</h2>

                    <h3 class="semester-title">Semester 1</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Matrices and Calculus</div>
                            <a href="assets/e-contect/matrices&calculus.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Applied Physics</div>
                            <a href="assets/e-contect/APPLIED-PHYSICS.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Programming for Problem Solving</div>
                            <a href="assets/e-contect/PPS.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Engineering Workshop</div>
                            <a href="assets/e-contect/ews.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">English for Skill Enhancement</div>
                            <a href="assets/e-contect/EnglishforSkillEnhancement.pdf" class="download-btn"
                                target="_blank"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Elements of Computer Science & Engineering</div>
                            <a href="assets/e-contect/ecse.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>

                    <h3 class="semester-title">Semester 2</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Ordinary Differential Equations and Vector Calculus</div>
                            <a href="assets/e-contect/OrdinaryDifferentialEquationsandVectorCalculus.pdf"
                                class="download-btn" target="_blank"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Engineering Chemistry</div>
                            <a href="assets/e-contect/CHEMISTRY.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Computer Aided Engineering Graphics</div>
                            <a href="assets/e-contect/drawing.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Basic Electrical Engineering</div>
                            <a href="assets/e-contect/BEE.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Electronic Devices and Circuits</div>
                            <a href="assets/e-contect/edc.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>
                </div>

                <!-- Year 2 -->
                <div class="academic-year-section">
                    <h2 class="academic-year-title">Year 2</h2>

                    <h3 class="semester-title">Semester 1</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Electronic Devices and Circuits</div>
                            <a href="assets/e-contect/edc.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Network Analysis and Transmission Lines</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Digital System Design</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Signals and Systems</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Probability Theory and Stochastic Processes</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>

                    <h3 class="semester-title">Semester 2</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Analog and Digital Communications</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Linear IC Applications</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Control Systems</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Antennas and Wave Propagation</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Business Economics & Financial Analysis</div>
                            <a href="assets/e-contect/befa.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>
                </div>

                <!-- Year 3 -->
                <div class="academic-year-section">
                    <h2 class="academic-year-title">Year 3</h2>

                    <h3 class="semester-title">Semester 1</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Microprocessors and Microcontrollers</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Digital Signal Processing</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Computer Networks</div>
                            <a href="assets/e-contect/cn.pdf" class="download-btn" target="_blank"><i
                                    class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Electromagnetic Waves and Transmission Lines</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Open Elective-I</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>

                    <h3 class="semester-title">Semester 2</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Microwave Engineering</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">VLSI Design</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Data Communications and Networking</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Professional Elective-I</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Open Elective-II</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>
                </div>

                <!-- Year 4 -->
                <div class="academic-year-section">
                    <h2 class="academic-year-title">Year 4</h2>

                    <h3 class="semester-title">Semester 1</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Wireless Communications</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Embedded Systems</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Professional Elective-II</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Professional Elective-III</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Open Elective-III</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>

                    <h3 class="semester-title">Semester 2</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Cellular and Mobile Communications</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Professional Elective-IV</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Professional Elective-V</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Open Elective-IV</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>
                </div>

            </div>

            <div id="noResults" class="no-results">
                No notes found matching your search.
            </div>

        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>