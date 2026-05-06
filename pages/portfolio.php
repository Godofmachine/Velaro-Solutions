<?php if (!defined('VELARO_SITE')) exit; 
$portfolio_items = require __DIR__ . '/../data/portfolio.php';
?>

<!-- Header -->
<section class="py-24 bg-primary border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal-hidden">
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-white mb-6" data-i18n="portfolio_title"><?php echo t('portfolio_title'); ?></h1>
        <p class="text-xl text-gray-400 max-w-3xl mx-auto font-light" data-i18n="portfolio_subtitle"><?php echo t('portfolio_subtitle'); ?></p>
    </div>
</section>

<!-- Portfolio Filter & Grid -->
<section class="py-24 bg-neutral-light min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Filters -->
        <div class="flex flex-wrap justify-center gap-4 mb-16 reveal-hidden">
            <button class="filter-btn active px-6 py-2 rounded border border-gray-300 text-gray-600 font-medium hover:bg-primary hover:text-white hover:border-primary transition uppercase tracking-wide text-sm" data-filter="all" data-i18n="portfolio_all"><?php echo t('portfolio_all'); ?></button>
            <button class="filter-btn px-6 py-2 rounded border border-gray-300 text-gray-600 font-medium hover:bg-primary hover:text-white hover:border-primary transition uppercase tracking-wide text-sm" data-filter="web" data-i18n="portfolio_web"><?php echo t('portfolio_web'); ?></button>
            <button class="filter-btn px-6 py-2 rounded border border-gray-300 text-gray-600 font-medium hover:bg-primary hover:text-white hover:border-primary transition uppercase tracking-wide text-sm" data-filter="branding" data-i18n="portfolio_branding"><?php echo t('portfolio_branding'); ?></button>
            <button class="filter-btn px-6 py-2 rounded border border-gray-300 text-gray-600 font-medium hover:bg-primary hover:text-white hover:border-primary transition uppercase tracking-wide text-sm" data-filter="app" data-i18n="portfolio_app"><?php echo t('portfolio_app'); ?></button>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10" id="portfolio-grid">
            <?php 
            $delay = 100;
            foreach($portfolio_items as $item): 
            ?>
            <div class="portfolio-item group relative bg-white border border-gray-200 overflow-hidden rounded shadow-sm hover:shadow-2xl transition-all duration-500 hover:-translate-y-2 reveal-hidden" style="transition-delay: <?php echo $delay; ?>ms;" data-category="<?php echo $item['category']; ?>">
                <div class="h-80 overflow-hidden bg-gray-100">
                    <img src="<?php echo $item['image_url']; ?>" alt="<?php echo $item['client']; ?>" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700" />
                </div>
                <div class="p-8 border-t-4 border-transparent group-hover:border-accent transition-colors">
                    <span class="text-accent text-xs font-bold tracking-widest uppercase mb-2 block"><?php echo $item['client']; ?></span>
                    <h3 class="text-2xl font-serif font-bold text-primary mb-3">
                        <?php echo $lang === 'de' ? $item['title_de'] : $item['title_en']; ?>
                    </h3>
                    <p class="text-gray-600 text-sm line-clamp-3 font-light leading-relaxed">
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
