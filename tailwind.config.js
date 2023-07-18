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
      plugins: [require("daisyui")],
    }
  }
}