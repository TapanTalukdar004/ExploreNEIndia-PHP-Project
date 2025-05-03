document.addEventListener('DOMContentLoaded', () => {

    const cards = document.querySelectorAll('.destination-card');

    // Function to deactivate ALL cards (used for clicking outside)
    const deactivateAllCards = () => {
        cards.forEach(card => card.classList.remove('card-active'));
    };

    cards.forEach(card => {
        const button = card.querySelector('.explore-button');
        const h3 = card.querySelector('h3'); // Find the heading element once

        // 1. Activate card on click (if not clicking the button itself)
        card.addEventListener('click', function (event) {
            // If the click target is the button or inside it, do nothing here
            if (event.target.closest('.explore-button')) {
                return;
            }

            // If already active, do nothing (optional, prevents re-triggering)
            if (this.classList.contains('card-active')) {
                return;
            }

            // Deactivate any other potentially active card first
            // (Although mouseleave usually handles this, this adds safety)
            deactivateAllCards();

            // Activate the current card
            this.classList.add('card-active');
        });

        // 2. Deactivate card when mouse leaves it
        card.addEventListener('mouseleave', function () {
            this.classList.remove('card-active');
        });

        // 3. Handle Explore button click separately
        if (button && h3) { // Ensure button and heading exist
            button.addEventListener('click', function (event) {
                // IMPORTANT: Stop this click from triggering the card's click listener
                event.stopPropagation();

                // Get destination name (cleanly)
                const destinationName = h3.textContent.trim().toLowerCase();
                let targetUrl = '#'; // Default fallback URL

                // --- Define Target URLs based on Destination ---
                if (destinationName === 'assam') {
                    targetUrl = 'assam.php';
                }
                else if (destinationName === 'meghalaya') {
                    targetUrl = 'meghalaya.php';
                }
                else if (destinationName === 'arunachal pradesh') {
                    targetUrl = 'arunachal.php';
                }
                else if (destinationName === 'sikkim') {
                    targetUrl = 'sikkim.php';
                }
                else if (destinationName === 'manipur') {
                    targetUrl = 'manipur.php';
                }
                else if (destinationName === 'mizoram') {
                    targetUrl = 'mizoram.php';
                }
                else if (destinationName === 'nagaland') {
                    targetUrl = 'nagaland.php';
                }
                else if (destinationName === 'tripura') {
                    targetUrl = 'tripura.php';
                }

                // ... and so on for others

                // --- Action: Open in New Tab ---
                if (targetUrl !== '#') {
                    // '_blank' opens the URL in a new tab/window
                    window.open(targetUrl, '_blank');
                    console.log(`Opened ${targetUrl} for ${destinationName} in new tab.`);
                } else {
                    // Optional: Alert or log if no specific URL is defined
                    console.warn(`No specific target URL defined for: ${destinationName}`);
                    alert(`Explore details for ${h3.textContent.trim()}! (No specific page set)`);
                }

                // Deactivate the card after the button action
                card.classList.remove('card-active');
            });
        }
    });

    // 4. Deactivate any active card if user clicks outside all cards (fallback)
    document.addEventListener('click', function (event) {
        // If the element clicked is not a card or inside a card
        if (!event.target.closest('.destination-card')) {
            deactivateAllCards();
        }
    });
}); // End DOMContentLoaded