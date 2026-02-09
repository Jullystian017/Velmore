import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // Selectors
    const menuToggle = document.getElementById('menu-toggle');
    const sideMenu = document.getElementById('side-menu');
    const menuBackdrop = document.getElementById('menu-backdrop');
    const menuContent = document.getElementById('menu-content');
    const menuClose = document.getElementById('menu-close');

    const cartToggle = document.getElementById('cart-toggle');
    const cartModal = document.getElementById('cart-modal');
    const cartBackdrop = document.getElementById('cart-backdrop');
    const cartContent = document.getElementById('cart-content');
    const cartClose = document.getElementById('cart-close');

    // Helper functions
    const openModal = (modal, backdrop, content, direction = 'left') => {
        modal.classList.remove('hidden');
        // Force reflow
        modal.offsetHeight;
        backdrop.classList.add('opacity-100');
        content.classList.remove(direction === 'left' ? '-translate-x-full' : 'translate-x-full');
        document.body.style.overflow = 'hidden';
    };

    const closeModal = (modal, backdrop, content, direction = 'left') => {
        backdrop.classList.remove('opacity-100');
        content.classList.add(direction === 'left' ? '-translate-x-full' : 'translate-x-full');
        document.body.style.overflow = '';

        setTimeout(() => {
            modal.classList.add('hidden');
        }, 500); // Match transition duration
    };

    // Menu Events
    menuToggle?.addEventListener('click', () => openModal(sideMenu, menuBackdrop, menuContent, 'left'));
    menuClose?.addEventListener('click', () => closeModal(sideMenu, menuBackdrop, menuContent, 'left'));
    menuBackdrop?.addEventListener('click', () => closeModal(sideMenu, menuBackdrop, menuContent, 'left'));

    // Cart Events
    cartToggle?.addEventListener('click', () => openModal(cartModal, cartBackdrop, cartContent, 'right'));
    cartClose?.addEventListener('click', () => closeModal(cartModal, cartBackdrop, cartContent, 'right'));
    cartBackdrop?.addEventListener('click', () => closeModal(cartModal, cartBackdrop, cartContent, 'right'));

    // Navigation Link Events (Close menu when clicking links)
    const navLinks = sideMenu?.querySelectorAll('a');
    navLinks?.forEach(link => {
        link.addEventListener('click', () => closeModal(sideMenu, menuBackdrop, menuContent, 'left'));
    });

    // Product Filtering Logic
    const filterCheckboxes = document.querySelectorAll('.filter-checkbox');
    const productCards = document.querySelectorAll('.product-card');
    const noResults = document.getElementById('no-results');

    const filterProducts = () => {
        const activeFilters = {
            scent: [],
            intensity: []
        };

        filterCheckboxes.forEach(checkbox => {
            if (checkbox.checked) {
                activeFilters[checkbox.name].push(checkbox.value);
            }
        });

        let visibleCount = 0;

        productCards.forEach(card => {
            const cardScent = card.dataset.scent;
            const cardIntensity = card.dataset.intensity;

            const scentMatch = activeFilters.scent.length === 0 || activeFilters.scent.includes(cardScent);
            const intensityMatch = activeFilters.intensity.length === 0 || activeFilters.intensity.includes(cardIntensity);

            if (scentMatch && intensityMatch) {
                card.classList.remove('hidden');
                visibleCount++;
            } else {
                card.classList.add('hidden');
            }
        });

        if (visibleCount === 0) {
            noResults?.classList.remove('hidden');
        } else {
            noResults?.classList.add('hidden');
        }
    };

    filterCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', filterProducts);
    });
});
