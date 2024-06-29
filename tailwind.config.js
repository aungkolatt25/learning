/** @type {import('tailwindcss').Config} */
export default {
  darkMode: '',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue"
  ],
  theme: {
    extend: {
      colors:{
        primary: 'rgb(64, 168, 139)'
      }
    },
  },
  plugins: [],
}

