document.addEventListener('DOMContentLoaded', function () {
    const sliderHandle = document.querySelector('.slider-handle');
    const afterImage = document.querySelector('.after-image');
    const beforeAfterContainer = document.querySelector('.before-after-container');

    let isDragging = false;

    function updateClip(x) {
        const containerRect = beforeAfterContainer.getBoundingClientRect();
        const percentage = (x - containerRect.left) / containerRect.width;
        const clampedPercentage = Math.max(0, Math.min(1, percentage));
        afterImage.style.clipPath = `inset(0 ${100 - clampedPercentage * 100}% 0 0)`;
        sliderHandle.style.left = `${clampedPercentage * 100}%`;
    }

    function onPointerMove(e) {
        if (isDragging) {
            const containerRect = beforeAfterContainer.getBoundingClientRect();
            const x = Math.max(containerRect.left, Math.min(e.clientX, containerRect.right));
            updateClip(x);
        }
    }

    function onPointerDown(e) {
        isDragging = true;
        afterImage.style.transition = 'none';  // Remove transition while dragging
        const x = e.clientX;
        updateClip(x); // Initialize position
        document.addEventListener('pointermove', onPointerMove);
        document.addEventListener('pointerup', onPointerUp, { once: true });
        document.addEventListener('pointercancel', onPointerUp, { once: true }); // Handle pointer cancellation
    }

    function onPointerUp() {
        isDragging = false;
        afterImage.style.transition = 'clip-path 0.3s';  // Reapply smooth transition
        document.removeEventListener('pointermove', onPointerMove);
    }

    sliderHandle.addEventListener('pointerdown', onPointerDown);

    // Also add touch support explicitly if needed
    sliderHandle.addEventListener('touchstart', function(e) {
        e.preventDefault(); // Prevent default touch actions
        isDragging = true;
        afterImage.style.transition = 'none';  // Remove transition while dragging
        const x = e.touches[0].clientX;
        updateClip(x); // Initialize position
        document.addEventListener('touchmove', onTouchMove);
        document.addEventListener('touchend', onTouchEnd, { once: true });
    });

    function onTouchMove(e) {
        if (isDragging) {
            const containerRect = beforeAfterContainer.getBoundingClientRect();
            const x = e.touches[0].clientX;
            const xClamped = Math.max(containerRect.left, Math.min(x, containerRect.right));
            updateClip(xClamped);
        }
    }

    function onTouchEnd() {
        isDragging = false;
        afterImage.style.transition = 'clip-path 0.3s';  // Reapply smooth transition
        document.removeEventListener('touchmove', onTouchMove);
    }
});
// Mobile menu toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        var mobileMenu = document.getElementById('mobile-menu');
        var hamburger = document.querySelector('.icon');  // Changed from 'hamburger' to '.icon'

        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('hidden');

            setTimeout(function() {
                mobileMenu.classList.add('open');
            }, 10);
            
            hamburger.classList.add('open');
        } else {
            mobileMenu.classList.remove('open');

            setTimeout(function() {
                mobileMenu.classList.add('hidden');
            }, 300);

            hamburger.classList.remove('open');
        }
    });
});
