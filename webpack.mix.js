const mix = require('laravel-mix');

mix.js('resources/js/register-components.js', 'public/js').vue()
    .postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss/nesting'),
    require('tailwindcss'),
]);

