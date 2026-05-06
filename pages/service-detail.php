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
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-12">
        <div class="w-20 h-20 mx-auto bg-primary text-accent rounded-2xl flex items-center justify-center mb-8 shadow-lg">
            <?php echo $current_service['icon']; ?>
        </div>
        <h1 class="text-4xl md:text-5xl font-bold text-primary mb-6"><?php echo $title; ?></h1>
        <p class="text-xl text-gray-600 leading-relaxed"><?php echo $desc; ?></p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-2xl font-bold text-primary mb-6">Key Features</h2>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-accent shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-700">Custom tailored to your specific business requirements.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-accent shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-700">Built with modern, scalable, and secure technologies.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <svg class="w-6 h-6 text-accent shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        <span class="text-gray-700">Ongoing support and maintenance packages available.</span>
                    </li>
                </ul>
            </div>
            <div class="bg-primary p-8 rounded-3xl text-white text-center shadow-xl">
                <h3 class="text-2xl font-bold mb-4">Ready to start?</h3>
                <p class="text-gray-300 mb-8">Contact us today to discuss how we can help you achieve your goals.</p>
                <a href="/?page=contact" class="bg-accent text-white px-8 py-3 rounded-full font-bold hover:bg-yellow-600 transition block">Request a Quote</a>
            </div>
        </div>
    </div>
</section>
