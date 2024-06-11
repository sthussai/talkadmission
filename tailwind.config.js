import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    
    content: {
        relative: true,
        transform: (content) => content.replace(/taos:/g, ''),
        files: ['./src/*.{html,js}', 
            './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
            './storage/framework/views/*.php',
            './resources/views/**/*.blade.php',

        ],
        
      },

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        require('taos/plugin')
    ],

    safelist: [
        '!duration-[0ms]',
        '!delay-[0ms]',
        'html.js :where([class*="taos:"]:not(.taos-init))'
      ]
};
