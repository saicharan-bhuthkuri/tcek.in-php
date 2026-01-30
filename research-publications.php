<!DOCTYPE html>
<html lang="en">

<head>
    <title>Research Publications - Trinity College of Engineering & Technology</title>
    <?php include 'components/head.php'; ?>
</head>

<body>
    <?php $page = 'research'; include 'components/header.php'; ?>
<!-- Page Header -->
    <section class="page-header" style="margin-bottom: 0;">
        <h1>Research Publications</h1>
        <p><a href="index.php" style="color: #fff; text-decoration: underline;">Home</a> / Research Publications</p>
    </section>

    <section class="content-section">
        <div class="container">
            <div class="facilities-grid">
                <!-- Paper Publications -->
                <a href="assets/research/TRINITYPUBLICATIONSLINKSS.pdf" target="_blank" class="facility-card">
                    <div class="facility-icon"><i class="fas fa-file-alt"></i></div>
                    <h3>Paper Publications</h3>
                    <p>List of research papers published by faculty and students in various international and national
                        journals.</p>
                </a>

                <!-- Books Publications -->
                <a href="books.php" class="facility-card">
                    <div class="facility-icon"><i class="fas fa-book"></i></div>
                    <h3>Books Publications</h3>
                    <p>Books and chapters authored by our faculty members.</p>
                </a>

                <!-- Patents -->
                <a href="patents.php" class="facility-card">
                    <div class="facility-icon"><i class="fas fa-certificate"></i></div>
                    <h3>Patents</h3>
                    <p>Intellectual property and patents filed/awarded to the institution.</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>