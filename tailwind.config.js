const plugin = require('tailwindcss/plugin')

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './index.php',
    './privacy-policy.php',
    './terms-of-service.php',
    './projects/**/*.php',
    './partials/**/*.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Plus Jakarta Sans', 'Inter', 'system-ui', 'sans-serif'],
      },
      colors: {
        brand: {
          50: '#eff6ff',
          100: '#dbeafe',
          500: '#3b82f6',
          600: '#0056b3',
          700: '#004085',
          900: '#1e3a8a',
        },
      },
    },
  },
  plugins: [],
}
