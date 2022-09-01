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
                "light-green": "#A2C122",
                green: "#5B912F",
                "dark-green": "#13603B",
                "light-yellow": "#FCE17B",
                yellow: "#FCE17B",
                "dark-yellow": "#D19533",
                // "light-green": "#A2C122",
                // "dark-yellow": "#734826",
            },
        },
    },
    // plugins: [require("daisyui")],
};
