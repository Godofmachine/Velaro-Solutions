<?php if (!defined('VELARO_SITE')) exit; ?>

<section class="py-24 bg-white dark:bg-neutral-dark min-h-screen transition-colors duration-300">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl font-serif font-bold text-primary dark:text-white mb-12 border-b border-gray-200 dark:border-slate-800 pb-4">
            <?php echo $lang === 'de' ? 'Impressum' : 'Legal Notice'; ?>
        </h1>
        
        <div class="prose prose-lg dark:prose-invert prose-blue text-gray-700 dark:text-gray-300">
            <?php if ($lang === 'de'): ?>
                <p><strong>Angaben gemäß § 5 TMG:</strong></p>
                <p>
                    Velaro Rechtsanwälte<br>
                    Friedrichstraße 123<br>
                    10117 Berlin<br>
                    Deutschland
                </p>

                <p><strong>Vertreten durch:</strong></p>
                <p>Dr. Heinrich Weber, Dr. Sarah Schmidt</p>

                <p><strong>Kontakt:</strong></p>
                <p>
                    Telefon: +49 (0) 30 1234 5678<br>
                    E-Mail: kanzlei@velaro.de
                </p>

                <p><strong>Umsatzsteuer-ID:</strong></p>
                <p>Umsatzsteuer-Identifikationsnummer gemäß § 27 a Umsatzsteuergesetz:<br>DE 123 456 789</p>

                <p><strong>Berufsbezeichnung und berufsrechtliche Regelungen:</strong></p>
                <p>
                    Die gesetzliche Berufsbezeichnung "Rechtsanwalt" bzw. "Rechtsanwältin" wurde in der Bundesrepublik Deutschland verliehen.<br><br>
                    Zuständige Rechtsanwaltskammer:<br>
                    Rechtsanwaltskammer Berlin<br>
                    Littenstraße 9, 10179 Berlin<br>
                    <a href="https://www.rak-berlin.de" target="_blank" rel="noopener noreferrer">www.rak-berlin.de</a>
                </p>

                <p>Es gelten folgende berufsrechtliche Regelungen:</p>
                <ul>
                    <li>Bundesrechtsanwaltsordnung (BRAO)</li>
                    <li>Berufsordnung für Rechtsanwälte (BORA)</li>
                    <li>Fachanwaltsordnung (FAO)</li>
                    <li>Rechtsanwaltsvergütungsgesetz (RVG)</li>
                    <li>Berufsregeln der Rechtsanwälte der Europäischen Union (CCBE)</li>
                </ul>
                <p>Die Regelungen können bei der Bundesrechtsanwaltskammer unter <a href="https://www.brak.de/fuer-anwaelte/berufsrecht/" target="_blank" rel="noopener noreferrer">www.brak.de</a> eingesehen werden.</p>

                <p><strong>Berufshaftpflichtversicherung:</strong></p>
                <p>
                    Allianz Versicherungs-AG<br>
                    10900 Berlin<br>
                    Räumlicher Geltungsbereich: im gesamten EU-Gebiet und den Staaten des Abkommens über den Europäischen Wirtschaftsraum.
                </p>
            <?php else: ?>
                <p><strong>Information according to § 5 TMG:</strong></p>
                <p>
                    Velaro Law Firm<br>
                    Friedrichstrasse 123<br>
                    10117 Berlin<br>
                    Germany
                </p>

                <p><strong>Represented by:</strong></p>
                <p>Dr. Heinrich Weber, Dr. Sarah Schmidt</p>

                <p><strong>Contact:</strong></p>
                <p>
                    Phone: +49 (0) 30 1234 5678<br>
                    Email: kanzlei@velaro.de
                </p>

                <p><strong>VAT ID:</strong></p>
                <p>Value added tax identification number according to § 27 a of the Value Added Tax Act:<br>DE 123 456 789</p>

                <p><strong>Job Title and Professional Regulations:</strong></p>
                <p>
                    The legal professional title "Rechtsanwalt" or "Rechtsanwältin" (Attorney-at-Law) was awarded in the Federal Republic of Germany.<br><br>
                    Competent Bar Association:<br>
                    Berlin Bar Association (Rechtsanwaltskammer Berlin)<br>
                    Littenstrasse 9, 10179 Berlin<br>
                    <a href="https://www.rak-berlin.de" target="_blank" rel="noopener noreferrer">www.rak-berlin.de</a>
                </p>

                <p>The following professional regulations apply:</p>
                <ul>
                    <li>Federal Lawyers' Act (BRAO)</li>
                    <li>Professional Code for Lawyers (BORA)</li>
                    <li>Specialist Lawyers' Act (FAO)</li>
                    <li>Lawyers' Remuneration Act (RVG)</li>
                    <li>Professional Rules of the Lawyers of the European Union (CCBE)</li>
                </ul>
                <p>The regulations can be viewed at the Federal Bar Association at <a href="https://www.brak.de/fuer-anwaelte/berufsrecht/" target="_blank" rel="noopener noreferrer">www.brak.de</a>.</p>

                <p><strong>Professional Liability Insurance:</strong></p>
                <p>
                    Allianz Versicherungs-AG<br>
                    10900 Berlin<br>
                    Geographical scope: throughout the EU territory and the states of the Agreement on the European Economic Area.
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>
