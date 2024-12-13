import preset from './vendor/filament/support/tailwind.config.preset'

/** @type {import('tailwindcss').Config} */
export default {
    presets: [preset],
    content: [
          "./resources/**/*.blade.php",
          "./resources/**/*.js",
          "./resources/**/*.vue",
          "./vendor/awcodes/filament-quick-create/resources/**/*.blade.php",
          "./app/Filament/**/*.php",
          "./resources/views/filament/**/*.blade.php",
          "./vendor/filament/**/*.blade.php",
    ],
    theme: {
        extend: {
            fontFamily: {
                glacial: ['GlacialIndifference', 'sans-serif'],
            },
            colors: {
                    cobalt: {
                    50: "#f0f6fe",
                    100: "#ddebfc",
                    200: "#c3dcfa",
                    300: "#99c7f7",
                    400: "#69a9f1",
                    500: "#4688eb",
                    600: "#316bdf",
                    700: "#2856cd",
                    800: "#24429a",
                    900: "#253f83",
                    950: "#1b2850",
                },
                'biscay': {
                '50': '#eff8ff',
                    '100': '#dbedfe',
                    '200': '#bfe1fe',
                    '300': '#93cffd',
                    '400': '#60b3fa',
                    '500': '#3c93f5',
                    '600': '#2675ea',
                    '700': '#1e5fd7',
                    '800': '#1e4eaf',
                    '900': '#1e448a',
                    '950': '#1a305e',
                },

                'tango': {
                    '50': '#fef7ee',
                    '100': '#fcedd8',
                    '200': '#f8d7b0',
                    '300': '#f3bb7e',
                    '400': '#ee9449',
                    '500': '#e97726',
                    '600': '#da5e1c',
                    '700': '#b54719',
                    '800': '#903a1c',
                    '900': '#753219',
                    '950': '#3f160b',
                },
                'alto': {
                    '50': '#f7f7f7',
                    '100': '#ededed',
                    '200': '#d9d9d9',
                    '300': '#c8c8c8',
                    '400': '#adadad',
                    '500': '#999999',
                    '600': '#888888',
                    '700': '#7b7b7b',
                    '800': '#676767',
                    '900': '#545454',
                    '950': '#363636',
                },

                'persian-plum': {
                    '50': '#fef3f2',
                    '100': '#fde8e6',
                    '200': '#fad3d1',
                    '300': '#f5afac',
                    '400': '#ee807e',
                    '500': '#e44f50',
                    '600': '#cf2f38',
                    '700': '#ae222d',
                    '800': '#921f2c',
                    '900': '#6e1a26',
                    '950': '#460b12',
                },

            }
        }
    },
    plugins: [
        require('tailwindcss-rtl'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
}

