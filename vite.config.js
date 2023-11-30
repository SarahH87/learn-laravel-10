import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        vue({
            template: {
                //allows Laravel plugin to rewrite asset URLs to point to the vite server
                transformAssetUrls: {
                    base: null,
                },
                //leave absolute urls untouched so that they can reference assets in the public directory as expected
                includeAbsolute: false,
            }
        })
    ],
});
