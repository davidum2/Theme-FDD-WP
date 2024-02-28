/** @type {import('tailwindcss').Config} */
module.exports = {
  prefix: 'FDD-', 
  content: [
    './**/*.php', 
    './src/**/*.{js,jsx}',
  ],
  theme: {
    extend: {
      colors:{
        primaryColor:'#7433a3',
        secondaryColor: '#6ac3bf' 
      },

      fontFamily: {
          'titulos': ['"FuenteTitulos"', 'sans-serif']
          
      },
      fontSize:{
        'branding' : '2rem'
      }
    },
  },
  plugins: [],
}


