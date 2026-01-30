<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policies - Trinity College of Engineering & Technology</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <style>
        .policies-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            padding: 10px 20px 60px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .policy-card {
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

        .policy-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 184, 148, 0.15);
            border-color: #00b894;
        }

        .policy-icon {
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

        .policy-card:hover .policy-icon {
            background: #00b894;
            color: #fff;
        }

        .policy-card h3 {
            font-size: 18px;
            color: #2d3436;
            margin-bottom: 10px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .policy-card p {
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
    <?php $page = 'policies'; include 'header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>Policies</h1>
        <p>Institutional policies and operational guidelines.</p>
    </section>

    <!-- Policies Grid -->
    <section>
        <div class="policies-grid">
            <!-- E Governance Policy -->
            <a href="assets/policies/EGOVERNANCEPOLICY.pdf" target="_blank" class="policy-card">
                <div class="policy-icon"><i class="fas fa-network-wired"></i></div>
                <h3>E Governance Policy</h3>
                <p>Digital governance frameworks and IT implementations.</p>
            </a>

            <!-- Placement Policy -->
            <a href="assets/policies/PLACEMENTPOLICY.pdf" target="_blank" class="policy-card">
                <div class="policy-icon"><i class="fas fa-user-tie"></i></div>
                <h3>Placement Policy</h3>
                <p>Guidelines for training and placement activities.</p>
            </a>

            <!-- Policy Doc Energy Envr -->
            <a href="assets/policies/POLICYDOCUMENTONENVIRONMENT.pdf" target="_blank" class="policy-card">
                <div class="policy-icon"><i class="fas fa-leaf"></i></div>
                <h3>Energy & Environment Policy</h3>
                <p>Commitment to sustainable energy and environment protection.</p>
            </a>

            <!-- Policy for person disability -->
            <a href="assets/policies/POLICYFORPERSONDISABILITT.pdf" target="_blank" class="policy-card">
                <div class="policy-icon"><i class="fas fa-wheelchair"></i></div>
                <h3>Policy For Persons With Disabilities</h3>
                <p>Ensuring an inclusive and accessible campus environment.</p>
            </a>

            <!-- Staff welfare Measures Policy -->
            <a href="#" class="policy-card">
                <div class="policy-icon"><i class="fas fa-hands-helping"></i></div>
                <h3>Staff Welfare Measures</h3>
                <p>Welfare programs and benefits for faculty and staff.</p>
            </a>

            <!-- Merit Scholarship policy -->
            <a href="#" class="policy-card">
                <div class="policy-icon"><i class="fas fa-graduation-cap"></i></div>
                <h3>Merit Scholarship Policy</h3>
                <p>Financial awards scheme for meritorious students.</p>
            </a>

            <!-- Clean and Green Campus Policy -->
            <a href="#" class="policy-card">
                <div class="policy-icon"><i class="fas fa-recycle"></i></div>
                <h3>Clean And Green Campus</h3>
                <p>Initiatives for a hygienic and eco-friendly campus.</p>
            </a>

            <!-- Code Of Conduct Policy -->
            <a href="assets/policies/CodeofConduct.pdf" target="_blank" class="policy-card">
                <div class="policy-icon"><i class="fas fa-book-open"></i></div>
                <h3>Code Of Conduct</h3>
                <p>Rules and ethical standards for students and staff.</p>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>