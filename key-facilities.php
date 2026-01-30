<!DOCTYPE html>
<html lang="en">

<head>
    <title>Key Facilities - Trinity College of Engineering & Technology</title>
    <?php include 'components/head.php'; ?>
</head>

<body>
    <?php $page = ''; include 'components/header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>Key Facilities</h1>
        <p><a href="facilities.php" style="color: #fff; text-decoration: underline;">Facilities</a> / Key Facilities
        </p>
    </section>

    <section class="content-section">
        <div class="container">

            <!-- Grid for Facilities -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 40px;">

                <!-- 1. Computing Facilities -->
                <div class="card">
                    <img src="assets/facilities/Computer-Lab.png" alt="Computer Lab"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 10px; margin-bottom: 20px;">
                    <h3><i class="fas fa-desktop" style="color: #00b894; margin-right: 10px;"></i>Computing Facilities
                    </h3>
                    <p style="color: #636e72;">
                        Desktops from various Brands like Acer, Dell, HCL with latest Processor capacity. All desktops
                        are networked with high-speed internet connectivity to facilitate seamless learning and
                        practical sessions.
                    </p>
                </div>

                <!-- 2. Security (CCTV) -->
                <div class="card">
                    <img src="assets/facilities/cctv.jpg" alt="CCTV Surveillance"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 10px; margin-bottom: 20px;">
                    <h3><i class="fas fa-video" style="color: #00b894; margin-right: 10px;"></i>24/7 Security</h3>
                    <p style="color: #636e72;">
                        CCTV Surveillance at each laboratories and key-areas to ensure safety. The entire campus is
                        monitored to provide a secure environment for students and staff.
                    </p>
                </div>

                <!-- 3. Power Backup -->
                <div class="card">
                    <img src="assets/facilities/generator.jpg" alt="Power Generator"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 10px; margin-bottom: 20px;">
                    <h3><i class="fas fa-bolt" style="color: #00b894; margin-right: 10px;"></i>Power Backup</h3>
                    <p style="color: #636e72;">
                        Power backup facility through 15 KVA & 6KVA capacities of online UPSs and primary with 250KVA
                        standby Generators for un-interrupted power supply ensuring zero downtime during lab sessions.
                    </p>
                </div>

                <!-- 4. Language Lab -->
                <div class="card">
                    <img src="assets/facilities/CHEMISTRY-LAB.jpg" alt="Language Lab"
                        style="width: 100%; height: 250px; object-fit: cover; border-radius: 10px; margin-bottom: 20px;">
                    <h3><i class="fas fa-headset" style="color: #00b894; margin-right: 10px;"></i>Language Laboratory
                    </h3>
                    <p style="color: #636e72;">
                        Standalone Language Laboratory is well equipped to nurture and facilitate effective language
                        learning. The use of the Interactive English software along with headsets with mic is very
                        useful for students, learning languages for communication. These interactive tools are designed
                        to enhance not only language teaching but also listening, speaking, reading, writing, class room
                        grading and placement skills learning.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>