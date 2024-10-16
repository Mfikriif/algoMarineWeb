/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: ["./node_modules/flowbite/**/*.js"],

    theme: {
        colors: {
            transparent: "transparent",
            current: "currentColor",
            white: "#ffffff",
            AlgoBlue: {
                100: "#2596BE",
            },
        },
        extend: {},
    },
    plugins: [require("flowbite/plugin")],
};
