<!DOCTYPE html>
<html lang="en">

<head>
    <title>Committees - Trinity College of Engineering & Technology</title>
    <?php include 'head.php'; ?>
    <style>
        .committees-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            padding: 10px 20px 60px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .committee-card {
            background: #fff;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: all 0.3s ease;
            text-decoration: none !important;
            color: #2d3436 !important;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #f0f0f0;
            cursor: pointer;
        }

        .committee-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 184, 148, 0.15);
            border-color: #00b894;
        }

        .committee-icon {
            font-size: 40px;
            color: #00b894;
            margin-bottom: 20px;
            width: 80px;
            height: 80px;
            background: rgba(0, 184, 148, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .committee-card:hover .committee-icon {
            background: #00b894;
            color: #fff;
        }

        .committee-card h3 {
            font-size: 18px;
            color: #2d3436;
            margin-bottom: 10px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .committee-card p {
            font-size: 14px;
            color: #636e72;
            line-height: 1.6;
        }

        .page-header {
            background: #00b894;
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
    <?php $page = 'committees'; include 'header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>Committees</h1>
        <p>Ensuring a safe, inclusive, and efficient campus environment.</p>
    </section>

    <!-- Committees Grid -->
    <section>
        <div class="committees-grid">
            <!-- ANTI RAGGING CELL -->
            <a href="assets/committees/ANTIRAGGINGCELL.pdf" target="_blank" class="committee-card">
                <div class="committee-icon"><i class="fas fa-user-shield"></i></div>
                <h3>ANTI RAGGING CELL</h3>
                <p>Ensuring a ragging-free campus environment.</p>
            </a>

            <!-- Online Student Grievance Form -->
            <a href="student-grievance-form.php" class="committee-card">
                <div class="committee-icon"><i class="fas fa-file-signature"></i></div>
                <h3>Online Student Grievance Form</h3>
                <p>Submit your grievances online securely.</p>
            </a>

            <!-- STUDENTS GRIEVANCE REDRESSAL COMMITTEE -->
            <a href="assets/committees/STUDENTSGRIEVANCEREDRESSALCOMMITTEE.pdf" target="_blank" class="committee-card">
                <div class="committee-icon"><i class="fas fa-users-cog"></i></div>
                <h3>Students Grievance Redressal</h3>
                <p> Addressing student concerns and complaints.</p>
            </a>

            <!-- STAFF GRIEVANCE REDRESSAL COMMITTEE -->
            <a href="assets/committees/STAFFGRIVANANCEREDRESSALCOMMITEE.pdf" target="_blank" class="committee-card">
                <div class="committee-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                <h3>Staff Grievance Redressal</h3>
                <p>Addressing faculty and staff concerns.</p>
            </a>

            <!-- SC/ST Welfare -->
            <a href="assets/committees/SCSTCELL2021-24.pdf" target="_blank" class="committee-card">
                <div class="committee-icon"><i class="fas fa-hand-holding-heart"></i></div>
                <h3>SC/ST Welfare</h3>
                <p>Promoting welfare and inclusivity for SC/ST community.</p>
            </a>

            <!-- SEXUAL HARASSMENT COMMITTEE -->
            <a href="assets/committees/SEXUALHARASSMENTCOMMITTEE.pdf" target="_blank" class="committee-card">
                <div class="committee-icon"><i class="fas fa-shield-alt"></i></div>
                <h3>Sexual Harassment Committee</h3>
                <p>Ensuring a safe environment against harassment.</p>
            </a>

            <!-- Women Protection Cell -->
            <a href="women-protection-cell.php" class="committee-card">
                <div class="committee-icon"><i class="fas fa-female"></i></div>
                <h3>Women Protection Cell</h3>
                <p>Empowering and protecting women on campus.</p>
            </a>

            <!-- Ombudsperson details -->
            <a href="assets/committees/Ombudsperson.pdf" target="_blank" class="committee-card">
                <div class="committee-icon"><i class="fas fa-user-check"></i></div>
                <h3>Ombudsperson Details</h3>
                <p>Information regarding the college ombudsperson.</p>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>