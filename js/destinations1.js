// js/destinations.js

document.addEventListener('DOMContentLoaded', () => {
    const scrollContainer = document.getElementById('destinationsContainer');
    const scrollLeftBtn = document.getElementById('scroll-left-btn');
    const scrollRightBtn = document.getElementById('scroll-right-btn');

    if (!scrollContainer || !scrollLeftBtn || !scrollRightBtn) {
        // console.warn('Scroll container or buttons not found on this page.');
        return; // Exit if elements aren't present
    }

    const scrollAmount = 300; // How many pixels to scroll on each click (adjust as needed)

    scrollLeftBtn.addEventListener('click', () => {
        scrollContainer.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });
    });

    scrollRightBtn.addEventListener('click', () => {
        scrollContainer.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    });

    // Optional: Hide/show scroll buttons based on scroll position
    function checkScrollButtons() {
        if (!scrollContainer) return;
        const maxScrollLeft = scrollContainer.scrollWidth - scrollContainer.clientWidth;
        scrollLeftBtn.style.display = scrollContainer.scrollLeft <= 10 ? 'none' : 'flex'; // Hide if at start
        scrollRightBtn.style.display = scrollContainer.scrollLeft >= maxScrollLeft - 10 ? 'none' : 'flex'; // Hide if at end
    }

    // Initial check and check on scroll
    scrollContainer.addEventListener('scroll', checkScrollButtons, { passive: true });
    checkScrollButtons(); // Initial check on load

});