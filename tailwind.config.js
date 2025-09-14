import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                'blob': 'blob 7s infinite',
                'pulse': 'pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                'bounce': 'bounce 1s infinite',
                'ping': 'ping 1s cubic-bezier(0, 0, 0.2, 1) infinite',
            },
            keyframes: {
                blob: {
                    '0%': {
                        transform: 'translate(0px, 0px) scale(1)',
                    },
                    '33%': {
                        transform: 'translate(30px, -50px) scale(1.1)',
                    },
                    '66%': {
                        transform: 'translate(-20px, 20px) scale(0.9)',
                    },
                    '100%': {
                        transform: 'translate(0px, 0px) scale(1)',
                    },
                },
            },
        },
    },

    plugins: [forms],
    safelist: [
        'bg-gradient-to-br',
        'from-amber-700',
        'via-amber-600', 
        'to-yellow-500',
        'bg-amber-800',
        'bg-yellow-600',
        'bg-orange-500',
        'text-amber-600',
        'hover:bg-amber-700',
        'from-amber-600',
        'to-yellow-600',
        'animate-pulse',
        'animate-bounce',
        'animate-ping',
        'animate-blob',
    ]
};
