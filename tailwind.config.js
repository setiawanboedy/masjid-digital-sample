import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/frontend/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                utama: '#079A91',
              },
            fontFamily: {
            nunito: ['Nunito']
            }
        },
    },

    plugins: [forms, typography],
};
