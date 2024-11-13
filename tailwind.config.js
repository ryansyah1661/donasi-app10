/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      container: {
        center: true,
        padding: '2rem',
      },
  colors: {
    'primary': '#114232',
    'secondary': '#87A922',
    'yellow': '#FCDC2A',
    'light-yellow': '#F7F6BB',
    'black': '	#000000',
    'white': '#FBFBFB',
    'gray': '	#E0E0E0',
    'gray2': '#3E454B',
    'gray3': '#b5b1b3',
    'gray4': '#8b8a8a',
    'gray5': '#404040',
    'gray6': '#36454F',
    'gray7': '#acacac',
    'rose': '#e11d48',
  },
  animation: {
      marquee: "marquee var(--duration, 30s) linear infinite",
  },
  keyframes: {
      marquee: {
          to: { transform: "translateX(-50%)" },
      },
  },
},
},
plugins: [],
}