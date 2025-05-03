<?php
// File: sikkim-adventure.php

// Define page specifics BEFORE including the header
$page_title = "Sikkim Himalayan Explorer Package - TripNE";
$page_specific_css = 'css/package-details-static.css'; // Link the NEW static CSS

include 'header.php'; // Include header (make sure path is correct)
?>

<main id="package-detail-page" class="state-theme-sikkim"> <!-- Apply Sikkim theme -->

    <!-- Hero Section -->
    <section class="pd-hero"> <!-- Removed ID, using class -->
        <div class="container pd-hero-container">
            <!-- Left Side: Title, Info, Price, Button -->
            <div class="pd-hero-content">
                <div class="pd-breadcrumbs">
                    <a href="packages.php">Packages</a> / <span>Sikkim Himalayan Explorer</span> <!-- Hardcoded -->
                </div>
                <h1>Sikkim Himalayan Explorer</h1> <!-- Hardcoded -->
                <div class="pd-hero-info">
                    <span><i class="fas fa-map-marker-alt icon"></i> Sikkim</span> <!-- Hardcoded -->
                    <span><i class="fas fa-calendar-alt icon"></i> 7 Days / 6 Nights</span> <!-- Hardcoded -->
                    <span><i class="fas fa-star icon"></i> 4.9/5</span> <!-- Hardcoded -->
                </div>
                <div class="pd-hero-price-box">
                    <h2>₹29,999</h2> <!-- Hardcoded -->
                    <p>per person on twin sharing basis</p>
                </div>
                <form action="process_booking.php" method="POST" style="display: inline;">
                    <input type="hidden" name="package_id" value="sikkim-adventure">
                    <input type="hidden" name="package_price" value="29999.00">
                    <!-- Optional: Add more fields like num_people if you add input for it -->
                    <button type="submit" class="btn primary-btn hero-btn">Book Now</button>
                </form>
            </div>
            <!-- Right Side: Image -->
            <div class="pd-hero-image-wrapper">
                <!-- Hardcode correct image path -->
                <img src="images/sikkim.jpg" alt="Sikkim Himalayan Explorer" class="pd-hero-image">
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
                            <p class="pd-description">Experience breathtaking views of the Eastern Himalayas with our comprehensive Sikkim package, featuring monasteries, high-altitude lakes like Tsomgo, the Indo-China border at Nathula, and the 'Valley of Flowers' at Yumthang.</p> <!-- Hardcoded -->
                            <hr class="pd-separator">
                            <div class="pd-includes-excludes-grid">
                                <div>
                                    <h3>Package Includes</h3>
                                    <ul class="pd-checklist includes"> <!-- Hardcoded -->
                                        <li><i class="fas fa-check icon"></i> Accommodation (3-star equivalent hotels)</li>
                                        <li><i class="fas fa-check icon"></i> All transfers (Bagdogra/NJP - Gangtok - North Sikkim)</li>
                                        <li><i class="fas fa-check icon"></i> Daily breakfast and dinner (All meals in North Sikkim)</li>
                                        <li><i class="fas fa-check icon"></i> English-speaking driver/guide</li>
                                        <li><i class="fas fa-check icon"></i> All permits including Nathula & North Sikkim</li>
                                        <li><i class="fas fa-check icon"></i> Entry fees for standard sightseeing</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3>Package Excludes</h3>
                                    <ul class="pd-checklist excludes"> <!-- Hardcoded -->
                                        <li><i class="fas fa-times icon"></i> Flights/trains to/from Bagdogra/NJP</li>
                                        <li><i class="fas fa-times icon"></i> Lunches (except in N.Sikkim)</li>
                                        <li><i class="fas fa-times icon"></i> Personal expenses (shopping, tips, laundry)</li>
                                        <li><i class="fas fa-times icon"></i> Yak rides / Cable car fees / Zero Point visit</li>
                                        <li><i class="fas fa-times icon"></i> Travel insurance</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="pd-separator">
                            <div>
                                <h3>Highlights</h3>
                                <ul class="pd-highlights-list"> <!-- Hardcoded -->
                                    <li>Panoramic views of Kanchenjunga range</li>
                                    <li>Visit serene Tsomgo Lake & Baba Mandir</li>
                                    <li>Explore the vibrant capital Gangtok</li>
                                    <li>Witness the beauty of Yumthang Valley</li>
                                    <li>Visit sacred Buddhist monasteries</li>
                                    <li>(Optional) Experience high altitude Nathula Pass</li>
                                </ul>
                            </div>
                            <hr class="pd-separator">
                            <div>
                                <h3>Destinations Covered</h3>
                                <div class="pd-destinations-tags"> <!-- Hardcoded -->
                                    <span>Gangtok</span>
                                    <span>Nathula Pass</span>
                                    <span>Tsomgo Lake</span>
                                    <span>Lachung</span>
                                    <span>Yumthang Valley</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Itinerary Content -->
                    <div id="content-itinerary" class="pd-tab-content">
                         <div class="pd-card">
                             <h2>Detailed Itinerary</h2>
                             <div class="pd-accordion"> <!-- Itinerary Accordion -->
                                 <!-- Day 1 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 1: Arrive Bagdogra/NJP, transfer...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>Arrive at Bagdogra Airport (IXB) or NJP Railway Station.</p>
                                        <p><i class="fas fa-clock icon"></i>Meet our representative and transfer to Gangtok (Approx 125 km / 4-5 hrs drive).</p>
                                        <p><i class="fas fa-clock icon"></i>Check into your hotel upon arrival.</p>
                                        <p><i class="fas fa-clock icon"></i>Evening free to relax or explore the famous MG Marg (Mall Road).</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in Gangtok.</p>
                                     </div>
                                 </div>
                                 <!-- Day 2 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 2: Gangtok Local Sightseeing...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>After breakfast, proceed for local sightseeing.</p>
                                        <p><i class="fas fa-clock icon"></i>Visit Rumtek Monastery (or Enchey Monastery), Directorate of Handicrafts & Handloom.</p>
                                        <p><i class="fas fa-clock icon"></i>Explore the Flower Exhibition Centre (seasonal).</p>
                                        <p><i class="fas fa-clock icon"></i>Visit Ganesh Tok, Hanuman Tok, and Tashi Viewpoint for panoramic views.</p>
                                        <p><i class="fas fa-clock icon"></i>Optional: Enjoy a cable car ride (ropeway).</p>
                                        <p><i class="fas fa-clock icon"></i>Return to hotel for overnight stay.</p>
                                     </div>
                                 </div>
                                 <!-- Day 3 -->
                                  <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 3: Excursion to Tsomgo...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>After breakfast, start the excursion to Tsomgo Lake (Changu Lake) situated at 12,400 ft.</p>
                                        <p><i class="fas fa-clock icon"></i>Enjoy the beautiful glacial lake and surrounding scenery.</p>
                                        <p><i class="fas fa-clock icon"></i>Visit the sacred Baba Mandir nearby.</p>
                                        <p><i class="fas fa-clock icon"></i>Optional: Visit Nathula Pass (Indo-China Border) - requires prior permit and subject to road conditions (extra cost applies).</p>
                                        <p><i class="fas fa-clock icon"></i>Return to Gangtok in the evening.</p>
                                     </div>
                                 </div>
                                 <!-- Day 4 -->
                                  <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 4: Drive to Lachung...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>After breakfast, check out and drive to Lachung in North Sikkim (Approx 117 km / 5-6 hrs).</p>
                                        <p><i class="fas fa-clock icon"></i>Enjoy the scenic journey through mountains, stopping at waterfalls like Seven Sisters Waterfall and Naga Waterfall.</p>
                                        <p><i class="fas fa-clock icon"></i>Check into your hotel/guesthouse in Lachung upon arrival.</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in Lachung.</p>
                                     </div>
                                 </div>
                                  <!-- Day 5 -->
                                  <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 5: Yumthang Valley Excursion...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                         <p><i class="fas fa-clock icon"></i>After breakfast, drive to Yumthang Valley, known as the 'Valley of Flowers' (Approx 25 km / 1.5 hrs).</p>
                                         <p><i class="fas fa-clock icon"></i>Explore the valley floor with the meandering Yumthang Chu river.</p>
                                         <p><i class="fas fa-clock icon"></i>Visit the hot springs in the valley.</p>
                                         <p><i class="fas fa-clock icon"></i>Optional: Excursion to Yumesamdong (Zero Point) near the Tibetan border (extra cost, subject to permit/road conditions).</p>
                                         <p><i class="fas fa-clock icon"></i>Return to Lachung for overnight stay.</p>
                                     </div>
                                 </div>
                                  <!-- Day 6 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 6: Return to Gangtok...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                         <p><i class="fas fa-clock icon"></i>After breakfast, drive back to Gangtok (Approx 5-6 hrs).</p>
                                         <p><i class="fas fa-clock icon"></i>Check into your hotel upon arrival.</p>
                                         <p><i class="fas fa-clock icon"></i>Rest of the day is free for leisure or last-minute shopping.</p>
                                         <p><i class="fas fa-clock icon"></i>Overnight stay in Gangtok.</p>
                                     </div>
                                 </div>
                                  <!-- Day 7 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 7: Departure from Gangtok...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                         <p><i class="fas fa-clock icon"></i>After breakfast, check out from the hotel.</p>
                                         <p><i class="fas fa-clock icon"></i>Transfer to Bagdogra Airport (IXB) or NJP Railway Station for your onward journey (Approx 4-5 hrs).</p>
                                         <p><i class="fas fa-clock icon"></i>Tour concludes.</p>
                                     </div>
                                 </div>
                             </div> <!-- End Itinerary Accordion -->
                             <div class="pd-notes-box"> <!-- Static notes -->
                                 <h3>Important Notes</h3>
                                 <ul>
                                    <li>• Itinerary may change due to weather or local conditions.</li>
                                    <li>• Activities subject to availability; may require extra fees.</li>
                                    <li>• North Sikkim requires special permits; timely document submission needed.</li>
                                    <li>• Inform us of dietary/special requirements in advance.</li>
                                    <li>• Carry warm clothing & necessary medications.</li>
                                 </ul>
                             </div>
                         </div>
                    </div>

                    <!-- Accommodation Content -->
                    <div id="content-accommodation" class="pd-tab-content">
                         <div class="pd-card">
                             <h2>Accommodation Details</h2>
                             <div class="pd-accommodation-grid"> <!-- Hardcoded -->
                                 <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?q=80&w=800" alt="Summit Denzong Hotel" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">3-Star</span>
                                          <h4>Summit Denzong Hotel (Gangtok)</h4>
                                          <p>Central location in Gangtok with good amenities and comfortable rooms.</p>
                                     </div>
                                 </div>
                                  <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?q=80&w=800" alt="Yarlam Resort" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">Resort/Guesthouse</span>
                                          <h4>Yarlam Resort or similar (Lachung)</h4>
                                          <p>Comfortable stay in Lachung, North Sikkim, offering necessary amenities for the region.</p>
                                     </div>
                                 </div>
                                  <div class="pd-accommodation-item">
                                     <img src="images/placeholder-hotel.jpg" alt="Alternative Hotel" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">Alternate</span>
                                          <h4>Similar Category Hotels</h4>
                                          <p>Accommodation provided in equivalent category hotels based on availability.</p>
                                     </div>
                                 </div>
                             </div>
                             <hr class="pd-separator">
                             <h3>Accommodation Policy</h3>
                             <div class="pd-policy-list"> <!-- Static policy -->
                                 <p>• Check-in: 2:00 PM, Check-out: 11:00 AM</p>
                                 <p>• Room upgrades subject to availability & charges</p>
                                 <p>• Early check-in/late check-out subject to availability</p>
                                 <p>• Based on twin-sharing basis</p>
                             </div>
                         </div>
                    </div>

                    <!-- Gallery Content -->
                    <div id="content-gallery" class="pd-tab-content">
                         <div class="pd-card">
                             <h2>Package Gallery</h2>
                             <div class="pd-gallery-grid"> <!-- Hardcoded -->
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1578968537135-af7d7fdfdf3c?q=80&w=600" alt="Gangtok City" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1518002054494-3a6f94352e9e?q=80&w=600" alt="Tsomgo Lake" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1533669955142-6a73332af4db?q=80&w=600" alt="Rumtek Monastery" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1617814086920-f414585c9c2e?q=80&w=600" alt="Yumthang Valley Flowers" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1516690561799-46d8f74f9abf?q=80&w=600" alt="Nathula Pass Road" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1626621341517-bbf3d9990a23?q=80&w=600" alt="Sikkim Mountains" loading="lazy"></div>
                             </div>
                         </div>
                    </div>
                </div><!-- End Tabs Content -->
            </div><!-- End Tabs Area -->

            <!-- Right Column: Sidebar -->
             <aside class="pd-sidebar">
                 <div class="pd-sidebar-sticky-wrapper">
                     <!-- Quick Booking Card -->
                     <div class="pd-sidebar-card">
                         <h3>Quick Booking</h3>
                         <p class="pd-sidebar-price">₹29,999</p> <!-- Hardcoded -->
                         <p class="pd-sidebar-price-note">per person on twin sharing</p>
                         <form action="process_booking.php" method="POST" style="margin-bottom: 10px;">
                             <input type="hidden" name="package_id" value="sikkim-adventure">
                             <input type="hidden" name="package_price" value="29999.00">
                             <!-- Optional: Add more fields -->
                             <button type="submit" class="btn primary-btn full-width">Book Now</button>
                         </form>
                         <button class="btn outline-btn full-width">Send Inquiry</button>
                     </div>
                     <!-- Travel Info Card (Static) -->
                     <div class="pd-sidebar-card">
                         <h3>Travel Information</h3>
                         <div class="pd-sidebar-info-list">
                            <div><i class="fas fa-mountain icon"></i><div><h4>Best Time to Visit</h4><p>Mar-Jun, Sep-Dec</p></div></div>
                            <div><i class="fas fa-route icon"></i><div><h4>Difficulty Level</h4><p>Moderate (Altitude)</p></div></div>
                            <div><i class="fas fa-language icon"></i><div><h4>Languages</h4><p>English, Hindi, Nepali</p></div></div>
                         </div>
                     </div>
                     <!-- Why Choose Card (Static) -->
                      <div class="pd-sidebar-card">
                         <h3>Why Choose This Package</h3>
                          <ul class="pd-sidebar-why-list">
                             <li><i class="fas fa-check icon"></i> Expert local guides</li>
                             <li><i class="fas fa-check icon"></i> Selected accommodations</li>
                             <li><i class="fas fa-check icon"></i> Authentic experiences</li>
                             <li><i class="fas fa-check icon"></i> 24/7 customer support</li>
                             <li><i class="fas fa-check icon"></i> Hassle-free permits</li>
                         </ul>
                     </div>
                 </div><!-- End pd-sidebar-sticky-wrapper -->
             </aside> <!-- End pd-sidebar -->

        </div> <!-- End pd-main-layout -->
    </section> <!-- End pd-main-content-section -->

     <!-- FAQ Section (Static) -->
    <section class="pd-faq-section">
        <div class="container">
            <h2 class="pd-section-title">Frequently Asked Questions</h2>
            <div class="pd-faq-accordion pd-accordion">
                <!-- Static FAQ items -->
                <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">What is the booking process?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Click "Book Now", fill details. Our team contacts you in 24h to confirm & provide payment instructions.</p></div>
                </div>
                 <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">Are permits included for North Sikkim & Nathula?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Yes, standard permits for North Sikkim and Tsomgo/Baba Mandir are included. Nathula Pass permit is included but subject to availability and road conditions (closed Mondays/Tuesdays).</p></div>
                </div>
                 <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">Is altitude sickness a concern?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Yes, areas like Tsomgo, Nathula, and North Sikkim are at high altitudes. Acclimatize properly, stay hydrated, avoid alcohol, and carry basic medicines. Consult your doctor if you have pre-existing conditions.</p></div>
                </div>
                <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">What kind of clothing is recommended?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Layered clothing is essential. Pack warm jackets, thermals, gloves, caps, and comfortable walking shoes. Sunglasses and sunscreen are also recommended due to high altitude sun.</p></div>
                </div>
            </div> <!-- End pd-faq-accordion -->
        </div> <!-- End container -->
    </section> <!-- End pd-faq-section -->

    <!-- Related Packages Section -->
    <section class="pd-related-packages state-theme-sikkim"> <!-- Add theme class -->
         <div class="container text-center">
              <h2 class="pd-section-title">Related Packages</h2>
              <p>Discover more amazing adventures in Sikkim and beyond</p> <!-- Hardcoded state -->
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