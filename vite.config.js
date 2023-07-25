import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
  plugins: [
    laravel({
      input: [
        "resources/js/app.js",
        "resources/js/schedule.js",
        "resources/css/default.css",
        "resources/css/pages.css",
        "resources/css/schedule.css",
        "resources/css/768.css",
        "resources/css/480.css",
        "resources/css/320.css",
      ],
      refresh: true,
    }),
  ],
});
