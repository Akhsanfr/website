/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                kaushan: ["kaushan"],
                comforta: ["comforta"],
                "comforta-bold": ["comforta-bold"],
            },
            colors: {
                green: "#5B912F",
                "light-yellow": "#EFFFAD",
                "dark-green": "#13603B",
                yellow: "#FFE9AE",
                "light-green": "#A2C122",
                "dark-yellow": "#734826",
            },
        },
    },
    // plugins: [require("daisyui")],
};
