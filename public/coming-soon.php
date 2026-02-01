<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coming Soon - TCEK</title>
    <?php include 'components/head.php'; ?>
    <style>
        .coming-soon-container {
            min-height: 60vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 50px 20px;
            background: #f9f9f9;
        }

        .icon-wrapper {
            font-size: 5rem;
            color: #00b894;
            margin-bottom: 30px;
            animation: bounce 2s infinite;
        }

        .coming-soon-title {
            font-size: 2.5rem;
            color: #2d3436;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .coming-soon-text {
            font-size: 1.2rem;
            color: #636e72;
            max-width: 600px;
            margin-bottom: 40px;
            line-height: 1.6;
        }

        .back-btn {
            display: inline-block;
            background: #00b894;
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 184, 148, 0.3);
        }

        .back-btn:hover {
            background: #00a884;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 184, 148, 0.4);
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-20px);}
            60% {transform: translateY(-10px);}
        }
    </style>
</head>
<body>
    <?php $page = 'departments'; include 'components/header.php'; ?>

    <div class="coming-soon-container">
        <div class="icon-wrapper">
            <i class="fas fa-hammer"></i>
        </div>
        <h1 class="coming-soon-title">Page Under Construction</h1>
        <p class="coming-soon-text">
            We are currently updating the content for this department. 
            Detailed information will be available here very soon. 
            Please check back later!
        </p>
        <a href="departments.php" class="back-btn">
            <i class="fas fa-arrow-left" style="margin-right: 8px;"></i> Back to Departments
        </a>
    </div>

    <?php include 'components/footer.php'; ?>
</body>
</html>
