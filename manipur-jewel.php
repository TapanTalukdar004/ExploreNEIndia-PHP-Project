<?php
// File: manipur-jewel.php

// Define page specifics BEFORE including the header
$page_title = "Manipur: The Jeweled Land Package - TripNE";
$page_specific_css = 'css/package-details-static.css'; // Link the SHARED static CSS

// Use a consistent class name for the state theme
$body_class = "state-theme-manipur";

include 'header.php'; // Include header (make sure path is correct)
?>

<main id="package-detail-page" class="<?php echo $body_class; ?>"> <!-- Apply Manipur theme -->

    <!-- Hero Section -->
    <section class="pd-hero">
        <div class="container pd-hero-container">
            <!-- Left Side: Title, Info, Price, Button -->
            <div class="pd-hero-content">
                <div class="pd-breadcrumbs">
                    <a href="packages.php">Packages</a> / <span>Manipur: The Jeweled Land</span> <!-- Hardcoded -->
                </div>
                <h1>Manipur: The Jeweled Land</h1> <!-- Hardcoded -->
                <div class="pd-hero-info">
                    <span><i class="fas fa-map-marker-alt icon"></i> Manipur</span> <!-- Hardcoded -->
                    <span><i class="fas fa-calendar-alt icon"></i> 4 Days / 3 Nights</span> <!-- Hardcoded -->
                    <span><i class="fas fa-star icon"></i> 4.5/5</span> <!-- Hardcoded -->
                </div>
                <div class="pd-hero-price-box">
                    <h2>₹19,999</h2> <!-- Hardcoded -->
                    <p>per person on twin sharing basis</p>
                </div>
                <form action="process_booking.php" method="POST" style="display: inline;">
                    <input type="hidden" name="package_id" value="manipur-jewel">
                    <input type="hidden" name="package_price" value="19999.00">
                    <!-- Optional: Add more fields like num_people if you add input for it -->
                    <button type="submit" class="btn primary-btn hero-btn">Book Now</button>
                </form>
            </div>
            <!-- Right Side: Image -->
            <div class="pd-hero-image-wrapper">
                <!-- Hardcode correct image path -->
                <img src="images/Manipur.webp" alt="Manipur Loktak Lake" class="pd-hero-image">
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
                            <p class="pd-description">Explore the beauty of Manipur, the 'Jeweled Land'. Witness the unique Loktak Lake with its floating islands (phumdis), spot the endangered Sangai deer at Keibul Lamjao National Park (world's only floating park), experience the vibrant Ima Market run by women, and delve into the rich history at Kangla Fort in Imphal.</p> <!-- Hardcoded -->
                            <hr class="pd-separator">
                            <div class="pd-includes-excludes-grid">
                                <div>
                                    <h3>Package Includes</h3>
                                    <ul class="pd-checklist includes"> <!-- Hardcoded -->
                                        <li><i class="fas fa-check icon"></i> Accommodation (Standard Hotels in Imphal)</li>
                                        <li><i class="fas fa-check icon"></i> All transfers & sightseeing by private vehicle (from Imphal Airport/Station)</li>
                                        <li><i class="fas fa-check icon"></i> Daily breakfast and dinner</li>
                                        <li><i class="fas fa-check icon"></i> Entry fees to parks & monuments mentioned</li>
                                        <li><i class="fas fa-check icon"></i> Boating charges at Loktak Lake</li>
                                        <li><i class="fas fa-check icon"></i> Inner Line Permit (ILP) if required for domestic tourists (check current regulations)</li>
                                        <li><i class="fas fa-check icon"></i> All applicable taxes</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3>Package Excludes</h3>
                                    <ul class="pd-checklist excludes"> <!-- Hardcoded -->
                                        <li><i class="fas fa-times icon"></i> Flights/trains to/from Imphal</li>
                                        <li><i class="fas fa-times icon"></i> Lunches</li>
                                        <li><i class="fas fa-times icon"></i> Personal expenses (tips, shopping, laundry)</li>
                                        <li><i class="fas fa-times icon"></i> Camera fees</li>
                                        <li><i class="fas fa-times icon"></i> Optional activities (e.g., cultural show tickets)</li>
                                        <li><i class="fas fa-times icon"></i> Travel Insurance</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="pd-separator">
                            <div>
                                <h3>Highlights</h3>
                                <ul class="pd-highlights-list"> <!-- Hardcoded -->
                                     <li>Boating on the unique Loktak Lake</li>
                                     <li>Visit Keibul Lamjao, the world's only floating National Park</li>
                                     <li>Chance to spot the endangered Sangai Deer</li>
                                     <li>Explore the historic Kangla Fort in Imphal</li>
                                     <li>Experience the vibrant Ima Keithel (Women's Market)</li>
                                     <li>Visit the INA Memorial Complex at Moirang</li>
                                     <li>Discover Manipuri culture and history</li>
                                </ul>
                            </div>
                            <hr class="pd-separator">
                            <div>
                                <h3>Destinations Covered</h3>
                                <div class="pd-destinations-tags"> <!-- Hardcoded -->
                                    <span>Imphal</span>
                                    <span>Loktak Lake</span>
                                    <span>Keibul Lamjao National Park</span>
                                    <span>Moirang</span>
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
                                     <button class="pd-accordion-trigger">Day 1: Arrival in Imphal & Local Sightseeing<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>Arrive at Imphal Airport (IMF) or Railway Station.</p>
                                        <p><i class="fas fa-clock icon"></i>Meet representative and transfer to your hotel.</p>
                                        <p><i class="fas fa-clock icon"></i>After check-in and freshening up, visit the historic Kangla Fort, the ancient capital of Manipur.</p>
                                        <p><i class="fas fa-clock icon"></i>Explore the Shree Govindajee Temple located near the fort.</p>
                                        <p><i class="fas fa-clock icon"></i>Evening visit to the unique Ima Keithel (Mother's Market), one of the world's largest markets run exclusively by women.</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in Imphal.</p>
                                     </div>
                                 </div>
                                 <!-- Day 2 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 2: Loktak Lake & Keibul Lamjao National Park<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>After breakfast, drive to Loktak Lake (Approx 50 km / 1.5-2 hrs), the largest freshwater lake in Northeast India.</p>
                                        <p><i class="fas fa-clock icon"></i>Enjoy a boat ride on the lake, observing the unique floating islands (phumdis).</p>
                                        <p><i class="fas fa-clock icon"></i>Visit Keibul Lamjao National Park, situated on a large phumdi, the only floating national park in the world.</p>
                                        <p><i class="fas fa-clock icon"></i>Try to spot the endangered Sangai deer (Manipur brow-antlered deer) in its natural habitat from viewpoints.</p>
                                        <p><i class="fas fa-clock icon"></i>Visit the INA (Indian National Army) Memorial Complex at Moirang, commemorating Subhas Chandra Bose's contributions.</p>
                                        <p><i class="fas fa-clock icon"></i>Return to Imphal in the evening.</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in Imphal.</p>
                                     </div>
                                 </div>
                                  <!-- Day 3 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 3: Imphal Cultural & Historical Tour<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>After breakfast, visit the Manipur State Museum to see artifacts related to Manipuri culture, history, and natural history.</p>
                                        <p><i class="fas fa-clock icon"></i>Explore the Imphal War Cemetery, maintained by the Commonwealth War Graves Commission.</p>
                                        <p><i class="fas fa-clock icon"></i>Visit the RKCS Art Gallery, showcasing works by Rajkumar Chandrajitsana Singh.</p>
                                        <p><i class="fas fa-clock icon"></i>Optional: Visit Andro village (approx 25km) known for its traditional pottery and cultural complex (requires extra time).</p>
                                        <p><i class="fas fa-clock icon"></i>Evening free for relaxation or exploring local cuisine.</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in Imphal.</p>
                                     </div>
                                 </div>
                                  <!-- Day 4 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 4: Departure from Imphal<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                         <p><i class="fas fa-clock icon"></i>After breakfast, check out from the hotel.</p>
                                         <p><i class="fas fa-clock icon"></i>Depending on your flight/train schedule, you might have time for some last-minute souvenir shopping at Ima Market.</p>
                                         <p><i class="fas fa-clock icon"></i>Transfer to Imphal Airport (IMF) or Railway Station for your onward journey.</p>
                                         <p><i class="fas fa-clock icon"></i>Tour concludes.</p>
                                     </div>
                                 </div>
                             </div> <!-- End Itinerary Accordion -->
                             <div class="pd-notes-box"> <!-- Static notes -->
                                 <h3>Important Notes</h3>
                                 <ul>
                                    <li>• Check current Inner Line Permit (ILP) requirements for Manipur for domestic tourists before travel.</li>
                                    <li>• Best time to visit Loktak Lake for clear views and Sangai sightings is usually post-monsoon/winter (Oct-Mar).</li>
                                    <li>• Be respectful of local customs and traditions.</li>
                                    <li>• Carry valid photo ID proof during sightseeing.</li>
                                    <li>• Keibul Lamjao Park has specific visiting hours; sightings are not guaranteed.</li>
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
                              <p style="margin-bottom: 20px; color: var(--muted-foreground);">Accommodation primarily includes standard, comfortable hotels located centrally in Imphal for easy access to sightseeing.</p>
                             <div class="pd-accommodation-grid"> <!-- Hardcoded examples -->
                                 <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?q=80&w=800" alt="The Classic Hotel Imphal" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">3/4-Star Hotel</span>
                                          <h4>The Classic Hotel / Hotel Imphal or similar (Imphal)</h4>
                                          <p>Well-regarded hotels in Imphal offering comfortable rooms and standard amenities.</p>
                                     </div>
                                 </div>
                                  <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1568495248636-6432b97bd949?q=80&w=800" alt="Hotel Nirmala Imphal" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">Standard Hotel</span>
                                          <h4>Hotel Nirmala or similar (Imphal)</h4>
                                          <p>Decent standard hotel option providing essential comforts for travelers.</p>
                                     </div>
                                 </div>
                                  <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?q=80&w=800" alt="Loktak Homestay Option" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">Homestay (Optional)</span>
                                          <h4>Homestay near Loktak (Optional/By Request)</h4>
                                          <p>Basic homestays might be available near Loktak Lake for a more immersive experience (often arranged specially).</p>
                                     </div>
                                 </div>
                             </div>
                             <hr class="pd-separator">
                             <h3>Accommodation Policy</h3>
                             <div class="pd-policy-list"> <!-- Static policy -->
                                 <p>• Check-in: ~12:00 PM - 2:00 PM, Check-out: ~11:00 AM - 12:00 PM</p>
                                 <p>• Hotels based on twin-sharing basis unless specified otherwise.</p>
                                 <p>• Accommodation quality near Loktak Lake itself is limited; most tours stay in Imphal.</p>
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
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1631867675167-90a456a90863?q=80&w=600" alt="Loktak Lake Phumdis" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Sangai_at_Keibul_Lamjao_National_Park.jpg/640px-Sangai_at_Keibul_Lamjao_National_Park.jpg" alt="Sangai Deer Keibul Lamjao" loading="lazy"></div> <!-- Example from Wikimedia -->
                                 <div class="pd-gallery-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Kangla_Uttra_Sanglen.jpg/640px-Kangla_Uttra_Sanglen.jpg" alt="Kangla Fort Imphal" loading="lazy"></div> <!-- Example from Wikimedia -->
                                 <div class="pd-gallery-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Ima_Market.jpg/640px-Ima_Market.jpg" alt="Ima Keithel Women's Market" loading="lazy"></div> <!-- Example from Wikimedia -->
                                 <div class="pd-gallery-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/INA_MEMORIAL_MOIRANG_MANIPUR_%28INDIA%29.jpg/640px-INA_MEMORIAL_MOIRANG_MANIPUR_%28INDIA%29.jpg" alt="INA Memorial Moirang" loading="lazy"></div> <!-- Example from Wikimedia -->
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1593939535589-8356e421b3cc?q=80&w=600" alt="Manipur Landscape" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Manipuri_dance_performance_02.jpg/640px-Manipuri_dance_performance_02.jpg" alt="Manipuri Dance" loading="lazy"></div> <!-- Example from Wikimedia -->
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1501854140801-50d01698950b?q=80&w=600" alt="Northeast India Generic Scenic" loading="lazy"></div> <!-- Placeholder -->
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
                         <p class="pd-sidebar-price">₹19,999</p> <!-- Hardcoded -->
                         <p class="pd-sidebar-price-note">per person on twin sharing</p>
                         <form action="process_booking.php" method="POST" style="margin-bottom: 10px;">
                             <input type="hidden" name="package_id" value="manipur-jewel">
                             <input type="hidden" name="package_price" value="19999.00">
                             <!-- Optional: Add more fields -->
                             <button type="submit" class="btn primary-btn full-width">Book Now</button>
                         <button class="btn outline-btn full-width">Send Inquiry</button>
                     </div>
                     <!-- Travel Info Card (Static) -->
                     <div class="pd-sidebar-card">
                         <h3>Travel Information</h3>
                         <div class="pd-sidebar-info-list">
                            <div><i class="fas fa-mountain icon"></i><div><h4>Best Time to Visit</h4><p>Oct to Apr</p></div></div>
                            <div><i class="fas fa-route icon"></i><div><h4>Difficulty Level</h4><p>Easy</p></div></div>
                            <div><i class="fas fa-language icon"></i><div><h4>Languages</h4><p>English, Hindi, Meiteilon</p></div></div>
                         </div>
                     </div>
                     <!-- Why Choose Card (Static) -->
                      <div class="pd-sidebar-card">
                         <h3>Why Choose This Package</h3>
                          <ul class="pd-sidebar-why-list">
                             <li><i class="fas fa-check icon"></i> See the unique floating lake</li>
                             <li><i class="fas fa-check icon"></i> Visit world's only floating park</li>
                             <li><i class="fas fa-check icon"></i> Explore Imphal's history</li>
                             <li><i class="fas fa-check icon"></i> Experience Ima Market</li>
                             <li><i class="fas fa-check icon"></i> Short & focused itinerary</li>
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
                 <!-- Static FAQ items relevant to Manipur -->
                 <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">Is an Inner Line Permit (ILP) needed for Manipur?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>As of recent regulations, ILP requirements for Manipur for domestic tourists can change. It's **essential** to check the latest official Manipur government tourism website or consult your tour operator well before your travel date. If required, permits are usually obtainable online or via designated offices.</p></div>
                </div>
                <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">What makes Loktak Lake unique?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Loktak Lake is famous for its 'phumdis' – floating masses of vegetation, soil, and organic matter in various stages of decomposition. These phumdis form islands, some large enough for dwellings. Keibul Lamjao National Park, the home of the Sangai deer, is the largest single phumdi.</p></div>
                </div>
                 <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">Is Manipur safe for tourists?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Manipur is generally considered safe for tourists visiting the main areas like Imphal and Loktak Lake, especially when traveling with reputable operators or guides. However, like any region, it's advisable to stay informed about current local conditions, avoid sensitive border areas unless on a permitted tour, and follow standard safety precautions.</p></div>
                </div>
                <div class="pd-accordion-item">
                     <button class="pd-accordion-trigger">What is the best season to visit Manipur?<i class="fas fa-chevron-down icon"></i></button>
                     <div class="pd-accordion-content"><p>The best time to visit Manipur is during the winter months, from October to April. The weather is pleasant and cool, ideal for sightseeing and boating on Loktak Lake. Monsoon season (June to September) brings heavy rainfall.</p></div>
                 </div>
                 <div class="pd-accordion-item">
                     <button class="pd-accordion-trigger">What is special about Ima Keithel (Mother's Market)?<i class="fas fa-chevron-down icon"></i></button>
                     <div class="pd-accordion-content"><p>Ima Keithel is unique as it's one of the largest markets in the world run entirely by women ('Imas'). You can find a vast array of goods, from fresh produce and household items to traditional textiles (like Phanek and Innaphi), handicrafts, and local delicacies. It's a vibrant hub of commerce and culture.</p></div>
                 </div>
            </div> <!-- End pd-faq-accordion -->
        </div> <!-- End container -->
    </section> <!-- End pd-faq-section -->

    <!-- Related Packages Section -->
    <section class="pd-related-packages state-theme-manipur"> <!-- Add theme class -->
         <div class="container text-center">
              <h2 class="pd-section-title">Related Packages</h2>
              <p>Discover more amazing adventures in Manipur and beyond</p> <!-- Hardcoded state -->
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