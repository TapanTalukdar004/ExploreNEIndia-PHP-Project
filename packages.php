<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TripNE - Travel Packages</title>
    <!-- Link Universal CSS (assuming it exists) -->
     <link rel="stylesheet" href="css/universal.css">
    <link rel="stylesheet" href="css/packages_section.css">
    
    <!-- Link Page-Specific CSS -->
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  
    <?php include 'header.php'; ?>

    <main>
        <!-- Packages Page Header Section -->
        <section class="page-header packages-header-bg">
            <div class="container text-center">
                <h1 class="page-title">Travel Packages</h1>
                <p class="page-subtitle">
                    Expertly crafted travel experiences to explore the best of Northeast India
                </p>
            </div>
        </section>

        <!-- Custom Trip Planner Section -->
        <section class="custom-trip-section">
            <div class="container">
                <div class="custom-trip-card">
                    <div class="card-header">
                        <div class="card-title-wrapper">
                             <div class="title-accent-bar"></div>
                             <h2 class="card-title">Custom Trip Planner</h2>
                        </div>
                        <p class="card-description">
                            Create your perfect Northeast adventure with a personalized itinerary
                        </p>
                    </div>
                    <hr class="separator" />
                    <div class="card-content">
                        <div class="form-section">
                            <label class="form-label"><i class="fas fa-map-marker-alt icon"></i> Select Destinations</label>
                            <div class="destinations-grid">
                                <!-- Example States - Populate dynamically if needed later -->
                                <button class="destination-button" data-state="Assam">Assam</button>
                                <button class="destination-button" data-state="Meghalaya">Meghalaya</button>
                                <button class="destination-button" data-state="Arunachal Pradesh">Arunachal P.</button>
                                <button class="destination-button" data-state="Nagaland">Nagaland</button>
                                <button class="destination-button" data-state="Manipur">Manipur</button>
                                <button class="destination-button" data-state="Mizoram">Mizoram</button>
                                <button class="destination-button" data-state="Tripura">Tripura</button>
                                <button class="destination-button" data-state="Sikkim">Sikkim</button>
                            </div>
                        </div>
                         <div class="selects-grid">
                            <div class="form-section">
                                <label class="form-label"><i class="fas fa-clock icon"></i> Preferred Duration</label>
                                <select id="duration-select" class="form-select">
                                    <option value="" disabled selected>Select duration</option>
                                    <option value="3-5">3-5 days</option>
                                    <option value="6-9">6-9 days</option>
                                    <option value="10-14">10-14 days</option>
                                    <option value="15+">15+ days</option>
                                </select>
                            </div>
                             <div class="form-section">
                                <label class="form-label"><i class="fas fa-hotel icon"></i> Accommodation Type</label>
                                <select id="accommodation-select" class="form-select">
                                     <option value="" disabled selected>Select type</option>
                                    <option value="budget">Budget</option>
                                    <option value="comfort">Comfort</option>
                                    <option value="luxury">Luxury</option>
                                    <option value="mixed">Mixed</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="selected-info">
                            <strong>Selected destinations:</strong> <span id="selected-states-display">None selected</span>
                        </p>
                        <p class="price-info">*Final price will be negotiated via WhatsApp</p>
                        <button id="custom-quote-btn" class="btn submit-quote-btn">Get Custom Quote</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Packages Layout Section (Filters + Grid) -->
        <section class="packages-main-section">
            <div class="container packages-layout">

                <!-- Filters Sidebar -->
                <aside class="packages-filters">
                    <h3>Filter Packages</h3>
                    <hr class="separator">

                    <div class="filter-group">
                        <h4>Destination State</h4>
                        <!-- Add checkboxes for each state -->
                        <div class="filter-option"><input type="checkbox" id="filter-assam" value="Assam"><label for="filter-assam">Assam</label></div>
                        <div class="filter-option"><input type="checkbox" id="filter-meghalaya" value="Meghalaya"><label for="filter-meghalaya">Meghalaya</label></div>
                        <div class="filter-option"><input type="checkbox" id="filter-arunachal" value="Arunachal Pradesh"><label for="filter-arunachal">Arunachal Pradesh</label></div>
                        <div class="filter-option"><input type="checkbox" id="filter-nagaland" value="Nagaland"><label for="filter-nagaland">Nagaland</label></div>
                         <div class="filter-option"><input type="checkbox" id="filter-manipur" value="Manipur"><label for="filter-manipur">Manipur</label></div>
                         <div class="filter-option"><input type="checkbox" id="filter-mizoram" value="Mizoram"><label for="filter-mizoram">Mizoram</label></div>
                         <div class="filter-option"><input type="checkbox" id="filter-tripura" value="Tripura"><label for="filter-tripura">Tripura</label></div>
                         <div class="filter-option"><input type="checkbox" id="filter-sikkim" value="Sikkim"><label for="filter-sikkim">Sikkim</label></div>
                    </div>

                    <div class="filter-group">
                        <h4>Price Range (per person)</h4>
                        <label for="price-range">Max Price: ₹<span id="price-range-value">50000</span></label>
                        <input type="range" id="price-range" min="10000" max="100000" value="50000" step="1000">
                    </div>

                     <div class="filter-group">
                        <h4>Duration</h4>
                        <div class="filter-option"><input type="radio" id="duration-any" name="duration" value="any" checked><label for="duration-any">Any</label></div>
                        <div class="filter-option"><input type="radio" id="duration-short" name="duration" value="short"><label for="duration-short">Short (1-5 Days)</label></div>
                        <div class="filter-option"><input type="radio" id="duration-medium" name="duration" value="medium"><label for="duration-medium">Medium (6-10 Days)</label></div>
                        <div class="filter-option"><input type="radio" id="duration-long" name="duration" value="long"><label for="duration-long">Long (11+ Days)</label></div>
                    </div>

                    <button class="btn apply-filters-btn" id="apply-filters">Apply Filters</button>
                </aside>

                <!-- Packages Grid Area -->
                <div class="packages-grid-area">
                    <div class="sort-section">
                        <h2>Available Packages</h2>
                        <select id="sort-packages" class="form-select">
                            <option value="recommended">Recommended</option>
                            <option value="price-low">Price: Low to High</option>
                            <option value="price-high">Price: High to Low</option>
                            <option value="duration-short">Duration: Shortest</option>
                            <option value="duration-long">Duration: Longest</option>
                        </select>
                    </div>
                    <div class="packages-grid" id="packages-grid-container">
                        <!-- Package Cards will be loaded here by JavaScript -->
                        <p>Loading packages...</p>
                    </div>
                    <!-- Add Pagination if needed later -->
                </div>

            </div>
        </section>

         <!-- Featured Package Section -->
         
         <section class="featured-package-section">
             <div class="container">
                 <div class="featured-package-container"> <!-- Added container -->
                     <div class="featured-package">
                         <div class="featured-image-container">
                             <img src="images/northeast-explorer.webp" alt="Northeast Explorer Package Sikkim" class="featured-image"> <!-- Changed image slightly -->
                             <div class="image-overlay"></div>
                             <span class="featured-tag">Grand Tour</span>
                         </div>
                         <div class="featured-content">
                             <div class="featured-header">
                                 <h3>Northeast Explorer - All States Tour</h3>
                                 <span class="featured-price">₹89,999</span>
                             </div>
                             <div class="featured-info">
                                 <span><i class="fas fa-map-marker-alt icon"></i> All 8 Northeast States</span> <!-- Updated text -->
                                 <span><i class="fas fa-calendar-alt icon"></i> 15 Days / 14 Nights</span>
                             </div>
                             <p class="featured-description">
                                 Experience the ultimate Northeast India journey spanning all eight states. From Assam's majestic Kaziranga to Meghalaya's living root bridges, Arunachal's ancient monasteries to Nagaland's vibrant tribes, Manipur's floating lake to Tripura's palaces, Mizoram's hills to Sikkim's Himalayas. This comprehensive tour combines comfortable accommodations, expert insights, and unforgettable experiences. <!-- Enhanced Description -->
                             </p>
                             <button class="btn toggle-details-btn" id="toggle-featured-details">
                                 <span>View Tour Details</span> <i class="fas fa-chevron-down icon"></i>
                             </button>

                             <!-- ****** START MODIFICATION - Detailed Content ****** -->
                             <div class="featured-details-content" id="featured-details">
                                 <h4>Tour Highlights</h4>
                                 <div class="details-grid">
                                     <div>
                                         <h5>Key Experiences:</h5>
                                         <ul>
                                             <li><i class="fas fa-check icon"></i> Elephant & Jeep Safari in Kaziranga NP (Assam)</li>
                                             <li><i class="fas fa-check icon"></i> Trek to Double Decker Root Bridge (Meghalaya)</li>
                                             <li><i class="fas fa-check icon"></i> Visit Tawang Monastery & Sela Pass (Arunachal)</li>
                                             <li><i class="fas fa-check icon"></i> Explore Konyak tribal village (Nagaland)</li>
                                             <li><i class="fas fa-check icon"></i> Boat on Loktak Lake & see Sangai Deer (Manipur)</li>
                                             <li><i class="fas fa-check icon"></i> Visit Ujjayanta Palace & Neermahal (Tripura)</li>
                                             <li><i class="fas fa-check icon"></i> Explore Aizawl viewpoints (Mizoram)</li>
                                             <li><i class="fas fa-check icon"></i> Visit Gangtok Monasteries & Tsomgo Lake (Sikkim)</li>
                                         </ul>
                                     </div>
                                     <div>
                                         <h5>Inclusions:</h5>
                                         <ul>
                                             <li><i class="fas fa-check icon"></i> 14 Nights Accommodation (3-Star Hotels/Resorts/Homestays)</li>
                                             <li><i class="fas fa-check icon"></i> Daily Breakfast & Dinner</li>
                                             <li><i class="fas fa-check icon"></i> All transfers & sightseeing by private AC vehicle (SUV recommended)</li>
                                             <li><i class="fas fa-check icon"></i> Experienced Driver (acts as basic guide)</li>
                                             <li><i class="fas fa-check icon"></i> Necessary Inner Line Permits (ILP) & Entry Fees</li>
                                             <li><i class="fas fa-check icon"></i> Kaziranga Safaris (1 Elephant, 1 Jeep)</li>
                                             <li><i class="fas fa-check icon"></i> Loktak Lake Boating</li>
                                             <li><i class="fas fa-check icon"></i> All applicable taxes</li>
                                         </ul>
                                     </div>
                                </div> <!-- End details-grid -->

                                 <hr class="pd-separator" style="margin: 20px 0;"> <!-- Added separator -->

                                 <h5>Itinerary Overview:</h5>
                                 <p class="itinerary-overview">
                                     <strong>Day 1-2:</strong> Assam (Guwahati, Kaziranga) |
                                     <strong>Day 3-4:</strong> Meghalaya (Shillong, Cherrapunji, Root Bridge Trek) |
                                     <strong>Day 5-6:</strong> Arunachal (Dirang, Tawang, Sela Pass) |
                                     <strong>Day 7-8:</strong> Nagaland (Kohima, Mon/Longwa) |
                                     <strong>Day 9:</strong> Manipur (Imphal, Loktak Lake) |
                                     <strong>Day 10:</strong> Tripura (Agartala Palaces) |
                                     <strong>Day 11:</strong> Mizoram (Aizawl Views) |
                                     <strong>Day 12-14:</strong> Sikkim (Gangtok, Tsomgo Lake) |
                                     <strong>Day 15:</strong> Departure from Bagdogra (IXB)
                                 </p>
                                 <p class="itinerary-note"><i>(Detailed day-wise itinerary provided upon booking/inquiry. Sequence may vary based on logistics & flight/train timings.)</i></p>

                                <hr class="pd-separator" style="margin: 20px 0;">

                                <h5>Travel Considerations:</h5>
                                <ul class="considerations-list">
                                     <li><i class="fas fa-exclamation-circle icon"></i> Requires significant travel time & covers diverse terrains/altitudes.</li>
                                     <li><i class="fas fa-exclamation-circle icon"></i> Fitness required for Meghalaya trek & high altitudes in Arunachal/Sikkim.</li>
                                     <li><i class="fas fa-exclamation-circle icon"></i> Accommodation varies from standard hotels to basic guesthouses/homestays in remote areas.</li>
                                     <li><i class="fas fa-exclamation-circle icon"></i> Inner Line Permits needed for Arunachal, Nagaland, Mizoram (included).</li>
                                </ul>

                             </div>
                             <!-- ****** END MODIFICATION ****** -->

                             <div class="featured-actions">
                                <a href="northeast-explorer.php" class="btn outline-btn">View Full Details</a> <!-- Link to a dedicated page -->
                                <button class="btn primary-btn book-now-button">Book Now</button> <!-- Add class -->
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>

        <!-- Booking Info Section -->
        <section class="booking-info-section">
            <div class="container">
                <div class="text-center section-header">
                    <h2>How to Book</h2>
                    <p>Booking your Northeast adventure with TripNE is quick and easy.</p>
                </div>
                <div class="steps-grid">
                    <div class="step-card">
                        <div class="step-number">1</div>
                        <h3>Choose Your Package</h3>
                        <p>Browse our selection or request a custom itinerary.</p>
                    </div>
                    <div class="step-card">
                        <div class="step-number">2</div>
                        <h3>Confirm Availability</h3>
                        <p>Contact us to check dates and customize requirements.</p>
                    </div>
                    <div class="step-card">
                        <div class="step-number">3</div>
                        <h3>Secure Your Booking</h3>
                        <p>Complete reservation with secure payment.</p>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn contact-experts-btn">Contact Our Travel Experts</button>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer (Optional - add if needed) -->
    <!-- <footer>
        <div class="container">
            <p>© 2024 TripNE. All rights reserved.</p>
        </div>
    </footer> -->

    <!-- Link JavaScript File -->
    <script src="js/packages.js"></script>
    <script src="js/navbar.js"></script>
</body>

</html>