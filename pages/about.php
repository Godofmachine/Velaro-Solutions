<?php if (!defined('VELARO_SITE')) exit; 
$team = require __DIR__ . '/../data/team.php';
?>

<!-- Header -->
<section class="relative py-32 bg-primary dark:bg-[#050B14] overflow-hidden transition-colors duration-300">
    <div class="absolute inset-0 z-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1505664194779-8beaceb93744?auto=format&fit=crop&w=1920&q=80" alt="Law Library" class="w-full h-full object-cover" />
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center reveal-hidden">
        <h1 class="text-5xl md:text-6xl font-serif font-bold text-white mb-6" data-i18n="about_title"><?php echo t('about_title'); ?></h1>
        <p class="text-xl text-accent max-w-2xl mx-auto font-light delay-100 reveal-hidden tracking-wide" data-i18n="about_subtitle"><?php echo t('about_subtitle'); ?></p>
    </div>
</section>

<!-- Story & Mission -->
<section class="py-24 bg-white dark:bg-slate-900 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
            <div class="reveal-hidden">
                <h2 class="text-3xl font-serif font-bold text-primary dark:text-white mb-6" data-i18n="our_story_title"><?php echo t('our_story_title'); ?></h2>
                <div class="w-20 h-1 bg-accent mb-8"></div>
                <div class="prose prose-lg text-gray-600 dark:text-gray-400 font-light leading-relaxed">
                    <p data-i18n="our_story_p1"><?php echo t('our_story_p1'); ?></p>
                    <p data-i18n="our_story_p2" class="mt-4"><?php echo t('our_story_p2'); ?></p>
                </div>
            </div>
            <div class="reveal-hidden delay-200 bg-neutral-light dark:bg-slate-800 p-10 rounded border-l-4 border-accent shadow-sm dark:shadow-none transition-colors duration-300">
                <h2 class="text-3xl font-serif font-bold text-primary dark:text-white mb-6" data-i18n="mission_title"><?php echo t('mission_title'); ?></h2>
                <p class="text-xl text-gray-700 dark:text-gray-300 italic leading-relaxed font-light" data-i18n="mission_p">"<?php echo t('mission_p'); ?>"</p>
                <div class="mt-8 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-primary dark:bg-accent text-white dark:text-primary flex items-center justify-center font-bold font-serif">HW</div>
                    <div>
                        <div class="font-bold text-primary dark:text-white">Dr. Heinrich Weber</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400 uppercase tracking-widest text-xs mt-1">Gründungspartner</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-24 bg-neutral-light dark:bg-neutral-dark border-t border-gray-200 dark:border-slate-800 transition-colors duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 reveal-hidden">
            <h2 class="text-4xl font-serif font-bold text-primary dark:text-white mb-4" data-i18n="team_title"><?php echo t('team_title'); ?></h2>
            <p class="text-xl text-gray-600 dark:text-gray-400 font-light" data-i18n="team_subtitle"><?php echo t('team_subtitle'); ?></p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <?php 
            $delay = 100;
            foreach($team as $member): 
            ?>
            <div class="bg-white dark:bg-slate-900 rounded overflow-hidden shadow-sm hover:shadow-xl dark:shadow-none group text-center pb-8 border border-gray-100 dark:border-slate-800 dark:hover:border-slate-700 reveal-hidden transition-all duration-500" style="transition-delay: <?php echo $delay; ?>ms;">
                <div class="h-80 overflow-hidden mb-6 relative">
                    <img src="<?php echo $member['image_url']; ?>" alt="<?php echo $member['name']; ?>" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition duration-700" />
                    <div class="absolute inset-0 bg-primary/20 dark:bg-[#050B14]/40 group-hover:bg-transparent transition"></div>
                </div>
                <h3 class="text-2xl font-serif font-bold text-primary dark:text-white"><?php echo $member['name']; ?></h3>
                <p class="text-accent font-medium mb-4 uppercase tracking-widest text-xs mt-2"><?php echo $lang === 'de' ? $member['role_de'] : $member['role_en']; ?></p>
                <p class="text-gray-500 dark:text-gray-400 px-8 text-sm font-light leading-relaxed"><?php echo $lang === 'de' ? $member['desc_de'] : $member['desc_en']; ?></p>
                
                <div class="flex justify-center gap-4 mt-6 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <?php if(isset($member['social']['linkedin'])): ?>
                    <a href="<?php echo $member['social']['linkedin']; ?>" class="text-gray-400 dark:text-gray-500 hover:text-primary dark:hover:text-white transition">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php 
            $delay += 100;
            endforeach; 
            ?>
        </div>
    </div>
</section>
