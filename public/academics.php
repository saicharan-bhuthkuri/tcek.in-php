<!DOCTYPE html>
<html lang="en">

<head>
    <title>Academics - Trinity College of Engineering & Technology</title>
    <?php include 'head.php'; ?>
    <style>
        /* Specific styles for Academics page tables if needed overrides */
        .academics-section {
            padding: 60px 0;
            background: #fdfdfd;
        }

        .has-link {
            color: #00b894;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s;
        }

        .has-link:hover {
            color: #008f72;
            text-decoration: underline;
        }

        /* Center the tabs */
        .tabs-container {
            margin-top: 40px;
        }

        .page-header {
            background: #00b894;
            /* website green */
            padding: 80px 20px 30px;
            text-align: center;
            color: #fff;
        }

        .page-header h1 {
            font-size: 40px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <?php $page = 'academics'; include 'header.php'; ?>
<!-- Main Content -->
    <main>
        <!-- Page Header -->
        <section class="page-header">
            <h1>Academics</h1>
            <p>Calendars and Regulations</p>
        </section>

        <section class="academics-section">
            <div class="container">

                <!-- Tab Buttons -->
                <div class="tabs-container">
                    <button class="tab-btn active" onclick="openCourseTab(event, 'academic-calendars')">Academic
                        Calendars</button>
                    <button class="tab-btn" onclick="openCourseTab(event, 'academic-regulations')">Academic
                        Regulations</button>
                </div>

                <!-- Academic Calendars Content -->
                <div id="academic-calendars" class="tab-content" style="display: block;">
                    <div class="table-scroll">
                        <table class="comparison-table">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name of the Courses</th>
                                    <th>Academic Year</th>
                                    <th>Academic calender</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="S.No.">1</td>
                                    <td data-label="Name of the Courses">B.Tech I Year II Semester Revised Academic
                                        Calendar for AY 2024-25</td>
                                    <td data-label="Academic Year">2024-25</td>
                                    <td data-label="Academic calender"><a
                                            href="assets/academic/B.Tech_._I_YEAR_I_II_SEMESTERS_.pdf" target="_blank"
                                            class="has-link">View</a></td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">2</td>
                                    <td data-label="Name of the Courses">B.Tech/B.Pharm.III YEAR I & II SEMESTERS</td>
                                    <td data-label="Academic Year">2022-23</td>
                                    <td data-label="Academic calender"><a
                                            href="assets/academic/B.Tech_B_.Pharm_III_YEAR_I_II_SEMESTERS_.pdf"
                                            target="_blank" class="has-link">View</a></td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">3</td>
                                    <td data-label="Name of the Courses">B.Tech IV YEAR I & II SEMESTERS</td>
                                    <td data-label="Academic Year">2021-22</td>
                                    <td data-label="Academic calender"><a href="#" class="has-link">View</a></td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">4</td>
                                    <td data-label="Name of the Courses">MBA and MCA II YEAR I & II SEMESTERS</td>
                                    <td data-label="Academic Year">2023-24</td>
                                    <td data-label="Academic calender"><a
                                            href="assets/academic/MBAandMCAIIYEARIIISEMESTERS.pdf" target="_blank"
                                            class="has-link">View</a></td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">5</td>
                                    <td data-label="Name of the Courses">MBA MCA I YEAR I & II SEMESTERS</td>
                                    <td data-label="Academic Year">2024-25</td>
                                    <td data-label="Academic calender"><a href="#" class="has-link">View</a></td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">6</td>
                                    <td data-label="Name of the Courses">Revised B.Tech & B.Pharm IV YEAR I & II
                                        Semesters Academic Calendar for 2023-24</td>
                                    <td data-label="Academic Year">2023-24</td>
                                    <td data-label="Academic calender"><a
                                            href="assets/academic/Revised_B._Tech_.B_._Pharm_._IV_YEAR_I_II_Semesters_Academic_Calendar_for_2023-24_.pdf"
                                            target="_blank" class="has-link">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Academic Regulations Content -->
                <div id="academic-regulations" class="tab-content">
                    <div class="table-scroll">
                        <table class="comparison-table">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name of the Regulations</th>
                                    <th>Academic Regulations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="S.No.">1</td>
                                    <td data-label="Name of the Regulations">R18 B.TECH Academic Regulations</td>
                                    <td data-label="Academic Regulations"><a
                                            href="assets/academic/R18 B.TECH. Regulations.pdf" target="_blank"
                                            class="has-link">View</a></td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">2</td>
                                    <td data-label="Name of the Regulations">R22 B.Tech. Academic Regulations</td>
                                    <td data-label="Academic Regulations"><a
                                            href="assets/academic/R22 B.Tech. Academic Regulations.pdf" target="_blank"
                                            class="has-link">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </section>

    </main>

    <script src="js/tabs.js"></script>
    <?php include 'footer.php'; ?>