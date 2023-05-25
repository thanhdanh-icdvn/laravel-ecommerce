import "./bootstrap";
import PerfectScrollbar from "perfect-scrollbar";
import jQuery from "jquery";
import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";
import "flowbite";

window.$ = jQuery;
window.PerfectScrollbar = PerfectScrollbar;
window.Alpine = Alpine;
Alpine.plugin(collapse);
Alpine.start();
