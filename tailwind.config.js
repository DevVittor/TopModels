/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            padding: {
                "10px-25px": "10px 25px",
                "10px-120px": "10px 120px",
                "20px-120px": "20px 120px",
                "20px-0px": "20px 0px",
                "3px-15px": "3px 15px",
                "3px-12px": "3px 12px",
            },
            textColor: {
                rosa: "#EF375D",
            },
            boxShadow: {
                rgba: "rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px",
                card: "rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px",
            },
            width: {
                limite: "1819px",
            },
            backgroundColor: {
                pink: "#EF375D",
                azul: "#428cd8",
            },
            borderColor: {
                rosa: "#EF375D",
            },
            height: {
                noventa: "85%",
                dez: "15%",
            },
            borderWidth: {
                tres: "3px",
            },
        },
    },
    plugins: [],
};