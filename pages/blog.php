<?php if (!defined('VELARO_SITE')) exit; 
$posts = require __DIR__ . '/../data/blog-posts.php';
?>

<section class="py-20 bg-neutral-light border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-12 reveal-hidden">
        <h1 class="text-5xl font-bold text-primary mb-6 tracking-tight" data-i18n="nav_blog"><?php echo t('nav_blog'); ?></h1>
        <p class="text-xl max-w-2xl mx-auto font-light text-gray-600 delay-100 reveal-hidden">
            <?php echo $lang === 'de' ? 'Einblicke und Trends in die digitale Welt.' : 'Insights and trends on the digital world.'; ?>
        </p>
    </div>
</section>

<section class="py-20 bg-white min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <?php 
        if (!empty($posts)): 
            $featured_posts = array_filter($posts, function($p) { return isset($p['is_featured']) && $p['is_featured']; });
            $regular_posts = array_filter($posts, function($p) { return !isset($p['is_featured']) || !$p['is_featured']; });
            
            if (!empty($featured_posts)):
        ?>
        <!-- Featured Section -->
        <div class="mb-20">
            <h2 class="text-2xl font-bold text-primary mb-8" data-i18n="blog_featured_heading"><?php echo $lang === 'de' ? 'Hervorgehobene Artikel' : 'Featured Stories'; ?></h2>
            
            <!-- Desktop Grid / Mobile Carousel Container -->
            <div class="flex md:grid md:grid-cols-3 gap-6 overflow-x-auto md:overflow-visible snap-x snap-mandatory pb-8 md:pb-0 -mx-4 px-4 md:mx-0 md:px-0 scrollbar-hide">
                <?php foreach($featured_posts as $post): ?>
                <div class="min-w-[85vw] md:min-w-0 snap-center">
                    <a href="/?page=blog-post&slug=<?php echo $post['slug']; ?>" class="group block h-full">
                        <div class="relative h-[30rem] rounded-[2.5rem] overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                            <img src="https://images.unsplash.com/photo-<?php echo $post['image_id']; ?>?auto=format&fit=crop&w=800&q=80" alt="Featured Post" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" />
                            <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/40 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 p-8 w-full">
                                <span class="bg-accent text-white px-3 py-1 text-[10px] font-bold uppercase tracking-widest rounded-full mb-4 inline-block shadow-lg" data-i18n="blog_featured"><?php echo t('blog_featured'); ?></span>
                                <h3 class="text-2xl md:text-3xl font-bold text-white mb-4 group-hover:text-accent transition duration-300 leading-tight">
                                    <?php echo $lang === 'de' ? $post['title_de'] : $post['title_en']; ?>
                                </h3>
                                <div class="text-gray-200 text-sm flex items-center gap-3 font-medium">
                                    <span class="flex items-center gap-2">
                                        <?php echo date('M d, Y', strtotime($post['date'])); ?>
                                    </span>
                                    <span class="text-accent">&bull;</span>
                                    <span><?php echo $post['author']; ?></span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- Recent Posts Grid -->
        <h2 class="text-2xl font-bold text-primary mb-8" data-i18n="blog_recent_heading"><?php echo $lang === 'de' ? 'Neueste Beiträge' : 'Latest Insights'; ?></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            $delay = 100;
            foreach($regular_posts as $post): 
            ?>
            <a href="/?page=blog-post&slug=<?php echo $post['slug']; ?>" class="bg-white rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group overflow-hidden flex flex-col reveal-hidden" style="transition-delay: <?php echo $delay; ?>ms;">
                <div class="h-56 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-<?php echo $post['image_id']; ?>?auto=format&fit=crop&w=600&q=80" alt="Post" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" />
                    <div class="absolute inset-0 bg-primary/10 group-hover:bg-transparent transition"></div>
                </div>
                <div class="p-8 flex-grow flex flex-col">
                    <div class="text-accent text-xs font-bold uppercase tracking-widest mb-3 flex items-center gap-2">
                        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <?php echo date('M d, Y', strtotime($post['date'])); ?>
                    </div>
                    <h3 class="text-2xl font-bold text-primary mb-4 group-hover:text-accent transition duration-300 leading-snug">
                        <?php echo $lang === 'de' ? $post['title_de'] : $post['title_en']; ?>
                    </h3>
                    <p class="text-gray-600 text-base line-clamp-3 mb-6 flex-grow font-light">
                        <?php echo $lang === 'de' ? $post['excerpt_de'] : $post['excerpt_en']; ?>
                    </p>
                    <div class="text-accent font-bold inline-flex items-center gap-2 group-hover:gap-3 transition-all" data-i18n="blog_read_article">
                        <?php echo t('blog_read_article'); ?> 
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                </div>
            </a>
            <?php 
            $delay += 100;
            if($delay > 300) $delay = 100;
            endforeach; 
            ?>
        </div>
        <?php endif; ?>
    </div>
</section>
