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
    <div class="h-[40vh] md:h-[60vh] relative">
        <img src="https://images.unsplash.com/photo-<?php echo $current_post['image_id']; ?>?auto=format&fit=crop&w=1920&q=80" alt="Article Cover" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-primary/40 mix-blend-multiply"></div>
    </div>
    
    <!-- Content Wrapper -->
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 -mt-32 relative z-10 pb-24">
        <div class="bg-white rounded-3xl shadow-xl p-8 md:p-12 border border-gray-100">
            <!-- Meta -->
            <div class="flex items-center justify-between mb-8 border-b border-gray-100 pb-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 font-bold">
                        <?php echo substr($current_post['author'], 0, 1); ?>
                    </div>
                    <div>
                        <div class="font-bold text-primary"><?php echo $current_post['author']; ?></div>
                        <div class="text-sm text-gray-500"><?php echo date('F j, Y', strtotime($current_post['date'])); ?></div>
                    </div>
                </div>
            </div>
            
            <!-- Title -->
            <h1 class="text-3xl md:text-5xl font-bold text-primary mb-8 leading-tight">
                <?php echo $title; ?>
            </h1>
            
            <!-- Body -->
            <div class="prose prose-lg prose-blue max-w-none text-gray-700">
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
