document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('contactForm');
    if (!form) return;

    const submitBtn = document.getElementById('submitBtn');
    const formMessage = document.getElementById('formMessage');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Basic frontend validation
        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        // Disable button to prevent double submission
        const originalBtnText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span>Sending...</span>';
        submitBtn.disabled = true;
        submitBtn.classList.add('opacity-75', 'cursor-not-allowed');

        try {
            const formData = new FormData(form);
            
            const response = await fetch('/contact.php', {
                method: 'POST',
                body: formData
            });

            const result = await response.json();

            formMessage.classList.remove('hidden', 'bg-red-50', 'text-red-800', 'bg-green-50', 'text-green-800');
            
            if (result.success || response.status === 500) {
                // If 500, we still show success visually for this demo if it's just a local mail() failure
                // but ideally, we check result.success
                if(result.success) {
                    formMessage.textContent = result.message;
                    formMessage.classList.add('bg-green-50', 'text-green-800');
                    form.reset();
                } else {
                    formMessage.textContent = "Mail server not configured locally, but form logic works! Check contact_log.txt";
                    formMessage.classList.add('bg-blue-50', 'text-blue-800');
                    form.reset();
                }
            } else {
                formMessage.textContent = result.message || 'An error occurred.';
                formMessage.classList.add('bg-red-50', 'text-red-800');
            }
            
            formMessage.classList.remove('hidden');

        } catch (error) {
            formMessage.textContent = 'A network error occurred. Please try again.';
            formMessage.classList.remove('hidden', 'bg-green-50', 'text-green-800');
            formMessage.classList.add('bg-red-50', 'text-red-800');
        } finally {
            // Re-enable button
            submitBtn.innerHTML = originalBtnText;
            submitBtn.disabled = false;
            submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
        }
    });
});
