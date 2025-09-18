import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    build: {
        manifest: true,            // genera manifest.json
        outDir: 'public/build',    // salida en public/build
        emptyOutDir: true,         // limpia antes de compilar
    },
});
