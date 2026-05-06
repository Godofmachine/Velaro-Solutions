</main> <!-- End Main Content -->

<?php require_once __DIR__ . '/cookie-banner.php'; ?>

<footer class="bg-neutral-dark text-white pt-16 pb-8 border-t border-gray-800 mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-8 mb-12">
            
            <!-- Brand & Mission -->
            <div class="col-span-1 md:col-span-1">
                <a href="/" class="text-2xl font-serif font-bold text-white flex items-center gap-3 group mb-4 tracking-tight">
                    <svg class="w-8 h-8 text-accent transform group-hover:-rotate-5 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" /></svg>
                    <span data-i18n="site_title"><?php echo t('site_title'); ?></span>
                </a>
                <p class="text-gray-400 text-sm leading-relaxed mb-6" data-i18n="footer_about">
                    <?php echo t('footer_about'); ?>
                </p>
                <div class="flex space-x-4">
                    <!-- Social Icons (Placeholder SVGs) -->
                    <a href="#" class="text-gray-400 hover:text-accent transition">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-accent transition">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-sm font-semibold text-gray-200 tracking-wider uppercase mb-4" data-i18n="footer_links_title"><?php echo t('footer_links_title'); ?></h3>
                <ul class="space-y-3">
                    <li><a href="/?page=services" class="text-gray-400 hover:text-white transition text-sm" data-i18n="nav_services"><?php echo t('nav_services'); ?></a></li>
                    <li><a href="/?page=portfolio" class="text-gray-400 hover:text-white transition text-sm" data-i18n="nav_portfolio"><?php echo t('nav_portfolio'); ?></a></li>
                    <li><a href="/?page=blog" class="text-gray-400 hover:text-white transition text-sm" data-i18n="nav_blog"><?php echo t('nav_blog'); ?></a></li>
                    <li><a href="/?page=about" class="text-gray-400 hover:text-white transition text-sm" data-i18n="nav_about"><?php echo t('nav_about'); ?></a></li>
                </ul>
            </div>

            <!-- Company (Renamed to Legal Compliance) -->
            <div>
                <h3 class="text-sm font-semibold text-gray-200 tracking-wider uppercase mb-4" data-i18n="footer_legal_title"><?php echo t('footer_legal_title'); ?></h3>
                <ul class="space-y-3">
                    <li><a href="/?page=impressum" class="text-gray-400 hover:text-white transition text-sm" data-i18n="footer_impressum"><?php echo t('footer_impressum'); ?></a></li>
                    <li><a href="/?page=datenschutz" class="text-gray-400 hover:text-white transition text-sm" data-i18n="footer_datenschutz"><?php echo t('footer_datenschutz'); ?></a></li>
                </ul>
            </div>

            <!-- Contact Details -->
            <div>
                <h3 class="text-sm font-semibold text-gray-200 tracking-wider uppercase mb-4" data-i18n="footer_contact_title"><?php echo t('footer_contact_title'); ?></h3>
                <ul class="space-y-3 text-sm text-gray-400">
                    <li class="flex items-start gap-3">
                        <svg class="h-5 w-5 text-accent shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Friedrichstraße 123<br>10117 Berlin, Germany</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="h-5 w-5 text-accent shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <a href="mailto:kanzlei@velaro.de" class="hover:text-white transition">kanzlei@velaro.de</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="h-5 w-5 text-accent shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <a href="tel:+493012345678" class="hover:text-white transition">+49 30 1234 5678</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-sm text-gray-500">
                &copy; <?php echo date('Y'); ?> Velaro Law Firm. <span data-i18n="footer_rights"><?php echo t('footer_rights'); ?></span>
            </p>
            <div class="flex space-x-6 text-sm">
                <a href="/?page=impressum" class="text-gray-500 hover:text-white transition" data-i18n="footer_impressum"><?php echo t('footer_impressum'); ?></a>
                <a href="/?page=datenschutz" class="text-gray-500 hover:text-white transition" data-i18n="footer_datenschutz"><?php echo t('footer_datenschutz'); ?></a>
            </div>
        </div>
    </div>
</footer>

<!-- JS Modules -->
<script src="/assets/js/i18n.js"></script>
<script src="/assets/js/consent.js"></script>
<script src="/assets/js/main.js"></script>
<script src="/assets/js/animations.js"></script>

</body>
</html>
