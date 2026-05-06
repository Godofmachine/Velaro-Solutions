<?php if (!defined('VELARO_SITE')) exit; ?>
<div id="cookie-banner" class="fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 shadow-2xl z-50 transform translate-y-full transition-transform duration-500 flex flex-col md:flex-row items-center justify-between p-4 md:px-8 gap-4">
    <div class="flex-1">
        <h3 class="text-lg font-semibold text-primary mb-1" data-i18n="cookie_title"><?php echo t('cookie_title'); ?></h3>
        <p class="text-sm text-gray-600" data-i18n="cookie_desc"><?php echo t('cookie_desc'); ?></p>
    </div>
    <div class="flex items-center gap-3 shrink-0 w-full md:w-auto">
        <button id="cookie-reject" class="flex-1 md:flex-none px-4 py-2 border border-gray-300 text-gray-700 rounded hover:bg-gray-50 transition text-sm font-medium" data-i18n="cookie_reject"><?php echo t('cookie_reject'); ?></button>
        <button id="cookie-accept" class="flex-1 md:flex-none px-4 py-2 bg-primary text-white rounded hover:bg-blue-800 transition shadow text-sm font-medium" data-i18n="cookie_accept"><?php echo t('cookie_accept'); ?></button>
    </div>
</div>
