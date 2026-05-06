<?php
// Strict typing and basic error reporting for dev
declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Start session for potential CSRF tokens or flash messages
session_start();

// Security constant to prevent direct access to included files
define('VELARO_SITE', true);

// Include core functions
require_once __DIR__ . '/includes/functions.php';

// Determine requested language (default 'en')
$lang = get_current_language();

// Determine requested page
$page = $_GET['page'] ?? 'home';

// Sanitize page parameter to prevent directory traversal
$page = basename($page);
if (empty($page)) {
    $page = 'home';
}

// Map requested page to actual PHP file in /pages
$allowed_pages = [
    'home' => 'home.php',
    'about' => 'about.php',
    'services' => 'services.php',
    'service-detail' => 'service-detail.php',
    'portfolio' => 'portfolio.php',
    'blog' => 'blog.php',
    'blog-post' => 'blog-post.php',
    'contact' => 'contact.php',
    'impressum' => '../legal/impressum.php',
    'datenschutz' => '../legal/datenschutz.php',
];

// 404 Fallback
if (!array_key_exists($page, $allowed_pages)) {
    http_response_code(404);
    $page_file = '404.php'; // We'll create a simple 404 inline or in pages
} else {
    $page_file = $allowed_pages[$page];
}

$page_path = __DIR__ . '/pages/' . $page_file;

// Output buffering to allow headers to be modified inside included files if needed
ob_start();

require_once __DIR__ . '/includes/header.php';

if (file_exists($page_path)) {
    require_once $page_path;
} else {
    echo '<div class="min-h-screen flex items-center justify-center bg-neutral-light"><div class="text-center"><h1 class="text-4xl font-bold text-primary mb-4">404</h1><p class="text-neutral-dark mb-6" data-i18n="page_not_found">Page not found.</p><a href="/" class="bg-accent text-white px-6 py-3 rounded hover:bg-yellow-600 transition" data-i18n="back_home">Back to Home</a></div></div>';
}

require_once __DIR__ . '/includes/footer.php';

ob_end_flush();
