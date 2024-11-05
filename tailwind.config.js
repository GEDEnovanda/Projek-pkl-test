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
        },
    },
    plugins: [],
};
