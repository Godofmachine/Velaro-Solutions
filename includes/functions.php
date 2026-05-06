<?php
declare(strict_types=1);

/**
 * Get the current language (either 'en' or 'de').
 * Defaults to 'en' if not set. Checks cookie first, then browser accept-language.
 */
function get_current_language(): string {
    $allowed = ['en', 'de'];
    
    // Check if explicitly set via GET
    if (isset($_GET['lang']) && in_array($_GET['lang'], $allowed)) {
        // Set cookie for 1 year
        setcookie('lang', $_GET['lang'], time() + 31536000, '/');
        return $_GET['lang'];
    }
    
    // Check cookie
    if (isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], $allowed)) {
        return $_COOKIE['lang'];
    }
    
    // Check browser preference
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $browser_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        if (in_array($browser_lang, $allowed)) {
            return $browser_lang;
        }
    }
    
    return 'en';
}

/**
 * Load translation strings from JSON file.
 */
function get_translations(string $lang): array {
    static $translations = [];
    
    if (empty($translations[$lang])) {
        $file_path = __DIR__ . "/../lang/{$lang}.json";
        if (file_exists($file_path)) {
            $json = file_get_contents($file_path);
            $translations[$lang] = json_decode($json, true) ?? [];
        } else {
            $translations[$lang] = [];
        }
    }
    
    return $translations[$lang];
}

/**
 * Translate a key.
 */
function t(string $key): string {
    global $lang;
    $translations = get_translations($lang);
    return $translations[$key] ?? $key;
}
