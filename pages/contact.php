<?php if (!defined('VELARO_SITE')) exit; ?>

<section class="py-20 bg-neutral-light border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mt-12">
        <h1 class="text-5xl font-bold text-primary mb-6" data-i18n="nav_contact"><?php echo t('nav_contact'); ?></h1>
        <p class="text-xl max-w-2xl mx-auto font-light text-gray-600">
            <?php echo $lang === 'de' ? 'Wir freuen uns darauf, von Ihnen zu hören.' : 'We look forward to hearing from you.'; ?>
        </p>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            
            <!-- Contact Form -->
            <div class="bg-white p-8 rounded-3xl shadow-lg border border-gray-100">
                <h2 class="text-3xl font-bold text-primary mb-8">Send us a message</h2>
                
                <form id="contactForm" class="space-y-6">
                    <!-- Honeypot field (hidden from users) -->
                    <div class="hidden">
                        <label>Leave this empty: <input type="text" name="honeypot" id="honeypot"></label>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Name *</label>
                            <input type="text" name="name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-accent focus:border-accent outline-none transition">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                            <input type="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-accent focus:border-accent outline-none transition">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                        <input type="text" name="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-accent focus:border-accent outline-none transition">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                        <textarea name="message" rows="5" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-accent focus:border-accent outline-none transition resize-none"></textarea>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input type="checkbox" name="gdpr" id="gdpr" required class="w-4 h-4 text-accent border-gray-300 rounded focus:ring-accent">
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="gdpr" class="font-medium text-gray-700">I agree to the <a href="/?page=datenschutz" class="text-accent hover:underline">Privacy Policy</a> *</label>
                        </div>
                    </div>

                    <button type="submit" id="submitBtn" class="w-full bg-primary text-white py-4 rounded-xl font-bold hover:bg-blue-900 transition flex justify-center items-center gap-2">
                        <span>Send Message</span>
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </button>
                    
                    <div id="formMessage" class="hidden p-4 rounded-lg text-sm mt-4"></div>
                </form>
            </div>

            <!-- Contact Info & Image -->
            <div class="flex flex-col">
                <div class="flex-grow">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80" alt="Office Building" class="w-full h-64 object-cover rounded-3xl shadow-md mb-8" />
                    
                    <div class="space-y-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-50 text-accent rounded-full flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-primary mb-1">Our Office</h3>
                                <p class="text-gray-600">Musterstraße 123<br>10115 Berlin, Germany</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-50 text-accent rounded-full flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-primary mb-1">Email Us</h3>
                                <a href="mailto:hello@velarosolutions.com" class="text-gray-600 hover:text-accent transition">hello@velarosolutions.com</a>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-50 text-accent rounded-full flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-primary mb-1">Call Us</h3>
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
