<?php if (!defined('VELARO_SITE')) exit; ?>

<!-- Hero Section -->
<section class="relative py-24 bg-primary text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=1920&q=80" alt="Collaboration" class="w-full h-full object-cover" />
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 text-center">
        <h1 class="text-5xl font-bold mb-6" data-i18n="nav_about"><?php echo t('nav_about'); ?></h1>
        <p class="text-xl max-w-2xl mx-auto font-light text-gray-200">
            <?php echo $lang === 'de' ? 'Lernen Sie die Menschen kennen, die die digitale Transformation vorantreiben.' : 'Meet the people driving digital transformation.'; ?>
        </p>
    </div>
</section>

<!-- Company Story -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-primary mb-8" data-i18n="about_story_title"><?php echo t('about_story_title'); ?></h2>
        <p class="text-lg text-gray-600 leading-relaxed mb-6">
            <?php echo $lang === 'de' ? 'Gegründet mit der Vision, die Lücke zwischen komplexer Technologie und benutzerfreundlichem Design zu schließen, ist Velaro Solutions zu einem vertrauenswürdigen Partner für Unternehmen in ganz Europa geworden.' : 'Founded with a vision to bridge the gap between complex technology and user-friendly design, Velaro Solutions has grown into a trusted partner for businesses across Europe.'; ?>
        </p>
        <p class="text-lg text-gray-600 leading-relaxed">
            <?php echo $lang === 'de' ? 'Wir glauben daran, digitale Erlebnisse zu schaffen, die nicht nur schön aussehen, sondern auch messbare Geschäftsergebnisse liefern.' : 'We believe in creating digital experiences that not only look beautiful but also deliver measurable business results.'; ?>
        </p>
    </div>
</section>

<!-- Team Section -->
<section class="py-20 bg-neutral-light border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-primary mb-4" data-i18n="about_team_title"><?php echo t('about_team_title'); ?></h2>
            <div class="w-24 h-1 bg-accent mx-auto"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 max-w-5xl mx-auto">
            <!-- Team Member 1 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow hover-lift group text-center pb-8 border border-gray-100">
                <div class="h-64 overflow-hidden mb-6">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=800&q=80" alt="Michael Bauer" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
                </div>
                <h3 class="text-xl font-bold text-primary">Michael Bauer</h3>
                <p class="text-accent font-medium mb-4" data-i18n="role_ceo"><?php echo t('role_ceo'); ?></p>
                <p class="text-gray-500 px-6 text-sm" data-i18n="desc_ceo"><?php echo t('desc_ceo'); ?></p>
            </div>
            
            <!-- Team Member 2 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow hover-lift group text-center pb-8 border border-gray-100">
                <div class="h-64 overflow-hidden mb-6">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=800&q=80" alt="Sarah Schmidt" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
                </div>
                <h3 class="text-xl font-bold text-primary">Sarah Schmidt</h3>
                <p class="text-accent font-medium mb-4" data-i18n="role_cto"><?php echo t('role_cto'); ?></p>
                <p class="text-gray-500 px-6 text-sm" data-i18n="desc_cto"><?php echo t('desc_cto'); ?></p>
            </div>
            
            <!-- Team Member 3 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow hover-lift group text-center pb-8 border border-gray-100">
                <div class="h-64 overflow-hidden mb-6">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=800&q=80" alt="Lukas Meyer" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" />
                </div>
                <h3 class="text-xl font-bold text-primary">Lukas Meyer</h3>
                <p class="text-accent font-medium mb-4" data-i18n="role_hod"><?php echo t('role_hod'); ?></p>
                <p class="text-gray-500 px-6 text-sm" data-i18n="desc_hod"><?php echo t('desc_hod'); ?></p>
            </div>
        </div>
    </div>
</section>
