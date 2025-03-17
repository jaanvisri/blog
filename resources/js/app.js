// import './bootstrap';
import './carousel';

// Mobile menu functionality
document.addEventListener('DOMContentLoaded', function() {
    // Find all sidebar toggle buttons (both open and close buttons)
    const sidebarToggleButtons = document.querySelectorAll('flux\\:sidebar\\.toggle');
    
    // Add click event listeners to all sidebar toggle buttons
    sidebarToggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Find the closest sidebar element
            const sidebar = this.closest('flux\\:sidebar') || 
                           document.querySelector('flux\\:sidebar[stashable][sticky]');
            
            if (sidebar) {
                // Toggle the sidebar visibility
                // The actual toggling is handled by Flux, but we can add additional functionality here if needed
                console.log('Sidebar toggle clicked');
            }
        });
    });
    
    // Add smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                    mobileMenu.classList.add('hidden');
                    if (mobileMenuButton) {
                        mobileMenuButton.setAttribute('aria-expanded', 'false');
                    }
                }
            }
        });
    });
    
    // Add scroll event listener for navbar styling
    const navbar = document.querySelector('nav');
    if (navbar) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 10) {
                navbar.classList.add('shadow-md');
                navbar.classList.remove('shadow-sm');
            } else {
                navbar.classList.remove('shadow-md');
                navbar.classList.add('shadow-sm');
            }
        });
    }
});

// Add dark mode toggle functionality if needed
if (document.querySelector('[data-toggle-dark]')) {
    document.querySelector('[data-toggle-dark]').addEventListener('click', function() {
        document.documentElement.classList.toggle('dark');
        
        // Save preference to localStorage
        if (document.documentElement.classList.contains('dark')) {
            localStorage.setItem('color-theme', 'dark');
        } else {
            localStorage.setItem('color-theme', 'light');
        }
    });
}

// Check for saved theme preference or prefer-color-scheme
if (localStorage.getItem('color-theme') === 'dark' || 
    (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark');
}