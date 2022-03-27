module.exports = {
  content: [
    './resources/**/*.antlers.html',
    './resources/**/*.blade.php',
    './resources/**/*.vue',
    './content/**/*.md'
  ],
  theme: {
    extend: {
      minHeight: ({ theme}) => ({
        ...theme('spacing')
      })
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
