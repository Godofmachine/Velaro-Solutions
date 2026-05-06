<?php if (!defined('VELARO_SITE')) exit; 
$services = require __DIR__ . '/../data/services.php';
?>

<!-- Header -->
<section class="py-24 bg-neutral-light border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal-hidden">
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-primary mb-6" data-i18n="services_title"><?php echo t('services_title'); ?></h1>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto font-light" data-i18n="services_subtitle"><?php echo t('services_subtitle'); ?></p>
    </div>
</section>

<!-- Practice Areas Grid -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            $delay = 100;
            foreach($services as $service): 
            ?>
            <a href="/?page=service-detail&slug=<?php echo $service['id']; ?>" class="bg-white rounded p-10 border border-gray-100 shadow hover:shadow-2xl transition-all duration-300 group reveal-hidden border-t-4 hover:border-accent" style="transition-delay: <?php echo $delay; ?>ms;">
                <div class="w-16 h-16 bg-neutral-light text-primary rounded mb-8 flex items-center justify-center group-hover:bg-primary group-hover:text-white transition duration-300">
                    <?php echo $service['icon']; ?>
                </div>
                <h2 class="text-2xl font-serif font-bold text-primary mb-4"><?php echo $lang === 'de' ? $service['title_de'] : $service['title_en']; ?></h2>
                <p class="text-gray-600 mb-8 font-light leading-relaxed"><?php echo $lang === 'de' ? $service['desc_de'] : $service['desc_en']; ?></p>
                <div class="flex items-center text-accent font-bold text-sm uppercase tracking-wider group-hover:gap-2 transition-all">
                    <span data-i18n="service_learn_more"><?php echo t('service_learn_more'); ?></span>
                    <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
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
