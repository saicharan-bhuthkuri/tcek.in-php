<!DOCTYPE html>
<html lang="en">

<head>
    <title>Books Publications - Trinity College of Engineering & Technology</title>
    <?php include 'head.php'; ?>
    <style>
        .books-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 40px;
        }

        .book-card {
            background: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .book-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .book-title {
            font-size: 18px;
            font-weight: 600;
            color: #2d3436;
            margin-bottom: 20px;
            text-align: center;
            min-height: 54px;
            /* Ensure alignment */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .book-covers {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .book-cover-img {
            width: 48%;
            height: auto;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            object-fit: contain;
        }
    </style>
</head>

<body>
    <?php $page = ''; include 'header.php'; ?>
<!-- Page Header -->
    <section class="page-header" style="margin-bottom: 0;">
        <h1>Books Publications</h1>
        <p><a href="research-publications.php" style="color: #fff; text-decoration: underline;">Research
                Publications</a> / Books</p>
    </section>

    <section class="content-section">
        <div class="container">

            <div class="books-grid">

                <!-- Book 1 -->
                <div class="book-card">
                    <div class="book-title">Automobile Engineering</div>
                    <div class="book-covers">
                        <img src="assets/research/automobile_engineering.jpg" class="book-cover-img" alt="Front Cover">
                        <!-- No back cover provided for this one, or just duplicate placeholder if needed? -->
                    </div>
                </div>

                <!-- Book 2 -->
                <div class="book-card">
                    <div class="book-title">Composite Materials Engineering</div>
                    <div class="book-covers">
                        <img src="assets/research/composite_materials_engineering.jpg" class="book-cover-img"
                            alt="Front Cover">
                        <img src="assets/research/composite_materials_engineering_back.jpg" class="book-cover-img"
                            alt="Back Cover">
                    </div>
                </div>

                <!-- Book 3 -->
                <div class="book-card">
                    <div class="book-title">Electrical and Hybrid Vehicles: Principles and Technologies</div>
                    <div class="book-covers">
                        <img src="assets/research/electrical_and_hybrid_vehicles.jpg" class="book-cover-img"
                            alt="Front Cover">
                        <img src="assets/research/electrical_and_hybrid_vehicles back.jpg" class="book-cover-img"
                            alt="Back Cover">
                    </div>
                </div>

                <!-- Book 4 -->
                <div class="book-card">
                    <div class="book-title">Comprehensive Guide To Refrigeration and Air Conditioning Technologies</div>
                    <div class="book-covers">
                        <img src="assets/research/guide_to_refregeration.jpg" class="book-cover-img" alt="Front Cover">
                        <img src="assets/research/guide_to_refregeration_back.jpg" class="book-cover-img"
                            alt="Back Cover">
                    </div>
                </div>

                <!-- Book 5 -->
                <div class="book-card">
                    <div class="book-title">Renewable Energy Essentials: A Pathway To A Sustainable Future</div>
                    <div class="book-covers">
                        <img src="assets/research/renewable_enerygy_essentials.jpg" class="book-cover-img"
                            alt="Front Cover">
                        <img src="assets/research/renewable_enerygy_essentials_back.jpg" class="book-cover-img"
                            alt="Back Cover">
                    </div>
                </div>

                <!-- Book 6 -->
                <div class="book-card">
                    <div class="book-title">Fundamental Of Material Engineering & Metallurgical Process</div>
                    <div class="book-covers">
                        <img src="assets/research/material_engineering.jpg" class="book-cover-img" alt="Front Cover">
                        <img src="assets/research/material_engineering_back.jpg" class="book-cover-img"
                            alt="Back Cover">
                    </div>
                </div>

                <!-- Book 7 -->
                <div class="book-card">
                    <div class="book-title">Principles Of Management: A Global Perspective</div>
                    <div class="book-covers">
                        <img src="assets/research/principles_of_management.jpg" class="book-cover-img"
                            alt="Front Cover">
                        <img src="assets/research/principles_of_management_back.jpg" class="book-cover-img"
                            alt="Back Cover">
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>