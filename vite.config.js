import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/sass/main.scss',
                // 'resources/js/app.js',
                'resources/js/main.js',
            ],
            refresh: true,
        }),
    ],
});
