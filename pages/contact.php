<?php if (!defined('VELARO_SITE')) exit; ?>

<section class="py-20 bg-neutral-light border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-12 reveal-hidden">
        <h1 class="text-5xl font-bold text-primary mb-6 tracking-tight" data-i18n="nav_contact"><?php echo t('nav_contact'); ?></h1>
        <p class="text-xl max-w-2xl mx-auto font-light text-gray-600 delay-100 reveal-hidden">
            <?php echo $lang === 'de' ? 'Wir freuen uns darauf, von Ihnen zu hören.' : 'We look forward to hearing from you.'; ?>
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- Contact Form -->
            <div class="bg-white p-10 md:p-12 rounded-[2.5rem] shadow-2xl border border-gray-100 reveal-hidden delay-100">
                <h2 class="text-3xl font-bold text-primary mb-8" data-i18n="contact_form_title"><?php echo t('contact_form_title'); ?></h2>
                
                <form id="contactForm" class="space-y-6">
                    <!-- Honeypot field (hidden from users) -->
                    <div class="hidden">
                        <label>Leave this empty: <input type="text" name="honeypot" id="honeypot"></label>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" data-i18n="contact_name"><?php echo t('contact_name'); ?></label>
                            <input type="text" name="name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-accent focus:border-accent outline-none transition">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" data-i18n="contact_email"><?php echo t('contact_email'); ?></label>
                            <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-accent focus:border-accent outline-none transition">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" data-i18n="contact_subject"><?php echo t('contact_subject'); ?></label>
                        <input type="text" name="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-accent focus:border-accent outline-none transition">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" data-i18n="contact_message"><?php echo t('contact_message'); ?></label>
                        <textarea name="message" rows="5" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-accent focus:border-accent outline-none transition resize-none"></textarea>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input type="checkbox" name="gdpr" id="gdpr" required class="w-4 h-4 text-accent border-gray-300 rounded focus:ring-accent">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="gdpr" class="font-medium text-gray-700">
                                <span data-i18n="contact_gdpr_agree"><?php echo t('contact_gdpr_agree'); ?></span>
                                <a href="/?page=datenschutz" class="text-accent hover:underline" data-i18n="footer_datenschutz"><?php echo t('footer_datenschutz'); ?></a>
                                <span data-i18n="contact_gdpr_star"><?php echo t('contact_gdpr_star'); ?></span>
                            </label>
                        </div>
                    </div>

                    <button type="submit" id="submitBtn" class="w-full bg-gradient-to-r from-primary to-blue-900 text-white py-4 rounded-xl font-bold hover:shadow-[0_10px_20px_rgba(27,43,91,0.3)] transform hover:-translate-y-1 transition-all flex justify-center items-center gap-2">
                        <span data-i18n="contact_send"><?php echo t('contact_send'); ?></span>
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                    
                    <div id="formMessage" class="hidden p-4 rounded-lg text-sm mt-4"></div>
                </form>
            </div>

            <!-- Contact Info & Image -->
            <div class="flex flex-col reveal-hidden delay-300">
                <div class="flex-grow">
                    <div class="relative mb-12">
                        <div class="absolute -inset-4 bg-gradient-to-tr from-accent/20 to-primary/10 rounded-[3rem] transform rotate-3 blur-sm"></div>
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80" alt="Office Building" class="relative w-full h-80 object-cover rounded-[2.5rem] shadow-xl" />
                    </div>
                    
                    <div class="space-y-10">
                        <div class="flex items-start gap-6 group">
                            <div class="w-14 h-14 bg-blue-50/50 backdrop-blur text-accent rounded-2xl flex items-center justify-center shrink-0 group-hover:bg-accent group-hover:text-white transition-all shadow-sm">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-primary mb-1" data-i18n="contact_office"><?php echo t('contact_office'); ?></h3>
                                <p class="text-gray-600">Musterstraße 123<br>10115 Berlin, Germany</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-6 group">
                            <div class="w-14 h-14 bg-blue-50/50 backdrop-blur text-accent rounded-2xl flex items-center justify-center shrink-0 group-hover:bg-accent group-hover:text-white transition-all shadow-sm">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-primary mb-1" data-i18n="contact_email_us"><?php echo t('contact_email_us'); ?></h3>
                                <a href="mailto:hello@velarosolutions.com" class="text-gray-600 hover:text-accent transition">hello@velarosolutions.com</a>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-6 group">
                            <div class="w-14 h-14 bg-blue-50/50 backdrop-blur text-accent rounded-2xl flex items-center justify-center shrink-0 group-hover:bg-accent group-hover:text-white transition-all shadow-sm">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-primary mb-1" data-i18n="contact_call_us"><?php echo t('contact_call_us'); ?></h3>
                                <p class="text-gray-600">+49 30 1234 5678</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<script src="/assets/js/contact-form.js"></script>
