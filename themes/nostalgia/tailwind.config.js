/** @type {import('tailwindcss').Config} */
module.exports = {
  content: require('fast-glob').sync(['**/*.php', '../../plugins/nostalgia/**/*.php']),
  theme: {
    extend: {
      container: {
        center: true,
        padding: '1rem',
      },
      colors: {
        black: {
          100: "#cfcfcf",
          200: "#9e9e9e",
          300: "#6e6e6e",
          400: "#24272D",
          500: "#0d0d0d",
          600: "#0a0a0a",
          700: "#080808",
          800: "#050505",
          900: "#030303"
        },
        yellow: {
          100: "#fff2cc",
          200: "#ffe699",
          300: "#ffd966",
          400: "#ffcd33",
          500: "#ffc000",
          600: "#cc9a00",
          700: "#997300",
          800: "#664d00",
          900: "#332600"
        },
        "light-gray": {
          100: "#fdfdfd",
          200: "#fbfbfb",
          300: "#f9f9f9",
          400: "#f7f7f7",
          500: "#f5f5f5",
          600: "#c4c4c4",
          700: "#868280",
          800: "#626262",
          900: "#313131"
        },
      },
      fontFamily: {
        'noirPro-regular': ['NoirPro Regular', 'sans-serif'],
        'noirPro-semiBold': ['NoirPro SemiBold', 'sans-serif'],
        'noirPro-medium': ['NoirPro Medium', 'sans-serif'],
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}

