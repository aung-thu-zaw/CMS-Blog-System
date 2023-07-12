/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}", "./includes/**/*.php"],

  theme: {
    screens: {
      sm: "480px",
      md: "768px",
      lg: "976px",
      xl: "1200px",
      xxl: "1440px",
    },
    extend: {
      colors: {
        brand: "#8599B6",
        dark: "#1E293B",
        mid: "#CBD5E1",
        light: "#F8FAFC",
      },
      fontFamily: {
        poppin: ["Poppins", "sans-serif"],
        roboto: ["Roboto", "sans-serif"],
      },
    },
  },
  plugins: [],
};
