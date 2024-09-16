/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./pages/**/*.php",     // Include PHP files in the 'pages' folder and its subdirectories
    "./components/**/*.php", // Include PHP files in the 'components' folder and its subdirectories
    "./src/**/*.html",      // Include HTML files if you have any in 'src' (or adjust as needed)
    "./src/**/*.js",        // Include JavaScript files in 'src'
    "./src/**/*.css",       // Include CSS files in 'src'
    "./css/**/*.css",       // Include CSS files in 'css'
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}