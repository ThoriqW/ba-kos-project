/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.html", "./src/**/*.{vue,js,ts,jsx,tsx}"],
  theme: {
    extend: {
      fontFamily: {
        Lato: ["Lato", "sans-serif"],
      },
      colors: {
        "primary-color": "#ffff",
        "secondary-color": "#F5F5F5",
        "button-color": "#25DFC6",
        "black-color": "#252525",
        "gray-color": "#949494",
      },
    },
  },
  plugins: [],
};
