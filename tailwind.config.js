import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "none",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#30736C',
                    50: '#ACDCD7',
                    100: '#9AD5CF',
                    200: '#76C6BE',
                    300: '#52B7AC',
                    400: '#3F978E',
                    500: '#30736C',
                    600: '#255A54',
                    700: '#1B413D',
                    800: '#102725',
                    900: '#060E0D',
                    950: '#010202'
                },
                secondary: {
                    DEFAULT: "#6C757D",
                    50: "#E6E7E9",
                    100: "#D8DBDD",
                    200: "#BCC1C6",
                    300: "#A1A8AE",
                    400: "#868E96",
                    500: "#6C757D",
                    600: "#596167",
                    700: "#464C51",
                    800: "#33383B",
                    900: "#202325",
                    950: "#17191B",
                },
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
};
