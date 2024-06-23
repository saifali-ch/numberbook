import './bootstrap';
import Alpine from 'alpinejs';

import.meta.glob([
    '../images/**',
    '../svg/**',
    '../fonts/**',
]);

window.Alpine = Alpine;
Alpine.start()
