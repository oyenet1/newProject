const defaultTheme = require('tailwindcss/defaultTheme');
const plugin = require('tailwindcss/plugin')

module.exports = {
    mode: 'jit',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                'rubik': ["'Rubik', sans-serif"],
              },
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'primary': '#6633ff',
                'purple': '#3f3cbb',
                'header': '#0A376E',
                'background': '#f6F3ff',
              },
        },
    },
    variants: {
      extend: {},
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
