/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["index.php", "./pages/**.{html,js,php}"],
  theme: {
    container: {
      center: true,
      padding: '2rem',
    },
    extend: {
      colors : {
        primary : '#03C988',
        secondary: '#6478b',
        secondary_btn: '#30A2FF',
        dark : '#020617',
        red_magic : '#ef4444',

      },
      fontSize: {
        ekstra_kecil :'0.8rem',
        kecil_px : '7px',
      },
      screens: {
        '2xl': '1320px',
      },
    },
  },
  plugins: [],
}

