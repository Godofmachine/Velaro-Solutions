function setLang(lang) {
    // Save scroll position to restore it after reload
    sessionStorage.setItem('scrollPos', window.scrollY);
    
    // Save preference
    localStorage.setItem('lang', lang);
    document.cookie = `lang=${lang}; path=/; max-age=31536000`; // 1 year
    
    // To ensure a truly global and flawless translation of all dynamic PHP content 
    // we reload the page to let the server render the correct language version.
    const url = new URL(window.location);
    url.searchParams.set('lang', lang);
    window.location.href = url.toString();
}

// Restore scroll position on page load
window.addEventListener('load', () => {
    const scrollPos = sessionStorage.getItem('scrollPos');
    if (scrollPos !== null) {
        window.scrollTo(0, parseInt(scrollPos));
        sessionStorage.removeItem('scrollPos');
    }
});
