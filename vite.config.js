// vite.config.js

export default defineConfig({
    plugins: [
      laravel({
        input: [
          'resources/sass/app.scss',
          'resources/js/app.js',
        ],
        watch: [
          'resources/views/**/*.blade.php',
        ],
        livereload: true,
      }),
    ],
    build: {
      outDir: 'public/build',
    },
  });
  