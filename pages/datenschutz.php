<?php if (!defined('VELARO_SITE')) exit; ?>

<section class="py-24 bg-white dark:bg-neutral-dark min-h-screen transition-colors duration-300">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="flex gap-6 mb-12 border-b border-gray-100 dark:border-slate-800">
            <a href="/?page=impressum" class="<?php echo $page === 'impressum' ? 'text-accent font-bold border-b-2 border-accent' : 'text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-white'; ?> pb-4 text-sm uppercase tracking-widest transition">
                <?php echo $lang === 'de' ? 'Impressum' : 'Legal Notice'; ?>
            </a>
            <a href="/?page=datenschutz" class="<?php echo $page === 'datenschutz' ? 'text-accent font-bold border-b-2 border-accent' : 'text-gray-500 dark:text-gray-400 hover:text-primary dark:hover:text-white'; ?> pb-4 text-sm uppercase tracking-widest transition">
                <?php echo $lang === 'de' ? 'Datenschutz' : 'Privacy Policy'; ?>
            </a>
        </nav>
        <h1 class="text-4xl font-serif font-bold text-primary dark:text-white mb-12 border-b border-gray-200 dark:border-slate-800 pb-4">
            <?php echo $lang === 'de' ? 'Datenschutzerklärung' : 'Privacy Policy'; ?>
        </h1>
        
        <div class="prose prose-lg dark:prose-invert prose-blue text-gray-700 dark:text-gray-300">
            <?php if ($lang === 'de'): ?>
                <h2>1. Datenschutz auf einen Blick</h2>
                <h3>Allgemeine Hinweise</h3>
                <p>Die folgenden Hinweise geben einen einfachen Überblick darüber, was mit Ihren personenbezogenen Daten passiert, wenn Sie diese Website besuchen. Personenbezogene Daten sind alle Daten, mit denen Sie persönlich identifiziert werden können.</p>
                
                <h3>Datenerfassung auf dieser Website</h3>
                <p><strong>Wer ist verantwortlich für die Datenerfassung auf dieser Website?</strong><br>
                Die Datenverarbeitung auf dieser Website erfolgt durch den Websitebetreiber. Dessen Kontaktdaten können Sie dem Impressum dieser Website entnehmen.</p>

                <p><strong>Wie erfassen wir Ihre Daten?</strong><br>
                Ihre Daten werden zum einen dadurch erhoben, dass Sie uns diese mitteilen. Hierbei kann es sich z. B. um Daten handeln, die Sie in ein Kontaktformular eingeben. Andere Daten werden automatisch oder nach Ihrer Einwilligung beim Besuch der Website durch unsere IT-Systeme erfasst. Das sind vor allem technische Daten.</p>

                <h2>2. Hosting</h2>
                <p>Wir hosten die Inhalte unserer Website bei einem externen Anbieter (Hoster). Die personenbezogenen Daten, die auf dieser Website erfasst werden, werden auf den Servern des Hosters gespeichert.</p>

                <h2>3. Allgemeine Hinweise und Pflichtinformationen</h2>
                <h3>Datenschutz</h3>
                <p>Die Betreiber dieser Seiten nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung.</p>
                
                <h3>Hinweis zur verantwortlichen Stelle</h3>
                <p>Die verantwortliche Stelle für die Datenverarbeitung auf dieser Website ist:</p>
                <p>Velaro Rechtsanwälte<br>Friedrichstraße 123<br>10117 Berlin<br>Telefon: +49 (0) 30 1234 5678<br>E-Mail: kanzlei@velaro.de</p>

                <h2>4. Datenerfassung auf dieser Website</h2>
                <h3>Cookies</h3>
                <p>Unsere Internetseiten verwenden so genannte "Cookies". Cookies sind kleine Textdateien und richten auf Ihrem Endgerät keinen Schaden an. Sie werden entweder vorübergehend für die Dauer einer Sitzung (Session-Cookies) oder dauerhaft (permanente Cookies) auf Ihrem Endgerät gespeichert.</p>

                <h3>Kontaktformular</h3>
                <p>Wenn Sie uns per Kontaktformular Anfragen zukommen lassen, werden Ihre Angaben aus dem Anfrageformular inklusive der von Ihnen dort angegebenen Kontaktdaten zwecks Bearbeitung der Anfrage und für den Fall von Anschlussfragen bei uns gespeichert. Diese Daten geben wir nicht ohne Ihre Einwilligung weiter. Die Verarbeitung dieser Daten erfolgt auf Grundlage von Art. 6 Abs. 1 lit. b DSGVO, sofern Ihre Anfrage mit der Erfüllung eines Vertrags zusammenhängt.</p>
            <?php else: ?>
                <h2>1. Data Protection at a Glance</h2>
                <h3>General Notes</h3>
                <p>The following notes provide a simple overview of what happens to your personal data when you visit this website. Personal data is any data with which you can be personally identified.</p>
                
                <h3>Data Collection on This Website</h3>
                <p><strong>Who is responsible for data collection on this website?</strong><br>
                Data processing on this website is carried out by the website operator. You can find their contact details in the Legal Notice (Impressum) of this website.</p>

                <p><strong>How do we collect your data?</strong><br>
                On the one hand, your data is collected by you communicating it to us. This can be, for example, data that you enter into a contact form. Other data is collected automatically or with your consent by our IT systems when you visit the website. This is primarily technical data.</p>

                <h2>2. Hosting</h2>
                <p>We host the content of our website with an external provider (hoster). The personal data collected on this website is stored on the hoster's servers.</p>

                <h2>3. General Notes and Mandatory Information</h2>
                <h3>Data Protection</h3>
                <p>The operators of these pages take the protection of your personal data very seriously. We treat your personal data confidentially and in accordance with the legal data protection regulations and this privacy policy.</p>
                
                <h3>Note on the Responsible Body</h3>
                <p>The responsible body for data processing on this website is:</p>
                <p>Velaro Law Firm<br>Friedrichstrasse 123<br>10117 Berlin<br>Phone: +49 (0) 30 1234 5678<br>Email: kanzlei@velaro.de</p>

                <h2>4. Data Collection on This Website</h2>
                <h3>Cookies</h3>
                <p>Our internet pages use so-called "cookies". Cookies are small text files and do not cause any damage to your end device. They are stored on your end device either temporarily for the duration of a session (session cookies) or permanently (permanent cookies).</p>

                <h3>Contact Form</h3>
                <p>If you send us inquiries via the contact form, your details from the inquiry form, including the contact details you provided there, will be stored by us for the purpose of processing the inquiry and in the case of follow-up questions. We do not pass on this data without your consent. The processing of this data is based on Art. 6 para. 1 lit. b GDPR, insofar as your request is related to the fulfillment of a contract.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
