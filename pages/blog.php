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
        
        <?php if (!empty($posts)): 
            $featured = $posts[0];
        ?>
        <!-- Featured Post -->
        <div class="mb-16 reveal-hidden delay-100">
            <a href="/?page=blog-post&slug=<?php echo $featured['slug']; ?>" class="group block">
                <div class="relative h-[28rem] rounded-[2.5rem] overflow-hidden mb-6 shadow-xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <img src="https://images.unsplash.com/photo-<?php echo $featured['image_id']; ?>?auto=format&fit=crop&w=1200&q=80" alt="Featured Post" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" />
                    <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/40 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-10 md:p-16 w-full md:w-3/4">
                        <span class="bg-gradient-to-r from-accent to-yellow-500 text-white px-4 py-1.5 text-xs font-bold uppercase tracking-widest rounded-full mb-6 inline-block shadow-lg" data-i18n="blog_featured"><?php echo t('blog_featured'); ?></span>
                        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 group-hover:text-accent transition duration-300 leading-tight">
                            <?php echo $lang === 'de' ? $featured['title_de'] : $featured['title_en']; ?>
                        </h2>
                        <div class="text-gray-200 text-sm flex items-center gap-4 font-medium">
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                <?php echo date('M d, Y', strtotime($featured['date'])); ?>
                            </span>
                            <span class="text-accent">&bull;</span>
                            <span class="flex items-center gap-2">
                                <div class="w-6 h-6 rounded-full bg-accent text-primary flex items-center justify-center text-xs font-bold">
                                    <?php echo substr($featured['author'], 0, 1); ?>
                                </div>
                                <?php echo $featured['author']; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php endif; ?>

        <!-- Recent Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            $delay = 100;
            // Skip the first one if we showed it as featured
            $recent_posts = array_slice($posts, 1);
            foreach($recent_posts as $post): 
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
    </div>
</section>
