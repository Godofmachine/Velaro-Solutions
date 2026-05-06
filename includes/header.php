<?php
// Ensure this file is being included, not accessed directly
if (!defined('VELARO_SITE')) exit;
global $lang, $page;
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="site_title"><?php echo t('site_title'); ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Velaro Solutions - Premium Digital Agency providing web development, design, and strategy.">
    <link rel="alternate" hreflang="en" href="?lang=en" />
    <link rel="alternate" hreflang="de" href="?lang=de" />
    <link rel="alternate" hreflang="x-default" href="?lang=en" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS (CDN for Development, switch to build for Prod) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#1B2B5B',
                        accent: '#D4A843',
                        neutral: {
                            dark: '#111827',
                            light: '#F8FAFC'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/custom.css">
</head>
<body class="bg-neutral-light text-neutral-dark font-sans flex flex-col min-h-screen">

<!-- Skip to content link for Accessibility -->
<a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:p-4 focus:bg-white focus:text-primary focus:z-50">Skip to content</a>

<!-- Navigation -->
<header id="main-header" class="fixed w-full top-0 z-40 transition-all duration-300 bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="/" class="text-2xl font-bold text-primary flex items-center gap-2 group">
                    <svg class="w-8 h-8 text-accent transform group-hover:rotate-12 transition" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 22h20L12 2zm0 4.3l6.5 13.7H5.5L12 6.3z"/></svg>
                    <span>Velaro</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <nav class="hidden md:flex space-x-8 items-center">
                <a href="/" class="nav-link text-gray-700 hover:text-accent font-medium transition <?php echo $page === 'home' ? 'active' : ''; ?>" data-i18n="nav_home"><?php echo t('nav_home'); ?></a>
                <a href="/?page=about" class="nav-link text-gray-700 hover:text-accent font-medium transition <?php echo $page === 'about' ? 'active' : ''; ?>" data-i18n="nav_about"><?php echo t('nav_about'); ?></a>
                <a href="/?page=services" class="nav-link text-gray-700 hover:text-accent font-medium transition <?php echo $page === 'services' ? 'active' : ''; ?>" data-i18n="nav_services"><?php echo t('nav_services'); ?></a>
                <a href="/?page=portfolio" class="nav-link text-gray-700 hover:text-accent font-medium transition <?php echo $page === 'portfolio' ? 'active' : ''; ?>" data-i18n="nav_portfolio"><?php echo t('nav_portfolio'); ?></a>
                <a href="/?page=blog" class="nav-link text-gray-700 hover:text-accent font-medium transition <?php echo $page === 'blog' ? 'active' : ''; ?>" data-i18n="nav_blog"><?php echo t('nav_blog'); ?></a>
                <a href="/?page=contact" class="px-5 py-2 rounded-full bg-primary text-white hover:bg-accent transition shadow hover:shadow-lg font-medium <?php echo $page === 'contact' ? 'ring-2 ring-accent ring-offset-2' : ''; ?>" data-i18n="nav_contact"><?php echo t('nav_contact'); ?></a>
                
                <!-- Language Toggle -->
                <div class="relative ml-4 flex items-center gap-2 border-l pl-4 border-gray-200">
                    <button onclick="setLang('en')" class="<?php echo $lang === 'en' ? 'font-bold text-primary' : 'text-gray-500 hover:text-primary'; ?> text-sm uppercase transition" title="<?php echo t('lang_en'); ?>">EN</button>
                    <span class="text-gray-300">|</span>
                    <button onclick="setLang('de')" class="<?php echo $lang === 'de' ? 'font-bold text-primary' : 'text-gray-500 hover:text-primary'; ?> text-sm uppercase transition" title="<?php echo t('lang_de'); ?>">DE</button>
                </div>
            </nav>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-gray-700 hover:text-primary focus:outline-none p-2">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path id="mobile-menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-white shadow-xl border-t border-gray-100 absolute w-full">
        <div class="px-4 pt-2 pb-6 space-y-1">
            <a href="/" class="block px-3 py-3 rounded-md text-base font-medium transition <?php echo $page === 'home' ? 'text-accent bg-gray-50' : 'text-gray-700 hover:text-accent hover:bg-gray-50'; ?>" data-i18n="nav_home"><?php echo t('nav_home'); ?></a>
            <a href="/?page=about" class="block px-3 py-3 rounded-md text-base font-medium transition <?php echo $page === 'about' ? 'text-accent bg-gray-50' : 'text-gray-700 hover:text-accent hover:bg-gray-50'; ?>" data-i18n="nav_about"><?php echo t('nav_about'); ?></a>
            <a href="/?page=services" class="block px-3 py-3 rounded-md text-base font-medium transition <?php echo $page === 'services' ? 'text-accent bg-gray-50' : 'text-gray-700 hover:text-accent hover:bg-gray-50'; ?>" data-i18n="nav_services"><?php echo t('nav_services'); ?></a>
            <a href="/?page=portfolio" class="block px-3 py-3 rounded-md text-base font-medium transition <?php echo $page === 'portfolio' ? 'text-accent bg-gray-50' : 'text-gray-700 hover:text-accent hover:bg-gray-50'; ?>" data-i18n="nav_portfolio"><?php echo t('nav_portfolio'); ?></a>
            <a href="/?page=blog" class="block px-3 py-3 rounded-md text-base font-medium transition <?php echo $page === 'blog' ? 'text-accent bg-gray-50' : 'text-gray-700 hover:text-accent hover:bg-gray-50'; ?>" data-i18n="nav_blog"><?php echo t('nav_blog'); ?></a>
            <a href="/?page=contact" class="block px-3 py-3 rounded-md text-base font-medium <?php echo $page === 'contact' ? 'text-accent bg-blue-50 font-bold' : 'text-primary bg-blue-50'; ?>" data-i18n="nav_contact"><?php echo t('nav_contact'); ?></a>
            
            <div class="px-3 py-4 flex gap-4 mt-2 border-t border-gray-100">
                <button onclick="setLang('en')" class="flex-1 py-2 text-center rounded bg-gray-50 <?php echo $lang === 'en' ? 'font-bold text-primary ring-1 ring-primary' : 'text-gray-500'; ?>">EN</button>
                <button onclick="setLang('de')" class="flex-1 py-2 text-center rounded bg-gray-50 <?php echo $lang === 'de' ? 'font-bold text-primary ring-1 ring-primary' : 'text-gray-500'; ?>">DE</button>
            </div>
        </div>
    </div>
</header>

<!-- Main Content Area -->
<main id="main-content" class="flex-grow pt-20">
