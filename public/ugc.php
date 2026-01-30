<!DOCTYPE html>
<html lang="en">

<head>
    <title>UGC - Trinity College of Engineering & Technology</title>
    <?php include 'components/head.php'; ?>
    <style>
        .ugc-section {
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            font-size: 28px;
            color: #2d3436;
            margin-bottom: 30px;
            border-bottom: 2px solid #00b894;
            display: inline-block;
            padding-bottom: 10px;
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

        /* Add more specific styles here as needed */
        .content-placeholder {
            text-align: center;
            padding: 50px 0;
            color: #636e72;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <?php $page = 'ugc';
    include 'components/header.php'; ?>
    <!-- Page Header -->
    <section class="page-header">
        <h1>University Grants Commission (UGC)</h1>
        <p>Details and documents related to UGC.</p>
    </section>

    <!-- Content Section -->
    <section class="ugc-section">
        <h2 class="section-title">UGC Documents</h2>
        <div class="content-placeholder">
            <p>Content to be added soon.</p>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>
</body>

</html>