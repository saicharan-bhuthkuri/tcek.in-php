<!DOCTYPE html>
<html lang="en">

<head>
    <title>MBA Lecture Notes - E-CONTENT</title>
    <?php include 'components/head.php'; ?>
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
    <?php $page = ''; include 'components/header.php'; ?>
<!-- Page Header -->
    <section class="page-header" style="margin-bottom: 0;">
        <h1>MBA Lecture Notes</h1>
        <p><a href="e-content.php" style="color: #fff; text-decoration: underline;">E-CONTENT</a> / MBA Notes</p>
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
                            <div class="subject-name">Management and Organizational Behavior</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Business Economics</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Financial Reporting & Analysis</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Research Methodology and Statistical Analysis</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">6A Business Ethics and Corporate Governance</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>

                    <h3 class="semester-title">Semester 2</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Human Resource Management</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Marketing Management</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Financial Management</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Quantitative Analysis for Business Decisions</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Entrepreneurship and Design Thinking</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Logistics & Supply Chain Management</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">15D Rural Marketing</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>
                </div>

                <!-- Year 2 -->
                <div class="academic-year-section">
                    <h2 class="academic-year-title">Year 2</h2>

                    <h3 class="semester-title">Semester 1</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Production & Operations Mangement</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Management Information Systems</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Business Analytics</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Security Analysis and Portfolio Management</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Risk Management and Financial Derivatives</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Strategic Cost and Mangement Accounting</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Talent and Performance Mangement Systems</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Learning and Development</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Employee Realtions</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                    </div>

                    <h3 class="semester-title">Semester 2</h3>
                    <div class="notes-grid">
                        <div class="note-card">
                            <div class="subject-name">Strategic Management</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">International Financial Mangement</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Strategic Financial Mangement</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Financial Analysis</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">International Human Resource Mangement</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">Leadership and Change Mangement</div>
                            <a href="#" class="download-btn"><i class="fas fa-download"></i> Download Notes</a>
                        </div>
                        <div class="note-card">
                            <div class="subject-name">HR Analytics</div>
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
    <?php include 'components/footer.php'; ?>