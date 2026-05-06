document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const iconPath = document.getElementById('mobile-menu-icon');

    if (btn && menu) {
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            
            // Toggle icon (Hamburger vs X)
            if (menu.classList.contains('hidden')) {
                iconPath.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
            } else {
                iconPath.setAttribute('d', 'M6 18L18 6M6 6l12 12');
            }
        });
    }

    // Header Scroll Effect
    const header = document.getElementById('main-header');
    
    const handleScroll = () => {
        if (window.scrollY > 10) {
            header.classList.add('shadow-md', 'py-0');
            header.classList.remove('shadow-sm', 'py-1');
        } else {
            header.classList.add('shadow-sm', 'py-1');
            header.classList.remove('shadow-md', 'py-0');
        }
    };

    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Trigger on load
});
