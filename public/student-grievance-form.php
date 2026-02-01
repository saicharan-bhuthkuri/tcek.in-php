<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Student Grievance Form - Trinity College</title>
    <?php include 'head.php'; ?>
    <style>
        .form-container {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid #f0f0f0;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #2d3436;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #dfe6e9;
            border-radius: 8px;
            font-size: 15px;
            transition: all 0.3s ease;
            box-sizing: border-box;
            /* Fixes width issue */
        }

        .form-control:focus {
            border-color: #00b894;
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 184, 148, 0.1);
        }

        .radio-group {
            display: flex;
            gap: 20px;
            padding-top: 5px;
        }

        .radio-label {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .btn-submit {
            background: #00b894;
            color: white;
            border: none;
            padding: 14px 30px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s ease;
        }

        .btn-submit:hover {
            background: #00a884;
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
        <h1>Online Student Grievance Form</h1>
        <p><a href="committees.php" style="color: #fff; text-decoration: underline;">Committees</a> / Grievance Form
        </p>
    </section>

    <!-- Form Section -->
    <section>
        <div class="form-container">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label class="form-label" for="hallTicket">Hall Ticket Number</label>
                    <input type="text" id="hallTicket" name="hallTicket" class="form-control" required
                        placeholder="Enter Hall Ticket Number">
                </div>

                <div class="form-group" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div>
                        <label class="form-label" for="branch">Branch</label>
                        <select id="branch" name="branch" class="form-control" required>
                            <option value="">Select Branch</option>
                            <option value="CSE">CSE</option>
                            <option value="AIML">AIML</option>
                            <option value="ECE">ECE</option>
                            <option value="EEE">EEE</option>
                            <option value="MBA">MBA</option>
                        </select>
                    </div>
                    <div>
                        <label class="form-label" for="year">Year</label>
                        <select id="year" name="year" class="form-control" required>
                            <option value="">Select Year</option>
                            <option value="1">1st Year</option>
                            <option value="2">2nd Year</option>
                            <option value="3">3rd Year</option>
                            <option value="4">4th Year</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="studentName">Student Name</label>
                    <input type="text" id="studentName" name="studentName" class="form-control" required
                        placeholder="Full Name">
                </div>

                <div class="form-group">
                    <label class="form-label" for="fatherName">Father's Name</label>
                    <input type="text" id="fatherName" name="fatherName" class="form-control" required
                        placeholder="Father's Name">
                </div>

                <div class="form-group">
                    <label class="form-label">Gender</label>
                    <div class="radio-group">
                        <label class="radio-label">
                            <input type="radio" name="gender" value="Male" required> Male
                        </label>
                        <label class="radio-label">
                            <input type="radio" name="gender" value="Female"> Female
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="dob">Date Of Birth</label>
                    <input type="date" id="dob" name="dob" class="form-control" required>
                </div>

                <div class="form-group" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div>
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required
                            placeholder="example@email.com">
                    </div>
                    <div>
                        <label class="form-label" for="mobile">Mobile No</label>
                        <input type="tel" id="mobile" name="mobile" class="form-control" required
                            placeholder="10-digit Mobile No">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="address">Full Address</label>
                    <textarea id="address" name="address" class="form-control" rows="3" required
                        placeholder="Enter your full address"></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label" for="grievanceType">Grievance Type</label>
                    <select id="grievanceType" name="grievanceType" class="form-control" required>
                        <option value="">Select Grievance Type</option>
                        <option value="Academic">Academic</option>
                        <option value="Administrative">Administrative</option>
                        <option value="Infrastructure">Infrastructure</option>
                        <option value="Harassment">Harassment</option>
                        <option value="Others">Others</option>
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label" for="grievanceDate">Grievance Date</label>
                    <input type="date" id="grievanceDate" name="grievanceDate" class="form-control" required>
                </div>

                <div class="form-group">
                    <label class="form-label" for="document">Grievance Supporting Document</label>
                    <input type="file" id="document" name="document" class="form-control" accept=".pdf,.jpg,.jpeg,.png">
                </div>

                <div class="form-group">
                    <label class="form-label" for="description">Grievance Description</label>
                    <textarea id="description" name="description" class="form-control" rows="5" required
                        placeholder="Detailed description of your grievance"></textarea>
                </div>

                <button type="submit" class="btn-submit">Submit Grievance</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>