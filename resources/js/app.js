import "./bootstrap";
import jQuery from "jquery";
import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";

window.$ = jQuery;
window.Alpine = Alpine;
Alpine.plugin(collapse);
Alpine.start();
