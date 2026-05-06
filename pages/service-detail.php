<?php if (!defined('VELARO_SITE')) exit; 
$services = require __DIR__ . '/../data/services.php';

$id = $_GET['id'] ?? 'web-development';
$current_service = null;

foreach ($services as $service) {
    if ($service['id'] === $id) {
        $current_service = $service;
        break;
    }
}

if (!$current_service) {
    // Basic fallback if ID is invalid
    $current_service = $services[0];
}

$title = $lang === 'de' ? $current_service['title_de'] : $current_service['title_en'];
$desc = $lang === 'de' ? $current_service['desc_de'] : $current_service['desc_en'];
?>

<section class="py-20 bg-neutral-light border-b border-gray-200">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-12 reveal-hidden">
        <div class="w-20 h-20 mx-auto bg-gradient-to-br from-primary to-blue-900 text-accent rounded-3xl flex items-center justify-center mb-8 shadow-2xl border border-white/20">
            <?php echo $current_service['icon']; ?>
        </div>
        <h1 class="text-4xl md:text-6xl font-bold text-primary mb-6 tracking-tight delay-100 reveal-hidden"><?php echo $title; ?></h1>
        <p class="text-xl md:text-2xl text-gray-600 leading-relaxed font-light delay-200 reveal-hidden"><?php echo $desc; ?></p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="reveal-hidden">
                <h2 class="text-3xl font-bold text-primary mb-8" data-i18n="service_detail_features"><?php echo t('service_detail_features'); ?></h2>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-accent shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-700" data-i18n="feature_custom"><?php echo t('feature_custom'); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-accent shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-700" data-i18n="feature_modern"><?php echo t('feature_modern'); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-accent shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-700" data-i18n="feature_support"><?php echo t('feature_support'); ?></span>
                    </li>
                </ul>
            </div>
            <div class="bg-gradient-to-br from-primary to-blue-900 p-10 md:p-12 rounded-[2rem] text-white text-center shadow-2xl relative overflow-hidden reveal-hidden delay-200">
                <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1557683316-973673baf926?auto=format&fit=crop&w=800&q=80')] mix-blend-overlay opacity-10 object-cover"></div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-4" data-i18n="service_detail_ready"><?php echo t('service_detail_ready'); ?></h3>
                    <p class="text-gray-300 mb-8 text-lg" data-i18n="service_detail_contact_desc"><?php echo t('service_detail_contact_desc'); ?></p>
                    <a href="/?page=contact" class="bg-gradient-to-r from-accent to-yellow-500 text-white px-8 py-4 rounded-full font-bold hover:shadow-[0_0_20px_rgba(212,168,67,0.5)] transition hover:-translate-y-1 block" data-i18n="service_detail_quote_btn"><?php echo t('service_detail_quote_btn'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
