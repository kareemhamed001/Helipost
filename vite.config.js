import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/main.scss',
                'resources/js/oneui/app.js',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
