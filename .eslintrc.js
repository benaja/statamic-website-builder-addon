module.exports = {
  root: true,
  env: {
    browser: true,
    node: true,
  },
  parser: 'vue-eslint-parser',

  extends: [
    'plugin:prettier/recommended',
    'prettier',
    'plugin:vue/recommended',
    'plugin:tailwindcss/recommended',
  ],
  plugins: ['prettier', 'tailwindcss'],
  // add your custom rules here
  rules: {
    'vue/no-v-html': 'off',
    'tailwindcss/no-custom-classname': 'off',
  },
}
