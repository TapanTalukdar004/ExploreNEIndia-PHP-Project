<?php
// File: meghalaya-adventure.php

// Define page specifics BEFORE including the header
$page_title = "Meghalaya Adventure Explorer Package - TripNE";
$page_specific_css = 'css/package-details-static.css'; // Link the SHARED static CSS

include 'header.php'; // Include header (make sure path is correct)
?>

<main id="package-detail-page" class="state-theme-meghalaya"> <!-- Apply Meghalaya theme -->

    <!-- Hero Section -->
    <section class="pd-hero">
        <div class="container pd-hero-container">
            <!-- Left Side: Title, Info, Price, Button -->
            <div class="pd-hero-content">
                <div class="pd-breadcrumbs">
                    <a href="packages.php">Packages</a> / <span>Meghalaya Adventure Explorer</span> <!-- Hardcoded -->
                </div>
                <h1>Meghalaya Adventure Explorer</h1> <!-- Hardcoded -->
                <div class="pd-hero-info">
                    <span><i class="fas fa-map-marker-alt icon"></i> Meghalaya</span> <!-- Hardcoded -->
                    <span><i class="fas fa-calendar-alt icon"></i> 6 Days / 5 Nights</span> <!-- Hardcoded -->
                    <span><i class="fas fa-star icon"></i> 4.8/5</span> <!-- Hardcoded -->
                </div>
                <div class="pd-hero-price-box">
                    <h2>₹24,999</h2> <!-- Hardcoded -->
                    <p>per person on twin sharing basis</p>
                </div>
                <form action="process_booking.php" method="POST" style="display: inline;">
                    <input type="hidden" name="package_id" value="meghalaya-adventure">
                    <input type="hidden" name="package_price" value="24999.00">
                    <!-- Optional: Add more fields like num_people if you add input for it -->
                    <button type="submit" class="btn primary-btn hero-btn">Book Now</button>
                </form>
            </div>
            <!-- Right Side: Image -->
            <div class="pd-hero-image-wrapper">
                <!-- Hardcode correct image path -->
                <img src="images/2-4.jpg" alt="Meghalaya Adventure Explorer Landscape" class="pd-hero-image">
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
                            <p class="pd-description">Explore the magical land of clouds with our comprehensive Meghalaya package. Trek to living root bridges, swim in crystal clear rivers, and experience the local Khasi culture amidst stunning waterfalls and caves.</p> <!-- Hardcoded -->
                            <hr class="pd-separator">
                            <div class="pd-includes-excludes-grid">
                                <div>
                                    <h3>Package Includes</h3>
                                    <ul class="pd-checklist includes"> <!-- Hardcoded -->
                                        <li><i class="fas fa-check icon"></i> Accommodation in 3-star hotels/homestays</li>
                                        <li><i class="fas fa-check icon"></i> All transfers (Guwahati-Shillong-Cherrapunji etc.)</li>
                                        <li><i class="fas fa-check icon"></i> Daily breakfast and dinner</li>
                                        <li><i class="fas fa-check icon"></i> English-speaking local guide for treks/sightseeing</li>
                                        <li><i class="fas fa-check icon"></i> Entry fees to parks, caves, waterfalls</li>
                                        <li><i class="fas fa-check icon"></i> Boating charges in Dawki</li>
                                        <li><i class="fas fa-check icon"></i> All necessary permits</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3>Package Excludes</h3>
                                    <ul class="pd-checklist excludes"> <!-- Hardcoded -->
                                        <li><i class="fas fa-times icon"></i> Flights/trains to/from Guwahati</li>
                                        <li><i class="fas fa-times icon"></i> Lunches</li>
                                        <li><i class="fas fa-times icon"></i> Personal expenses (shopping, tips, laundry)</li>
                                        <li><i class="fas fa-times icon"></i> Optional activities (e.g., zip-lining)</li>
                                        <li><i class="fas fa-times icon"></i> Travel insurance</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="pd-separator">
                            <div>
                                <h3>Highlights</h3>
                                <ul class="pd-highlights-list"> <!-- Hardcoded -->
                                     <li>Witness majestic waterfalls in Cherrapunji</li>
                                     <li>Trek to the unique Living Root Bridges</li>
                                     <li>Boat on the crystal-clear Umngot River in Dawki</li>
                                     <li>Explore Asia's cleanest village, Mawlynnong</li>
                                     <li>Experience Shillong's vibrant culture & music scene</li>
                                     <li>Visit stunning caves like Mawsmai</li>
                                </ul>
                            </div>
                            <hr class="pd-separator">
                            <div>
                                <h3>Destinations Covered</h3>
                                <div class="pd-destinations-tags"> <!-- Hardcoded -->
                                    <span>Shillong</span>
                                    <span>Cherrapunji</span>
                                    <span>Dawki</span>
                                    <span>Mawlynnong</span>
                                    <span>Nongriat</span>
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
                                     <button class="pd-accordion-trigger">Day 1: Arrival Guwahati, Transfer to Shillong...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>Arrive at Guwahati Airport (GAU) or Railway Station.</p>
                                        <p><i class="fas fa-clock icon"></i>Meet our representative and drive to Shillong (Approx 100 km / 3-4 hrs).</p>
                                        <p><i class="fas fa-clock icon"></i>En route, stop at the scenic Umiam Lake (Barapani).</p>
                                        <p><i class="fas fa-clock icon"></i>Check into your hotel in Shillong.</p>
                                        <p><i class="fas fa-clock icon"></i>Evening free to explore Police Bazaar or relax.</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in Shillong.</p>
                                     </div>
                                 </div>
                                 <!-- Day 2 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 2: Shillong Sightseeing...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>After breakfast, proceed for Shillong local sightseeing.</p>
                                        <p><i class="fas fa-clock icon"></i>Visit Ward's Lake, Lady Hydari Park.</p>
                                        <p><i class="fas fa-clock icon"></i>Explore Elephant Falls and Shillong Peak for panoramic city views.</p>
                                        <p><i class="fas fa-clock icon"></i>Visit the Don Bosco Centre for Indigenous Cultures (Museum).</p>
                                        <p><i class="fas fa-clock icon"></i>Return to hotel for overnight stay.</p>
                                     </div>
                                 </div>
                                  <!-- Day 3 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 3: Drive to Cherrapunji, Waterfalls & Caves...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>After breakfast, drive to Cherrapunji (Sohra) (Approx 55 km / 2 hrs).</p>
                                        <p><i class="fas fa-clock icon"></i>Visit the magnificent Nohkalikai Falls (India's tallest plunge waterfall).</p>
                                        <p><i class="fas fa-clock icon"></i>Explore the Seven Sisters Falls (Nohsngithiang Falls).</p>
                                        <p><i class="fas fa-clock icon"></i>Discover the Mawsmai Cave (limestone cave).</p>
                                        <p><i class="fas fa-clock icon"></i>Check into your hotel/resort in Cherrapunji.</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in Cherrapunji.</p>
                                     </div>
                                 </div>
                                  <!-- Day 4 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 4: Trek to Double Decker Root Bridge...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>After breakfast, drive to Tyrna village (starting point of trek).</p>
                                        <p><i class="fas fa-clock icon"></i>Begin the trek down approx 3000 steps to Nongriat village.</p>
                                        <p><i class="fas fa-clock icon"></i>Witness the unique Double Decker Living Root Bridge.</p>
                                        <p><i class="fas fa-clock icon"></i>Explore the surrounding natural pools (optional swim).</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in a basic guesthouse/homestay in Nongriat village (optional: return trek to Cherrapunji same day is strenuous).</p>
                                     </div>
                                 </div>
                                  <!-- Day 5 -->
                                  <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 5: Dawki River & Mawlynnong Village...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                         <p><i class="fas fa-clock icon"></i>Trek back up from Nongriat to Tyrna village.</p>
                                         <p><i class="fas fa-clock icon"></i>Drive towards Dawki (Approx 85 km / 3 hrs from Cherrapunji area).</p>
                                         <p><i class="fas fa-clock icon"></i>Enjoy a boat ride on the crystal-clear Umngot River near the Indo-Bangladesh border.</p>
                                         <p><i class="fas fa-clock icon"></i>Visit Mawlynnong Village, renowned as 'Asia's Cleanest Village'.</p>
                                         <p><i class="fas fa-clock icon"></i>See the Mawlynnong living root bridge and balancing rock.</p>
                                         <p><i class="fas fa-clock icon"></i>Drive back to Shillong (Approx 80 km / 3 hrs from Mawlynnong). Overnight stay in Shillong.</p>
                                     </div>
                                 </div>
                                 <!-- Day 6 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 6: Return to Guwahati, Departure...<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                         <p><i class="fas fa-clock icon"></i>After breakfast, check out from the hotel.</p>
                                         <p><i class="fas fa-clock icon"></i>Drive back to Guwahati (Approx 100 km / 3-4 hrs).</p>
                                         <p><i class="fas fa-clock icon"></i>Transfer to Guwahati Airport (GAU) or Railway Station for your onward journey.</p>
                                         <p><i class="fas fa-clock icon"></i>Tour concludes.</p>
                                     </div>
                                 </div>
                             </div> <!-- End Itinerary Accordion -->
                             <div class="pd-notes-box"> <!-- Static notes -->
                                 <h3>Important Notes</h3>
                                 <ul>
                                    <li>• Root Bridge trek involves steep steps (approx. 3000 down, 3000 up); requires good fitness.</li>
                                    <li>• Accommodation in Nongriat is very basic (homestays).</li>
                                    <li>• River water clarity in Dawki is best post-monsoon (Oct-Apr).</li>
                                    <li>• Carry rain gear irrespective of season.</li>
                                    <li>• Respect local Khasi customs and traditions.</li>
                                 </ul>
                             </div>
                         </div>
                    </div> <!-- End Itinerary -->

                    <!-- Accommodation Content -->
                    <div id="content-accommodation" class="pd-tab-content">
                         <div class="pd-card">
                             <h2>Accommodation Details</h2>
                             <div class="pd-accommodation-grid"> <!-- Hardcoded based on previous data -->
                                 <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=800" alt="Hotel Polo Towers Shillong" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">3-Star Hotel</span>
                                          <h4>Hotel Polo Towers or similar (Shillong)</h4>
                                          <p>Comfortable stay in Shillong city center with standard amenities.</p>
                                     </div>
                                 </div>
                                  <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?q=80&w=800" alt="Cherrapunjee Holiday Resort" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">Resort</span>
                                          <h4>Cherrapunjee Holiday Resort or similar (Cherrapunji)</h4>
                                          <p>Scenic resort offering good views and access to nearby attractions.</p>
                                     </div>
                                 </div>
                                  <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?q=80&w=800" alt="Nongriat Homestay" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">Homestay/Guesthouse</span>
                                          <h4>Local Homestay/Guesthouse (Nongriat)</h4>
                                          <p>Basic but authentic accommodation in Nongriat village for the root bridge trek experience.</p>
                                     </div>
                                 </div>
                             </div>
                             <hr class="pd-separator">
                             <h3>Accommodation Policy</h3>
                             <div class="pd-policy-list"> <!-- Static policy -->
                                 <p>• Check-in: ~1:00-2:00 PM, Check-out: ~11:00 AM</p>
                                 <p>• Nongriat stay is basic; manage expectations.</p>
                                 <p>• Hotels based on twin-sharing basis.</p>
                             </div>
                         </div>
                    </div> <!-- End Accommodation -->

                    <!-- Gallery Content -->
                    <div id="content-gallery" class="pd-tab-content">
                         <div class="pd-card">
                             <h2>Package Gallery</h2>
                             <div class="pd-gallery-grid"> <!-- Hardcoded -->
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1613507083489-9aa9d7bf6858?q=80&w=600" alt="Living Root Bridge Meghalaya" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1543051932-6ef9fecfbc1a?q=80&w=600" alt="Nohkalikai Falls Cherrapunji" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1631867675167-90a456a90863?q=80&w=600" alt="Dawki River Clear Water" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1601121832446-a6131b71d35a?q=80&w=600" alt="Mawlynnong Village" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1596401057633-54a3c0f5931a?q=80&w=600" alt="Shillong City View" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1621404809000-a9ab2b03a6b1?q=80&w=600" alt="Mawsmai Cave Meghalaya" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1563911302283-d2bc129e7570?q=80&w=600" alt="Umiam Lake Meghalaya" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1501854140801-50d01698950b?q=80&w=600" alt="Meghalaya Landscape" loading="lazy"></div>
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
                         <p class="pd-sidebar-price">₹24,999</p> <!-- Hardcoded -->
                         <p class="pd-sidebar-price-note">per person on twin sharing</p>
                         <form action="process_booking.php" method="POST" style="margin-bottom: 10px;">
                             <input type="hidden" name="package_id" value="meghalaya-adventure">
                             <input type="hidden" name="package_price" value="24999.00">
                             <!-- Optional: Add more fields -->
                             <button type="submit" class="btn primary-btn full-width">Book Now</button>
                         <button class="btn outline-btn full-width">Send Inquiry</button>
                     </div>
                     <!-- Travel Info Card (Static) -->
                     <div class="pd-sidebar-card">
                         <h3>Travel Information</h3>
                         <div class="pd-sidebar-info-list">
                            <div><i class="fas fa-mountain icon"></i><div><h4>Best Time to Visit</h4><p>October to June</p></div></div>
                            <div><i class="fas fa-route icon"></i><div><h4>Difficulty Level</h4><p>Easy (Moderate Trek)</p></div></div>
                            <div><i class="fas fa-language icon"></i><div><h4>Languages</h4><p>English, Hindi, Khasi</p></div></div>
                         </div>
                     </div>
                     <!-- Why Choose Card (Static) -->
                      <div class="pd-sidebar-card">
                         <h3>Why Choose This Package</h3>
                          <ul class="pd-sidebar-why-list">
                             <li><i class="fas fa-check icon"></i> See natural wonders</li>
                             <li><i class="fas fa-check icon"></i> Includes famous root bridge trek</li>
                             <li><i class="fas fa-check icon"></i> Experience clear rivers</li>
                             <li><i class="fas fa-check icon"></i> Visit Asia's cleanest village</li>
                             <li><i class="fas fa-check icon"></i> Good mix of nature & culture</li>
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
                 <!-- Static FAQ items relevant to Meghalaya -->
                 <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">How difficult is the Double Decker Root Bridge trek?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>The trek involves descending and ascending around 3000 steep concrete steps. It requires good physical fitness and stamina. It typically takes 1.5-2.5 hours down and 2-3 hours up, plus time spent at the bridges/pools.</p></div>
                </div>
                <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">Is it safe to swim in the pools near the root bridges or Dawki river?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Swimming is generally possible in designated natural pools near Nongriat during good weather, but always check local conditions and guide advice first. Dawki river boating is safe; swimming depends on currents and local permissions.</p></div>
                </div>
                <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">What kind of weather should I expect?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Meghalaya means 'Abode of Clouds'. Expect rain or mist anytime, especially in Cherrapunji, even outside monsoon. Pack rainwear (raincoat, umbrella) and quick-drying clothes. Temperatures vary; days are pleasant (15-25°C), nights can be cool (10-15°C), especially in Cherrapunji.</p></div>
                </div>
                <div class="pd-accordion-item">
                     <button class="pd-accordion-trigger">Are there ATMs and good mobile connectivity?<i class="fas fa-chevron-down icon"></i></button>
                     <div class="pd-accordion-content"><p>ATMs are readily available in Shillong but scarce in Cherrapunji and rural areas like Dawki/Mawlynnong/Nongriat. Carry sufficient cash. Mobile connectivity (Airtel, Jio usually work best) is good in Shillong but can be patchy to non-existent in remote areas and during the trek.</p></div>
                 </div>
            </div> <!-- End pd-faq-accordion -->
        </div> <!-- End container -->
    </section> <!-- End pd-faq-section -->

    <!-- Related Packages Section -->
    <section class="pd-related-packages state-theme-meghalaya"> <!-- Add theme class -->
         <div class="container text-center">
              <h2 class="pd-section-title">Related Packages</h2>
              <p>Discover more amazing adventures in Meghalaya and beyond</p> <!-- Hardcoded state -->
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