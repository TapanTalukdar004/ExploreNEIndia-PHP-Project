// js/account-interactions.js

document.addEventListener('DOMContentLoaded', () => {

    const bookingListContainer = document.getElementById('booking-list-container');

    // Use event delegation for cancel buttons
    if (bookingListContainer) {
        bookingListContainer.addEventListener('click', function(event) {
            // Check if the clicked element is a cancel button
            if (event.target.classList.contains('cancel-booking-btn')) {
                const button = event.target;
                const bookingId = button.getAttribute('data-booking-id');

                if (!bookingId) {
                    console.error('Booking ID not found on cancel button.');
                    return;
                }

                // --- Confirmation Dialog ---
                const confirmationMessage = "Are you sure you want to cancel this booking?\nThis action cannot be easily undone.";
                if (confirm(confirmationMessage)) {
                    // --- If confirmed, submit cancellation request ---
                    submitCancellation(bookingId);
                }
            }
        });
    } else {
        // console.log("Booking list container not found.");
    }

    // --- Function to submit cancellation via POST ---
    function submitCancellation(bookingId) {
        // Create a temporary form
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = 'cancel_booking.php'; // Point to your backend script
        form.style.display = 'none'; // Hide the form

        // Create a hidden input field for the booking ID
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'booking_id';
        input.value = bookingId;

        // Append input to form, and form to body
        form.appendChild(input);
        document.body.appendChild(form);

        // Submit the form
        form.submit();

        // Clean up the form (optional, happens on page redirect anyway)
        // document.body.removeChild(form);
    }

    // --- Add other account page interactions here later if needed ---
    // E.g., Edit Profile form handling, etc.

});