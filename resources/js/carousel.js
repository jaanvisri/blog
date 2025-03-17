/**
 * Blog Carousel Implementation
 * This script handles the carousel functionality for the blog homepage
 */

document.addEventListener('DOMContentLoaded', function() {
    // Get carousel elements
    const carousel = document.querySelector('.carousel');
    if (!carousel) return;
    
    const slides = carousel.querySelectorAll('.carousel-item');
    const prevButton = carousel.querySelector('.carousel-control-prev');
    const nextButton = carousel.querySelector('.carousel-control-next');
    const indicators = carousel.querySelectorAll('.carousel-indicators button');
    
    let currentIndex = 0;
    const slideCount = slides.length;
    
    // Initialize the carousel
    function initCarousel() {
        // Set up event listeners
        prevButton.addEventListener('click', showPreviousSlide);
        nextButton.addEventListener('click', showNextSlide);
        
        // Set up indicators
        indicators.forEach((indicator, index) => {
            indicator.addEventListener('click', () => showSlide(index));
        });
        
        // Start auto-rotation
        startAutoRotation();
    }
    
    // Show a specific slide by index
    function showSlide(index) {
        // Handle index boundaries
        if (index < 0) index = slideCount - 1;
        if (index >= slideCount) index = 0;
        
        // Hide all slides
        slides.forEach(slide => {
            slide.classList.remove('active');
            slide.classList.add('opacity-0');
            slide.classList.remove('opacity-100');
        });
        
        // Show the selected slide
        slides[index].classList.add('active');
        slides[index].classList.remove('opacity-0');
        slides[index].classList.add('opacity-100');
        
        // Update indicators
        indicators.forEach((indicator, i) => {
            if (i === index) {
                indicator.classList.add('active');
                indicator.setAttribute('aria-current', 'true');
            } else {
                indicator.classList.remove('active');
                indicator.removeAttribute('aria-current');
            }
        });
        
        // Update current index
        currentIndex = index;
    }
    
    // Show the next slide
    function showNextSlide() {
        showSlide(currentIndex + 1);
    }
    
    // Show the previous slide
    function showPreviousSlide() {
        showSlide(currentIndex - 1);
    }
    
    // Auto-rotate the carousel
    let autoRotateInterval;
    function startAutoRotation() {
        // Clear any existing interval
        if (autoRotateInterval) clearInterval(autoRotateInterval);
        
        // Set up a new interval
        autoRotateInterval = setInterval(() => {
            showNextSlide();
        }, 5000); // Change slide every 5 seconds
    }
    
    // Pause auto-rotation when user interacts with the carousel
    function pauseAutoRotation() {
        clearInterval(autoRotateInterval);
    }
    
    // Resume auto-rotation after user interaction
    function resumeAutoRotation() {
        startAutoRotation();
    }
    
    // Add event listeners for pause/resume
    carousel.addEventListener('mouseenter', pauseAutoRotation);
    carousel.addEventListener('mouseleave', resumeAutoRotation);
    
    // Initialize the carousel
    initCarousel();
});