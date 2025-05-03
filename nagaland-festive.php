<?php
// File: nagaland-festive.php

// Define page specifics BEFORE including the header
$page_title = "Nagaland Festive Tribes Package - TripNE";
$page_specific_css = 'css/package-details-static.css'; // Link the SHARED static CSS

include 'header.php'; // Include header (make sure path is correct)
?>

<main id="package-detail-page" class="state-theme-nagaland"> <!-- Apply Nagaland theme -->

    <!-- Hero Section -->
    <section class="pd-hero">
        <div class="container pd-hero-container">
            <!-- Left Side: Title, Info, Price, Button -->
            <div class="pd-hero-content">
                <div class="pd-breadcrumbs">
                    <a href="packages.php">Packages</a> / <span>Nagaland Festive Tribes</span> <!-- Hardcoded -->
                </div>
                <h1>Nagaland Festive Tribes</h1> <!-- Hardcoded -->
                <div class="pd-hero-info">
                    <span><i class="fas fa-map-marker-alt icon"></i> Nagaland</span> <!-- Hardcoded -->
                    <span><i class="fas fa-calendar-alt icon"></i> 6 Days / 5 Nights</span> <!-- Hardcoded -->
                    <span><i class="fas fa-star icon"></i> 4.7/5</span> <!-- Hardcoded -->
                </div>
                <div class="pd-hero-price-box">
                    <h2>₹27,500</h2> <!-- Hardcoded (adjust if needed) -->
                    <p>per person on twin sharing basis</p>
                </div>
                <form action="process_booking.php" method="POST" style="display: inline;">
                    <input type="hidden" name="package_id" value="nagaland-festive">
                    <input type="hidden" name="package_price" value="27500.00">
                    <!-- Optional: Add more fields like num_people if you add input for it -->
                    <button type="submit" class="btn primary-btn hero-btn">Book Now</button>
                </form>
            </div>
            <!-- Right Side: Image -->
            <div class="pd-hero-image-wrapper">
                <!-- Hardcode correct image path -->
                <img src="images/Nagaland2.jpg" alt="Nagaland Festive Tribes" class="pd-hero-image">
                <div class="pd-hero-image-overlay"></div>
            </div>
        </div>
    </section>

    <!-- Main Content Section (Tabs & Sidebar) -->
    <section class="pd-main-content-section">
        <div class="container pd-main-layout">

            <!-- Left Column: Tabs -->
            <div class="pd-tabs-area">
                <!-- Tab Triggers -->
                <div class="pd-tabs-list">
                    <button class="pd-tab-trigger active" data-tab="overview">Overview</button>
                    <button class="pd-tab-trigger" data-tab="itinerary">Itinerary</button>
                    <button class="pd-tab-trigger" data-tab="accommodation">Accommodation</button>
                    <button class="pd-tab-trigger" data-tab="gallery">Gallery</button>
                </div>

                <!-- Tab Content Panels -->
                <div class="pd-tabs-content">
                    <!-- Overview Content -->
                    <div id="content-overview" class="pd-tab-content active">
                        <div class="pd-card">
                            <h2>Package Overview</h2>
                            <p class="pd-description">Immerse yourself in the vibrant tribal culture of Nagaland, the 'Land of Festivals'. Witness unique traditions, explore scenic landscapes like the Dzukou Valley, and visit the fascinating Konyak tribes in Mon.</p> <!-- Hardcoded -->
                            <hr class="pd-separator">
                            <div class="pd-includes-excludes-grid">
                                <div>
                                    <h3>Package Includes</h3>
                                    <ul class="pd-checklist includes"> <!-- Hardcoded -->
                                        <li><i class="fas fa-check icon"></i> Accommodation (Hotels/Homestays)</li>
                                        <li><i class="fas fa-check icon"></i> All transfers (Dimapur/Kohima start/end)</li>
                                        <li><i class="fas fa-check icon"></i> Daily breakfast and dinner</li>
                                        <li><i class="fas fa-check icon"></i> English-speaking local guide (where applicable)</li>
                                        <li><i class="fas fa-check icon"></i> Entry fees for standard sightseeing</li>
                                        <li><i class="fas fa-check icon"></i> Inner Line Permit (ILP) for Nagaland</li>
                                        <li><i class="fas fa-check icon"></i> Dzukou Valley trek guide (if trek option chosen & included)</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3>Package Excludes</h3>
                                    <ul class="pd-checklist excludes"> <!-- Hardcoded -->
                                        <li><i class="fas fa-times icon"></i> Flights/trains to/from Dimapur/Kohima</li>
                                        <li><i class="fas fa-times icon"></i> Lunches</li>
                                        <li><i class="fas fa-times icon"></i> Personal expenses (tips, shopping, etc.)</li>
                                        <li><i class="fas fa-times icon"></i> Hornbill Festival entry (if during festival dates)</li>
                                        <li><i class="fas fa-times icon"></i> Camera fees</li>
                                        <li><i class="fas fa-times icon"></i> Travel Insurance</li>
                                        <li><i class="fas fa-times icon"></i> Dzukou Valley camping gear (if applicable)</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="pd-separator">
                            <div>
                                <h3>Highlights</h3>
                                <ul class="pd-highlights-list"> <!-- Hardcoded -->
                                     <li>Experience unique Naga tribal culture</li>
                                     <li>Visit the historic capital Kohima</li>
                                     <li>Explore the Konyak tribal region of Mon (Longwa)</li>
                                     <li>Trek to the picturesque Dzukou Valley</li>
                                     <li>Witness traditional Naga architecture and lifestyle</li>
                                     <li>Visit the State Museum & War Cemetery</li>
                                </ul>
                            </div>
                            <hr class="pd-separator">
                            <div>
                                <h3>Destinations Covered</h3>
                                <div class="pd-destinations-tags"> <!-- Hardcoded -->
                                    <span>Kohima</span>
                                    <span>Mon (Longwa)</span>
                                    <span>Dzukou Valley (Trek Base)</span>
                                    <span>Dimapur (Transit)</span>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Overview -->

                    <!-- ========================= -->
                    <!-- === ITINERARY SECTION === -->
                    <!-- ========================= -->
                    <div id="content-itinerary" class="pd-tab-content">
                         <div class="pd-card">
                             <h2>Detailed Itinerary</h2>
                             <div class="pd-accordion"> <!-- Itinerary Accordion -->
                                 <!-- Day 1 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 1: Arrive Dimapur, Transfer to Kohima (Approx 75km / 2-3 hrs)<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>Arrive at Dimapur Airport (DMU) or Railway Station.</p>
                                        <p><i class="fas fa-clock icon"></i>Meet our representative and drive to Kohima, the capital of Nagaland.</p>
                                        <p><i class="fas fa-clock icon"></i>Check into your hotel in Kohima.</p>
                                        <p><i class="fas fa-clock icon"></i>Evening free to acclimatize and explore the local market if time permits.</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in Kohima.</p>
                                     </div>
                                 </div>
                                 <!-- Day 2 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 2: Kohima Sightseeing & Kisama Heritage Village<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>After breakfast, visit the Kohima War Cemetery, a poignant memorial to soldiers who died during the WWII Battle of Kohima.</p>
                                        <p><i class="fas fa-clock icon"></i>Explore the Nagaland State Museum to gain insights into the diverse tribal cultures, artifacts, and history of the state.</p>
                                        <p><i class="fas fa-clock icon"></i>Visit Kisama Heritage Village (approx 12 km from Kohima), the permanent site of the Hornbill Festival. Explore the traditional Morungs (dormitories) representing various Naga tribes.</p>
                                        <p><i class="fas fa-clock icon"></i>Optional afternoon visit to Jakhama or Khonoma Green Village (Angami tribal villages known for terrace cultivation and conservation efforts - may require extra time/cost).</p>
                                        <p><i class="fas fa-clock icon"></i>Return to Kohima for overnight stay.</p>
                                     </div>
                                 </div>
                                  <!-- Day 3 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 3: Drive to Mon (Konyak Region) (Approx 270km / 8-10+ hrs)<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>After a very early breakfast, embark on a long and scenic drive to Mon, the heartland of the Konyak Nagas.</p>
                                        <p><i class="fas fa-clock icon"></i>The journey involves traversing parts of Assam and re-entering Nagaland, passing through hills and rural landscapes. Road conditions can be challenging, making the journey time variable.</p>
                                        <p><i class="fas fa-clock icon"></i>Stop for simple lunch en route.</p>
                                        <p><i class="fas fa-clock icon"></i>Check into your basic hotel or guesthouse in Mon town upon arrival in the evening.</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in Mon.</p>
                                     </div>
                                 </div>
                                  <!-- Day 4 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 4: Explore Longwa Village (India-Myanmar Border)<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>After breakfast, drive to Longwa village (Approx 45 km / 2 hrs), one of the most fascinating Konyak villages.</p>
                                        <p><i class="fas fa-clock icon"></i>Longwa is unique as the international border between India and Myanmar runs through the village, including the house of the village chief (Angh).</p>
                                        <p><i class="fas fa-clock icon"></i>Visit the Angh's house and interact respectfully with the villagers.</p>
                                        <p><i class="fas fa-clock icon"></i>Observe the traditional Konyak lifestyle, architecture, and perhaps meet elders who still bear facial tattoos (a practice that has largely faded).</p>
                                        <p><i class="fas fa-clock icon"></i>Explore the village surroundings and enjoy the unique cross-border atmosphere.</p>
                                        <p><i class="fas fa-clock icon"></i>Return to Mon in the evening for overnight stay.</p>
                                     </div>
                                 </div>
                                  <!-- Day 5 -->
                                  <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 5: Return Towards Kohima / Dzukou Prep<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                         <p><i class="fas fa-clock icon"></i>After breakfast, begin the long drive back towards the Kohima region (Approx 8-10+ hrs).</p>
                                         <p><i class="fas fa-clock icon"></i>The destination for the night depends on whether the Dzukou trek is included and preferred start point.</p>
                                         <p><i class="fas fa-clock icon"></i>Option 1 (No Dzukou): Drive back to Kohima and check into hotel.</p>
                                         <p><i class="fas fa-clock icon"></i>Option 2 (Dzukou Prep): Drive to a guesthouse/homestay near Viswema or Jakhama village (closer to the trek start point) to allow for an early start the next day.</p>
                                         <p><i class="fas fa-clock icon"></i>Overnight stay at the chosen location.</p>
                                     </div>
                                 </div>
                                 <!-- Day 6 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 6: Dzukou Valley Trek OR Departure<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                         <p><i class="fas fa-clock icon"></i>**Option A (Dzukou Valley Day Trek):**</p>
                                         <p><i class="fas fa-clock icon"></i>Early morning drive to the trek starting point (Viswema route is common, involves initial vehicle ride then steep climb).</p>
                                         <p><i class="fas fa-clock icon"></i>Trek to the main Dzukou Valley viewpoint (Approx 3-4 hrs one way). The valley floor offers stunning views, especially when flowers bloom (seasonal).</p>
                                         <p><i class="fas fa-clock icon"></i>Spend some time exploring the valley.</p>
                                         <p><i class="fas fa-clock icon"></i>Trek back to the starting point (Approx 2-3 hrs).</p>
                                         <p><i class="fas fa-clock icon"></i>Drive directly to Dimapur (Approx 3-4 hrs from trek base) for late evening departure flight/train. (Note: This makes for a very long and strenuous day).</p>
                                         <p><i class="fas fa-clock icon"></i>**Option B (Departure from Kohima):**</p>
                                         <p><i class="fas fa-clock icon"></i>After breakfast in Kohima, drive back to Dimapur (Approx 2-3 hrs).</p>
                                         <p><i class="fas fa-clock icon"></i>Transfer to Dimapur Airport (DMU) or Railway Station for your onward journey.</p>
                                         <p><i class="fas fa-clock icon"></i>Tour concludes.</p>
                                     </div>
                                 </div>
                             </div> <!-- End Itinerary Accordion -->
                             <div class="pd-notes-box"> <!-- Static notes -->
                                 <h3>Important Notes</h3>
                                 <ul>
                                    <li>• ILP required for domestic tourists; arrange in advance.</li>
                                    <li>• Roads, especially to Mon, can be rough; travel times are estimates.</li>
                                    <li>• Be respectful of local culture and seek permission before taking photos.</li>
                                    <li>• Dzukou trek requires good fitness; weather can change rapidly. Consider an extra day for a more relaxed trek with overnight camping (requires different arrangements).</li>
                                    <li>• Accommodation standards outside Kohima/Dimapur are generally basic but clean.</li>
                                    <li>• Carry sufficient cash as ATMs are scarce outside main towns.</li>
                                 </ul>
                             </div>
                         </div>
                    </div> <!-- End Itinerary -->

                    <!-- ============================= -->
                    <!-- === ACCOMMODATION SECTION === -->
                    <!-- ============================= -->
                    <div id="content-accommodation" class="pd-tab-content">
                         <div class="pd-card">
                             <h2>Accommodation Details</h2>
                             <p style="margin-bottom: 20px; color: var(--muted-foreground);">Accommodation includes stays in standard hotels in Kohima/Dimapur and basic but clean guesthouses or homestays in Mon, chosen for location and reliability.</p>
                             <div class="pd-accommodation-grid">
                                 <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=800" alt="Hotel Japfu Kohima" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">Hotel</span>
                                          <h4>Hotel Japfu or similar (Kohima)</h4>
                                          <p>Established hotel in Kohima offering standard amenities and comfortable rooms, often used as a base.</p>
                                     </div>
                                 </div>
                                  <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1587061949409-02df41d545a3?q=80&w=800" alt="Basic Guesthouse Mon" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">Guesthouse</span>
                                          <h4>Basic Guesthouse (e.g., Helsa Cottage) or Homestay (Mon)</h4>
                                          <p>Accommodation in Mon is limited. Expect simple, clean rooms with essential facilities. Focus is on the cultural experience.</p>
                                     </div>
                                 </div>
                                  <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1564501049412-61c2a3083791?q=80&w=800" alt="Hotel Saramati Dimapur" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">Hotel</span>
                                          <h4>Hotel Saramati or similar (Dimapur - if needed for transit)</h4>
                                          <p>Standard hotel option in Dimapur, typically used if required due to flight/train timings.</p>
                                     </div>
                                 </div>
                                  <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1591825729269-caeb344f6df2?q=80&w=800" alt="Dzukou Base Camp Homestay" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">Guesthouse/Homestay</span>
                                          <h4>Guesthouse/Homestay (Near Dzukou Trek Point - if trek opted)</h4>
                                          <p>Basic accommodation near Viswema or Jakhama for an early start for the Dzukou Valley trek.</p>
                                     </div>
                                 </div>
                             </div>
                             <hr class="pd-separator">
                             <h3>Accommodation Policy</h3>
                             <div class="pd-policy-list"> <!-- Static policy -->
                                 <p>• Check-in: ~12:00 PM - 2:00 PM, Check-out: ~11:00 AM</p>
                                 <p>• Accommodation in Mon and Dzukou base is basic; hot water might be limited.</p>
                                 <p>• Hotels based on twin-sharing basis unless specified otherwise.</p>
                                 <p>• Power supply can be erratic in remote areas.</p>
                             </div>
                         </div>
                    </div> <!-- End Accommodation -->

                    <!-- ======================= -->
                    <!-- === GALLERY SECTION === -->
                    <!-- ======================= -->
                    <div id="content-gallery" class="pd-tab-content">
                         <div class="pd-card">
                             <h2>Package Gallery</h2>
                             <div class="pd-gallery-grid"> <!-- Hardcoded Images -->
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1583159729100-2dc66956d41d?q=80&w=600" alt="Naga Man Traditional Attire" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1617875025616-63b6e3a4d8f0?q=80&w=600" alt="Dzukou Valley Rolling Hills" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1642473725977-94e1827c7329?q=80&w=600" alt="Konyak Naga Elder with Tattoos" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1556259891-43dc2c54f56c?q=80&w=600" alt="View over Kohima City" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Kohima_War_Cemetery_1.jpg/640px-Kohima_War_Cemetery_1.jpg" alt="Kohima War Cemetery" loading="lazy"></div> <!-- Example from Wikimedia -->
                                 <div class="pd-gallery-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Traditional_House_in_Longwa_Village%2C_Mon%2C_Nagaland.jpg/640px-Traditional_House_in_Longwa_Village%2C_Mon%2C_Nagaland.jpg" alt="Longwa Village House" loading="lazy"></div> <!-- Example from Wikimedia -->
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1584600375758-b8cb05a0986e?q=80&w=600" alt="Hornbill Festival Dancer" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1605649487212-47bdab064df7?q=80&w=600" alt="Nagaland Hill Landscape" loading="lazy"></div> <!-- Placeholder -->
                             </div>
                         </div>
                    </div> <!-- End Gallery -->
                </div><!-- End Tabs Content -->
            </div><!-- End Tabs Area -->

            <!-- Right Column: Sidebar -->
             <aside class="pd-sidebar">
                 <div class="pd-sidebar-sticky-wrapper">
                     <!-- Quick Booking Card -->
                     <div class="pd-sidebar-card">
                         <h3>Quick Booking</h3>
                         <p class="pd-sidebar-price">₹27,500</p> <!-- Hardcoded -->
                         <p class="pd-sidebar-price-note">per person on twin sharing</p>
                         <form action="process_booking.php" method="POST" style="margin-bottom: 10px;">
                             <input type="hidden" name="package_id" value="nagaland-festive">
                             <input type="hidden" name="package_price" value="27500.00">
                             <!-- Optional: Add more fields -->
                             <button type="submit" class="btn primary-btn full-width">Book Now</button>
                         <button class="btn outline-btn full-width">Send Inquiry</button>
                     </div>
                     <!-- Travel Info Card (Static) -->
                     <div class="pd-sidebar-card">
                         <h3>Travel Information</h3>
                         <div class="pd-sidebar-info-list">
                            <div><i class="fas fa-mountain icon"></i><div><h4>Best Time to Visit</h4><p>Oct to May (Dec for Hornbill)</p></div></div>
                            <div><i class="fas fa-route icon"></i><div><h4>Difficulty Level</h4><p>Easy (Mon) / Moderate (Dzukou)</p></div></div>
                            <div><i class="fas fa-language icon"></i><div><h4>Languages</h4><p>English, Nagamese, Hindi</p></div></div>
                         </div>
                     </div>
                     <!-- Why Choose Card (Static) -->
                      <div class="pd-sidebar-card">
                         <h3>Why Choose This Package</h3>
                          <ul class="pd-sidebar-why-list">
                             <li><i class="fas fa-check icon"></i> Deep tribal immersion</li>
                             <li><i class="fas fa-check icon"></i> Visit unique Longwa village</li>
                             <li><i class="fas fa-check icon"></i> Includes scenic Dzukou trek option</li>
                             <li><i class="fas fa-check icon"></i> Historic Kohima exploration</li>
                             <li><i class="fas fa-check icon"></i> Experience authentic Nagaland</li>
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
                 <!-- Static FAQ items relevant to Nagaland -->
                 <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">Do I need a permit for Nagaland?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Yes, domestic Indian tourists require an Inner Line Permit (ILP) to enter Nagaland. Foreign tourists require Registration (previously RAP/PAP is no longer needed for most parts, but registration is mandatory). These permits/registrations are usually arranged by your tour operator (included in this package for ILP) and require submitting documents like ID proof (Aadhaar/Voter ID/Passport), passport-size photos, and travel details in advance.</p></div>
                </div>
                <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">Is it safe to visit tribal villages like Longwa?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Yes, visiting Naga villages like Longwa with a guide or through an arranged tour is generally safe and welcoming. It's crucial to be respectful of local customs, traditions, and privacy. Always ask for permission before taking photographs of people, especially elders or inside homes.</p></div>
                </div>
                 <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">When is the Hornbill Festival?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>The famous Hornbill Festival takes place annually from December 1st to 10th at Kisama Heritage Village near Kohima. It's a major tourist attraction showcasing the culture of all Naga tribes. Traveling during the festival requires booking well in advance and usually involves significantly higher costs for accommodation and transport. This standard itinerary does not assume travel during the festival dates.</p></div>
                </div>
                <div class="pd-accordion-item">
                     <button class="pd-accordion-trigger">How difficult is the Dzukou Valley trek included in the options?<i class="fas fa-chevron-down icon"></i></button>
                     <div class="pd-accordion-content"><p>The day trek to Dzukou Valley (Option A in Day 6) is considered moderate. It involves a steep climb for a significant portion, followed by relatively flat terrain across the valley floor. Good walking shoes and reasonable physical fitness are required. The full day is long and demanding if returning to Dimapur same day. Weather can change rapidly; carry water and rain gear.</p></div>
                 </div>
                <div class="pd-accordion-item">
                     <button class="pd-accordion-trigger">What are the road conditions like, especially to Mon?<i class="fas fa-chevron-down icon"></i></button>
                     <div class="pd-accordion-content"><p>Road conditions in Nagaland, particularly the stretch towards Mon, can be challenging and unpredictable. While major routes are improving, expect sections of bumpy, unpaved, or landslide-prone roads. Travel times are estimates and can vary significantly based on current conditions. A sturdy vehicle (like an SUV) is recommended.</p></div>
                 </div>
            </div> <!-- End pd-faq-accordion -->
        </div> <!-- End container -->
    </section> <!-- End pd-faq-section -->

    <!-- Related Packages Section -->
    <section class="pd-related-packages state-theme-nagaland"> <!-- Add theme class -->
         <div class="container text-center">
              <h2 class="pd-section-title">Related Packages</h2>
              <p>Discover more amazing adventures in Nagaland and beyond</p> <!-- Hardcoded state -->
              <a href="packages.php" class="btn related-btn">Explore All Packages</a>
         </div>
    </section>

</main>

<?php
// Optional: Include a footer partial
// include 'footer.php';
?>

<!-- ============================ -->
<!-- === LINK SCRIPTS HERE === -->
<!-- ============================ -->
<!-- Link Interaction JS FIRST -->
<script src="js/package-interaction.js"></script>

<!-- Link Global/Navbar JS SECOND -->
<script src="js/navbar.js"></script>


</body>
</html>