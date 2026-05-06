// Check for saved user preference, if any, on load of the website
if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark');
}

// Function to toggle the theme
function toggleTheme() {
    const isDark = document.documentElement.classList.toggle('dark');
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
    
    // Update active state of the toggle buttons if needed
    updateThemeToggleUI();
}

// Ensure the UI matches the actual theme on load
document.addEventListener('DOMContentLoaded', updateThemeToggleUI);

function updateThemeToggleUI() {
    const isDark = document.documentElement.classList.contains('dark');
    
    // Desktop icons
    const darkIconDesktop = document.getElementById('theme-toggle-dark-icon');
    const lightIconDesktop = document.getElementById('theme-toggle-light-icon');
    if(darkIconDesktop && lightIconDesktop) {
        if(isDark) {
            darkIconDesktop.classList.add('hidden');
            lightIconDesktop.classList.remove('hidden');
        } else {
            lightIconDesktop.classList.add('hidden');
            darkIconDesktop.classList.remove('hidden');
        }
    }

    // Mobile icons
    const darkIconMobile = document.getElementById('theme-toggle-dark-icon-mobile');
    const lightIconMobile = document.getElementById('theme-toggle-light-icon-mobile');
    if(darkIconMobile && lightIconMobile) {
        if(isDark) {
            darkIconMobile.classList.add('hidden');
            lightIconMobile.classList.remove('hidden');
        } else {
            lightIconMobile.classList.add('hidden');
            darkIconMobile.classList.remove('hidden');
        }
    }
}
