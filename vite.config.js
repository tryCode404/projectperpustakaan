import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
=======
            input: ['resources/css/app.css', 'resources/js/app.js'],
>>>>>>> 97ed3b48d82bc4a41e8196552fc7eb7a64bb4bf7
            refresh: true,
        }),
    ],
});
