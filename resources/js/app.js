import "./bootstrap";
import "./coundown";
import Chart from "chart.js/auto";
import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";
import PerfectScrollbar from "perfect-scrollbar";
import AOS from "aos";

import.meta.glob(["../images/**", "../fonts/**"]);

window.PerfectScrollbar = PerfectScrollbar;
window.Alpine = Alpine;
window.Chart = Chart;
window.AOS = AOS;

Alpine.plugin(collapse);
Alpine.start();
AOS.init({
    duration: 1000,
    once: true,
});
