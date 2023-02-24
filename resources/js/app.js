import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import '../js/libs/stimulus';
import '../js/libs/turbo';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
