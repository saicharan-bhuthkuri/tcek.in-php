document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.hero-slide');
    let currentIndex = 0;
    let slideInterval;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) {
                slide.classList.add('active');
                if (slide.tagName === 'VIDEO') {
                    slide.currentTime = 0;
                    slide.play().catch(e => console.log("Autoplay prevented:", e));
                } else {
                    // Stop any playing video if we switch away (though we usually wait for it to end)
                    const videos = document.querySelectorAll('.hero-slide video');
                    videos.forEach(v => {
                        v.pause();
                        v.currentTime = 0;
                    });
                }
            }
        });
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);

        const currentSlide = slides[currentIndex];

        if (currentSlide.tagName === 'VIDEO') {
            clearInterval(slideInterval);
            // Wait for video to end
            currentSlide.onended = () => {
                nextSlide(); // Move to next after video
            };
        } else {
            // Ensure interval is set for images
            if (slideInterval) clearInterval(slideInterval);
            slideInterval = setInterval(nextSlide, 2000); // 2 seconds for images
        }
    }

    // Initialize
    if (slides.length > 0) {
        showSlide(currentIndex);
        // Start the loop
        const currentSlide = slides[currentIndex];
        if (currentSlide.tagName === 'VIDEO') {
            currentSlide.play();
            currentSlide.onended = () => nextSlide();
        } else {
            slideInterval = setInterval(nextSlide, 2000);
        }
    }
});
