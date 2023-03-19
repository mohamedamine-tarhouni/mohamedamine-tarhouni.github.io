import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // css
                "resources/css/template_style.css",
                "resources/css/template_bootstrap.css",
                "resources/css/service_fa.css",
                // javascript
                "resources/js/service_fa.js",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            $: "jQuery",
        },
    },
});
