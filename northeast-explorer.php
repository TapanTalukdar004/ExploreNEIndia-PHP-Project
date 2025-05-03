<?php
// File: northeast-explorer.php

// Define page specifics BEFORE including the header
$page_title = "Northeast Explorer (All States) Package - TripNE";
// Use the existing static CSS file, we'll reuse styles
$page_specific_css = 'css/package-details-static.css';

// Define a theme class (can be default or a new one)
$body_class = "state-theme-grand-tour"; // You'll define this theme in CSS

include 'header.php'; // Include header
?>

<main id="package-detail-page" class="<?php echo $body_class; ?>"> <!-- Apply theme -->

    <!-- Hero Section (Tailored for this tour) -->
    <section class="pd-hero">
        <div class="container pd-hero-container">
            <div class="pd-hero-content">
                <div class="pd-breadcrumbs">
                    <a href="packages.php">Packages</a> / <span>Northeast Explorer - All States Tour</span>
                </div>
                <h1>Northeast Explorer - All States Tour</h1>
                <div class="pd-hero-info">
                    <span><i class="fas fa-map-marker-alt icon"></i> All 8 Northeast States</span>
                    <span><i class="fas fa-calendar-alt icon"></i> 15 Days / 14 Nights</span>
                    <span><i class="fas fa-star icon"></i> Est. 4.8/5</span> <!-- Rating example -->
                </div>
                <div class="pd-hero-price-box">
                    <h2>₹89,999</h2>
                    <p>per person on twin sharing basis</p>
                </div>
                <form action="process_booking.php" method="POST" style="display: inline;">
                    <input type="hidden" name="package_id" value="northeast-explorer">
                    <input type="hidden" name="package_price" value="89999.00">
                    <!-- Optional: Add more fields like num_people if you add input for it -->
                    <button type="submit" class="btn primary-btn hero-btn">Book Now</button>
                </form>
            </div>
            <div class="pd-hero-image-wrapper">
                 <!-- Use a representative image for the whole NE -->
                <img src="https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?q=80&w=1740" alt="Northeast India Collage" class="pd-hero-image">
                <div class="pd-hero-image-overlay"></div>
            </div>
        </div>
    </section>

    <!-- Main Content Section (Linear Layout this time) -->
    <section class="pd-main-content-section">
        <div class="container pd-main-layout">

            <!-- Left Column: Main Details (No Tabs) -->
            <div class="pd-main-details-area">

                <!-- Overview Section -->
                <section class="pd-content-section pd-card">
                    <h2>Tour Overview</h2>
                    <p class="pd-description">Embark on the ultimate journey through the diverse landscapes and vibrant cultures of all eight Northeast Indian states. This comprehensive 15-day expedition takes you from the wildlife haven of Assam's Kaziranga and the living root bridges of Meghalaya, through the high-altitude monasteries of Arunachal Pradesh and the unique tribal lands of Nagaland. Experience Manipur's floating lake, Tripura's royal past, Mizoram's rolling hills, and conclude amidst the stunning Himalayan vistas of Sikkim. Designed for the intrepid traveler seeking a deep dive into this enchanting region, combining essential highlights with comfortable travel and accommodation appropriate to each area.</p>
                </section>

                 <!-- Highlights Section -->
                <section class="pd-content-section pd-card">
                    <h2>Package Highlights</h2>
                     <ul class="pd-highlights-list grid-cols-2"> <!-- Add class for optional 2 columns -->
                        <li>Spot One-Horned Rhinos in Kaziranga</li>
                        <li>Trek to Double Decker Root Bridge</li>
                        <li>Visit Tawang Monastery & Sela Pass</li>
                        <li>Explore Konyak Naga Village (Longwa)</li>
                        <li>Boat on Loktak Lake (Floating Park)</li>
                        <li>See Ujjayanta Palace & Neermahal</li>
                        <li>View Aizawl City from Durtlang Hills</li>
                        <li>Experience Gangtok & Tsomgo Lake</li>
                        <li>Diverse Cultural Interactions</li>
                        <li>Scenic Drives Through Varied Landscapes</li>
                        <li>Inner Line Permit Arrangement</li>
                        <li>Comfortable Private Vehicle Travel</li>
                    </ul>
                </section>

                <!-- Itinerary Section -->
                <section class="pd-content-section pd-card">
                    <h2>Detailed Day-wise Itinerary</h2>
                    <div class="pd-accordion"> <!-- Itinerary Accordion -->
                         <!-- Day 1: Guwahati Arrival -> Kaziranga -->
                         <div class="pd-accordion-item">
                             <button class="pd-accordion-trigger">Day 1: Guwahati Arrival & Transfer to Kaziranga (Approx 4-5 hrs)<i class="fas fa-chevron-down icon"></i></button>
                             <div class="pd-accordion-content"><p>Arrive at Guwahati (GAU), meet representative, drive to Kaziranga National Park, check-in. Evening free. Overnight Kaziranga.</p></div>
                         </div>
                         <!-- Day 2: Kaziranga Safaris -->
                         <div class="pd-accordion-item">
                             <button class="pd-accordion-trigger">Day 2: Kaziranga Wildlife Safaris<i class="fas fa-chevron-down icon"></i></button>
                             <div class="pd-accordion-content"><p>Early morning Elephant Safari (Central Range). Return for breakfast. Afternoon Jeep Safari (Western/Eastern Range). Visit Orchid Park. Overnight Kaziranga.</p></div>
                         </div>
                         <!-- Day 3: Kaziranga -> Shillong -->
                         <div class="pd-accordion-item">
                             <button class="pd-accordion-trigger">Day 3: Drive to Shillong (Meghalaya) (Approx 6-7 hrs)<i class="fas fa-chevron-down icon"></i></button>
                             <div class="pd-accordion-content"><p>After breakfast, drive to Shillong. En route visit Umiam Lake. Check-in hotel. Evening explore Police Bazaar. Overnight Shillong.</p></div>
                         </div>
                         <!-- Day 4: Cherrapunji & Root Bridge Trek -->
                          <div class="pd-accordion-item">
                             <button class="pd-accordion-trigger">Day 4: Cherrapunji Excursion & Root Bridge Trek<i class="fas fa-chevron-down icon"></i></button>
                             <div class="pd-accordion-content"><p>Drive to Cherrapunji. Visit Nohkalikai Falls, Mawsmai Cave. Drive to Tyrna, trek down to Nongriat village (approx 3000 steps). See Double Decker Root Bridge. Overnight basic Guesthouse in Nongriat (requires fitness).</p></div>
                         </div>
                         <!-- Day 5: Nongriat -> Dirang (Arunachal) -->
                         <div class="pd-accordion-item">
                             <button class="pd-accordion-trigger">Day 5: Trek Up & Drive to Dirang (Long Day: Approx 8-10 hrs drive post-trek)<i class="fas fa-chevron-down icon"></i></button>
                             <div class="pd-accordion-content"><p>Early morning trek up from Nongriat to Tyrna. Meet vehicle and start long drive towards Dirang (Arunachal). Requires ILP check. Check-in late evening. Overnight Dirang.</p></div>
                         </div>
                         <!-- Day 6: Dirang -> Tawang -->
                          <div class="pd-accordion-item">
                             <button class="pd-accordion-trigger">Day 6: Sela Pass & Drive to Tawang (Approx 5-6 hrs)<i class="fas fa-chevron-down icon"></i></button>
                             <div class="pd-accordion-content"><p>Visit Dirang Monastery. Drive to Tawang, crossing Sela Pass (13,700 ft) & Jaswant Garh War Memorial. Check-in hotel. Overnight Tawang.</p></div>
                         </div>
                         <!-- Day 7: Tawang Sightseeing -->
                         <div class="pd-accordion-item">
                             <button class="pd-accordion-trigger">Day 7: Tawang Monastery & Local Sightseeing<i class="fas fa-chevron-down icon"></i></button>
                             <div class="pd-accordion-content"><p>Visit Tawang Monastery (morning prayers ideal), Urgelling Gompa, Craft Centre, Giant Buddha Statue. Optional: Tawang War Memorial. Overnight Tawang.</p></div>
                         </div>
                         <!-- Day 8: Tawang -> Kohima (Nagaland) -->
                         <div class="pd-accordion-item">
                             <button class="pd-accordion-trigger">Day 8: Drive to Kohima (Very Long Day: Approx 12-14+ hrs)<i class="fas fa-chevron-down icon"></i></button>
                             <div class="pd-accordion-content"><p>Very early start for the long drive from Tawang back towards Kohima, Nagaland. Route likely via Assam plains. Check-in late night. Overnight Kohima.</p></div>
                         </div>
                          <!-- Day 9: Kohima & Kisama -->
                         <div class="pd-accordion-item">
                             <button class="pd-accordion-trigger">Day 9: Kohima Sightseeing & Kisama Village<i class="fas fa-chevron-down icon"></i></button>
                             <div class="pd-accordion-content"><p>Visit Kohima War Cemetery, State Museum. Explore Kisama Heritage Village. Optional: Khonoma/Jakhama village. Overnight Kohima.</p></div>
                         </div>
                         <!-- Day 10: Kohima -> Imphal (Manipur) -->
                         <div class="pd-accordion-item">
                             <button class="pd-accordion-trigger">Day 10: Drive to Imphal (Approx 4-5 hrs)<i class="fas fa-chevron-down icon"></i></button>
                             <div class="pd-accordion-content"><p>Drive to Imphal, Manipur. Check-in hotel. Afternoon visit Kangla Fort & Ima Market (Women's Market). Overnight Imphal.</p></div>
                         </div>
                         <!-- Day 11: Loktak Lake -->
                         <div class="pd-accordion-item">
                             <button class="pd-accordion-trigger">Day 11: Loktak Lake & Keibul Lamjao Excursion<i class="fas fa-chevron-down icon"></i></button>
                             <div class="pd-accordion-content"><p>Day trip to Loktak Lake. Boat ride on the lake with floating phumdis. Visit Keibul Lamjao National Park (Sangai Deer). See INA Memorial at Moirang. Return to Imphal. Overnight Imphal.</p></div>
                         </div>
                          <!-- Day 12: Imphal -> Agartala (Tripura) (Flight Recommended) -->
                         <div class="pd-accordion-item">
                             <button class="pd-accordion-trigger">Day 12: Fly Imphal to Agartala, Sightseeing<i class="fas fa-chevron-down icon"></i></button>
                             <div class="pd-accordion-content"><p>Transfer to Imphal Airport for flight to Agartala, Tripura. Meet upon arrival, transfer to hotel. Visit Ujjayanta Palace (State Museum) & Heritage Park. Overnight Agartala.</p></div>
                         </div>
                          <!-- Day 13: Neermahal & Fly to Aizawl (Mizoram) -->
                         <div class="pd-accordion-item">
                             <button class="pd-accordion-trigger">Day 13: Neermahal Excursion & Fly Agartala to Aizawl<i class="fas fa-chevron-down icon"></i></button>
                             <div class="pd-accordion-content"><p>Morning excursion to Neermahal Water Palace (lake palace). Return to Agartala airport for flight to Aizawl, Mizoram. Transfer to hotel. Overnight Aizawl.</p></div>
                         </div>
                          <!-- Day 14: Aizawl Sightseeing & Fly to Bagdogra (Sikkim Gateway) -->
                         <div class="pd-accordion-item">
                             <button class="pd-accordion-trigger">Day 14: Aizawl Views & Fly Aizawl to Bagdogra, Transfer to Gangtok<i class="fas fa-chevron-down icon"></i></button>
                             <div class="pd-accordion-content"><p>Morning visit Durtlang Hills for panoramic views. Transfer to Aizawl airport for flight to Bagdogra (IXB). Meet upon arrival & transfer to Gangtok, Sikkim (Approx 4-5 hrs). Check-in hotel. Overnight Gangtok.</p></div>
                         </div>
                          <!-- Day 15: Tsomgo Lake & Departure -->
                         <div class="pd-accordion-item">
                             <button class="pd-accordion-trigger">Day 15: Tsomgo Lake Excursion & Departure from Bagdogra<i class="fas fa-chevron-down icon"></i></button>
                             <div class="pd-accordion-content"><p>Early morning excursion to Tsomgo Lake & Baba Mandir (permits permitting). Return to Gangtok. Drive back to Bagdogra Airport (IXB) for final departure (Approx 4-5 hrs - ensure late evening flight).</p></div>
                         </div>
                    </div> <!-- End Itinerary Accordion -->
                    <div class="pd-notes-box">
                         <h3>Important Itinerary Notes</h3>
                         <ul>
                            <li>• This is a fast-paced itinerary covering vast distances; long travel days are involved.</li>
                            <li>• Flight timings between Imphal-Agartala, Agartala-Aizawl, Aizawl-Bagdogra are crucial and subject to airline schedules/availability. This itinerary assumes suitable flight connections exist.</li>
                            <li>• Sequence might be adjusted based on flight schedules, road conditions, and permit processing.</li>
                            <li>• Requires good physical fitness, especially for Meghalaya trek and high altitudes.</li>
                            <li>• Inner Line Permits (ILP) required for Arunachal, Nagaland, Mizoram must be obtained in advance.</li>
                         </ul>
                     </div>
                </section>

                <!-- Inclusions / Exclusions Section -->
                <section class="pd-content-section pd-card">
                     <h2>Inclusions & Exclusions</h2>
                     <div class="pd-includes-excludes-grid">
                         <div>
                             <h3>Package Includes</h3>
                             <ul class="pd-checklist includes">
                                 <li><i class="fas fa-check icon"></i> Accommodation for 14 nights (twin-sharing)</li>
                                 <li><i class="fas fa-check icon"></i> Daily Breakfast & Dinner</li>
                                 <li><i class="fas fa-check icon"></i> All transfers & sightseeing by private AC vehicle</li>
                                 <li><i class="fas fa-check icon"></i> Standard Entry Fees & Permits (ILPs included)</li>
                                 <li><i class="fas fa-check icon"></i> Kaziranga Safaris (1 Elephant, 1 Jeep)</li>
                                 <li><i class="fas fa-check icon"></i> Loktak Lake Boating</li>
                                 <li><i class="fas fa-check icon"></i> Ferry charges (Majuli if itinerary adjusted)</li>
                                 <li><i class="fas fa-check icon"></i> Driver allowances, tolls, parking</li>
                                 <li><i class="fas fa-check icon"></i> All applicable taxes</li>
                                 <li><i class="fas fa-check icon"></i> Basic assistance from driver/local representatives</li>
                             </ul>
                         </div>
                         <div>
                             <h3>Package Excludes</h3>
                             <ul class="pd-checklist excludes">
                                 <li><i class="fas fa-times icon"></i> Domestic Airfare (Guwahati arrival, Imphal-Agartala, Agartala-Aizawl, Aizawl-Bagdogra, Bagdogra departure)</li>
                                 <li><i class="fas fa-times icon"></i> Lunches</li>
                                 <li><i class="fas fa-times icon"></i> Specialized Guides (available at extra cost)</li>
                                 <li><i class="fas fa-times icon"></i> Bum La Pass / Zero Point permits & vehicle costs</li>
                                 <li><i class="fas fa-times icon"></i> Camera Fees</li>
                                 <li><i class="fas fa-times icon"></i> Personal Expenses (Tips, Laundry, Shopping)</li>
                                 <li><i class="fas fa-times icon"></i> Travel Insurance</li>
                                 <li><i class="fas fa-times icon"></i> Expenses due to unforeseen circumstances (delays, roadblocks etc.)</li>
                                 <li><i class="fas fa-times icon"></i> Anything not mentioned in 'Includes'</li>
                             </ul>
                         </div>
                     </div>
                </section>

                 <!-- Accommodation Section -->
                 <section class="pd-content-section pd-card">
                     <h2>Accommodation Approach</h2>
                     <p style="margin-bottom: 20px; color: var(--muted-foreground);">Due to the diverse locations covered, accommodation will be a mix of comfortable 3-star equivalent hotels in major towns (Guwahati, Shillong, Kohima, Imphal, Agartala, Aizawl, Gangtok), established wildlife resorts near Kaziranga, and simpler but clean guesthouses or potentially homestays in more remote areas like Nongriat (Meghalaya), Mon (Nagaland), Dirang/Tawang/Ziro (Arunachal). We prioritize safety, cleanliness, and reasonable comfort suitable for each location.</p>
                     <div class="pd-accommodation-grid">
                         <div class="pd-accommodation-item">
                             <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?q=80&w=800" alt="City Hotel Example" loading="lazy">
                             <div class="content"><span class="type-tag">City Hotel</span><h4>Standard Hotels</h4><p>Comfortable hotels with standard amenities in state capitals and major towns.</p></div>
                         </div>
                          <div class="pd-accommodation-item">
                             <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?q=80&w=800" alt="Wildlife Resort Example" loading="lazy">
                             <div class="content"><span class="type-tag">Resort</span><h4>Wildlife Resorts</h4><p>Well-located resorts near national parks like Kaziranga, offering safari access.</p></div>
                         </div>
                          <div class="pd-accommodation-item">
                             <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?q=80&w=800" alt="Homestay Example" loading="lazy">
                             <div class="content"><span class="type-tag">Guesthouse/Homestay</span><h4>Remote Area Stays</h4><p>Basic, clean, and safe guesthouses or homestays in areas like Nongriat or Mon.</p></div>
                         </div>
                     </div>
                 </section>

                 <!-- Important Notes Section -->
                 <section class="pd-content-section pd-card">
                    <h2>Important Notes & Considerations</h2>
                    <ul class="pd-sidebar-why-list"> <!-- Reusing list style -->
                        <li><i class="fas fa-exclamation-triangle icon"></i> **Permits:** ILP for Arunachal, Nagaland, Mizoram required; ensure documents submitted on time.</li>
                        <li><i class="fas fa-exclamation-triangle icon"></i> **Fitness:** Moderate fitness needed for Meghalaya trek & handling high altitudes in Arunachal/Sikkim.</li>
                        <li><i class="fas fa-exclamation-triangle icon"></i> **Altitude:** Gradual ascent planned, but be aware of AMS symptoms. Consult doctor if needed.</li>
                        <li><i class="fas fa-exclamation-triangle icon"></i> **Travel Time:** Expect long driving days on mountainous/challenging roads. Be prepared for delays.</li>
                        <li><i class="fas fa-exclamation-triangle icon"></i> **Flights:** Assumes availability of internal flights; booking well in advance is critical. Schedule changes can impact itinerary.</li>
                        <li><i class="fas fa-exclamation-triangle icon"></i> **Accommodation:** Varies significantly. Basic facilities expected in remote areas.</li>
                        <li><i class="fas fa-exclamation-triangle icon"></i> **Connectivity:** Mobile network & internet access will be limited or unavailable outside major towns.</li>
                        <li><i class="fas fa-exclamation-triangle icon"></i> **Flexibility:** A flexible attitude is key due to the region's unpredictable nature.</li>
                    </ul>
                 </section>

                <!-- Gallery Section -->
                <section class="pd-content-section pd-card">
                    <h2>Gallery</h2>
                    <div class="pd-gallery-grid">
                        <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1574608534511-0436dbae6c5f?q=80&w=600" alt="Kaziranga Rhino" loading="lazy"></div>
                        <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1613507083489-9aa9d7bf6858?q=80&w=600" alt="Living Root Bridge" loading="lazy"></div>
                        <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1595953488545-f99bd0659d70?q=80&w=600" alt="Tawang Monastery" loading="lazy"></div>
                        <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1583159729100-2dc66956d41d?q=80&w=600" alt="Naga Tribe" loading="lazy"></div>
                        <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1631867675167-90a456a90863?q=80&w=600" alt="Loktak Lake" loading="lazy"></div>
                        <div class="pd-gallery-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/Ujjayanta_Palace%2C_Agartala%2C_Tripura.jpg/640px-Ujjayanta_Palace%2C_Agartala%2C_Tripura.jpg" alt="Ujjayanta Palace" loading="lazy"></div>
                        <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1589556264800-f01c1aae3e7a?q=80&w=600" alt="Mizoram Hills" loading="lazy"></div>
                        <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1518002054494-3a6f94352e9e?q=80&w=600" alt="Tsomgo Lake Sikkim" loading="lazy"></div>
                    </div>
                </section>

            </div> <!-- End Left Column -->

            <!-- ========================== -->
            <!-- === Right Column: Sidebar === -->
            <!-- ========================== -->
             <aside class="pd-sidebar">
                 <div class="pd-sidebar-sticky-wrapper">
                     <!-- Quick Booking Card -->
                     <div class="pd-sidebar-card">
                         <h3>Quick Booking</h3>
                         <p class="pd-sidebar-price">₹89,999</p>
                         <p class="pd-sidebar-price-note">per person on twin sharing</p>
                         <form action="process_booking.php" method="POST" style="margin-bottom: 10px;">
                             <input type="hidden" name="package_id" value="northeast-explorer">
                             <input type="hidden" name="package_price" value="89999.00">
                             <!-- Optional: Add more fields -->
                             <button type="submit" class="btn primary-btn full-width">Book Now</button>
                         <button class="btn outline-btn full-width">Send Inquiry</button>
                     </div>
                     <!-- Travel Info Card (Static) -->
                     <div class="pd-sidebar-card">
                         <h3>Travel Information</h3>
                         <div class="pd-sidebar-info-list">
                            <div><i class="fas fa-mountain icon"></i><div><h4>Best Time to Visit</h4><p>Oct - Apr (avoid monsoon)</p></div></div>
                            <div><i class="fas fa-route icon"></i><div><h4>Difficulty Level</h4><p>Moderate to Demanding</p></div></div>
                            <div><i class="fas fa-language icon"></i><div><h4>Languages</h4><p>English, Hindi, Various Local</p></div></div>
                            <div><i class="fas fa-plane icon"></i><div><h4>Flights Required</h4><p>Multiple internal flights</p></div></div>
                            <div><i class="fas fa-id-card icon"></i><div><h4>Permits Required</h4><p>ILP (Arunachal, Naga, Mizo)</p></div></div>
                         </div>
                     </div>
                     <!-- Why Choose Card (Static) -->
                      <div class="pd-sidebar-card">
                         <h3>Why Choose This Tour</h3>
                          <ul class="pd-sidebar-why-list">
                             <li><i class="fas fa-check icon"></i> Comprehensive All-State Coverage</li>
                             <li><i class="fas fa-check icon"></i> Mix of Iconic & Offbeat Experiences</li>
                             <li><i class="fas fa-check icon"></i> Focus on Cultural & Natural Diversity</li>
                             <li><i class="fas fa-check icon"></i> Logistics Handled (Permits, Transfers)</li>
                             <li><i class="fas fa-check icon"></i> Once-in-a-lifetime NE Exploration</li>
                         </ul>
                     </div>
                 </div><!-- End pd-sidebar-sticky-wrapper -->
             </aside> <!-- End pd-sidebar -->

        </div> <!-- End pd-main-layout -->
    </section> <!-- End pd-main-content-section -->

    <!-- ===================== -->
    <!-- === FAQ SECTION === -->
    <!-- ===================== -->
    <section class="pd-faq-section">
        <div class="container">
            <h2 class="pd-section-title">Frequently Asked Questions</h2>
            <div class="pd-faq-accordion pd-accordion">
                 <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">Is 15 days enough to cover all 8 states?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>This 15-day itinerary is a fast-paced 'highlights' tour covering key attractions in each state. It involves significant travel time. For a more in-depth exploration of specific states or regions, a longer duration or separate focused tours would be needed.</p></div>
                </div>
                <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">What fitness level is required?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Moderate fitness is required due to long travel days, the Meghalaya root bridge trek (optional but included), and high altitudes in Arunachal & Sikkim. Participants should be comfortable with long drives and walking.</p></div>
                </div>
                 <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">Are the internal flights included?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>No, the package price typically excludes the cost of the internal flights (Imphal-Agartala, Agartala-Aizawl, Aizawl-Bagdogra). These need to be booked separately. We can assist with recommendations, but booking is usually done by the traveler to get the best fares/schedules.</p></div>
                </div>
                <div class="pd-accordion-item">
                     <button class="pd-accordion-trigger">What kind of permits are handled?<i class="fas fa-chevron-down icon"></i></button>
                     <div class="pd-accordion-content"><p>We arrange the necessary Inner Line Permits (ILP) for domestic tourists for Arunachal Pradesh, Nagaland, and Mizoram based on the documents you provide. Permits for specific restricted areas like Bum La (Arunachal) or Nathula (Sikkim) often require separate local application/fees and are subject to approval.</p></div>
                 </div>
                <div class="pd-accordion-item">
                     <button class="pd-accordion-trigger">What about food during the tour?<i class="fas fa-chevron-down icon"></i></button>
                     <div class="pd-accordion-content"><p>Breakfast and dinner are included at the places of stay. Lunches are generally excluded to allow flexibility to try local eateries en route. Food will range from standard Indian/Continental in hotels to local tribal cuisine in homestays or simpler restaurants in remote areas.</p></div>
                 </div>
            </div> <!-- End pd-faq-accordion -->
        </div> <!-- End container -->
    </section> <!-- End pd-faq-section -->

</main>

<?php
// Optional: Include a footer partial
// include 'footer.php';
?>

<!-- ============================ -->
<!-- === LINK SCRIPTS HERE === -->
<!-- ============================ -->
<script src="js/package-interaction.js"></script>
<script src="js/navbar.js"></script>

</body>
</html>