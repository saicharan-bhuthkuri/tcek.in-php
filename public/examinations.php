<!DOCTYPE html>
<html lang="en">

<head>
    <title>Examinations - Trinity College of Engineering & Technology</title>
    <?php include 'head.php'; ?>
    <style>
        /* Specific styles for Examinations page tables if needed overrides */
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

        .view-btn {
            display: inline-block;
            padding: 8px 16px;
            background: #00b894;
            /* Solid Green */
            color: #fff;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 184, 148, 0.2);
        }

        .view-btn:hover {
            background: #008f72;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 184, 148, 0.3);
        }

        /* Solid Green Header Table Design */
        .comparison-table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            /* Clips corners */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
            /* Subtle shadow for the whole table */
            table-layout: auto;
            /* Allow sizing based on content */
        }

        .table-scroll {
            overflow-x: auto;
            padding-bottom: 5px;
            /* Space for scrollbar */
            width: 100%;
            display: block;
            /* Ensure it behaves as a block to scroll */
        }

        .comparison-table thead tr {
            background: #00b894;
            /* Solid Header Background */
        }

        .comparison-table th {
            color: #fff;
            /* White Text */
            font-weight: 600;
            text-transform: capitalize;
            /* "Date", "Description" etc. */
            font-size: 15px;
            border: none;
            padding: 15px;
            /* Reduced padding to fit better */
            white-space: nowrap;
            vertical-align: middle;
        }

        .comparison-table tbody tr {
            border-bottom: 1px solid #eee;
            transition: background 0.2s;
        }

        .comparison-table tbody tr:last-child {
            border-bottom: none;
        }

        .comparison-table tbody tr:hover {
            background: #f9f9f9;
            /* Subtle hover */
        }

        .comparison-table td {
            background: #fff;
            border-bottom: 1px solid #f0f0f0;
            padding: 15px;
            /* Reduced padding */
            vertical-align: middle;
            color: #2d3436;
            font-size: 15px;
        }

        /* Result Date specific override */
        .result-date {
            color: #2d3436;
            font-weight: 700;
            font-size: 15px;
            display: inline-block;
            white-space: nowrap;
        }

        @media (min-width: 769px) {

            /* Specific Column Overrides - Desktop Only */
            .comparison-table th:nth-child(1),
            .comparison-table td:nth-child(1) {
                width: 80px;
                /* Further reduced from 100px */
                text-align: left;
                /* Align Left like the image */
                font-weight: 700;
            }

            .comparison-table th:nth-child(2),
            .comparison-table td:nth-child(2) {
                width: auto;
                text-align: left;
            }

            .comparison-table th:nth-child(3),
            .comparison-table td:nth-child(3) {
                width: 120px;
                /* Reduced from 150px to save space */
                text-align: center;
                white-space: nowrap !important;
            }

            /* Specific fix for Results Table */
            #results .comparison-table th:nth-child(1),
            #results .comparison-table td:nth-child(1) {
                width: 150px !important;
                padding-left: 25px;
            }
        }
    </style>
</head>

<body>

    <?php $page = 'examinations'; include 'header.php'; ?>
<!-- Main Content -->
    <main>
        <!-- Page Header -->
        <section class="page-header">
            <h1>Examinations</h1>
            <p>Notifications, Time Tables, and Results</p>
        </section>

        <section class="academics-section">
            <div class="container">

                <!-- Tab Buttons -->
                <div class="tabs-container">
                    <button class="tab-btn active" onclick="openCourseTab(event, 'notice-board')">Notice Board</button>
                    <button class="tab-btn" onclick="openCourseTab(event, 'time-table')">Time Table</button>
                    <button class="tab-btn" onclick="openCourseTab(event, 'results')">Results</button>
                </div>

                <!-- Notice Board Content -->
                <div id="notice-board" class="tab-content" style="display: block;">
                    <h2>Examination Notifications</h2>
                    <div class="table-scroll">
                        <table class="comparison-table">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name of the Notifications</th>
                                    <th>View</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="S.No.">1</td>
                                    <td data-label="Name of the Notifications">B.Tech I Year I Sem (R22) Regular/Supply,
                                        I-I (R18, R16) Supply, I Year (R15, R13) Supply & I Year II Sem (R22, R18, R16)
                                        Supply Examinations.</td>
                                    <td data-label="View"><a href="#" class="view-btn">View</a></td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">2</td>
                                    <td data-label="Name of the Notifications">B.Tech II Year I Sem Regular/Supply & II
                                        Year II Sem Supply Examinations FEB-2024</td>
                                    <td data-label="View"><a href="#" class="view-btn">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Time Table Content -->
                <div id="time-table" class="tab-content">
                    <h2>Time Table</h2>
                    <p>The Examinations Time Table as per the directions of JNTU, Hyderabad.</p>
                    <div style="margin-top: 30px;">
                        <h3 style="margin-bottom: 20px;">B.Tech I Year End Examination Schedules</h3>
                        <div class="table-scroll">
                            <table class="comparison-table">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Name of the Examination</th>
                                        <th>Month/Year</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-label="S.No.">1</td>
                                        <td data-label="Name of the Examination">I YEAR B.TECH II SEMESTER – R18
                                            REGULATIONS SUPPLEMENTARY EXAMINATIONS</td>
                                        <td data-label="Month/Year">JUNE-2022</td>
                                        <td data-label="View"><a href="#" class="view-btn">View</a></td>
                                    </tr>
                                    <tr>
                                        <td data-label="S.No.">2</td>
                                        <td data-label="Name of the Examination">B.TECH I YEAR I SEMESTER (CSE-ECE) –
                                            R18 REGULATIONS REGULAR-SUPPLY EXAMINATIONS</td>
                                        <td data-label="Month/Year">JUNE-2022</td>
                                        <td data-label="View"><a href="#" class="view-btn">View</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Results Content -->
                <div id="results" class="tab-content">
                    <h2>Results</h2>
                    <div class="table-scroll">
                        <table class="comparison-table">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Result Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="Date"><span class="result-date">07-09-2019</span></td>
                                    <td data-label="Result Description">B.TECH III-I & III-II RC/RV
                                        REGULAR/SUPPLEMENTARY MAY 2019 EXAMINATIONS RESULTS PUBLISHED.</td>
                                </tr>
                                <tr>
                                    <td data-label="Date"><span class="result-date">04-09-2019</span></td>
                                    <td data-label="Result Description">MBA ALL SEMESTER APRIL 2019 EXAMINATIONS
                                        RECOUNTING / REVALUATION RESULTS PUBLISHED.</td>
                                </tr>
                                <tr>
                                    <td data-label="Date"><span class="result-date">03-09-2019</span></td>
                                    <td data-label="Result Description">B.TECH II-I & II-II RC/RV REGULAR/SUPPLEMENTARY
                                        MAY 2019 EXAMINATIONS RESULTS PUBLISHED.</td>
                                </tr>
                                <tr>
                                    <td data-label="Date"><span class="result-date">03-09-2019</span></td>
                                    <td data-label="Result Description">B.TECH IV-II RC/RV ADVANCED SUPPLEMENTARY JULY
                                        2019 EXAMINATIONS RESULTS PUBLISHED.</td>
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