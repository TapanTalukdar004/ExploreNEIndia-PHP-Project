// navbar.js (or add to your main script file)

document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('header.main-header');
    const scrollThreshold = 10; // Pixels to scroll before changing background

    if (!header) {
        console.warn("Navbar element ('header.main-header') not found.");
        return; // Exit if header doesn't exist
    }

    const handleScroll = () => {
        if (window.scrollY > scrollThreshold) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };

    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);

    // Initial check in case the page loads already scrolled
    handleScroll();
});