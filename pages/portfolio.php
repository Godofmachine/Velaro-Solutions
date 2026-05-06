<?php if (!defined('VELARO_SITE')) exit; 
$portfolio_items = require __DIR__ . '/../data/portfolio.php';
?>

<section class="py-20 bg-neutral-light border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-12">
        <h1 class="text-5xl font-bold text-primary mb-6" data-i18n="nav_portfolio"><?php echo t('nav_portfolio'); ?></h1>
        <p class="text-xl max-w-2xl mx-auto font-light text-gray-600">
            <?php echo $lang === 'de' ? 'Entdecken Sie unsere jüngsten Erfolgsgeschichten.' : 'Explore our recent success stories.'; ?>
        </p>
    </div>
</section>

<section class="py-20 bg-white min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Filter Tabs -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button class="filter-btn active px-6 py-2 rounded-full border-2 border-primary bg-primary text-white font-medium transition" data-filter="all">All</button>
            <button class="filter-btn px-6 py-2 rounded-full border-2 border-primary text-primary hover:bg-primary hover:text-white font-medium transition" data-filter="web">Web</button>
            <button class="filter-btn px-6 py-2 rounded-full border-2 border-primary text-primary hover:bg-primary hover:text-white font-medium transition" data-filter="branding">Branding</button>
            <button class="filter-btn px-6 py-2 rounded-full border-2 border-primary text-primary hover:bg-primary hover:text-white font-medium transition" data-filter="app">App</button>
        </div>

        <!-- Portfolio Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="portfolio-grid">
            <?php foreach($portfolio_items as $item): ?>
            <div class="portfolio-item group relative overflow-hidden rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300" data-category="<?php echo $item['category']; ?>">
                <div class="h-64 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-<?php echo $item['image_id']; ?>?auto=format&fit=crop&w=600&q=80" alt="<?php echo $item['client']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition duration-700" />
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/50 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                    <span class="text-accent text-sm font-bold tracking-wider uppercase mb-1"><?php echo $item['client']; ?></span>
                    <h3 class="text-xl font-bold text-white mb-2">
                        <?php echo $lang === 'de' ? $item['title_de'] : $item['title_en']; ?>
                    </h3>
                    <p class="text-gray-300 text-sm line-clamp-2">
                        <?php echo $lang === 'de' ? $item['desc_de'] : $item['desc_en']; ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Portfolio Filter Logic -->
<script src="/assets/js/portfolio-filter.js"></script>
