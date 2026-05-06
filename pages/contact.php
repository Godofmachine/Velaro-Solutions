<?php if (!defined('VELARO_SITE')) exit; ?>

<!-- Header -->
<section class="py-24 bg-primary dark:bg-[#050B14] border-b border-gray-800 dark:border-slate-800 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal-hidden">
        <h1 class="text-4xl md:text-5xl font-serif font-bold text-white mb-6" data-i18n="contact_title"><?php echo t('contact_title'); ?></h1>
        <p class="text-xl text-gray-400 max-w-3xl mx-auto font-light" data-i18n="contact_subtitle"><?php echo t('contact_subtitle'); ?></p>
    </div>
</section>

<!-- Contact Form & Info -->
<section class="py-24 bg-white dark:bg-slate-900 relative transition-colors duration-300">
    <div class="absolute inset-0 bg-neutral-light dark:bg-neutral-dark h-1/2 z-0 transition-colors duration-300"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <!-- Contact Info -->
            <div class="lg:col-span-1 space-y-8">
                <div class="bg-white dark:bg-slate-900 p-8 rounded shadow-xl dark:shadow-none dark:border dark:border-slate-800 border-t-4 border-t-accent dark:border-t-accent reveal-hidden transition-colors duration-300">
                    <h3 class="text-2xl font-serif font-bold text-primary dark:text-white mb-6" data-i18n="contact_info_title"><?php echo t('contact_info_title'); ?></h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-neutral-light dark:bg-slate-800 p-3 rounded text-accent shrink-0">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 dark:text-gray-200 uppercase tracking-widest mb-1">Berlin</h4>
                                <p class="text-gray-600 dark:text-gray-400 font-light" data-i18n="contact_address"><?php echo t('contact_address'); ?></p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="bg-neutral-light dark:bg-slate-800 p-3 rounded text-accent shrink-0">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 dark:text-gray-200 uppercase tracking-widest mb-1">Email</h4>
                                <a href="mailto:kanzlei@weber-partner.de" class="text-gray-600 dark:text-gray-400 hover:text-accent dark:hover:text-accent font-light" data-i18n="contact_email"><?php echo t('contact_email'); ?></a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="bg-neutral-light dark:bg-slate-800 p-3 rounded text-accent shrink-0">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-sm font-bold text-gray-900 dark:text-gray-200 uppercase tracking-widest mb-1">Phone</h4>
                                <a href="tel:+493012345678" class="text-gray-600 dark:text-gray-400 hover:text-accent dark:hover:text-accent font-light" data-i18n="contact_phone"><?php echo t('contact_phone'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-2">
                <div class="bg-white dark:bg-slate-900 p-10 md:p-12 rounded shadow-2xl dark:shadow-none dark:border-slate-800 border border-gray-100 reveal-hidden delay-200 transition-colors duration-300">
                    <h3 class="text-3xl font-serif font-bold text-primary dark:text-white mb-8" data-i18n="contact_form_title"><?php echo t('contact_form_title'); ?></h3>
                    
                    <form id="contactForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2 uppercase tracking-wide" data-i18n="form_name"><?php echo t('form_name'); ?></label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded border border-gray-300 dark:border-slate-700 focus:ring-2 focus:ring-accent focus:border-transparent outline-none transition bg-gray-50 dark:bg-slate-800 dark:text-white">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2 uppercase tracking-wide" data-i18n="form_email"><?php echo t('form_email'); ?></label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded border border-gray-300 dark:border-slate-700 focus:ring-2 focus:ring-accent focus:border-transparent outline-none transition bg-gray-50 dark:bg-slate-800 dark:text-white">
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2 uppercase tracking-wide" data-i18n="form_subject"><?php echo t('form_subject'); ?></label>
                            <input type="text" id="subject" name="subject" required class="w-full px-4 py-3 rounded border border-gray-300 dark:border-slate-700 focus:ring-2 focus:ring-accent focus:border-transparent outline-none transition bg-gray-50 dark:bg-slate-800 dark:text-white">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2 uppercase tracking-wide" data-i18n="form_message"><?php echo t('form_message'); ?></label>
                            <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 rounded border border-gray-300 dark:border-slate-700 focus:ring-2 focus:ring-accent focus:border-transparent outline-none transition bg-gray-50 dark:bg-slate-800 dark:text-white resize-none"></textarea>
                        </div>
                        
                        <!-- GDPR Checkbox -->
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="gdpr_consent" name="gdpr_consent" type="checkbox" required class="w-4 h-4 border border-gray-300 dark:border-slate-600 rounded bg-gray-50 dark:bg-slate-800 focus:ring-3 focus:ring-accent accent-accent">
                            </div>
                            <label for="gdpr_consent" class="ml-2 text-sm text-gray-600 dark:text-gray-400 font-light leading-snug" data-i18n="gdpr_consent_label">
                                <?php echo t('gdpr_consent_label'); ?>
                            </label>
                        </div>

                        <button type="submit" class="w-full bg-primary dark:bg-accent text-white dark:text-primary py-4 rounded font-bold hover:bg-accent dark:hover:bg-yellow-500 transition shadow-lg hover:shadow-xl hover:-translate-y-1 uppercase tracking-wider">
                            <span data-i18n="form_submit"><?php echo t('form_submit'); ?></span>
                        </button>
                    </form>

                    <!-- Form Status -->
                    <div id="formStatus" class="hidden mt-6 p-4 rounded text-center font-medium"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Form Handling JS -->
<script>
document.getElementById('contactForm')?.addEventListener('submit', async (e) => {
    e.preventDefault();
    const btn = e.target.querySelector('button[type="submit"]');
    const status = document.getElementById('formStatus');
    const originalText = btn.innerHTML;
    
    // Simulate loading
    btn.innerHTML = '<svg class="animate-spin h-5 w-5 mx-auto text-white dark:text-primary" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>';
    btn.disabled = true;
    
    // Submit to API
    try {
        const formData = new FormData(e.target);
        const response = await fetch('/api/contact.php', {
            method: 'POST',
            body: formData
        });
        
        const result = await response.json();
        
        status.classList.remove('hidden', 'bg-red-50', 'text-red-600', 'bg-green-50', 'text-green-600', 'dark:bg-red-900/30', 'dark:text-red-400', 'dark:bg-green-900/30', 'dark:text-green-400');
        
        if(result.success) {
            status.classList.add('bg-green-50', 'text-green-600', 'dark:bg-green-900/30', 'dark:text-green-400');
            status.textContent = result.message;
            e.target.reset();
        } else {
            status.classList.add('bg-red-50', 'text-red-600', 'dark:bg-red-900/30', 'dark:text-red-400');
            status.textContent = result.error || 'An error occurred. Please try again.';
        }
    } catch (error) {
        status.classList.remove('hidden', 'bg-red-50', 'text-red-600', 'bg-green-50', 'text-green-600', 'dark:bg-red-900/30', 'dark:text-red-400', 'dark:bg-green-900/30', 'dark:text-green-400');
        status.classList.add('bg-red-50', 'text-red-600', 'dark:bg-red-900/30', 'dark:text-red-400');
        status.textContent = 'A network error occurred. Please try again.';
    } finally {
        btn.innerHTML = originalText;
        btn.disabled = false;
    }
});
</script>
