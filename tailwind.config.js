import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['InterVariable', ...defaultTheme.fontFamily.sans],
              },
             
                colors: {
                    primary: '#8B2A42', // warna maroon
                    secondary: '#FFFFFF', // warna putih background
                    navcol: '#F4F4F4', // warna putih navbar
                    hover: '#A3334F', //kalo tombol di klik
                  },
                textShadow: {
                    'default': '2px 2px 4px rgba(0, 0, 0, 0.5)',
                    'lg': '4px 4px 8px rgba(0, 0, 0, 0.5)',
                },    
        },
    },
    plugins: [
      function ({ addUtilities }) {
        addUtilities({
          '.text-shadow-sm': {
            'text-shadow': '1px 1px 1px rgba(0, 0, 0, 0.3)',
        },
        // Text shadow default
        '.text-shadow': {
            'text-shadow': '2px 2px 4px rgba(0, 0, 0, 0.4)',
        },
        // Text shadow besar
        '.text-shadow-lg': {
            'text-shadow': '4px 4px 8px rgba(0, 0, 0, 0.5)',
        },
        // Text shadow ekstra besar
        '.text-shadow-xl': {
            'text-shadow': '6px 6px 12px rgba(0, 0, 0, 0.6)',
        },
        })
    }
    ],
};

  