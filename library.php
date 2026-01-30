<!DOCTYPE html>
<html lang="en">

<head>
    <title>Library - Trinity College of Engineering & Technology</title>
    <?php include 'components/head.php'; ?>
</head>

<body>
    <?php $page = ''; include 'components/header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>Central Library</h1>
        <p><a href="facilities.php" style="color: #fff; text-decoration: underline;">Facilities</a> / Central Library
        </p>
    </section>

    <section class="content-section">
        <div class="container">

            <div style="text-align: center;">
                <div class="info-badge">
                    <i class="fas fa-clock"></i> Open on all working days 08:00 AM to 06:00 PM
                </div>
            </div>

            <!-- Stats Grid -->
            <!-- Using features-grid for layout but custom stat-card for style -->
            <div class="features-grid" style="margin-bottom: 50px;">
                <div class="stat-card">
                    <div class="stat-icon-circle"><i class="fas fa-book"></i></div>
                    <div class="stat-number">19,826</div>
                    <div class="stat-label">Total Volume of Books</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon-circle"><i class="fas fa-layer-group"></i></div>
                    <div class="stat-number">3,717</div>
                    <div class="stat-label">Total Titles</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon-circle"><i class="fas fa-swatchbook"></i></div>
                    <div class="stat-number">4,000</div>
                    <div class="stat-label">Reference Books</div>
                </div>
            </div>

            <div class="features-grid">
                <!-- Journals Table -->
                <div class="card" style="grid-column: span 2;">
                    <h3><i class="fas fa-newspaper" style="color: #00b894; margin-right: 10px;"></i>Journals & Magazines
                    </h3>
                    <div class="table-scroll">
                        <table class="comparison-table">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Description</th>
                                    <th>Count</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="S.No.">1</td>
                                    <td data-label="Description">Indian Journals</td>
                                    <td data-label="Count">75</td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">2</td>
                                    <td data-label="Description">International Journals</td>
                                    <td data-label="Count">43</td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">3</td>
                                    <td data-label="Description">Magazines</td>
                                    <td data-label="Count">5</td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">4</td>
                                    <td data-label="Description">E-journals</td>
                                    <td data-label="Count">Available</td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">5</td>
                                    <td data-label="Description">Newspapers</td>
                                    <td data-label="Count">8</td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">6</td>
                                    <td data-label="Description">CD/DVDs</td>
                                    <td data-label="Count">3500</td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">7</td>
                                    <td data-label="Description">Project Reports</td>
                                    <td data-label="Count">1800</td>
                                </tr>
                                <tr>
                                    <td data-label="S.No.">8</td>
                                    <td data-label="Description">Back Volumes</td>
                                    <td data-label="Count">820</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Sidebar Column (Membership + Digital) -->
                <div style="display: flex; flex-direction: column; gap: 30px;">
                    <!-- Membership Info -->
                    <div class="card">
                        <h3><i class="fas fa-id-card" style="color: #00b894; margin-right: 10px;"></i>Membership</h3>
                        <p style="margin-bottom: 15px;">Membership is open to all students, faculty, and non-teaching
                            staff,
                            as well as management.</p>
                        <h4 style="margin-bottom: 10px; color: #2d3436;">Borrowing Privileges:</h4>
                        <ul class="styled-list">
                            <li><strong>Faculty:</strong> Up to 5 books at a time.</li>
                            <li><strong>Non-Teaching Staff:</strong> Up to 3 books at a time.</li>
                            <li><strong>Students (U.G. & P.G.):</strong> Up to 3 books for 15 days.</li>
                        </ul>
                    </div>

                    <div style="display: flex; flex-direction: column; gap: 30px;">
                        <!-- Schemes & Digital Library -->
                        <div class="card">
                            <h3><i class="fas fa-laptop-code" style="color: #00b894; margin-right: 10px;"></i>Digital
                                Facilities
                            </h3>

                            <h4 style="margin-bottom: 10px; color: #2d3436; margin-top: 10px;">SC & ST Book Bank Scheme
                            </h4>
                            <p style="margin-bottom: 20px;">All SC & ST students can borrow <strong>6 books
                                    each</strong>
                                per
                                semester and return them after completion.</p>

                            <h4 style="margin-bottom: 10px; color: #2d3436;">Digital Library</h4>
                            <p>Connected to high-speed internet for research and regular studies.</p>
                            <div
                                style="margin-top: 15px; background: rgba(0,184,148,0.05); padding: 10px; border-radius: 8px;">
                                <i class="fas fa-wifi" style="color: #00b894;"></i> <strong>20 Mbps connection</strong>
                                for
                                seamless access.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>