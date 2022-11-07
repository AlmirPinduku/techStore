/** @type {import('tailwindcss').Config} */
module.exports = {

    plugins: [
      require('@tailwindcss/forms'),
    ],
  content: ["./*.{html,js,php}"],
  theme: {
    extend: {
      colors: {
        red: {
          '100': '#f5f5f5',
          '200': '#FED7D7',
          '300': '#FEB2B2',
          '400': '#FC8181',
          '500': '#F56565',
          '600': '#E53E3E',
          '700': '#C53030',
          '800': '#9B2C2C',
          '900': '#742A2A',
        }
      }
    },
    
  },
  plugins: [],
}
