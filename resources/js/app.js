import "./bootstrap";
import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";
import PerfectScrollbar from "perfect-scrollbar";
import "flowbite";
window.PerfectScrollbar = PerfectScrollbar;
window.Alpine = Alpine;
Alpine.plugin(collapse);
Alpine.start();

new PerfectScrollbar("#default-sidebar");
// new PerfectScrollbar('.table-wrap');
