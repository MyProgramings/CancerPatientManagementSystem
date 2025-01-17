import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'selector',

    theme: {
        extend: {
            fontFamily: {
                sans: ['Noto Kufi Arabic', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: colors.indigo,
                secondary: colors.yellow,
                neutral: colors.gray,
              },
        },
    },

    plugins: [forms, typography],
};
