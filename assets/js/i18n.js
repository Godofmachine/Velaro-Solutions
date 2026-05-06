let translations = { en: null, de: null };

async function loadTranslations(lang) {
    if (translations[lang]) return translations[lang];
    
    try {
        const response = await fetch(`/lang/${lang}.json`);
        if (!response.ok) throw new Error('Failed to load translations');
        translations[lang] = await response.json();
        return translations[lang];
    } catch (error) {
        console.error(error);
        return null;
    }
}

async function setLang(lang) {
    const dict = await loadTranslations(lang);
    if (!dict) return;

    // Update DOM text
    document.querySelectorAll('[data-i18n]').forEach(el => {
        const key = el.dataset.i18n;
        if (dict[key]) {
            el.textContent = dict[key];
        }
    });

    // Update placeholders if needed
    document.querySelectorAll('[data-i18n-placeholder]').forEach(el => {
        const key = el.dataset.i18nPlaceholder;
        if (dict[key]) {
            el.placeholder = dict[key];
        }
    });

    // Update language state in DOM
    document.documentElement.lang = lang;
    
    // Save preference
    localStorage.setItem('lang', lang);
    document.cookie = `lang=${lang}; path=/; max-age=31536000`; // 1 year

    // Update active state on buttons visually
    // The exact visual update will depend on a page reload for the PHP injected classes,
    // but we can toggle some classes instantly here if needed.
    // For this build, letting PHP handle the active class on load is fine, 
    // or we can force reload: window.location.reload(); 
    // BUT requirements say "without reloading where possible". 
    // Let's manually swap the active classes for the nav toggles.
    document.querySelectorAll('button[onclick^="setLang"]').forEach(btn => {
        if(btn.textContent.toLowerCase() === lang) {
            btn.classList.add('font-bold', 'text-primary');
            btn.classList.remove('text-gray-500');
        } else {
            btn.classList.remove('font-bold', 'text-primary');
            btn.classList.add('text-gray-500');
        }
    });
}

// Initialization
document.addEventListener('DOMContentLoaded', () => {
    // Determine initial lang from DOM
    const currentLang = document.documentElement.lang || 'en';
    // Pre-load the other language so switching is instant
    loadTranslations(currentLang === 'en' ? 'de' : 'en');
});
