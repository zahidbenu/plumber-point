/** @type {import('tailwindcss').Config} */

module.exports = {
    content: [
      './docs/**/*.html',
      './docs/**/*.{html,js}',
    ],
    theme: {
      extend: {
        fontFamily: {
          roboto: ['Roboto', 'sans-serif'],
          BG: ['Bricolage Grotesque', 'sans-serif'],
          mukta: ['Mukta', 'sans-serif'],
          rubik: ['Rubik', 'sans-serif']
        },
      },
      screens: {
        xs: '480px',
        sm: '640px',
        md: '768px',
        lg: '1024px',
        xl: '1202px',
      },
      container: {
        maxWidth: '1202px',
        center: true,
        padding: '1rem',
        screens: {
          xs: '480px',
          sm: '640px',
          md: '768px',
          lg: '1024px',
          xl: '1202px',
        },
      },
    }
  };
  
  