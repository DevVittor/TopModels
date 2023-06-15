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
                "10px-80px": "10px 80px",
                "0px-120px": "0px 120px",
                "0px-50px": "0px 50px",
                "20px-120px": "20px 120px",
                "20px-0px": "20px 0px",
                "3px-15px": "3px 15px",
                "3px-12px": "3px 12px",
            },
            inset: {
                topheader: "862px",
                perfiltop: "96px",
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
                noventacinco: "95%",
            },
            backgroundColor: {
                pink: "#EF375D",
                azul: "#428cd8",
                cinza: "#e8e8e8",
            },
            borderColor: {
                rosa: "#EF375D",
            },
            height: {
                noventa: "85%",
                dez: "15%",
                profileheader: "862px",
                card: "382px",
                cardsquare: "382px",
                banner: "700px",
                profile: "463px",
            },
            width: {
                cardsquare: "650px",
                ultrawidth: "1200px",
                oitenta: "95%",
            },
            maxWidth: {
                cardProfile: "80%",
            },
            borderWidth: {
                tres: "3px",
            },
            gridTemplateColumns: {
                templatecol: "repeat(auto-fill, minmax(200px, 1fr))",
            },
            gridAutoRows: {
                dez: "10px",
            },
            margin: {
                zeroauto: "0 auto",
            },
        },
    },
    plugins: [],
};
