import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
            publicDirectory: "public",
        }),
        tailwindcss(),
    ],
    assetsInclude: ["**/*.jpg", "**/*.png", "**/*.svg"],
    build: {
        rollupOptions: {
            external: [/^\/images\//],
        },
    },
});
