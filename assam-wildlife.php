<?php
// File: assam-wildlife.php

// Define page specifics BEFORE including the header
$page_title = "Assam Wildlife & Culture Package - TripNE";
$page_specific_css = 'css/package-details-static.css'; // Link the SHARED static CSS

include 'header.php'; // Include header (make sure path is correct)
?>

<main id="package-detail-page" class="state-theme-assam"> <!-- Apply Assam theme -->

    <!-- Hero Section -->
    <section class="pd-hero">
        <div class="container pd-hero-container">
            <!-- Left Side: Title, Info, Price, Button -->
            <div class="pd-hero-content">
                <div class="pd-breadcrumbs">
                    <a href="packages.php">Packages</a> / <span>Assam Wildlife & Culture</span> <!-- Hardcoded -->
                </div>
                <h1>Assam Wildlife & Culture</h1> <!-- Hardcoded -->
                <div class="pd-hero-info">
                    <span><i class="fas fa-map-marker-alt icon"></i> Assam</span> <!-- Hardcoded -->
                    <span><i class="fas fa-calendar-alt icon"></i> 5 Days / 4 Nights</span> <!-- Hardcoded -->
                    <span><i class="fas fa-star icon"></i> 4.7/5</span> <!-- Hardcoded -->
                </div>
                <div class="pd-hero-price-box">
                    <h2>₹22,999</h2> <!-- Hardcoded -->
                    <p>per person on twin sharing basis</p>
                </div>
                <form action="process_booking.php" method="POST" style="display: inline;">
                    <input type="hidden" name="package_id" value="assam-wildlife">
                    <input type="hidden" name="package_price" value="22999.00">
                    <!-- Optional: Add more fields like num_people if you add input for it -->
                    <button type="submit" class="btn primary-btn hero-btn">Book Now</button>
                </form>
            </div>
            <!-- Right Side: Image -->
            <div class="pd-hero-image-wrapper">
                <!-- Hardcode correct image path -->
                <img src="images/ranghar.jpg" alt="Assam Wildlife Safari Rhino" class="pd-hero-image">
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
                            <p class="pd-description">Experience Assam's rich wildlife at Kaziranga, home to the one-horned rhino, and delve into the unique Vaishnavite culture of Majuli, the world's largest river island.</p> <!-- Hardcoded -->
                            <hr class="pd-separator">
                            <div class="pd-includes-excludes-grid">
                                <div>
                                    <h3>Package Includes</h3>
                                    <ul class="pd-checklist includes"> <!-- Hardcoded -->
                                        <li><i class="fas fa-check icon"></i> Accommodation (Wildlife Resorts/Hotels)</li>
                                        <li><i class="fas fa-check icon"></i> All transfers and ferry crossings</li>
                                        <li><i class="fas fa-check icon"></i> Daily breakfast, lunch, and dinner</li>
                                        <li><i class="fas fa-check icon"></i> 1 Jeep Safari & 1 Elephant Safari in Kaziranga</li>
                                        <li><i class="fas fa-check icon"></i> English-speaking naturalist guide in Kaziranga</li>
                                        <li><i class="fas fa-check icon"></i> Entry fees & permits</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3>Package Excludes</h3>
                                    <ul class="pd-checklist excludes"> <!-- Hardcoded -->
                                        <li><i class="fas fa-times icon"></i> Flights/trains to/from Guwahati</li>
                                        <li><i class="fas fa-times icon"></i> Camera fees at park/monuments</li>
                                        <li><i class="fas fa-times icon"></i> Personal expenses (tips, laundry, etc.)</li>
                                        <li><i class="fas fa-times icon"></i> Optional activities not mentioned</li>
                                        <li><i class="fas fa-times icon"></i> Travel Insurance</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="pd-separator">
                            <div>
                                <h3>Highlights</h3>
                                <ul class="pd-highlights-list"> <!-- Hardcoded -->
                                     <li>Spot one-horned rhinos in Kaziranga</li>
                                     <li>Explore unique river island culture in Majuli</li>
                                     <li>Visit ancient Vaishnavite Satras</li>
                                     <li>Experience thrilling jungle safaris</li>
                                     <li>(Optional) Brahmaputra sunset cruise</li>
                                </ul>
                            </div>
                            <hr class="pd-separator">
                            <div>
                                <h3>Destinations Covered</h3>
                                <div class="pd-destinations-tags"> <!-- Hardcoded -->
                                    <span>Kaziranga National Park</span>
                                    <span>Majuli Island</span>
                                    <span>Guwahati</span>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Overview -->

                    <!-- Itinerary Content -->
                    <div id="content-itinerary" class="pd-tab-content">
                         <div class="pd-card">
                             <h2>Detailed Itinerary</h2>
                             <div class="pd-accordion"> <!-- Itinerary Accordion -->
                                 <!-- Day 1 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 1: Arrive Guwahati, transfer to Kaziranga...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>Arrive at Guwahati Airport (GAU) or Railway Station.</p>
                                        <p><i class="fas fa-clock icon"></i>Meet representative and transfer to Kaziranga National Park (Approx 220 km / 4-5 hrs drive).</p>
                                        <p><i class="fas fa-clock icon"></i>Check into your wildlife resort/hotel.</p>
                                        <p><i class="fas fa-clock icon"></i>Evening free for leisure or enjoy a cultural show (optional, depending on resort).</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in Kaziranga.</p>
                                     </div>
                                 </div>
                                 <!-- Day 2 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 2: Kaziranga Safaris & Orchid Park...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>Early morning Elephant Safari in the Central Range (Kohora) for rhino sightings.</p>
                                        <p><i class="fas fa-clock icon"></i>Return to resort for breakfast.</p>
                                        <p><i class="fas fa-clock icon"></i>Afternoon Jeep Safari in either the Western Range (Bagori) or Eastern Range (Agaratoli), known for rhinos and birdlife respectively.</p>
                                        <p><i class="fas fa-clock icon"></i>Visit the Kaziranga Orchid and Biodiversity Park.</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in Kaziranga.</p>
                                     </div>
                                 </div>
                                  <!-- Day 3 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 3: Transfer to Majuli Island, Satra Visit...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>After breakfast, drive to Nimati Ghat near Jorhat (Approx 100 km / 2-3 hrs).</p>
                                        <p><i class="fas fa-clock icon"></i>Take a public ferry across the Brahmaputra River to Majuli Island (Approx 1-1.5 hrs crossing).</p>
                                        <p><i class="fas fa-clock icon"></i>Check into your traditional guest house/homestay in Majuli.</p>
                                        <p><i class="fas fa-clock icon"></i>Visit prominent Satras (Vaishnavite monasteries) like Auniati Satra and Kamalabari Satra.</p>
                                        <p><i class="fas fa-clock icon"></i>Explore a local village known for traditional mask making (Samaguri Satra).</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in Majuli.</p>
                                     </div>
                                 </div>
                                  <!-- Day 4 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 4: Return to Guwahati, Kamakhya Temple...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>Morning ferry back to Nimati Ghat.</p>
                                        <p><i class="fas fa-clock icon"></i>Drive back to Guwahati (Approx 300 km / 5-6 hrs).</p>
                                        <p><i class="fas fa-clock icon"></i>Check into your hotel in Guwahati.</p>
                                        <p><i class="fas fa-clock icon"></i>If time permits, visit the Kamakhya Temple (view from outside may be necessary due to time/rules).</p>
                                        <p><i class="fas fa-clock icon"></i>Optional: Enjoy a sunset cruise on the Brahmaputra River (subject to availability/timing).</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in Guwahati.</p>
                                     </div>
                                 </div>
                                  <!-- Day 5 -->
                                  <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 5: Departure from Guwahati...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                         <p><i class="fas fa-clock icon"></i>After breakfast, check out from the hotel.</p>
                                         <p><i class="fas fa-clock icon"></i>Transfer to Guwahati Airport (GAU) or Railway Station for your onward journey.</p>
                                         <p><i class="fas fa-clock icon"></i>Tour concludes.</p>
                                     </div>
                                 </div>
                             </div> <!-- End Itinerary Accordion -->
                             <div class="pd-notes-box"> <!-- Static notes -->
                                 <h3>Important Notes</h3>
                                 <ul>
                                    <li>• Kaziranga National Park is typically closed from May to October (monsoon). Check exact dates.</li>
                                    <li>• Ferry timings to Majuli are subject to weather and river conditions.</li>
                                    <li>• Accommodation in Majuli is basic (guesthouses/homestays).</li>
                                    <li>• Safari timings and zones are subject to forest department regulations.</li>
                                 </ul>
                             </div>
                         </div>
                    </div> <!-- End Itinerary -->

                    <!-- Accommodation Content -->
                    <div id="content-accommodation" class="pd-tab-content">
                         <div class="pd-card">
                             <h2>Accommodation Details</h2>
                             <div class="pd-accommodation-grid"> <!-- Hardcoded examples -->
                                 <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa?q=80&w=800" alt="IORA - The Retreat Kaziranga" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">Wildlife Resort</span>
                                          <h4>IORA - The Retreat or similar (Kaziranga)</h4>
                                          <p>Comfortable resort near park entrances with good amenities, pool, and dining options.</p>
                                     </div>
                                 </div>
                                  <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1616594039964-ae9021a400a0?q=80&w=800" alt="La Lolat Homestay Majuli" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">Guesthouse/Homestay</span>
                                          <h4>La Lolat Eco Camp or similar (Majuli)</h4>
                                          <p>Basic but clean traditional bamboo cottages offering an authentic stay on Majuli island.</p>
                                     </div>
                                 </div>
                                  <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?q=80&w=800" alt="Hotel Dynesty Guwahati" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">3-Star Hotel</span>
                                          <h4>Hotel Dynesty or similar (Guwahati)</h4>
                                          <p>Well-located standard city hotel suitable for transit stays in Guwahati.</p>
                                     </div>
                                 </div>
                             </div>
                             <hr class="pd-separator">
                             <h3>Accommodation Policy</h3>
                             <div class="pd-policy-list"> <!-- Static policy -->
                                 <p>• Check-in: 2:00 PM, Check-out: 11:00 AM</p>
                                 <p>• Room upgrades subject to availability & charges</p>
                                 <p>• Accommodation in Majuli is typically simpler than in cities/resorts.</p>
                                 <p>• Based on twin-sharing basis</p>
                             </div>
                         </div>
                    </div> <!-- End Accommodation -->

                    <!-- Gallery Content -->
                    <div id="content-gallery" class="pd-tab-content">
                         <div class="pd-card">
                             <h2>Package Gallery</h2>
                             <div class="pd-gallery-grid"> <!-- Hardcoded -->
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1574608534511-0436dbae6c5f?q=80&w=600" alt="Kaziranga Rhino" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1604944926369-057f7650f1e4?q=80&w=600" alt="Majuli Satra Monk" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1569400953132-3348dec14760?q=80&w=600" alt="Assam Tea Garden Landscape" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1589861939216-a78871221f2e?q=80&w=600" alt="Brahmaputra River Ferry" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1627889679922-2653ff788c81?q=80&w=600" alt="Kaziranga Jeep Safari Vehicle" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1642473725977-94e1827c7329?q=80&w=600" alt="Majuli Traditional Mask" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1597102812136-1344a09a2f68?q=80&w=600" alt="Elephant Safari Kaziranga" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1632081203329-4cc05508554c?q=80&w=600" alt="Kamakhya Temple Guwahati" loading="lazy"></div>
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
                         <p class="pd-sidebar-price">₹22,999</p> <!-- Hardcoded -->
                         <p class="pd-sidebar-price-note">per person on twin sharing</p>
                         <form action="process_booking.php" method="POST" style="margin-bottom: 10px;">
                             <input type="hidden" name="package_id" value="assam-wildlife">
                             <input type="hidden" name="package_price" value="22999.00">
                             <!-- Optional: Add more fields -->
                             <button type="submit" class="btn primary-btn full-width">Book Now</button>
                         <button class="btn outline-btn full-width">Send Inquiry</button>
                     </div>
                     <!-- Travel Info Card (Static) -->
                     <div class="pd-sidebar-card">
                         <h3>Travel Information</h3>
                         <div class="pd-sidebar-info-list">
                            <div><i class="fas fa-mountain icon"></i><div><h4>Best Time to Visit</h4><p>Nov to Apr (Park Open)</p></div></div>
                            <div><i class="fas fa-route icon"></i><div><h4>Difficulty Level</h4><p>Easy</p></div></div>
                            <div><i class="fas fa-language icon"></i><div><h4>Languages</h4><p>English, Hindi, Assamese</p></div></div>
                         </div>
                     </div>
                     <!-- Why Choose Card (Static) -->
                      <div class="pd-sidebar-card">
                         <h3>Why Choose This Package</h3>
                          <ul class="pd-sidebar-why-list">
                             <li><i class="fas fa-check icon"></i> Focus on prime wildlife</li>
                             <li><i class="fas fa-check icon"></i> Unique river island culture</li>
                             <li><i class="fas fa-check icon"></i> Experienced guides/naturalists</li>
                             <li><i class="fas fa-check icon"></i> Includes key safaris</li>
                             <li><i class="fas fa-check icon"></i> Blend of nature & culture</li>
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
                 <!-- Static FAQ items relevant to Assam -->
                <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">What is the best time for rhino sightings in Kaziranga?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Rhino sightings are generally good throughout the open season (Nov-Apr), especially during morning elephant or jeep safaris. Sightings are very common but, like all wildlife, not 100% guaranteed.</p></div>
                </div>
                 <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">Is Majuli accessible during monsoon?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Ferry services to Majuli can be heavily disrupted or suspended during peak monsoon months (typically Jun-Sep) due to high water levels and strong currents in the Brahmaputra. Travel is most reliable from October to April.</p></div>
                </div>
                 <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">What kind of accommodation is available in Majuli?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Accommodation in Majuli primarily consists of basic guesthouses run by Satras, traditional bamboo cottages (often called eco-camps), and simple homestays. Expect essential amenities rather than luxury.</p></div>
                </div>
                 <div class="pd-accordion-item">
                     <button class="pd-accordion-trigger">Are Elephant safaris guaranteed?<i class="fas fa-chevron-down icon"></i></button>
                     <div class="pd-accordion-content"><p>Elephant safaris are subject to availability and managed by the Forest Department. While usually included, they can occasionally be cancelled due to weather, animal behavior, or official reasons. Jeep safaris are a reliable alternative.</p></div>
                 </div>
            </div> <!-- End pd-faq-accordion -->
        </div> <!-- End container -->
    </section> <!-- End pd-faq-section -->

    <!-- Related Packages Section -->
    <section class="pd-related-packages state-theme-assam"> <!-- Add theme class -->
         <div class="container text-center">
              <h2 class="pd-section-title">Related Packages</h2>
              <p>Discover more amazing adventures in Assam and beyond</p> <!-- Hardcoded state -->
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
<!-- Link Interaction JS FIRST (No Data needed) -->
<script src="js/package-interaction.js"></script>

<!-- Link Global/Navbar JS SECOND -->
<script src="js/navbar.js"></script>


</body>
</html>