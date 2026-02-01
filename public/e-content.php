<!DOCTYPE html>
<html lang="en">

<head>
    <title>E-CONTENT - Trinity College of Engineering & Technology</title>
    <?php include 'head.php'; ?>
</head>

<body>
    <?php $page = 'e-content'; include 'header.php'; ?>
<!-- Page Header -->
    <section class="page-header" style="margin-bottom: 0;">
        <h1>E-CONTENT</h1>
        <p><a href="index.php" style="color: #fff; text-decoration: underline;">Home</a> / E-CONTENT</p>
    </section>

    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <div class="facilities-grid">

                <!-- MBA Notes -->
                <a href="mba-notes.php" class="facility-card">
                    <div class="facility-icon"><i class="fas fa-file-powerpoint"></i></div>
                    <h3>Lecture Notes for MBA</h3>
                    <p>Access study materials, presentations, and lecture notes for Master of Business Administration.
                    </p>
                </a>

                <!-- CSE Notes -->
                <a href="cse-notes.php" class="facility-card">
                    <div class="facility-icon"><i class="fas fa-code"></i></div>
                    <h3>Lecture Notes for CSE</h3>
                    <p>Comprehensive notes and resources for Computer Science and Engineering.</p>
                </a>

                <!-- AIML Notes -->
                <a href="aiml-notes.php" class="facility-card">
                    <div class="facility-icon"><i class="fas fa-robot"></i></div>
                    <h3>Lecture Notes for AIML</h3>
                    <p>Study materials for Artificial Intelligence and Machine Learning specialization.</p>
                </a>

                <!-- ECE Notes -->
                <a href="ece-notes.php" class="facility-card">
                    <div class="facility-icon"><i class="fas fa-microchip"></i></div>
                    <h3>Lecture Notes for ECE</h3>
                    <p>Resources covering Electronics and Communication Engineering topics.</p>
                </a>

                <!-- EEE Notes -->
                <a href="eee-notes.php" class="facility-card">
                    <div class="facility-icon"><i class="fas fa-bolt"></i></div>
                    <h3>Lecture Notes for EEE</h3>
                    <p>Lecture notes and materials for Electrical and Electronics Engineering.</p>
                </a>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>