/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                "bg-gray-transparant": "rgba(0, 0, 0, 0.4)",
            },
        },
    },
    plugins: [],
};
