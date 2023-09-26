import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
		        'resources/js/bootstrap.js',
		        'resources/js/home.js',
		        'resources/js/custom/scrolltracking.js',
                'resources/js/app.js',
                'resources/js/markdownapp.js',
                'resources/js/cloudflare-turnstile.js',
		        'resources/css/home.css',
                'resources/sass/app.scss',
                'resources/sass/markdownapp.scss'
            ],
            refresh: true,
            
        }),
    
    ],
});
