// Define the function referenced in the blade template to power the turnstile widget.
window.onloadTurnstileCallback = function () {
    turnstile.render('#cloudflare-turnstile', {
        sitekey: siteKey,
        'refresh-expired': 'auto',
        callback: async function(token) {
            const url = "/api/turnstile";
            let formData = new FormData();
            formData.append('token', token);
            const result = await fetch(url, {
                body: formData,
                method: 'POST',
            });

            const outcome = await result.json();
            if (outcome.success) {
                //unlock the disabled form elements
                const formControls = document.querySelectorAll('.cloudflare-validate');
                formControls.forEach((e) => e.disabled = false);
                console.log(`Challenge Success!`);
                window.turnstile.remove();
            }
            else {
                window.turnstile.reset();
                console.error(JSON.stringify(outcome))
            }
        },
        
    });
};

window.setInterval(function() {
    window.turnstile.reset();
}, 45000)
