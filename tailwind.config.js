/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'hijau-primary' : '#319577',
        'hijau-secondary' : '#5FBFA3',
        'abu-100' : '#F0F0F0',
        'abu-150' : '#E9E9E9',
        'abu-200' : '#CFCFCF',
        'abu-300' : '#929292',
        'merah-primary' : '#953131',
      },
      fontFamily:{
        'kanit': ['Kanit'],
      },
      boxShadow:{
        'drop': '0 4px 4px rgba(0, 0, 0, 0.3)',
        'big': '4px 4px 6px rgba(0, 0, 0, 0.25)'
      }
      
    },
  },
  plugins: [require('@tailwindcss/forms'),],
}