/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                '663434': '#663434',
                'F6E1A9': '#F6E1A9',
                'A9ADD4': '#A9ADD4',
            },
        },
        container: {
            center: true,
        },
    },
    plugins: [],

}

