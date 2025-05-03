// js/package-details.js

document.addEventListener("DOMContentLoaded", () => {
  // --- DOM Elements ---
  const pageContainer = document.getElementById("package-detail-page");
  const titleElement = document.getElementById("package-title");
  const breadcrumbTitle = document.getElementById("package-breadcrumb-title");
  const stateElement = document.getElementById("package-state");
  const durationElement = document.getElementById("package-duration");
  const ratingElement = document.getElementById("package-rating");
  const priceElement = document.getElementById("package-price");
  const imageElement = document.getElementById("package-image");
  const descriptionElement = document.getElementById("package-description");
  const includesList = document.getElementById("package-includes");
  const excludesList = document.getElementById("package-excludes");
  const exclusionsSection = document.getElementById("exclusions-section");
  const highlightsList = document.getElementById("package-highlights");
  const highlightsSection = document.getElementById("highlights-section");
  const destinationsTags = document.getElementById("package-destinations");
  const itineraryAccordionContainer = document.getElementById(
    "itinerary-accordion"
  );
  const accommodationDetailsContainer = document.getElementById(
    "accommodation-details"
  );
  const galleryGrid = document.getElementById("package-gallery-grid");
  const sidebarPriceElement = document.getElementById("sidebar-price");
  const faqAccordionContainer = document.querySelector(".pd-faq-accordion"); // For FAQ accordion items
  const relatedPackagesSection = document.getElementById("pd-related-section");
  const relatedPackagesSubtitle = document.getElementById(
    "related-packages-subtitle"
  );

  // Tab Elements
  const tabTriggers = document.querySelectorAll(".pd-tab-trigger");
  const tabContents = document.querySelectorAll(".pd-tab-content");

  // --- Data Loading ---
  // Function to get query parameter
  function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
  }

  // Get package ID from URL
  const packageId = getQueryParam("id");

  // Find the package data (assuming packagesData is available globally from packagesData.js)
  const packageData = packagesData.find((pkg) => pkg.id === packageId);

  // --- Populate Page ---
  if (packageData) {
    // Set page title
    document.title = `${packageData.title} - TripNE`;

    // Apply State Theme Class
    const stateClass = packageData.state.toLowerCase().replace(/\s+/g, "-"); // e.g., "arunachal-pradesh"
    if (pageContainer) pageContainer.classList.add(`state-theme-${stateClass}`);
    if (relatedPackagesSection)
      relatedPackagesSection.classList.add(`state-theme-${stateClass}`); // Theme related section too

    // Hero Section
    titleElement.textContent = packageData.title;
    breadcrumbTitle.textContent = packageData.title;
    stateElement.textContent = packageData.state;
    durationElement.textContent = packageData.duration;
    ratingElement.textContent = packageData.rating.toFixed(1);
    priceElement.textContent = `₹${packageData.price.toLocaleString()}`;
    sidebarPriceElement.textContent = `₹${packageData.price.toLocaleString()}`;
    imageElement.src = packageData.image;
    imageElement.alt = packageData.title;

    // Overview Tab
    descriptionElement.textContent = packageData.description;

    includesList.innerHTML = packageData.included
      .map((item) => `<li><i class="fas fa-check icon"></i> ${item}</li>`)
      .join("");

    if (packageData.exclusions && packageData.exclusions.length > 0) {
      exclusionsList.innerHTML = packageData.exclusions
        .map((item) => `<li><i class="fas fa-times icon"></i> ${item}</li>`)
        .join("");
      exclusionsSection.style.display = "block";
    } else {
      exclusionsSection.style.display = "none";
    }

    if (packageData.highlights && packageData.highlights.length > 0) {
      highlightsList.innerHTML = packageData.highlights
        .map((item) => `<li>${item}</li>`)
        .join("");
      highlightsSection.style.display = "block";
    } else {
      highlightsSection.style.display = "none";
    }

    destinationsTags.innerHTML = packageData.destinations
      .map((dest) => `<span>${dest}</span>`)
      .join("");

    // Itinerary Tab
    itineraryAccordionContainer.innerHTML = packageData.itinerary
      .map(
        (day) => `
                <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">
                        Day ${day.day}: ${day.activities[0]
          .split(" ")
          .slice(0, 4)
          .join(" ")}...
                        <i class="fas fa-chevron-down icon"></i>
                    </button>
                    <div class="pd-accordion-content">
                        ${day.activities
                          .map(
                            (activity) =>
                              `<p><i class="fas fa-clock icon"></i>${activity}</p>`
                          )
                          .join("")}
                    </div>
                </div>
            `
      )
      .join("");

    // Accommodation Tab
    if (packageData.accommodation && packageData.accommodation.length > 0) {
      accommodationDetailsContainer.innerHTML = packageData.accommodation
        .map(
          (acc) => `
                    <div class="pd-accommodation-item">
                        <img src="${
                          acc.image || "placeholder-hotel.jpg"
                        }" alt="${acc.name}" loading="lazy">
                        <div class="content">
                             <span class="type-tag">${acc.type}</span>
                             <h4>${acc.name}</h4>
                             ${
                               acc.description
                                 ? `<p>${acc.description}</p>`
                                 : ""
                             }
                        </div>
                    </div>
                `
        )
        .join("");
    } else {
      // Show generic info if specific hotels aren't listed
      accommodationDetailsContainer.innerHTML = `
                <p>This package includes stays in comfortable, well-selected 3-star equivalent hotels or quality homestays/resorts based on location and availability, ensuring a pleasant experience throughout your journey.</p>
                 <ul class="pd-sidebar-why-list"> <!-- Reusing style -->
                    <li><i class="fas fa-check icon"></i> Standard Hotels (Cities)</li>
                    <li><i class="fas fa-check icon"></i> Heritage Properties (Where available)</li>
                    <li><i class="fas fa-check icon"></i> Eco-Lodges/Resorts (Nature areas)</li>
                    <li><i class="fas fa-check icon"></i> Clean & Safe Homestays (Remote areas)</li>
                </ul>
            `;
    }

    // Gallery Tab
    const galleryImages = packageData.destinations.map((dest, index) => ({
      src: `https://source.unsplash.com/random/600x600/?${dest},travel&sig=${index}`, // sig ensures slightly different random images
      alt: dest,
    }));
    // Add generic images if needed
    galleryImages.push({
      src: `https://source.unsplash.com/random/600x600/?${packageData.state},landscape`,
      alt: `${packageData.state} Landscape`,
    });
    galleryImages.push({
      src: `https://source.unsplash.com/random/600x600/?${packageData.state},culture`,
      alt: `${packageData.state} Culture`,
    });
    galleryImages.push({
      src: `https://source.unsplash.com/random/600x600/?${packageData.state},food`,
      alt: `${packageData.state} Food`,
    });

    galleryGrid.innerHTML = galleryImages
      .map(
        (img) => `
                <div class="pd-gallery-item">
                    <img src="${img.src}" alt="${img.alt}" loading="lazy">
                </div>
            `
      )
      .join("");

    // Related Packages Subtitle
    relatedPackagesSubtitle.textContent = `Discover more amazing adventures in ${packageData.state} and beyond`;

    // Add Event Listeners AFTER dynamic content is added
    setupAccordions();
  } else {
    // Handle package not found
    titleElement.textContent = "Package Not Found";
    document.querySelector(".pd-main-content-section").innerHTML =
      '<p class="container">Sorry, the requested package could not be found. Please return to the packages page.</p>';
  }

  // --- Tab Functionality ---
  tabTriggers.forEach((trigger) => {
    trigger.addEventListener("click", () => {
      const targetTab = trigger.getAttribute("data-tab");

      // Deactivate all triggers and content
      tabTriggers.forEach((t) => t.classList.remove("active"));
      tabContents.forEach((c) => c.classList.remove("active"));

      // Activate clicked trigger and corresponding content
      trigger.classList.add("active");
      document.getElementById(`content-${targetTab}`).classList.add("active");
    });
  });

  // --- Accordion Functionality ---
  function setupAccordions() {
    // Select ALL accordion items (Itinerary + FAQ)
    const accordionItems = document.querySelectorAll(".pd-accordion-item");

    accordionItems.forEach((item) => {
      const trigger = item.querySelector(".pd-accordion-trigger");
      // const content = item.querySelector('.pd-accordion-content'); // Direct content selection removed for height transition

      if (trigger) {
        trigger.addEventListener("click", () => {
          const currentlyOpen = item.classList.contains("open");

          // Optional: Close other items if you want only one open at a time within its container
          // const parentAccordion = item.closest('.pd-accordion');
          // if (parentAccordion) {
          //     parentAccordion.querySelectorAll('.pd-accordion-item.open').forEach(openItem => {
          //         if (openItem !== item) {
          //             openItem.classList.remove('open');
          //         }
          //     });
          // }

          // Toggle the clicked item
          item.classList.toggle("open", !currentlyOpen);
        });
      }
    });
  }
  // Initial setup for accordions already present (like FAQ)
  setupAccordions();

  // --- "Book Now" Button Simulation ---
  const bookNowButtons = document.querySelectorAll(
    "#hero-book-now-btn, #sidebar-book-now-btn"
  );
  bookNowButtons.forEach((button) => {
    button.addEventListener("click", () => {
      alert(
        `Booking initiated for "${
          packageData?.title || "this package"
        }"! Our team will contact you shortly.`
      );
      // In a real app, this would redirect to a booking form or send data
    });
  });
});
