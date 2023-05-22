import './bootstrap';
import './editor';
import './tw-element';
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse'

window.Alpine = Alpine;
Alpine.plugin(collapse);
Alpine.start();
