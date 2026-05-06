<?php if (!defined('VELARO_SITE')) exit; 
$blog_posts = require __DIR__ . '/../data/blog-posts.php';

// Separate featured and regular posts
$featured_posts = array_filter($blog_posts, function($p) { return isset($p['is_featured']) && $p['is_featured']; });
$regular_posts = array_filter($blog_posts, function($p) { return !isset($p['is_featured']) || !$p['is_featured']; });
?>

<!-- Header -->
<section class="py-24 bg-neutral-light dark:bg-neutral-dark border-b border-gray-200 dark:border-slate-800 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal-hidden">
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-primary dark:text-white mb-6" data-i18n="blog_title"><?php echo t('blog_title'); ?></h1>
        <p class="text-xl text-gray-600 dark:text-gray-400 max-w-3xl mx-auto font-light" data-i18n="blog_subtitle"><?php echo t('blog_subtitle'); ?></p>
    </div>
</section>

<!-- Blog Feed -->
<section class="py-24 bg-white dark:bg-slate-900 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Featured Posts (Horizontal Layout on Desktop) -->
        <?php if(!empty($featured_posts)): ?>
            <h2 class="text-2xl font-serif font-bold text-primary dark:text-white mb-8 border-b border-gray-200 dark:border-slate-800 pb-4 reveal-hidden" data-i18n="blog_featured_heading"><?php echo t('blog_featured_heading'); ?></h2>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mb-20">
                <?php 
                $delay = 100;
                foreach($featured_posts as $post): 
                ?>
                <article class="flex flex-col md:flex-row bg-white dark:bg-slate-900 rounded border border-gray-100 dark:border-slate-800 overflow-hidden shadow hover:shadow-2xl dark:shadow-none dark:hover:border-slate-700 transition-all duration-300 group reveal-hidden" style="transition-delay: <?php echo $delay; ?>ms;">
                    <div class="md:w-2/5 h-64 md:h-auto overflow-hidden relative">
                        <img src="<?php echo $post['image_url']; ?>" alt="Blog Post" class="w-full h-full object-cover group-hover:scale-105 transition duration-700 opacity-90 dark:opacity-80 group-hover:opacity-100 dark:group-hover:opacity-100" />
                        <div class="absolute top-4 left-4 bg-accent text-white text-xs font-bold uppercase tracking-widest px-3 py-1 rounded" data-i18n="blog_featured"><?php echo t('blog_featured'); ?></div>
                    </div>
                    <div class="md:w-3/5 p-8 flex flex-col justify-between">
                        <div>
                            <div class="flex items-center text-sm text-gray-400 dark:text-gray-500 mb-4 font-light">
                                <span><?php echo date('M d, Y', strtotime($post['date'])); ?></span>
                                <span class="mx-2">&bull;</span>
                                <span class="text-primary dark:text-gray-300 font-medium"><?php echo $post['author']; ?></span>
                            </div>
                            <h3 class="text-2xl font-serif font-bold text-primary dark:text-white mb-4 group-hover:text-accent transition">
                                <a href="/?page=blog-post&slug=<?php echo $post['slug']; ?>">
                                    <?php echo $lang === 'de' ? $post['title_de'] : $post['title_en']; ?>
                                </a>
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-6 font-light leading-relaxed line-clamp-3">
                                <?php echo $lang === 'de' ? $post['excerpt_de'] : $post['excerpt_en']; ?>
                            </p>
                        </div>
                        <a href="/?page=blog-post&slug=<?php echo $post['slug']; ?>" class="inline-flex items-center text-accent font-bold uppercase tracking-wider text-sm group-hover:gap-2 transition-all">
                            <span data-i18n="blog_read_article"><?php echo t('blog_read_article'); ?></span>
                            <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </article>
                <?php 
                $delay += 100;
                endforeach; 
                ?>
            </div>
        <?php endif; ?>

        <!-- Regular Posts -->
        <h2 class="text-2xl font-serif font-bold text-primary dark:text-white mb-8 border-b border-gray-200 dark:border-slate-800 pb-4 reveal-hidden" data-i18n="blog_latest_heading"><?php echo t('blog_latest_heading') ?: ($lang === 'de' ? 'Aktuelle Einblicke' : 'Latest Insights'); ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            $delay = 100;
            foreach($regular_posts as $post): 
            ?>
            <article class="bg-white dark:bg-slate-900 rounded border border-gray-100 dark:border-slate-800 overflow-hidden shadow hover:shadow-2xl dark:shadow-none dark:hover:border-slate-700 transition-all duration-300 group flex flex-col reveal-hidden" style="transition-delay: <?php echo $delay; ?>ms;">
                <div class="h-56 overflow-hidden">
                    <img src="<?php echo $post['image_url']; ?>" alt="Blog Post" class="w-full h-full object-cover group-hover:scale-105 transition duration-700 opacity-90 dark:opacity-80 group-hover:opacity-100 dark:group-hover:opacity-100" />
                </div>
                <div class="p-8 flex flex-col flex-grow">
                    <div class="flex items-center text-xs text-gray-400 dark:text-gray-500 mb-3 font-light">
                        <span><?php echo date('M d, Y', strtotime($post['date'])); ?></span>
                        <span class="mx-2">&bull;</span>
                        <span class="text-primary dark:text-gray-300 font-medium"><?php echo $post['author']; ?></span>
                    </div>
                    <h3 class="text-xl font-serif font-bold text-primary dark:text-white mb-3 group-hover:text-accent transition">
                        <a href="/?page=blog-post&slug=<?php echo $post['slug']; ?>">
                            <?php echo $lang === 'de' ? $post['title_de'] : $post['title_en']; ?>
                        </a>
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-6 flex-grow font-light leading-relaxed line-clamp-3">
                        <?php echo $lang === 'de' ? $post['excerpt_de'] : $post['excerpt_en']; ?>
                    </p>
                    <a href="/?page=blog-post&slug=<?php echo $post['slug']; ?>" class="inline-flex items-center text-accent font-bold uppercase tracking-wider text-xs group-hover:gap-2 transition-all mt-auto">
                        <span data-i18n="blog_read_article"><?php echo t('blog_read_article'); ?></span>
                        <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                </div>
            </article>
            <?php 
            $delay += 100;
            if($delay > 300) $delay = 100;
            endforeach; 
            ?>
        </div>
        
    </div>
</section>
