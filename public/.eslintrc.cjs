module.exports = {
  env: {
    browser: true,
    es2021: true,
    node: true
  },
  parser: "vue-eslint-parser",
  parserOptions: {
    ecmaVersion: "latest",
    sourceType: "module"
  },
  extends: [
    "eslint:recommended",
    "plugin:prettier/recommended",
    "plugin:vue/vue3-essential"
  ],

  plugins: ["vue", "prettier"],
  rules: {
    "prettier/prettier": "warn"
  }
};
