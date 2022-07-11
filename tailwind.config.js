const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                poppins: ['Poppins', 'sans-serif'],
            },
            colors: {
                'primary-dark': '#031926',
                'base': '#F3F4F6',
                'primary-light': '#ffffff',
                'primary-red' : '#f05d5e',
                'primary-blue' : '#468189',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
