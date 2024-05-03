/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/tw-elements/js/**/*.js", // Incluiye tw-elements

  ],
  theme: {
    container: {
      center: true,
    },
    extend: {
    },
  },
  darkMode: "class",
  plugins: [
    require('@tailwindcss/forms'),
    require("tw-elements/plugin.cjs"), 
  ]
}

