<?php if (!defined('VELARO_SITE')) exit; 
$portfolio_items = require __DIR__ . '/../data/portfolio.php';
?>

<section class="py-20 bg-neutral-light border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-12 reveal-hidden">
        <h1 class="text-5xl font-bold text-primary mb-6 tracking-tight" data-i18n="nav_portfolio"><?php echo t('nav_portfolio'); ?></h1>
        <p class="text-xl max-w-2xl mx-auto font-light text-gray-600 delay-100 reveal-hidden">
            <?php echo $lang === 'de' ? 'Entdecken Sie unsere jüngsten Erfolgsgeschichten.' : 'Explore our recent success stories.'; ?>
        </p>
    </div>
</section>

<section class="py-20 bg-white min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Filter Tabs -->
        <div class="flex flex-wrap justify-center gap-4 mb-16 reveal-hidden delay-200">
            <button class="filter-btn active px-8 py-3 rounded-full bg-primary text-white font-bold shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-0.5" data-filter="all" data-i18n="filter_all"><?php echo t('filter_all'); ?></button>
            <button class="filter-btn px-8 py-3 rounded-full bg-white text-gray-600 font-bold border border-gray-200 hover:border-primary hover:text-primary shadow-sm hover:shadow-md transition-all transform hover:-translate-y-0.5" data-filter="web" data-i18n="filter_web"><?php echo t('filter_web'); ?></button>
            <button class="filter-btn px-8 py-3 rounded-full bg-white text-gray-600 font-bold border border-gray-200 hover:border-primary hover:text-primary shadow-sm hover:shadow-md transition-all transform hover:-translate-y-0.5" data-filter="branding" data-i18n="filter_branding"><?php echo t('filter_branding'); ?></button>
            <button class="filter-btn px-8 py-3 rounded-full bg-white text-gray-600 font-bold border border-gray-200 hover:border-primary hover:text-primary shadow-sm hover:shadow-md transition-all transform hover:-translate-y-0.5" data-filter="app" data-i18n="filter_app"><?php echo t('filter_app'); ?></button>
        </div>

        <!-- Portfolio Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
            <?php 
            $delay = 100;
            foreach($portfolio_items as $item): 
            ?>
            <div class="portfolio-item group relative overflow-hidden rounded-3xl shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 reveal-hidden" style="transition-delay: <?php echo $delay; ?>ms;" data-category="<?php echo $item['category']; ?>">
                <div class="h-80 overflow-hidden bg-gray-100">
                    <img src="https://images.unsplash.com/photo-<?php echo $item['image_id']; ?>?auto=format&fit=crop&w=800&q=80" alt="<?php echo $item['client']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-700" />
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-primary via-primary/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-500 flex flex-col justify-end p-8">
                    <span class="text-accent text-sm font-bold tracking-widest uppercase mb-2 transform translate-y-4 group-hover:translate-y-0 transition duration-500 delay-100"><?php echo $item['client']; ?></span>
                    <h3 class="text-2xl font-bold text-white mb-3 transform translate-y-4 group-hover:translate-y-0 transition duration-500 delay-150">
                        <?php echo $lang === 'de' ? $item['title_de'] : $item['title_en']; ?>
                    </h3>
                    <p class="text-gray-300 text-sm line-clamp-2 font-light transform translate-y-4 group-hover:translate-y-0 transition duration-500 delay-200">
                        <?php echo $lang === 'de' ? $item['desc_de'] : $item['desc_en']; ?>
                    </p>
                </div>
            </div>
            <?php 
            $delay += 100;
            if($delay > 500) $delay = 100; // Reset delay for next rows
            endforeach; 
            ?>
        </div>
    </div>
</section>

<!-- Portfolio Filter Logic -->
<script src="/assets/js/portfolio-filter.js"></script>
