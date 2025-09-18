// Importa Alpine.js
import Alpine from 'alpinejs'
window.Alpine = Alpine

// Registra tus componentes personalizados
document.addEventListener('alpine:init', () => {
    Alpine.data('counter', (target) => ({
        count: 0,
        init() {
            let current = 0
            const step = Math.ceil(target / 100) // velocidad
            const interval = setInterval(() => {
                current += step
                if (current >= target) {
                    this.count = target
                    clearInterval(interval)
                } else {
                    this.count = current
                }
            }, 20) // cada 20ms
        }
    }))
})

import GLightbox from 'glightbox';
import 'glightbox/dist/css/glightbox.css';

document.addEventListener('DOMContentLoaded', () => {
    GLightbox({
        selector: '.glightbox',
        touchNavigation: true,
        loop: true,
        autoplayVideos: true
    });
});

// Inicia Alpine al final
Alpine.start()
