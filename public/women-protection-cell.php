<!DOCTYPE html>
<html lang="en">

<head>
    <title>Women Protection Cell - Trinity College</title>
    <?php include 'head.php'; ?>
    <style>
        .content-container {
            max-width: 1000px;
            margin: 50px auto;
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid #f0f0f0;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .committee-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-family: 'Poppins', sans-serif;
        }

        .committee-table th,
        .committee-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        .committee-table th {
            background-color: #00b894;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
        }

        .committee-table tr:hover {
            background-color: #f9f9f9;
        }

        .committee-table tr:last-child td {
            border-bottom: none;
        }

        .page-header {
            background: #00b894;
            padding: 80px 20px 30px;
            text-align: center;
            color: #fff;
        }

        .page-header h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <?php $page = ''; include 'header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>Women Protection Cell</h1>
        <p><a href="committees.php" style="color: #fff; text-decoration: underline;">Committees</a> / Women Protection
            Cell</p>
    </section>

    <!-- Content Section -->
    <section>
        <div class="content-container">
            <h2 style="color: #2d3436; margin-bottom: 20px;">Committee Members</h2>
            <div class="table-responsive">
                <table class="committee-table">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Position in the committee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dr. KOUSALYA BAI THAKUR</td>
                            <td>Chairman</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>PADMINI PACHWA</td>
                            <td>Member</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>SWATHI JILLA</td>
                            <td>Member</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>CHUNDURI SUPRIYA</td>
                            <td>Member</td>
                            <td>Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>GADDAM LAKSHMI</td>
                            <td>Member</td>
                            <td>Assistant Professor</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>