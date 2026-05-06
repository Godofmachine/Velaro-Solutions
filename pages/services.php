<?php if (!defined('VELARO_SITE')) exit; 
$services = require __DIR__ . '/../data/services.php';
?>

<!-- Header -->
<section class="relative py-24 bg-primary text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1920&q=80" alt="Strategy Planning" class="w-full h-full object-cover" />
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 text-center reveal-hidden">
        <h1 class="text-5xl font-bold mb-6" data-i18n="nav_services"><?php echo t('nav_services'); ?></h1>
        <p class="text-xl max-w-2xl mx-auto font-light text-gray-200 delay-100 reveal-hidden">
            <?php echo $lang === 'de' ? 'Umfassende digitale Lösungen, zugeschnitten auf Ihre Geschäftsziele.' : 'Comprehensive digital solutions tailored to your business goals.'; ?>
        </p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-neutral-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach($services as $service): ?>
            <a href="/?page=service-detail&id=<?php echo $service['id']; ?>" class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover-lift group reveal-hidden delay-100">
                <div class="w-16 h-16 bg-blue-50/50 backdrop-blur text-accent rounded-2xl flex items-center justify-center mb-6 group-hover:bg-accent group-hover:text-white transition-all duration-300">
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
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 reveal-hidden">
            <h2 class="text-3xl font-bold text-primary mb-4" data-i18n="services_process_title"><?php echo t('services_process_title'); ?></h2>
            <div class="w-24 h-1 bg-accent mx-auto"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center relative reveal-hidden delay-100">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-primary to-blue-900 text-white rounded-full flex items-center justify-center text-2xl font-bold mb-6 relative z-10 shadow-lg border-4 border-white">1</div>
                <div class="hidden md:block absolute top-8 left-1/2 w-full h-0.5 bg-gradient-to-r from-accent/50 to-transparent"></div>
                <h3 class="text-xl font-bold text-primary mb-2" data-i18n="process_step1_title"><?php echo t('process_step1_title'); ?></h3>
                <p class="text-gray-600" data-i18n="process_step1_desc"><?php echo t('process_step1_desc'); ?></p>
            </div>
            <!-- Step 2 -->
            <div class="text-center relative reveal-hidden delay-200">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-primary to-blue-900 text-white rounded-full flex items-center justify-center text-2xl font-bold mb-6 relative z-10 shadow-lg border-4 border-white">2</div>
                <div class="hidden md:block absolute top-8 left-1/2 w-full h-0.5 bg-gradient-to-r from-accent/50 to-transparent"></div>
                <h3 class="text-xl font-bold text-primary mb-2" data-i18n="process_step2_title"><?php echo t('process_step2_title'); ?></h3>
                <p class="text-gray-600" data-i18n="process_step2_desc"><?php echo t('process_step2_desc'); ?></p>
            </div>
            <!-- Step 3 -->
            <div class="text-center relative reveal-hidden delay-300">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-primary to-blue-900 text-white rounded-full flex items-center justify-center text-2xl font-bold mb-6 relative z-10 shadow-lg border-4 border-white">3</div>
                <div class="hidden md:block absolute top-8 left-1/2 w-full h-0.5 bg-gradient-to-r from-accent/50 to-transparent"></div>
                <h3 class="text-xl font-bold text-primary mb-2" data-i18n="process_step3_title"><?php echo t('process_step3_title'); ?></h3>
                <p class="text-gray-600" data-i18n="process_step3_desc"><?php echo t('process_step3_desc'); ?></p>
            </div>
            <!-- Step 4 -->
            <div class="text-center relative reveal-hidden delay-400">
                <div class="w-16 h-16 mx-auto bg-gradient-to-br from-primary to-blue-900 text-white rounded-full flex items-center justify-center text-2xl font-bold mb-6 relative z-10 shadow-lg border-4 border-white">4</div>
                <h3 class="text-xl font-bold text-primary mb-2" data-i18n="process_step4_title"><?php echo t('process_step4_title'); ?></h3>
                <p class="text-gray-600" data-i18n="process_step4_desc"><?php echo t('process_step4_desc'); ?></p>
            </div>
        </div>
    </div>
</section>
