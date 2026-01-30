<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery - Trinity College of Engineering & Technology</title>
    <?php include 'components/head.php'; ?>
    <style>
        .gallery-grid {
            column-count: 4;
            column-gap: 20px;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            margin-bottom: 20px;
            break-inside: avoid;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        @media (max-width: 992px) {
            .gallery-grid {
                column-count: 3;
            }
        }

        @media (max-width: 768px) {
            .gallery-grid {
                column-count: 2;
            }
        }

        @media (max-width: 576px) {
            .gallery-grid {
                column-count: 1;
            }
        }

        .gallery-item:hover img {
            transform: scale(1.05);
            /* Subtle zoom */
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }

        .view-btn {
            color: white;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
            backdrop-filter: blur(5px);
        }

        /* Lightbox Styles */
        .lightbox {
            display: none;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
        }

        .lightbox.active {
            display: flex;
        }

        .lightbox-content {
            max-width: 90%;
            max-height: 90%;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            animation: zoomIn 0.3s ease;
        }

        .close-lightbox {
            position: absolute;
            top: 20px;
            right: 30px;
            color: #fff;
            font-size: 40px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .close-lightbox:hover {
            color: #00b894;
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.9);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
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
    <?php $page = 'gallery'; include 'components/header.php'; ?>
<!-- Page Header -->
    <section class="page-header">
        <h1>Photo Gallery</h1>
        <p>Glimpses of life at Trinity College</p>
    </section>

    <!-- Gallery Grid -->
    <section>
        <div class="gallery-grid">
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/autonomous.jpg" alt="Autonomous Status Celebration">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/naac2.jpg" alt="NAAC Accreditation">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/infosys.jpg" alt="Campus Event">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/im.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/im1.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/im2.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/im3.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/im4.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/im5.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/im6.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/im8.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/IMG-1.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/IMG-4.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/IMG-5.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/IMG-6.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/IMG-7.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/IMG-8.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/IMG2.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/pamplet1.jpg" alt="Gallery Image">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/paper.jpg" alt="News Paper Clipping">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/paper1.jpg" alt="News Paper Clipping">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/paper2.jpg" alt="News Paper Clipping">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/paper3.jpg" alt="News Paper Clipping">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/paper4.jpg" alt="News Paper Clipping">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/paper5.jpg" alt="News Paper Clipping">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
            <div class="gallery-item" onclick="openLightbox(this)">
                <img src="assets/Gallery/papers.jpg" alt="News Paper Clipping">
                <div class="gallery-overlay"><span class="view-btn"><i class="fas fa-search-plus"></i> View</span></div>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div id="lightbox" class="lightbox" onclick="closeLightbox()">
        <span class="close-lightbox">&times;</span>
        <img id="lightbox-img" class="lightbox-content" src="" alt="Zoomed Image">
    </div>

    <!-- Footer -->
    <?php include 'components/footer.php'; ?>