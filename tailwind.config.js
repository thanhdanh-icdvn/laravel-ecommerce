import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";
import taiwindElement from "tw-elements/dist/plugin.cjs";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                google: {
                    DEFAULT: "#EA4335",
                    50: "#FBDEDB",
                    100: "#F9CDC9",
                    200: "#F6AAA4",
                    300: "#F2887F",
                    400: "#EE655A",
                    500: "#EA4335",
                    600: "#D12416",
                    700: "#9E1B10",
                    800: "#6C130B",
                    900: "#390A06",
                    950: "#1F0503",
                },

                facebook: {
                    DEFAULT: "#1877F2",
                    50: "#C6DDFC",
                    100: "#B3D2FB",
                    200: "#8CBBF9",
                    300: "#65A4F6",
                    400: "#3F8EF4",
                    500: "#1877F2",
                    600: "#0B5DC7",
                    700: "#084492",
                    800: "#052B5C",
                    900: "#021227",
                    950: "#01060D",
                },

                zalo: {
                    DEFAULT: "#0068FF",
                    50: "#B8D5FF",
                    100: "#A3C9FF",
                    200: "#7AB0FF",
                    300: "#5298FF",
                    400: "#2980FF",
                    500: "#0068FF",
                    600: "#0051C7",
                    700: "#003A8F",
                    800: "#002357",
                    900: "#000C1F",
                    950: "#000103",
                },
            },
        },
    },

    plugins: [forms, typography, taiwindElement],
};
