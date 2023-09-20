<!--Element for rendering the turnstile-->
<div id="cloudflare-turnstile"></div>

<!--Get the sitekey from server config, pass it to the script below-->
@php($sitekey = Config::get('services.cloudflare.sitekey'))
<script> var siteKey = "{{ $sitekey }}"; </script>

<!--Include the cloudflare provided explicit client-side rendering script-->
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onloadTurnstileCallback" defer></script>

<!--Include the custom client-side rendering script-->
@vite(['resources/js/cloudflare-turnstile.js'])