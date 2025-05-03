document.addEventListener("DOMContentLoaded", () => {
  // --- Data (Copied from lib/data.ts - Should be fetched in a real app) ---
  const packagesData = [
    {
      id: "meghalaya-adventure",
      title: "Meghalaya Adventure Explorer",
      state: "Meghalaya",
      duration: "6 Days / 5 Nights", // Use this format for consistency
      numericDuration: 6, // Add numeric for easier sorting/filtering
      price: 24999,
      image:
        "images/2-4.jpg", // Use relative path for local images
      rating: 4.8,
      destinations: ["Shillong", "Cherrapunji", "Dawki", "Mawlynnong"],
      description:
        "Explore the magical land of clouds. Trek to living root bridges, swim in crystal clear rivers, experience Khasi culture.",
      // Add other fields like included, itinerary if needed for display later
    },
    {
      id: "assam-wildlife",
      title: "Assam Wildlife Safari",
      state: "Assam",
      duration: "5 Days / 4 Nights",
      numericDuration: 5,
      price: 22999,
      image:
        "images/6.jpg",
      rating: 4.7,
      destinations: ["Kaziranga National Park", "Majuli Island", "Guwahati"],
      description:
        "Experience rich wildlife, focusing on the one-horned rhino at Kaziranga and the unique cultural heritage of Majuli Island.",
    },
    {
      id: "sikkim-adventure",
      title: "Sikkim Himalayan Explorer",
      state: "Sikkim",
      duration: "7 Days / 6 Nights",
      numericDuration: 7,
      price: 29999,
      image:
        "images/sikkim-slides.jpg",
      rating: 4.9,
      destinations: [
        "Gangtok",
        "Nathula Pass",
        "Tsomgo Lake",
        "Yumthang Valley",
      ],
      description:
        "Experience breathtaking views of the Eastern Himalayas, featuring monasteries, high-altitude lakes, and snow-capped mountains.",
    },
    {
      id: "arunachal-discovery",
      title: "Arunachal Cultural Discovery",
      state: "Arunachal Pradesh",
      duration: "8 Days / 7 Nights",
      numericDuration: 8,
      price: 34999,
      image:
        "images/arunachal1.png",
      rating: 4.6,
      destinations: ["Tawang", "Bomdila", "Ziro Valley", "Itanagar"],
      description:
        "Discover unexplored Arunachal Pradesh with visits to ancient monasteries, tribal villages, and stunning mountain landscapes.",
    },
    {
      id: "manipur-jewel",
      title: "Manipur: The Jeweled Land",
      state: "Manipur",
      duration: "4 Days / 3 Nights",
      numericDuration: 4,
      price: 19999,
      image:
        "images/Manipur.webp",
      rating: 4.5,
      destinations: ["Imphal", "Loktak Lake", "Keibul Lamjao"],
      description:
        "Explore the beauty of Loktak Lake, the world's only floating national park, and the cultural richness of Imphal.",
    },
    {
      id: "nagaland-festive",
      title: "Nagaland Festive Tribes",
      state: "Nagaland",
      duration: "6 Days / 5 Nights",
      numericDuration: 6,
      price: 27500,
      image:
        "images/Hornbill.jpg",
      rating: 4.7,
      destinations: ["Kohima", "Mon", "Dzukou Valley"],
      description:
        "Immerse yourself in the vibrant tribal culture of Nagaland, witness unique traditions, and explore scenic landscapes.",
    },
    {
      // Example of a longer trip
      id: "northeast-explorer-all",
      title: "Northeast Explorer - All States Tour",
      state: "Multiple", // Indicate multiple states
      duration: "15 Days / 14 Nights",
      numericDuration: 15,
      price: 89999,
      image:
        "https://images.unsplash.com/photo-1626260113600-84c917a446f2?q=80&w=1741", // A generic NE image
      rating: 4.9,
      destinations: ["All NE States"],
      description:
        "The ultimate journey spanning all eight states, combining luxury accommodations and unforgettable experiences.",
    },
    // Add more packages if needed
  ];

  // --- DOM Elements ---
  const gridContainer = document.getElementById("packages-grid-container");
  const sortSelect = document.getElementById("sort-packages");
  const filterCheckboxes = document.querySelectorAll(
    '.packages-filters input[type="checkbox"]'
  );
  const priceRangeSlider = document.getElementById("price-range");
  const priceRangeValue = document.getElementById("price-range-value");
  const durationRadios = document.querySelectorAll(
    '.packages-filters input[type="radio"]'
  );
  const applyFiltersButton = document.getElementById("apply-filters");

  const featuredDetailsToggle = document.getElementById(
    "toggle-featured-details"
  );
  const featuredDetailsContent = document.getElementById("featured-details");

  const customTripDestButtons = document.querySelectorAll(
    ".destination-button"
  );
  const customDurationSelect = document.getElementById("duration-select");
  const customQuoteBtn = document.getElementById("custom-quote-btn");
  const selectedStatesDisplay = document.getElementById(
    "selected-states-display"
  );

  let currentFilters = {
    states: [],
    maxPrice: 100000, // Default max
    duration: "any", // 'any', 'short', 'medium', 'long'
  };
  let currentSort = "recommended";
  let selectedCustomStates = [];

  // --- Functions ---

  // Function to render package cards
  function renderPackages(packagesToRender) {
    if (!gridContainer) return;
    gridContainer.innerHTML = ""; // Clear existing cards

    if (packagesToRender.length === 0) {
      gridContainer.innerHTML = "<p>No packages match your criteria.</p>";
      return;
    }

    packagesToRender.forEach((pkg) => {
      const card = document.createElement("div");
      card.className = "package-card-base"; // Use base class

      // Star rating HTML
      let starsHTML = "";
      for (let i = 0; i < 5; i++) {
        starsHTML += `<i class="fas fa-star ${
          i < Math.floor(pkg.rating) ? "filled" : ""
        }"></i>`;
      }
      // Basic star styling needed in CSS: .fa-star { color: #ccc; } .fa-star.filled { color: #ffc107; }
      let detailLink = `package-detail.php?id=${pkg.id}`; // Default dynamic link
      if (pkg.id === "sikkim-adventure") {
        // Check for the specific ID
        detailLink = "sikkim-adventure.php"; // Change link to static file
      } else if (pkg.id === "assam-wildlife") {
        // <<< ADD THIS ELSE IF
        detailLink = "assam-wildlife.php";
      } else if (pkg.id === "meghalaya-adventure") {
        // <<< ADD THIS ELSE IF
        detailLink = "meghalaya-adventure.php";
      } else if (pkg.id === "nagaland-festive") {
        // <<< ADD THIS ELSE IF
        detailLink = "nagaland-festive.php";
      }
      else if (pkg.id === 'arunachal-discovery') { // <<< ADD THIS ELSE IF
        detailLink = 'arunachal-discovery.php';
      }
      else if (pkg.id === 'manipur-jewel') { // <<< ADD THIS ELSE IF
        detailLink = 'manipur-jewel.php';
      }
      else if (pkg.id === "northeast-explorer-all") {
        // <<< ADD THIS ELSE IF
        detailLink = "northeast-explorer-all.php";
      }

      card.innerHTML = `
                <div class="package-image-container">
                    <img src="${pkg.image}" alt="${pkg.title}">
                    <div class="rating-tag">
                        ${starsHTML}
                        <span>${pkg.rating.toFixed(1)}</span>
                    </div>
                    <div class="price-tag">
                        ₹${pkg.price.toLocaleString()}
                    </div>
                </div>
                <div class="package-content">
                    <div> <!-- Wrapper for content above buttons -->
                        <h3>${pkg.title}</h3>
                        <div class="package-info">
                            <i class="fas fa-map-marker-alt icon"></i> ${
                              pkg.state
                            }
                        </div>
                        <div class="package-info">
                            <i class="fas fa-calendar-alt icon"></i> ${
                              pkg.duration
                            }
                        </div>
                        <p class="package-description">${pkg.description}</p>
                    </div>
                    <div class="package-actions">
                        <a href="${detailLink}" class="btn outline-btn">View Details</a> 
                        <button class="btn primary-btn">Book Now</button>
                    </div>
                </div>
            `;
      gridContainer.appendChild(card);
    });
  }

  // Function to sort packages
  function sortPackages(packages, sortBy) {
    const sorted = [...packages]; // Create a copy
    switch (sortBy) {
      case "price-low":
        sorted.sort((a, b) => a.price - b.price);
        break;
      case "price-high":
        sorted.sort((a, b) => b.price - a.price);
        break;
      case "duration-short":
        sorted.sort((a, b) => a.numericDuration - b.numericDuration);
        break;
      case "duration-long":
        sorted.sort((a, b) => b.numericDuration - a.numericDuration);
        break;
      case "recommended": // Default - could be based on rating later
        sorted.sort((a, b) => b.rating - a.rating); // Example: sort by rating desc
        break;
      // Add default case if needed
    }
    return sorted;
  }

  // Function to filter packages
  function filterPackages(packages, filters) {
    return packages.filter((pkg) => {
      // State filter
      const stateMatch =
        filters.states.length === 0 ||
        filters.states.includes(pkg.state) ||
        (filters.states.includes("Multiple") && pkg.state === "Multiple");

      // Price filter
      const priceMatch = pkg.price <= filters.maxPrice;

      // Duration filter
      let durationMatch = true;
      if (filters.duration !== "any") {
        if (filters.duration === "short")
          durationMatch = pkg.numericDuration <= 5;
        else if (filters.duration === "medium")
          durationMatch = pkg.numericDuration >= 6 && pkg.numericDuration <= 10;
        else if (filters.duration === "long")
          durationMatch = pkg.numericDuration >= 11;
      }

      return stateMatch && priceMatch && durationMatch;
    });
  }

  // Function to update filters and render
  function updateDisplay() {
    const filtered = filterPackages(packagesData, currentFilters);
    const sorted = sortPackages(filtered, currentSort);
    renderPackages(sorted);
  }

  // --- Event Listeners ---

  // Sorting
  if (sortSelect) {
    sortSelect.addEventListener("change", (e) => {
      currentSort = e.target.value;
      updateDisplay();
    });
  }

  // Price Range Slider
  if (priceRangeSlider && priceRangeValue) {
    priceRangeSlider.addEventListener("input", (e) => {
      currentFilters.maxPrice = parseInt(e.target.value, 10);
      priceRangeValue.textContent = currentFilters.maxPrice.toLocaleString();
      // Optionally apply filters immediately: updateDisplay();
    });
    // Set initial value display
    priceRangeValue.textContent = parseInt(
      priceRangeSlider.value,
      10
    ).toLocaleString();
    currentFilters.maxPrice = parseInt(priceRangeSlider.value, 10);
  }

  // Filter Apply Button (or apply on change)
  if (applyFiltersButton) {
    applyFiltersButton.addEventListener("click", () => {
      // Update state filters
      currentFilters.states = [];
      filterCheckboxes.forEach((checkbox) => {
        if (checkbox.checked) {
          currentFilters.states.push(checkbox.value);
        }
      });

      // Update duration filter
      durationRadios.forEach((radio) => {
        if (radio.checked) {
          currentFilters.duration = radio.value;
        }
      });

      // Update maxPrice (already updated by slider input, but ensure it's current)
      currentFilters.maxPrice = parseInt(priceRangeSlider.value, 10);

      updateDisplay();
    });
  }
  // Optional: Apply filters immediately on change (remove Apply button logic)
  /*
     filterCheckboxes.forEach(checkbox => checkbox.addEventListener('change', updateDisplay));
     durationRadios.forEach(radio => radio.addEventListener('change', updateDisplay));
     priceRangeSlider.addEventListener('input', updateDisplay); // Update on slider move
     */

  // Featured Package Toggle
  if (featuredDetailsToggle && featuredDetailsContent) {
    featuredDetailsToggle.addEventListener("click", () => {
      const isVisible = featuredDetailsContent.classList.toggle("visible");
      const icon = featuredDetailsToggle.querySelector("i");
      const text = featuredDetailsToggle.querySelector("span");
      if (isVisible) {
        text.textContent = "Hide Tour Details";
        icon.classList.remove("fa-chevron-down");
        icon.classList.add("fa-chevron-up");
      } else {
        text.textContent = "View Tour Details";
        icon.classList.remove("fa-chevron-up");
        icon.classList.add("fa-chevron-down");
      }
    });
  }

  // Custom Trip Card - Destination Selection
  customTripDestButtons.forEach((button) => {
    button.addEventListener("click", () => {
      button.classList.toggle("selected");
      const state = button.getAttribute("data-state");
      if (selectedCustomStates.includes(state)) {
        selectedCustomStates = selectedCustomStates.filter((s) => s !== state);
      } else {
        selectedCustomStates.push(state);
      }
      // Update display
      if (selectedStatesDisplay) {
        selectedStatesDisplay.textContent =
          selectedCustomStates.length > 0
            ? selectedCustomStates.join(", ")
            : "None selected";
      }
    });
  });

  // Custom Trip Card - Submit
  if (customQuoteBtn) {
    customQuoteBtn.addEventListener("click", () => {
      const duration = customDurationSelect ? customDurationSelect.value : "";

      if (selectedCustomStates.length === 0) {
        alert("Please select at least one destination for your custom trip.");
        return;
      }
      if (!duration) {
        alert("Please select your preferred trip duration.");
        return;
      }

      // Simulate submission (replace with actual logic later)
      alert(
        `Custom trip request sent for: ${selectedCustomStates.join(
          ", "
        )} (${duration} days). Our experts will contact you shortly!`
      );

      // Optional: Reset form
      // selectedCustomStates = [];
      // customTripDestButtons.forEach(btn => btn.classList.remove('selected'));
      // if (customDurationSelect) customDurationSelect.value = "";
      // if (selectedStatesDisplay) selectedStatesDisplay.textContent = 'None selected';
    });
  }

  // --- Initial Render ---
  updateDisplay(); // Render packages on load
});
