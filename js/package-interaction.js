// js/package-interactions.js
// Handles Tabs and Accordions for static package detail pages

document.addEventListener("DOMContentLoaded", () => {
  // --- Tab Functionality ---
  const tabTriggers = document.querySelectorAll(".pd-tab-trigger");
  const tabContents = document.querySelectorAll(".pd-tab-content");

  if (tabTriggers.length > 0 && tabContents.length > 0) {
    // Set the first tab as active initially
    if (tabTriggers[0] && tabContents[0]) {
      tabTriggers[0].classList.add("active");
      tabContents[0].classList.add("active");
    }

    tabTriggers.forEach((trigger) => {
      trigger.addEventListener("click", () => {
        const targetTab = trigger.getAttribute("data-tab");
        const targetContent = document.getElementById(`content-${targetTab}`);

        if (!targetContent) {
          console.error(
            `Tab content not found for target: content-${targetTab}`
          );
          return;
        }

        // Deactivate all triggers and content
        tabTriggers.forEach((t) => t.classList.remove("active"));
        tabContents.forEach((c) => c.classList.remove("active"));

        // Activate clicked trigger and corresponding content
        trigger.classList.add("active");
        targetContent.classList.add("active");
      });
    });
  } else {
    // console.warn("Static page: Tab triggers or content panels not found.");
  }

  // --- Accordion Functionality ---
  function setupAccordions() {
    const accordionTriggers = document.querySelectorAll(
      ".pd-accordion .pd-accordion-trigger"
    );

    if (accordionTriggers.length === 0) {
      // console.warn("No accordion triggers found to set up.");
      return;
    }

    accordionTriggers.forEach((trigger) => {
      if (trigger.dataset.accordionInitialized) return; // Prevent double listeners
      trigger.dataset.accordionInitialized = "true";

      trigger.addEventListener("click", () => {
        const item = trigger.closest(".pd-accordion-item");
        if (!item) return;
        const currentlyOpen = item.classList.contains("open");

        // Optional: Close others in the SAME accordion
        const parentAccordion = item.closest(".pd-accordion");
        if (
          parentAccordion &&
          !parentAccordion.classList.contains("allow-multiple-open")
        ) {
          // Add class 'allow-multiple-open' to accordion container if you want multiple
          parentAccordion
            .querySelectorAll(".pd-accordion-item.open")
            .forEach((openItem) => {
              if (openItem !== item) {
                openItem.classList.remove("open");
              }
            });
        }
        // Toggle the clicked item
        item.classList.toggle("open", !currentlyOpen);
      });
    });
  }
  // Initial setup for accordions
  setupAccordions();

  // --- Optional: Simple "Book Now" Alert ---
  const bookNowButtons = document.querySelectorAll(".book-now-button"); // Use specific class
  bookNowButtons.forEach((button) => {
    button.addEventListener("click", () => {
      // Get package title from the H1 on the page
      const pageTitleElement = document.querySelector(
        "#package-detail-page h1"
      );
      const pageTitle = pageTitleElement
        ? pageTitleElement.textContent.trim()
        : "this package";
      alert(
        `Booking initiated for "${pageTitle}"! Our team will contact you shortly.`
      );
    });
  });
});
