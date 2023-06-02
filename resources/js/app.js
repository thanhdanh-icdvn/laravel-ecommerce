import "./bootstrap";
import Chart from "chart.js/auto";
import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";
import PerfectScrollbar from "perfect-scrollbar";
import "flowbite";

window.PerfectScrollbar = PerfectScrollbar;
window.Alpine = Alpine;
window.Chart = Chart;
Alpine.plugin(collapse);
Alpine.start();

new PerfectScrollbar("#default-sidebar");
