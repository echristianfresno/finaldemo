/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/views/**/*.blade.php";
       "./node_modules/flowbite/**/*.js";
      './src/**/*.{html,js}', './node_modules/tw-elements/dist/js/**/*.js';
    ],
  theme: {
    ...
    fontFamily: {
      display: ['"CalSans-SemiBold"', "sans-serif"],
      body: ['"DM Sans"', "sans-serif"]
    },
    colors: {
      transparent: "transparent",
      current: "currentColor",
      white: "#ffffff",
      accent: "#8358FF",
      "accent-dark": "#7444FF",
      "accent-light": "#9E7CFF",
      "accent-lighter": "#B9A0FF",
      "light-base": "#F5F8FA",
      green: "#10b981",
      orange: "#FEB240",
      red: "#EF4444",
      blue: "#428AF8",
      jacarta: {
        base: "#5A5D79",
        50: "#F4F4F6",
        100: "#E7E8EC",
        200: "#C4C5CF",
        300: "#A1A2B3",
        400: "#7D7F96",
        500: "#5A5D79",
        600: "#363A5D",
        700: "#131740",
        800: "#101436",
        900: "#0D102D"
      }
    },

  },
  plugins: [
        require('flowbite/plugin', 'tw-elements/dist/plugin');
    ]
}
