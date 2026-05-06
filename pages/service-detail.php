<?php if (!defined('VELARO_SITE')) exit; 
$services = require __DIR__ . '/../data/services.php';

$id = $_GET['slug'] ?? 'corporate-law'; // Note: Changed to slug to match home.php link 'id'
$current_service = null;

foreach ($services as $service) {
    if ($service['id'] === $id) {
        $current_service = $service;
        break;
    }
}

if (!$current_service) {
    $current_service = $services[0];
}

$title = $lang === 'de' ? $current_service['title_de'] : $current_service['title_en'];
$desc = $lang === 'de' ? $current_service['desc_de'] : $current_service['desc_en'];
?>

<section class="relative py-24 bg-primary dark:bg-[#050B14] overflow-hidden transition-colors duration-300">
    <div class="absolute inset-0 z-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?auto=format&fit=crop&w=1920&q=80" alt="Law Library" class="w-full h-full object-cover" />
    </div>
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal-hidden">
        <div class="w-20 h-20 mx-auto bg-white/10 dark:bg-slate-900/50 text-white border-2 border-accent rounded-full flex items-center justify-center mb-8 shadow-sm">
            <?php echo $current_service['icon']; ?>
        </div>
        <h1 class="text-4xl md:text-6xl font-serif font-bold text-white mb-6 tracking-tight delay-100 reveal-hidden"><?php echo $title; ?></h1>
        <p class="text-xl md:text-2xl text-gray-300 dark:text-gray-400 leading-relaxed font-light delay-200 reveal-hidden"><?php echo $desc; ?></p>
    </div>
</section>

<section class="py-24 bg-white dark:bg-slate-900 transition-colors duration-300">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="reveal-hidden">
                <h2 class="text-3xl font-serif font-bold text-primary dark:text-white mb-8" data-i18n="service_detail_features"><?php echo t('service_detail_features'); ?></h2>
                <ul class="space-y-6">
                    <li class="flex items-start gap-4">
                        <div class="mt-1 w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-gray-700 dark:text-gray-300 text-lg font-light"><?php echo $lang === 'de' ? 'Strategische rechtliche Beratung' : 'Strategic legal advice'; ?></span>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="mt-1 w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-gray-700 dark:text-gray-300 text-lg font-light"><?php echo $lang === 'de' ? 'Vertretung vor allen Gerichten' : 'Representation in all courts'; ?></span>
                    </li>
                    <li class="flex items-start gap-4">
                        <div class="mt-1 w-6 h-6 rounded-full bg-accent text-white flex items-center justify-center shrink-0">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <span class="text-gray-700 dark:text-gray-300 text-lg font-light"><?php echo $lang === 'de' ? 'Laufendes Risikomanagement' : 'Ongoing risk management'; ?></span>
                    </li>
                </ul>
            </div>
            
            <div class="bg-primary dark:bg-[#050B14] p-12 rounded border-t-4 border-accent text-center shadow-2xl relative overflow-hidden reveal-hidden delay-200">
                <div class="absolute inset-0 opacity-10">
                    <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&w=800&q=80" alt="Legal background" class="w-full h-full object-cover">
                </div>
                <div class="relative z-10">
                    <h3 class="text-3xl font-serif font-bold text-white mb-4"><?php echo $lang === 'de' ? 'Benötigen Sie rechtlichen Beistand?' : 'Need Legal Assistance?'; ?></h3>
                    <p class="text-gray-300 mb-8 font-light leading-relaxed"><?php echo $lang === 'de' ? 'Kontaktieren Sie unsere Spezialisten für eine vertrauliche Erstberatung zu Ihrem Fall.' : 'Contact our specialists for a confidential consultation regarding your case.'; ?></p>
                    <a href="/?page=contact" class="bg-accent text-white px-8 py-4 rounded font-bold hover:bg-yellow-600 transition shadow-lg hover:-translate-y-1 block uppercase tracking-wide text-sm"><?php echo $lang === 'de' ? 'Beratung anfragen' : 'Request Consultation'; ?></a>
                </div>
            </div>
        </div>
        
        <div class="mt-16 text-center reveal-hidden delay-300">
            <a href="/?page=services" class="inline-flex items-center text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-white transition font-medium border-b border-transparent hover:border-primary dark:hover:border-white pb-1">
                <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                <span data-i18n="service_back_link"><?php echo t('service_back_link'); ?></span>
            </a>
        </div>
    </div>
</section>
