import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                inter: ["'Inter', sans-serif"],
            },
            textColor: {
                rosa: "#FF2171",
            },
            padding: {
                headerPadding: "10px 120px",
            },
            backgroundColor: {
                headerBlack: "#191825",
                gray: "#F1F6F9",
                gray2: "#DDE6ED",
            },
            height: {
                bannerxl: "600px",
                bannerlg: "500px",
                altura550px: "550px",
                alturamax: "792.4px",
                footeraltura: "52px",
            },
            maxWidth: {
                maxCardImg: "1000px",
            },
            borderColor: {
                rosa: "#FF2171",
            },
        },
    },

    plugins: [forms, typography],
};
