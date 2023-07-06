import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
    ],
    build: {
        rollupOptions: {
          input: 'src/main.js', // Ganti dengan berkas JavaScript yang sesuai
          // Konfigurasi tambahan lainnya
        },
    },
});