const mix = require('laravel-mix');
const path = require('path');
const {VueLoaderPlugin} = require('vue-loader')

module.exports = {
    resolve: {
        alias: {
            '@images': path.join(__dirname, 'public/images/'),
        }
    }, module: {
        rules: [// ... other rules
            {
                test: /\.vue$/, loader: 'vue-loader'
            }]
    }, plugins: [// make sure to include the plugin!
        new VueLoaderPlugin()]
}
mix.vue()
    .js('resources/js/app.js', 'public/js')
    .sass('resources/scss/fonts.scss', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [require("tailwindcss"),])
    .copyDirectory('resources/images', 'public/images')
    .copyDirectory('resources/fonts', 'public/fonts');
