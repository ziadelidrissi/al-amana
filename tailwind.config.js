/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ["./view/*.{html,js,php}","./assets/script/*.js"],
  theme: {
    extend: {
      colors : {
        'black':'#000000',
        'white':'#FFFFFA',
        'yellow':'#C2A83E',
        'green':'#00914B',
      },
      fontFamily:{
        'body':'"Poppins", sans-serif',
        'sans':'"Montserrat", sans-serif',
      },
      animation:{
        'shake': 'shake 0.82s cubic-bezier(.36,.07,.19,.97) both',
      },
      keyframes: {
          'shake' : {
              '10%, 90%': {
                  transform: 'translate3d(-1px, 0, 0)'
              },
              '20%, 80%' : {
                  transform: 'translate3d(2px, 0, 0)'
              },
              '30%, 50%, 70%': {
                  transform: 'translate3d(-4px, 0, 0)'
              },
              '40%, 60%': {
                  transform: 'translate3d(4px, 0, 0)'
              }
          }
      }
    },
  },
  plugins: [require("daisyui")],
}