<?php if (!defined('VELARO_SITE')) exit; 
$services = require __DIR__ . '/../data/services.php';
?>

<!-- Header -->
<section class="relative py-24 bg-primary text-white overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=1920&q=80" alt="Strategy Planning" class="w-full h-full object-cover" />
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10 text-center">
        <h1 class="text-5xl font-bold mb-6" data-i18n="nav_services"><?php echo t('nav_services'); ?></h1>
        <p class="text-xl max-w-2xl mx-auto font-light text-gray-200">
            <?php echo $lang === 'de' ? 'Umfassende digitale Lösungen, zugeschnitten auf Ihre Geschäftsziele.' : 'Comprehensive digital solutions tailored to your business goals.'; ?>
        </p>
    </div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-neutral-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach($services as $service): ?>
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
    </div>
</section>

<!-- Process Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-primary mb-4">Our Process</h2>
            <div class="w-24 h-1 bg-accent mx-auto"></div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center relative">
                <div class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mb-6 relative z-10">1</div>
                <div class="hidden md:block absolute top-8 left-1/2 w-full h-0.5 bg-gray-200"></div>
                <h3 class="text-xl font-bold text-primary mb-2">Discovery</h3>
                <p class="text-gray-600">Understanding your business, goals, and target audience.</p>
            </div>
            <!-- Step 2 -->
            <div class="text-center relative">
                <div class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mb-6 relative z-10">2</div>
                <div class="hidden md:block absolute top-8 left-1/2 w-full h-0.5 bg-gray-200"></div>
                <h3 class="text-xl font-bold text-primary mb-2">Strategy</h3>
                <p class="text-gray-600">Creating a detailed roadmap and technical architecture.</p>
            </div>
            <!-- Step 3 -->
            <div class="text-center relative">
                <div class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mb-6 relative z-10">3</div>
                <div class="hidden md:block absolute top-8 left-1/2 w-full h-0.5 bg-gray-200"></div>
                <h3 class="text-xl font-bold text-primary mb-2">Execution</h3>
                <p class="text-gray-600">Agile development and iterative design implementation.</p>
            </div>
            <!-- Step 4 -->
            <div class="text-center relative">
                <div class="w-16 h-16 mx-auto bg-primary text-white rounded-full flex items-center justify-center text-2xl font-bold mb-6 relative z-10">4</div>
                <h3 class="text-xl font-bold text-primary mb-2">Launch</h3>
                <p class="text-gray-600">Rigorous testing, deployment, and ongoing support.</p>
            </div>
        </div>
    </div>
</section>
