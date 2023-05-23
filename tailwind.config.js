import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#007BFF',
                    50: '#E5F2FF',
                    100: '#CCE5FF',
                    200: '#99CAFF',
                    300: '#66B0FF',
                    400: '#3395FF',
                    500: '#007BFF',
                    600: '#0067D6',
                    700: '#0054AD',
                    800: '#004085',
                    900: '#002C5C',
                    950: '#002247'
                },
                secondary: {
                    DEFAULT: '#6C757D',
                    50: '#E6E7E9',
                    100: '#D8DBDD',
                    200: '#BCC1C6',
                    300: '#A1A8AE',
                    400: '#868E96',
                    500: '#6C757D',
                    600: '#596167',
                    700: '#464C51',
                    800: '#33383B',
                    900: '#202325',
                    950: '#17191B'
                },
                success: {
                    DEFAULT: '#28A745',
                    50: '#D6F5DD',
                    100: '#C0F0CB',
                    200: '#92E5A5',
                    300: '#65DA80',
                    400: '#38CF5A',
                    500: '#28A745',
                    600: '#218A39',
                    700: '#1A6D2D',
                    800: '#135121',
                    900: '#0C3415',
                    950: '#09250F'
                },
                danger: {
                    DEFAULT: '#DC3545',
                    50: '#FEF9F9',
                    100: '#FAE3E5',
                    200: '#F3B7BD',
                    300: '#EB8C95',
                    400: '#E4606D',
                    500: '#DC3545',
                    600: '#C62232',
                    700: '#A31C29',
                    800: '#801620',
                    900: '#5E1018',
                    950: '#4C0D13'
                },
                warning:{
                    DEFAULT: '#FFC107',
                    50: '#FFFAED',
                    100: '#FFF4D3',
                    200: '#FFE7A0',
                    300: '#FFDB6D',
                    400: '#FFCE3A',
                    500: '#FFC107',
                    600: '#DDA600',
                    700: '#B48700',
                    800: '#8C6900',
                    900: '#634A00',
                    950: '#4E3B00'
                },
                info:{
                    DEFAULT: '#17A2B8',
                    50: '#BEEFF7',
                    100: '#A7E9F4',
                    200: '#7ADEEE',
                    300: '#4CD3E9',
                    400: '#1FC8E3',
                    500: '#17A2B8',
                    600: '#128294',
                    700: '#0E626F',
                    800: '#09424B',
                    900: '#052227',
                    950: '#031215'
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

    plugins: [forms, typography],
};
