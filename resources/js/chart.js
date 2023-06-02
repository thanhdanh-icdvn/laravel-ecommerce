import Chart from "chart.js/auto";
const labels = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
];

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min) + min); // The maximum is exclusive and the minimum is inclusive
}
const data = {
    labels: labels,
    datasets: [
        {
            label: "Outcome",
            backgroundColor: "rgb(88, 186, 171)",
            borderColor: "rgb(88, 186, 171)",
            data: [
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
            ],
            order: "1",
        },
        {
            label: "Income",
            backgroundColor: "rgb(246, 188, 0)",
            borderColor: "rgb(246, 188, 0)",
            data: [
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
            ],
            order: "1",
        },
        {
            label: "Revenue",
            backgroundColor: "rgb(62, 67, 95)",
            borderColor: "rgb(62, 67, 95)",
            data: [
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
                getRandomInt(0, 99999),
            ],
            type: "line",
            order: "0",
        },
    ],
};

const config = {
    type: "bar",
    data: data,
};

new Chart(document.getElementById("myChart"), config);
