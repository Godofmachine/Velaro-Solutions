function setLang(lang) {
    // Save preference
    localStorage.setItem('lang', lang);
    document.cookie = `lang=${lang}; path=/; max-age=31536000`; // 1 year
    
    // To ensure a truly global and flawless translation of all dynamic PHP content 
    // (such as blog posts, team members, and practice areas), we reload the page 
    // to let the server render the correct language version.
    
    // Check if there is a query string, if so, we can add/update lang param for immediate effect
    const url = new URL(window.location);
    url.searchParams.set('lang', lang);
    window.location.href = url.toString();
}
