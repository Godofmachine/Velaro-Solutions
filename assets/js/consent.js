document.addEventListener('DOMContentLoaded', () => {
    const banner = document.getElementById('cookie-banner');
    const acceptBtn = document.getElementById('cookie-accept');
    const rejectBtn = document.getElementById('cookie-reject');

    // Check if consent is already given/rejected
    const consent = localStorage.getItem('gdpr_consent');

    if (!consent) {
        // Show banner after a short delay
        setTimeout(() => {
            banner.classList.remove('translate-y-full');
        }, 1000);
    } else if (consent === 'accepted') {
        initializeAnalytics();
    }

    const hideBanner = () => {
        banner.classList.add('translate-y-full');
    };

    acceptBtn?.addEventListener('click', () => {
        localStorage.setItem('gdpr_consent', 'accepted');
        hideBanner();
        initializeAnalytics();
    });

    rejectBtn?.addEventListener('click', () => {
        localStorage.setItem('gdpr_consent', 'rejected');
        hideBanner();
    });
});

function initializeAnalytics() {
    // Placeholder for Google Analytics or other tracking
    // e.g., window.dataLayer = window.dataLayer || [];
    console.log("Analytics initialized (Consent accepted).");
}
