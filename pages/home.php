<?php if (!defined('VELARO_SITE')) exit; 
$services = require __DIR__ . '/../data/services.php';
?>

<!-- Hero Section -->
<section class="relative h-[90vh] flex items-center justify-center overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1920&q=80" alt="Team Meeting" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-primary/80 mix-blend-multiply"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-neutral-light via-transparent to-transparent"></div>
    </div>
    
    <div class="relative z-10 text-center px-4 max-w-4xl mx-auto mt-16">
        <h1 class="text-5xl md:text-7xl font-bold text-white mb-6 tracking-tight leading-tight" data-i18n="home_hero_title">
            <?php echo t('home_hero_title'); ?>
        </h1>
        <p class="text-xl md:text-2xl text-gray-200 mb-10 font-light max-w-2xl mx-auto" data-i18n="home_hero_sub">
            <?php echo t('home_hero_sub'); ?>
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="/?page=services" class="bg-accent text-white px-8 py-4 rounded-full font-medium hover:bg-yellow-600 transition shadow-lg hover:shadow-xl text-lg" data-i18n="home_hero_cta1"><?php echo t('home_hero_cta1'); ?></a>
            <a href="/?page=contact" class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-medium hover:bg-white hover:text-primary transition text-lg" data-i18n="home_hero_cta2"><?php echo t('home_hero_cta2'); ?></a>
        </div>
    </div>
</section>

<!-- Stats Bar -->
<section class="py-12 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-gray-200">
            <div class="p-4">
                <div class="text-5xl font-bold text-primary mb-2 counter">250+</div>
                <div class="text-gray-500 font-medium uppercase tracking-wide text-sm" data-i18n="home_stats_clients"><?php echo t('home_stats_clients'); ?></div>
            </div>
            <div class="p-4">
                <div class="text-5xl font-bold text-primary mb-2 counter">400+</div>
                <div class="text-gray-500 font-medium uppercase tracking-wide text-sm" data-i18n="home_stats_projects"><?php echo t('home_stats_projects'); ?></div>
            </div>
            <div class="p-4">
                <div class="text-5xl font-bold text-primary mb-2 counter">15</div>
                <div class="text-gray-500 font-medium uppercase tracking-wide text-sm" data-i18n="home_stats_years"><?php echo t('home_stats_years'); ?></div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-24 bg-neutral-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-sm font-bold text-accent tracking-widest uppercase mb-3" data-i18n="home_services_title"><?php echo t('home_services_title'); ?></h2>
            <p class="text-4xl font-bold text-primary" data-i18n="home_services_sub"><?php echo t('home_services_sub'); ?></p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php 
            // Display only top 3 services on home
            $top_services = array_slice($services, 0, 3);
            foreach($top_services as $service): 
            ?>
            <a href="/?page=service-detail&id=<?php echo $service['id']; ?>" class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover-lift group">
                <div class="w-16 h-16 bg-blue-50 text-accent rounded-xl flex items-center justify-center mb-6 group-hover:bg-accent group-hover:text-white transition-colors">
                    <?php echo $service['icon']; ?>
                </div>
                <h3 class="text-xl font-bold text-primary mb-3">
                    <?php echo $lang === 'de' ? $service['title_de'] : $service['title_en']; ?>
                </h3>
                <p class="text-gray-600 mb-6">
                    <?php echo $lang === 'de' ? $service['desc_de'] : $service['desc_en']; ?>
                </p>
                <div class="text-accent font-medium inline-flex items-center gap-1 group-hover:gap-2 transition-all">
                    <span data-i18n="learn_more"><?php echo t('learn_more'); ?></span>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-12">
            <a href="/?page=services" class="inline-block border-2 border-primary text-primary px-8 py-3 rounded-full font-medium hover:bg-primary hover:text-white transition" data-i18n="nav_services"><?php echo t('nav_services'); ?></a>
        </div>
    </div>
</section>

<!-- About Teaser (Split Section) -->
<section class="py-24 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2 relative">
                <div class="absolute -inset-4 bg-accent/20 rounded-3xl transform -rotate-3"></div>
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=800&q=80" alt="Modern Office" class="relative rounded-2xl shadow-xl w-full h-[500px] object-cover" />
            </div>
            <div class="lg:w-1/2">
                <h2 class="text-sm font-bold text-accent tracking-widest uppercase mb-3" data-i18n="home_about_title"><?php echo t('home_about_title'); ?></h2>
                <p class="text-3xl md:text-4xl font-bold text-primary mb-6 leading-snug">
                    Driving innovation for modern European businesses.
                </p>
                <p class="text-gray-600 text-lg leading-relaxed mb-8" data-i18n="home_about_text">
                    <?php echo t('home_about_text'); ?>
                </p>
                <a href="/?page=about" class="bg-primary text-white px-8 py-3 rounded-full font-medium hover:bg-blue-900 transition shadow inline-block" data-i18n="home_about_cta"><?php echo t('home_about_cta'); ?></a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-24 bg-primary text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4" data-i18n="home_testimonials_title"><?php echo t('home_testimonials_title'); ?></h2>
            <div class="w-24 h-1 bg-accent mx-auto"></div>
        </div>
        
        <div class="max-w-4xl mx-auto bg-white/10 p-8 md:p-12 rounded-3xl backdrop-blur-sm border border-white/20 relative">
            <svg class="absolute top-8 left-8 w-12 h-12 text-accent/30" fill="currentColor" viewBox="0 0 32 32"><path d="M10 8c-3.3 0-6 2.7-6 6v10h10V14H8c0-1.1.9-2 2-2h2V8h-2zm16 0c-3.3 0-6 2.7-6 6v10h10V14h-6c0-1.1.9-2 2-2h2V8h-2z"/></svg>
            <div class="relative z-10 text-center">
                <p class="text-xl md:text-2xl font-light leading-relaxed mb-8">
                    "Velaro Solutions completely transformed our digital presence. Their attention to detail, strategic approach, and technical expertise delivered results beyond our expectations."
                </p>
                <div class="flex items-center justify-center gap-4">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=150&q=80" alt="Client" class="w-16 h-16 rounded-full border-2 border-accent object-cover" />
                    <div class="text-left">
                        <div class="font-bold text-lg">Dr. Elena Fischer</div>
                        <div class="text-accent text-sm">CEO, TechGear GmbH</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-accent bg-pattern relative">
    <div class="absolute inset-0 bg-accent/90 mix-blend-multiply"></div>
    <div class="relative max-w-4xl mx-auto px-4 text-center z-10">
        <h2 class="text-4xl font-bold text-primary mb-6" data-i18n="home_cta_title"><?php echo t('home_cta_title'); ?></h2>
        <p class="text-xl text-primary/80 mb-10" data-i18n="home_cta_sub"><?php echo t('home_cta_sub'); ?></p>
        <a href="/?page=contact" class="bg-primary text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-neutral-dark transition shadow-2xl inline-block" data-i18n="home_cta_button"><?php echo t('home_cta_button'); ?></a>
    </div>
</section>
