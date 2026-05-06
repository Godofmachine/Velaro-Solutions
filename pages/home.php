<?php if (!defined('VELARO_SITE')) exit; 
$services = require __DIR__ . '/../data/services.php';
?>

<!-- Hero Section -->
<section class="relative h-[90vh] flex items-center justify-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1589829085413-56de8ae18c73?auto=format&fit=crop&w=1920&q=80" alt="Law Firm" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-primary/90 dark:bg-[#050B14]/70 mix-blend-multiply transition-colors duration-300"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-primary dark:from-[#050B14] via-transparent to-transparent opacity-80 dark:opacity-60 transition-colors duration-300"></div>
    </div>
    
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto mt-16 reveal-hidden">
        <h1 class="text-5xl md:text-7xl font-serif font-bold text-white mb-6 tracking-tight leading-tight" data-i18n="hero_title">
            <?php echo t('hero_title'); ?>
        </h1>
        <p class="text-xl md:text-2xl text-gray-300 dark:text-gray-200 mb-10 font-light max-w-2xl mx-auto delay-100 reveal-hidden" data-i18n="hero_subtitle">
            <?php echo t('hero_subtitle'); ?>
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4 delay-200 reveal-hidden">
            <a href="/?page=contact" class="bg-accent text-white px-8 py-4 rounded font-bold hover:bg-yellow-600 transition shadow-lg hover:-translate-y-1 text-lg uppercase tracking-wide" data-i18n="hero_cta1"><?php echo t('hero_cta1'); ?></a>
            <a href="/?page=services" class="glass-panel text-white border border-white/30 dark:border-slate-700 px-8 py-4 rounded font-bold hover:bg-white dark:hover:bg-slate-800 hover:text-primary dark:hover:text-white transition hover:-translate-y-1 text-lg uppercase tracking-wide" data-i18n="hero_cta2"><?php echo t('hero_cta2'); ?></a>
        </div>
    </div>
</section>

<!-- Stats Bar -->
<section class="py-12 bg-white dark:bg-slate-900 border-b border-gray-200 dark:border-slate-800 shadow-sm relative z-20 -mt-10 mx-4 sm:mx-8 rounded-lg max-w-7xl lg:mx-auto transition-colors duration-300">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-gray-100 dark:divide-slate-800">
            <div class="p-4 reveal-hidden delay-100">
                <div class="text-4xl font-serif font-bold text-primary dark:text-white mb-2" data-i18n="stat_1_num"><?php echo t('stat_1_num'); ?></div>
                <div class="text-gray-500 dark:text-gray-400 font-medium uppercase tracking-widest text-xs" data-i18n="stat_1_label"><?php echo t('stat_1_label'); ?></div>
            </div>
            <div class="p-4 reveal-hidden delay-200">
                <div class="text-4xl font-serif font-bold text-primary dark:text-white mb-2" data-i18n="stat_2_num"><?php echo t('stat_2_num'); ?></div>
                <div class="text-gray-500 dark:text-gray-400 font-medium uppercase tracking-widest text-xs" data-i18n="stat_2_label"><?php echo t('stat_2_label'); ?></div>
            </div>
            <div class="p-4 reveal-hidden delay-300">
                <div class="text-4xl font-serif font-bold text-primary dark:text-white mb-2" data-i18n="stat_3_num"><?php echo t('stat_3_num'); ?></div>
                <div class="text-gray-500 dark:text-gray-400 font-medium uppercase tracking-widest text-xs" data-i18n="stat_3_label"><?php echo t('stat_3_label'); ?></div>
            </div>
            <div class="p-4 reveal-hidden delay-400">
                <div class="text-4xl font-serif font-bold text-primary dark:text-white mb-2" data-i18n="stat_4_num"><?php echo t('stat_4_num'); ?></div>
                <div class="text-gray-500 dark:text-gray-400 font-medium uppercase tracking-widest text-xs" data-i18n="stat_4_label"><?php echo t('stat_4_label'); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- Practice Areas Section -->
<section class="py-24 bg-neutral-light dark:bg-neutral-dark transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 reveal-hidden">
            <h2 class="text-sm font-bold text-accent tracking-widest uppercase mb-3" data-i18n="home_services_title"><?php echo t('home_services_title'); ?></h2>
            <p class="text-4xl font-serif font-bold text-primary dark:text-white" data-i18n="home_services_subtitle"><?php echo t('home_services_subtitle'); ?></p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php 
            // Display only top 3 practice areas on home
            $top_services = array_slice($services, 0, 3);
            $delay = 100;
            foreach($top_services as $service): 
            ?>
            <a href="/?page=service-detail&slug=<?php echo $service['id']; ?>" class="bg-white dark:bg-slate-900 rounded p-8 border-t-4 border-accent shadow hover:shadow-xl dark:shadow-none dark:border dark:border-t-4 dark:border-slate-800 transition-all duration-300 transform hover:-translate-y-2 group reveal-hidden" style="transition-delay: <?php echo $delay; ?>ms;">
                <div class="w-14 h-14 bg-neutral-light dark:bg-slate-800 text-primary dark:text-white rounded mb-6 flex items-center justify-center group-hover:bg-primary dark:group-hover:bg-white group-hover:text-white dark:group-hover:text-primary transition duration-300">
                    <?php echo $service['icon']; ?>
                </div>
                <h3 class="text-2xl font-serif font-bold text-primary dark:text-white mb-4"><?php echo $lang === 'de' ? $service['title_de'] : $service['title_en']; ?></h3>
                <p class="text-gray-600 dark:text-gray-400 mb-6 font-light leading-relaxed"><?php echo $lang === 'de' ? $service['desc_de'] : $service['desc_en']; ?></p>
                <span class="text-accent font-bold inline-flex items-center gap-2 group-hover:gap-3 transition-all uppercase tracking-wide text-sm" data-i18n="service_learn_more">
                    <?php echo t('service_learn_more'); ?> 
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </span>
            </a>
            <?php 
            $delay += 100;
            endforeach; 
            ?>
        </div>
        
        <div class="text-center mt-12 reveal-hidden delay-400">
            <a href="/?page=services" class="inline-flex items-center gap-2 text-primary dark:text-white font-bold hover:text-accent dark:hover:text-accent transition uppercase tracking-widest text-sm border-b-2 border-accent pb-1">
                <span data-i18n="nav_services"><?php echo t('nav_services'); ?></span>
            </a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-24 bg-white dark:bg-slate-900 overflow-hidden transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2 relative reveal-hidden">
                <div class="absolute -inset-4 bg-gray-100 dark:bg-slate-800 rounded transform -rotate-3 z-0 transition-colors duration-300"></div>
                <img src="https://images.unsplash.com/photo-1507679799987-c73779587ccf?auto=format&fit=crop&w=800&q=80" alt="Lawyers Meeting" class="relative z-10 w-full rounded shadow-2xl dark:shadow-none" />
                
                <!-- Trust Badge -->
                <div class="absolute -bottom-6 -right-6 bg-primary dark:bg-slate-800 text-white p-6 rounded shadow-xl dark:shadow-none z-20 max-w-[200px] text-center border-t-4 border-accent">
                    <div class="text-3xl font-serif font-bold mb-1">1999</div>
                    <div class="text-sm font-light text-gray-300">Established</div>
                </div>
            </div>
            
            <div class="lg:w-1/2 reveal-hidden delay-200">
                <h2 class="text-sm font-bold text-accent tracking-widest uppercase mb-3" data-i18n="nav_about"><?php echo t('nav_about'); ?></h2>
                <h3 class="text-4xl font-serif font-bold text-primary dark:text-white mb-6 leading-tight" data-i18n="home_about_title"><?php echo t('home_about_title'); ?></h3>
                <p class="text-gray-600 dark:text-gray-400 text-lg mb-8 leading-relaxed font-light" data-i18n="home_about_text">
                    <?php echo t('home_about_text'); ?>
                </p>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-center gap-3 text-primary dark:text-gray-300 font-medium">
                        <svg class="w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span data-i18n="home_about_bullet1"><?php echo t('home_about_bullet1'); ?></span>
                    </li>
                    <li class="flex items-center gap-3 text-primary dark:text-gray-300 font-medium">
                        <svg class="w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span data-i18n="home_about_bullet2"><?php echo t('home_about_bullet2'); ?></span>
                    </li>
                    <li class="flex items-center gap-3 text-primary dark:text-gray-300 font-medium">
                        <svg class="w-6 h-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span data-i18n="home_about_bullet3"><?php echo t('home_about_bullet3'); ?></span>
                    </li>
                </ul>
                <a href="/?page=about" class="bg-primary dark:bg-slate-800 dark:hover:bg-slate-700 text-white px-8 py-3 rounded font-bold hover:bg-accent transition shadow hover:-translate-y-1 inline-block uppercase tracking-wide text-sm" data-i18n="home_about_cta"><?php echo t('home_about_cta'); ?></a>
            </div>
        </div>
    </div>
</section>
