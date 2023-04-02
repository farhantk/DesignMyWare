/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      colors: {
        'primary': '#35B2EA',
        'secondary': '#0F172A',
        'third': '#42B549',
      },
      screens: {
        '2xl': '1320px',
      },
    },
  },
  plugins: [],
}


