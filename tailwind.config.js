/** @type {import('tailwindcss').Config} */
export default {
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
            },
        },
    },
    plugins: [],

}

