import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#0F766E', // Teal for Trust
                    dark: '#115E59',    // Darker Teal for hover
                },
                accent: {
                    DEFAULT: '#F59E0B', // Amber for Buttons
                    hover: '#D97706',   // Darker Amber for hover
                },
                neutral: {
                    light: '#F9FAFB',
                    dark: '#1F2937',
                }
            },
            fontFamily: {
                sans: ['Poppins', 'sans-serif'], // Modern clean font
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
};