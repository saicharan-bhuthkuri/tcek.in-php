document.addEventListener('DOMContentLoaded', () => {
    const slides = document.querySelectorAll('.achievement-slide');
    const nextBtn = document.querySelector('.ach-next');
    const prevBtn = document.querySelector('.ach-prev');
    let currentAchIndex = 0;
    let autoPlayInterval;

    if (slides.length === 0) return;

    function showAchSlide(index) {
        // Wrap around
        if (index >= slides.length) currentAchIndex = 0;
        else if (index < 0) currentAchIndex = slides.length - 1;
        else currentAchIndex = index;

        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === currentAchIndex) {
                slide.classList.add('active');
            }
        });
    }

    function nextAchSlide() {
        showAchSlide(currentAchIndex + 1);
    }

    function prevAchSlide() {
        showAchSlide(currentAchIndex - 1);
    }

    // Event Listeners
    if (nextBtn) nextBtn.addEventListener('click', () => {
        nextAchSlide();
        resetTimer();
    });

    if (prevBtn) prevBtn.addEventListener('click', () => {
        prevAchSlide();
        resetTimer();
    });

    function startTimer() {
        autoPlayInterval = setInterval(nextAchSlide, 5000); // 5 seconds
    }

    function resetTimer() {
        clearInterval(autoPlayInterval);
        startTimer();
    }

    // Start
    startTimer();
});
