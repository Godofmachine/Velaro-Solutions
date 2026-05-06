/**
 * Scroll Reveal Animation Engine
 * Uses IntersectionObserver to trigger animations when elements enter the viewport.
 */

document.addEventListener('DOMContentLoaded', () => {
    // Select all elements with the reveal-hidden class
    const revealElements = document.querySelectorAll('.reveal-hidden');

    // Options for the IntersectionObserver
    const observerOptions = {
        root: null, // Use the viewport as the root
        rootMargin: '0px 0px -50px 0px', // Trigger slightly before the element fully enters the viewport
        threshold: 0.1 // Trigger when 10% of the element is visible
    };

    // Callback function when an element intersects
    const observerCallback = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add the visible class to trigger the CSS transition
                entry.target.classList.add('reveal-visible');
                // Optional: Stop observing once revealed to only animate once
                observer.unobserve(entry.target);
            }
        });
    };

    // Create the observer
    const revealObserver = new IntersectionObserver(observerCallback, observerOptions);

    // Observe each element
    revealElements.forEach(el => {
        revealObserver.observe(el);
    });

    // Header scroll effect (Glassmorphism)
    const header = document.getElementById('main-header');
    if (header) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 10) {
                header.classList.add('shadow-md');
                header.classList.remove('shadow-sm');
            } else {
                header.classList.remove('shadow-md');
                header.classList.add('shadow-sm');
            }
        });
    }
});
