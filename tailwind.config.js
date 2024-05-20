import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import daisyui from "daisyui"
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                utama: '#079A91',
            },
        },
        fontFamily: {
            nunito: ['Nunito'],
            sans: ['Figtree', ...defaultTheme.fontFamily.sans],
        }
    },
    daisyui: {
        themes: ["light"],
      },

    plugins: [forms, typography, daisyui],
};
