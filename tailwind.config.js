/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./private/views/**/*.{html,js,css,php}"],
  theme: {
    screens: {
      sm: "480px",
      md: "768px",
      lg: "976px",
      xl: "1440px",
    },
    extend: {},
  },
  plugins: [],
};
