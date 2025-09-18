// resources/js/components/index.js
// Este archivo puede estar vacío inicialmente, o puedes agregar componentes aquí
console.log('Components loaded');

// Ejemplo de un componente básico
export function initMobileMenu() {
    const menuButton = document.querySelector('[data-menu-button]');
    const menu = document.querySelector('[data-menu]');

    if (menuButton && menu) {
        menuButton.addEventListener('click', () => {
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
            // Cambiar el icono del menú (opcional)
            const icon = menuButton.querySelector('svg');
            if (icon) {
                icon.classList.toggle('hidden');
            }
        });
    }
}

// Inicializar componentes cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    initMobileMenu();
});
