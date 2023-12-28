/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{php,html,js}"],
  theme: {
    extend: {
      fontFamily :{
       poppins :[ 'Poppins','sans serif']
      },
      colors:{
        primary:['#4564E5']
      },
      backgroundColor:{
        primary:['#4564E5']
      }
      
    },
  },
  plugins: [],
}

