<?php if (!defined('VELARO_SITE')) exit; 
$blog_posts = require __DIR__ . '/../data/blog-posts.php';

$slug = $_GET['slug'] ?? '';
$current_post = null;

foreach ($blog_posts as $post) {
    if ($post['slug'] === $slug) {
        $current_post = $post;
        break;
    }
}

if (!$current_post) {
    echo '<div class="py-32 text-center text-primary dark:text-white font-serif text-2xl" data-i18n="blog_post_not_found">'.t('blog_post_not_found').'</div>';
    return;
}

$title = $lang === 'de' ? $current_post['title_de'] : $current_post['title_en'];
$content = $lang === 'de' ? $current_post['content_de'] : $current_post['content_en'];
?>

<article class="bg-white dark:bg-neutral-dark min-h-screen transition-colors duration-300">
    <!-- Header Image -->
    <div class="h-[50vh] relative reveal-hidden">
        <img src="<?php echo $current_post['image_url']; ?>" alt="<?php echo htmlspecialchars($title); ?>" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-primary/80 dark:bg-[#050B14]/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-primary dark:from-[#050B14] via-transparent to-transparent opacity-60"></div>
    </div>
    
    <!-- Content Wrapper -->
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 -mt-32 pb-24">
        
        <!-- Post Header -->
        <header class="bg-white dark:bg-slate-900 p-10 md:p-12 rounded shadow-2xl dark:shadow-none border-t-4 border-accent dark:border dark:border-t-4 dark:border-slate-800 dark:border-t-accent text-center mb-16 reveal-hidden delay-100 transition-colors duration-300">
            <div class="flex items-center justify-center gap-4 text-sm text-gray-500 dark:text-gray-400 mb-6 font-light uppercase tracking-widest">
                <span><?php echo date('F d, Y', strtotime($current_post['date'])); ?></span>
                <span>&bull;</span>
                <span class="text-accent font-bold"><?php echo $current_post['author']; ?></span>
            </div>
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-primary dark:text-white leading-tight"><?php echo $title; ?></h1>
        </header>

        <!-- Post Content -->
        <div class="prose prose-lg dark:prose-invert prose-blue max-w-none text-gray-700 dark:text-gray-300 font-light leading-relaxed reveal-hidden delay-200">
            <?php echo $content; ?>
        </div>
        
        <!-- Author Bio / Disclaimer -->
        <div class="mt-16 pt-8 border-t border-gray-200 dark:border-slate-800 flex items-center gap-6 reveal-hidden delay-300">
            <div class="w-16 h-16 bg-primary dark:bg-slate-800 text-accent rounded-full flex items-center justify-center font-serif font-bold text-xl shrink-0">
                <?php 
                    // Generate initials
                    $words = explode(" ", $current_post['author']);
                    $initials = "";
                    foreach ($words as $w) {
                        if($w !== 'Dr.') {
                            $initials .= mb_substr($w, 0, 1);
                        }
                    }
                    echo mb_substr($initials, 0, 2);
                ?>
            </div>
            <div>
                <p class="text-sm text-gray-500 dark:text-gray-400 font-light leading-relaxed">
                    <strong class="text-primary dark:text-gray-200 font-medium"><?php echo $lang === 'de' ? 'Haftungsausschluss:' : 'Disclaimer:'; ?></strong> 
                    <?php echo $lang === 'de' 
                        ? 'Dieser Artikel dient nur zu Informationszwecken und stellt keine Rechtsberatung dar. Für die Lösung spezifischer rechtlicher Probleme konsultieren Sie bitte einen qualifizierten Rechtsanwalt.' 
                        : 'This article is for informational purposes only and does not constitute legal advice. Please consult a qualified attorney for specific legal issues.'; ?>
                </p>
            </div>
        </div>
        
        <div class="mt-16 text-center reveal-hidden delay-400">
            <a href="/?page=blog" class="inline-flex items-center text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-white transition font-medium border-b border-transparent hover:border-primary dark:hover:border-white pb-1">
                <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                <span data-i18n="service_back_link"><?php echo t('service_back_link'); ?></span>
            </a>
        </div>
    </div>
</article>
