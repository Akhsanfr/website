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
                yellow: "#FFE9AE",
                "dark-green": "#13603B",
                green: "#5B912F",
                "light-green": "#A2C122",
            },
        },
    },
    // plugins: [require("daisyui")],
};
