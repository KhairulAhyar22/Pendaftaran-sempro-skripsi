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
                montserrat: ["Montserrat"],
            },
            colors: {
                "dark-green": "#1E3F41",
                "light-green": "#659093",
                cream: "#DDB07F",
                cgray: "#F5F5F5",
            },
        },
    },
    plugins: [],
};
