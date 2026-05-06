<?php if (!defined('VELARO_SITE')) exit; 
$posts = require __DIR__ . '/../data/blog-posts.php';

$slug = $_GET['slug'] ?? '';
$current_post = null;

foreach ($posts as $post) {
    if ($post['slug'] === $slug) {
        $current_post = $post;
        break;
    }
}

if (!$current_post) {
    echo '<div class="pt-32 text-center text-xl" data-i18n="blog_post_not_found">' . t('blog_post_not_found') . '</div>';
    return;
}

$title = $lang === 'de' ? $current_post['title_de'] : $current_post['title_en'];
$content = $lang === 'de' ? $current_post['content_de'] : $current_post['content_en'];
?>

<article class="pt-20 bg-white">
    <!-- Header Image -->
    <div class="h-[50vh] md:h-[70vh] relative reveal-hidden">
        <img src="https://images.unsplash.com/photo-<?php echo $current_post['image_id']; ?>?auto=format&fit=crop&w=1920&q=80" alt="Article Cover" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/40 to-transparent"></div>
    </div>
    
    <!-- Content Wrapper -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 -mt-40 relative z-10 pb-24">
        <div class="bg-white rounded-[3rem] shadow-2xl p-10 md:p-16 border border-gray-100 reveal-hidden delay-200">
            <!-- Meta -->
            <div class="flex items-center justify-between mb-10 border-b border-gray-100 pb-8">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 rounded-full bg-accent/10 text-accent flex items-center justify-center font-bold text-xl">
                        <?php echo substr($current_post['author'], 0, 1); ?>
                    </div>
                    <div>
                        <div class="font-bold text-primary text-lg"><?php echo $current_post['author']; ?></div>
                        <div class="text-sm text-gray-500 flex items-center gap-2">
                            <svg class="w-4 h-4 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            <?php echo date('F j, Y', strtotime($current_post['date'])); ?>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Title -->
            <h1 class="text-4xl md:text-6xl font-bold text-primary mb-10 leading-tight tracking-tight reveal-hidden delay-300">
                <?php echo $title; ?>
            </h1>
            
            <!-- Body -->
            <div class="prose prose-lg md:prose-xl prose-blue max-w-none text-gray-700 reveal-hidden delay-400">
                <?php echo $content; ?>
            </div>
            
            <!-- Back Link -->
            <div class="mt-12 pt-8 border-t border-gray-100">
                <a href="/?page=blog" class="text-accent hover:text-primary transition font-medium inline-flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    <span data-i18n="blog_back_link"><?php echo t('blog_back_link'); ?></span>
                </a>
            </div>
        </div>
    </div>
</article>
