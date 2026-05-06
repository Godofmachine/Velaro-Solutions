<?php if (!defined('VELARO_SITE')) exit; 
$services = require __DIR__ . '/../data/services.php';
?>

<!-- Header -->
<section class="relative py-24 bg-primary dark:bg-[#050B14] overflow-hidden transition-colors duration-300">
    <div class="absolute inset-0 z-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?auto=format&fit=crop&w=1920&q=80" alt="Law Firm" class="w-full h-full object-cover" />
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal-hidden">
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-white mb-6" data-i18n="services_title"><?php echo t('services_title'); ?></h1>
        <p class="text-xl text-gray-300 dark:text-gray-400 max-w-3xl mx-auto font-light" data-i18n="services_subtitle"><?php echo t('services_subtitle'); ?></p>
    </div>
</section>

<!-- Practice Areas Grid -->
<section class="py-24 bg-white dark:bg-slate-900 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php 
            $delay = 100;
            foreach($services as $service): 
            ?>
            <a href="/?page=service-detail&slug=<?php echo $service['id']; ?>" class="bg-white dark:bg-slate-900 rounded p-10 border border-gray-100 dark:border-slate-800 shadow hover:shadow-2xl dark:shadow-none dark:hover:border-slate-700 transition-all duration-300 group reveal-hidden border-t-4 dark:border-t-4 hover:border-accent dark:hover:border-accent" style="transition-delay: <?php echo $delay; ?>ms;">
                <div class="w-16 h-16 bg-neutral-light dark:bg-slate-800 text-primary dark:text-white rounded mb-8 flex items-center justify-center group-hover:bg-primary dark:group-hover:bg-white group-hover:text-white dark:group-hover:text-primary transition duration-300">
                    <?php echo $service['icon']; ?>
                </div>
                <h2 class="text-2xl font-serif font-bold text-primary dark:text-white mb-4"><?php echo $lang === 'de' ? $service['title_de'] : $service['title_en']; ?></h2>
                <p class="text-gray-600 dark:text-gray-400 mb-8 font-light leading-relaxed"><?php echo $lang === 'de' ? $service['desc_de'] : $service['desc_en']; ?></p>
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
