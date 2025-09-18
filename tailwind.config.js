export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: {
          600: "#0284c7", // azul corporativo ejemplo
          700: "#0369a1",
          800: "#075985",
        },
        construction: {
          sand: "#fdf6e3", // color de fondo arena
        },
      },
    },
  },
  plugins: [],
}
