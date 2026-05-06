<?php if (!defined('VELARO_SITE')) exit; 
$posts = require __DIR__ . '/../data/blog-posts.php';
?>

<section class="py-20 bg-neutral-light border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-12">
        <h1 class="text-5xl font-bold text-primary mb-6" data-i18n="nav_blog"><?php echo t('nav_blog'); ?></h1>
        <p class="text-xl max-w-2xl mx-auto font-light text-gray-600">
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
        <div class="mb-16">
            <a href="/?page=blog-post&slug=<?php echo $featured['slug']; ?>" class="group block">
                <div class="relative h-96 rounded-3xl overflow-hidden mb-6 shadow-md">
                    <img src="https://images.unsplash.com/photo-<?php echo $featured['image_id']; ?>?auto=format&fit=crop&w=1200&q=80" alt="Featured Post" class="w-full h-full object-cover group-hover:scale-105 transition duration-700" />
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8 md:p-12 w-full md:w-2/3">
                        <span class="bg-accent text-white px-3 py-1 text-xs font-bold uppercase tracking-wider rounded-full mb-4 inline-block">Featured</span>
                        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 group-hover:text-accent transition">
                            <?php echo $lang === 'de' ? $featured['title_de'] : $featured['title_en']; ?>
                        </h2>
                        <div class="text-gray-300 text-sm flex items-center gap-4">
                            <span><?php echo date('M d, Y', strtotime($featured['date'])); ?></span>
                            <span>&bull;</span>
                            <span><?php echo $featured['author']; ?></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <?php endif; ?>

        <!-- Recent Posts Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            // Skip the first one if we showed it as featured
            $recent_posts = array_slice($posts, 1);
            foreach($recent_posts as $post): 
            ?>
            <a href="/?page=blog-post&slug=<?php echo $post['slug']; ?>" class="bg-white rounded-2xl border border-gray-100 shadow-sm hover-lift group overflow-hidden flex flex-col">
                <div class="h-48 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-<?php echo $post['image_id']; ?>?auto=format&fit=crop&w=600&q=80" alt="Post" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
                </div>
                <div class="p-6 flex-grow flex flex-col">
                    <div class="text-gray-400 text-xs font-semibold uppercase tracking-wider mb-2">
                        <?php echo date('M d, Y', strtotime($post['date'])); ?>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-3 group-hover:text-accent transition">
                        <?php echo $lang === 'de' ? $post['title_de'] : $post['title_en']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm line-clamp-3 mb-4 flex-grow">
                        <?php echo $lang === 'de' ? $post['excerpt_de'] : $post['excerpt_en']; ?>
                    </p>
                    <div class="text-accent text-sm font-medium">Read Article &rarr;</div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
