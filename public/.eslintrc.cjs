module.exports = {
    env: {
        browser: true,
        es2021: true,
        node: true
    },
    parser: "vue-eslint-parser",
    parserOptions: {
        vueFeatures: {
            filter: true,
            interpolationAsNonHTML: true,
            styleCSSVariableInjection: true,
            customMacros: []
        },
        ecmaVersion: "latest",
        sourceType: "module"
    },
    extends: [
        "eslint:recommended",
        "plugin:vue/vue3-recommended",
        "plugin:vue/vue3-essential"
    ],

    plugins: ["vue"],
    rules: {
        "vue/html-indent": ["error", 4, {baseIndent: 1}],
        "vue/script-indent": ["error", 4, {baseIndent: 1}],

        "vue/singleline-html-element-content-newline": "off",
        "vue/multiline-html-element-content-newline": "off",
        "vue/html-closing-bracket-newline": "off",
        "vue/html-self-closing": [
            "error",
            {
                html: {
                    void: "always",
                    normal: "never",
                    component: "always"
                }
            }
        ],
        indent: ["error", 4]
    }
};
