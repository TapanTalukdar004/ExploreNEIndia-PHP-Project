<?php
// File: arunachal-discovery.php

// Define page specifics BEFORE including the header
$page_title = "Arunachal Cultural Discovery Package - TripNE";
$page_specific_css = 'css/package-details-static.css'; // Link the SHARED static CSS

// Note: Arunachal Pradesh has spaces, use a consistent class name
$body_class = "state-theme-arunachal-pradesh";

include 'header.php'; // Include header (make sure path is correct)
?>

<main id="package-detail-page" class="<?php echo $body_class; ?>"> <!-- Apply Arunachal theme -->

    <!-- Hero Section -->
    <section class="pd-hero">
        <div class="container pd-hero-container">
            <!-- Left Side: Title, Info, Price, Button -->
            <div class="pd-hero-content">
                <div class="pd-breadcrumbs">
                    <a href="packages.php">Packages</a> / <span>Arunachal Cultural Discovery</span> <!-- Hardcoded -->
                </div>
                <h1>Arunachal Cultural Discovery</h1> <!-- Hardcoded -->
                <div class="pd-hero-info">
                    <span><i class="fas fa-map-marker-alt icon"></i> Arunachal Pradesh</span> <!-- Hardcoded -->
                    <span><i class="fas fa-calendar-alt icon"></i> 8 Days / 7 Nights</span> <!-- Hardcoded -->
                    <span><i class="fas fa-star icon"></i> 4.6/5</span> <!-- Hardcoded -->
                </div>
                <div class="pd-hero-price-box">
                    <h2>₹34,999</h2> <!-- Hardcoded -->
                    <p>per person on twin sharing basis</p>
                </div>
                <form action="process_booking.php" method="POST" style="display: inline;">
                    <input type="hidden" name="package_id" value="arunachal-discovery">
                    <input type="hidden" name="package_price" value="34999.00">
                    <!-- Optional: Add more fields like num_people if you add input for it -->
                    <button type="submit" class="btn primary-btn hero-btn">Book Now</button>
                </form>
            </div>
            <!-- Right Side: Image -->
            <div class="pd-hero-image-wrapper">
                <!-- Hardcode correct image path -->
                <img src="images/3-1.jpg" alt="Arunachal Cultural Discovery Tawang Monastery" class="pd-hero-image">
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
                            <p class="pd-description">Discover the unexplored beauty of Arunachal Pradesh, the 'Land of Dawn-lit Mountains'. This cultural journey includes visits to ancient monasteries like Tawang, crossing the high-altitude Sela Pass, interacting with unique tribes like the Apatani in Ziro Valley, and experiencing stunning Himalayan landscapes.</p> <!-- Hardcoded -->
                            <hr class="pd-separator">
                            <div class="pd-includes-excludes-grid">
                                <div>
                                    <h3>Package Includes</h3>
                                    <ul class="pd-checklist includes"> <!-- Hardcoded -->
                                        <li><i class="fas fa-check icon"></i> Accommodation (Standard Hotels/Guesthouses)</li>
                                        <li><i class="fas fa-check icon"></i> All transfers & sightseeing by comfortable vehicle (e.g., SUV from Guwahati)</li>
                                        <li><i class="fas fa-check icon"></i> Daily breakfast and dinner</li>
                                        <li><i class="fas fa-check icon"></i> English-speaking driver (acts as basic guide)</li>
                                        <li><i class="fas fa-check icon"></i> Inner Line Permit (ILP) for Arunachal Pradesh</li>
                                        <li><i class="fas fa-check icon"></i> Entry fees for standard monasteries & viewpoints mentioned</li>
                                        <li><i class="fas fa-check icon"></i> All applicable taxes</li>
                                    </ul>
                                </div>
                                <div>
                                    <h3>Package Excludes</h3>
                                    <ul class="pd-checklist excludes"> <!-- Hardcoded -->
                                        <li><i class="fas fa-times icon"></i> Flights/trains to/from Guwahati</li>
                                        <li><i class="fas fa-times icon"></i> Lunches</li>
                                        <li><i class="fas fa-times icon"></i> Personal expenses (tips, shopping, laundry, etc.)</li>
                                        <li><i class="fas fa-times icon"></i> Camera fees</li>
                                        <li><i class="fas fa-times icon"></i> Bum La Pass permit & vehicle cost (optional & subject to conditions)</li>
                                        <li><i class="fas fa-times icon"></i> Specialized local guides (can be arranged at extra cost)</li>
                                        <li><i class="fas fa-times icon"></i> Travel Insurance</li>
                                    </ul>
                                </div>
                            </div>
                            <hr class="pd-separator">
                            <div>
                                <h3>Highlights</h3>
                                <ul class="pd-highlights-list"> <!-- Hardcoded -->
                                     <li>Visit the magnificent Tawang Monastery</li>
                                     <li>Cross the breathtaking Sela Pass (13,700 ft)</li>
                                     <li>Explore the unique Apatani villages & culture in Ziro Valley</li>
                                     <li>Witness stunning Himalayan mountain scenery</li>
                                     <li>Visit Jaswant Garh War Memorial</li>
                                     <li>Experience the tranquility of Dirang & Bomdila Monasteries</li>
                                     <li>(Optional) Visit high-altitude lakes near Tawang</li>
                                </ul>
                            </div>
                            <hr class="pd-separator">
                            <div>
                                <h3>Destinations Covered</h3>
                                <div class="pd-destinations-tags"> <!-- Hardcoded -->
                                    <span>Guwahati (Start/End)</span>
                                    <span>Dirang</span>
                                    <span>Tawang</span>
                                    <span>Bomdila</span>
                                    <span>Ziro Valley</span>
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
                                     <button class="pd-accordion-trigger">Day 1: Arrive Guwahati, Drive to Dirang (Approx 320km / 7-9 hrs)<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>Arrive at Guwahati Airport (GAU) or Railway Station.</p>
                                        <p><i class="fas fa-clock icon"></i>Meet representative and begin the scenic drive towards Dirang in Arunachal Pradesh.</p>
                                        <p><i class="fas fa-clock icon"></i>The journey is long and passes through Assam plains before ascending into the hills.</p>
                                        <p><i class="fas fa-clock icon"></i>Check into your hotel in Dirang upon arrival in the evening.</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in Dirang.</p>
                                     </div>
                                 </div>
                                 <!-- Day 2 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 2: Dirang Sightseeing & Drive to Tawang (Approx 140km / 5-6 hrs)<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>Morning visit Dirang Monastery (Dirang Dzong) and the local market.</p>
                                        <p><i class="fas fa-clock icon"></i>Visit the Hot Water Springs if time permits.</p>
                                        <p><i class="fas fa-clock icon"></i>After breakfast, drive towards Tawang.</p>
                                        <p><i class="fas fa-clock icon"></i>Cross the high-altitude Sela Pass (13,700 ft), stopping at the Paradise Lake (Sela Lake).</p>
                                        <p><i class="fas fa-clock icon"></i>Pay respects at the Jaswant Garh War Memorial, dedicated to an Indian war hero.</p>
                                        <p><i class="fas fa-clock icon"></i>Continue drive, descending towards Tawang valley.</p>
                                        <p><i class="fas fa-clock icon"></i>Check into hotel in Tawang. Overnight stay.</p>
                                     </div>
                                 </div>
                                  <!-- Day 3 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 3: Tawang Monastery & Local Sightseeing<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>After breakfast, visit the Tawang Monastery (Galden Namgyal Lhatse), the largest monastery in India and second largest in the world.</p>
                                        <p><i class="fas fa-clock icon"></i>Explore the monastery complex, museum, and observe the monastic life (try to attend morning prayers if possible).</p>
                                        <p><i class="fas fa-clock icon"></i>Visit the Urgelling Gompa, the birthplace of the 6th Dalai Lama.</p>
                                        <p><i class="fas fa-clock icon"></i>Explore the Tawang Craft Centre (emporium) and the local market.</p>
                                        <p><i class="fas fa-clock icon"></i>Visit the Giant Buddha Statue for panoramic views.</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in Tawang.</p>
                                     </div>
                                 </div>
                                  <!-- Day 4 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 4: Excursion to Lakes & Border (Optional Bum La)<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                        <p><i class="fas fa-clock icon"></i>After breakfast, embark on an excursion towards the India-China border area (requires separate permit & vehicle, usually arranged locally at extra cost, subject to road/weather conditions).</p>
                                        <p><i class="fas fa-clock icon"></i>Visit the high-altitude PTSO (Pankang Teng Tso) Lake.</p>
                                        <p><i class="fas fa-clock icon"></i>Visit Madhuri Lake (Sangestar Tso), named after the Bollywood actress.</p>
                                        <p><i class="fas fa-clock icon"></i>If permits allow, continue towards Bum La Pass (border point) - note this requires specific permissions and vehicle suitability.</p>
                                        <p><i class="fas fa-clock icon"></i>Return to Tawang in the evening.</p>
                                        <p><i class="fas fa-clock icon"></i>Overnight stay in Tawang.</p>
                                     </div>
                                 </div>
                                  <!-- Day 5 -->
                                  <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 5: Drive Tawang to Bomdila (Approx 180km / 6-7 hrs)<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                         <p><i class="fas fa-clock icon"></i>After breakfast, begin the drive back towards Bomdila.</p>
                                         <p><i class="fas fa-clock icon"></i>Enjoy the scenic Himalayan views again, crossing Sela Pass.</p>
                                         <p><i class="fas fa-clock icon"></i>Check into your hotel in Bomdila upon arrival.</p>
                                         <p><i class="fas fa-clock icon"></i>Later, visit the Bomdila Monastery (Gentse Gaden Rabgyel Ling Monastery).</p>
                                         <p><i class="fas fa-clock icon"></i>Explore the local market in Bomdila.</p>
                                         <p><i class="fas fa-clock icon"></i>Overnight stay in Bomdila.</p>
                                     </div>
                                 </div>
                                 <!-- Day 6 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 6: Drive Bomdila to Ziro (Approx 280km / 7-9 hrs)<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                         <p><i class="fas fa-clock icon"></i>After an early breakfast, drive towards Ziro Valley, home to the Apatani tribe.</p>
                                         <p><i class="fas fa-clock icon"></i>The journey involves descending from Bomdila and then driving through varied landscapes towards Ziro.</p>
                                         <p><i class="fas fa-clock icon"></i>Check into your hotel or homestay in Ziro upon arrival.</p>
                                         <p><i class="fas fa-clock icon"></i>Overnight stay in Ziro.</p>
                                     </div>
                                 </div>
                                  <!-- Day 7 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 7: Ziro Valley Exploration (Apatani Culture)<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                         <p><i class="fas fa-clock icon"></i>Full day dedicated to exploring Ziro Valley and the unique Apatani culture.</p>
                                         <p><i class="fas fa-clock icon"></i>Visit traditional Apatani villages like Hong, Hari, and Bulla.</p>
                                         <p><i class="fas fa-clock icon"></i>Observe their unique paddy-cum-fish cultivation system (UNESCO World Heritage tentative list).</p>
                                         <p><i class="fas fa-clock icon"></i>Interact respectfully with the locals (note: traditional facial tattoos and nose plugs are less common among younger generations).</p>
                                         <p><i class="fas fa-clock icon"></i>Visit the local market and potentially the District Museum.</p>
                                         <p><i class="fas fa-clock icon"></i>Enjoy the serene beauty of the pine-clad valley.</p>
                                         <p><i class="fas fa-clock icon"></i>Overnight stay in Ziro.</p>
                                     </div>
                                 </div>
                                  <!-- Day 8 -->
                                 <div class="pd-accordion-item">
                                     <button class="pd-accordion-trigger">Day 8: Drive Ziro to Guwahati, Departure (Approx 450km / 9-11+ hrs)<i class="fas fa-chevron-down icon"></i></button>
                                     <div class="pd-accordion-content">
                                         <p><i class="fas fa-clock icon"></i>After a very early start, begin the long drive back to Guwahati.</p>
                                         <p><i class="fas fa-clock icon"></i>The journey goes via North Lakhimpur in Assam.</p>
                                         <p><i class="fas fa-clock icon"></i>Reach Guwahati by late afternoon or evening.</p>
                                         <p><i class="fas fa-clock icon"></i>Transfer directly to Guwahati Airport (GAU) or Railway Station for your onward journey.</p>
                                         <p><i class="fas fa-clock icon"></i>Tour concludes.</p>
                                         <p><i class="fas fa-clock icon"></i>Note: This is a very long driving day. An alternative is to break the journey or fly out from Lilabari Airport near North Lakhimpur (if flights are suitable).</p>
                                     </div>
                                 </div>
                             </div> <!-- End Itinerary Accordion -->
                             <div class="pd-notes-box"> <!-- Static notes -->
                                 <h3>Important Notes</h3>
                                 <ul>
                                    <li>• Requires Inner Line Permit (ILP) for domestic tourists; apply well in advance.</li>
                                    <li>• Travel involves high altitudes (Sela Pass, Tawang); acclimatize and carry medication if needed.</li>
                                    <li>• Road conditions can be challenging, especially during monsoon or winter; travel times are estimates.</li>
                                    <li>• Accommodation outside major towns is generally basic.</li>
                                    <li>• Respect local tribal customs and privacy; ask before taking photos.</li>
                                    <li>• Bum La Pass visit requires separate permits/vehicle and is subject to army approval and weather.</li>
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
                              <p style="margin-bottom: 20px; color: var(--muted-foreground);">Stays include standard, clean hotels or guesthouses suitable for the region, focusing on comfort and location.</p>
                             <div class="pd-accommodation-grid"> <!-- Hardcoded examples -->
                                 <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1608198093002-ad4e005484ec?q=80&w=800" alt="Hotel Pemaling Dirang" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">Hotel</span>
                                          <h4>Hotel Pemaling or similar (Dirang)</h4>
                                          <p>Comfortable hotel option in Dirang offering good views and basic amenities.</p>
                                     </div>
                                 </div>
                                  <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1596394516093-501ba68a0ba6?q=80&w=800" alt="Hotel Tawang Heights" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">Hotel</span>
                                          <h4>Hotel Tawang Heights or similar (Tawang)</h4>
                                          <p>Standard hotel in Tawang providing necessary comforts at high altitude.</p>
                                     </div>
                                 </div>
                                  <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?q=80&w=800" alt="Hotel Siphiyang Phong Bomdila" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">Hotel</span>
                                          <h4>Hotel Siphiyang Phong or similar (Bomdila)</h4>
                                          <p>Decent accommodation option in Bomdila, usually used for transit.</p>
                                     </div>
                                 </div>
                                  <div class="pd-accommodation-item">
                                     <img src="https://images.unsplash.com/photo-1540518614846-7eded433c457?q=80&w=800" alt="Ziro Valley Resort/Homestay" loading="lazy">
                                     <div class="content">
                                          <span class="type-tag">Resort/Homestay</span>
                                          <h4>Ziro Valley Resort / Siiro Resort / Homestay (Ziro)</h4>
                                          <p>Options range from basic homestays to slightly better resorts offering insight into Apatani life.</p>
                                     </div>
                                 </div>
                             </div>
                             <hr class="pd-separator">
                             <h3>Accommodation Policy</h3>
                             <div class="pd-policy-list"> <!-- Static policy -->
                                 <p>• Check-in: ~12:00 PM - 2:00 PM, Check-out: ~11:00 AM</p>
                                 <p>• Accommodation quality varies greatly by location; simpler in remote areas like Ziro.</p>
                                 <p>• Hot water availability might be time-restricted in some places.</p>
                                 <p>• Based on twin-sharing basis.</p>
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
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1595953488545-f99bd0659d70?q=80&w=600" alt="Tawang Monastery View" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1516690561799-46d8f74f9abf?q=80&w=600" alt="Sela Pass Road" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1572128294883-077644d5eb5a?q=80&w=600" alt="Ziro Valley Paddy Fields" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1573126617899-41f1dffb196c?q=80&w=600" alt="Arunachal Mountains Landscape" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://upload.wikimedia.org/wikipedia/commons/5/54/Jaswant_Garh_War_Memorial_Arunachal_Pradesh_India.jpg" alt="Jaswant Garh War Memorial" loading="lazy"></div> <!-- Example from Wikimedia -->
                                 <div class="pd-gallery-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Sela_lake.jpg/640px-Sela_lake.jpg" alt="Sela Lake" loading="lazy"></div> <!-- Example from Wikimedia -->
                                 <div class="pd-gallery-item"><img src="https://images.unsplash.com/photo-1606822350112-b9e3caea2461?q=80&w=600" alt="Madhuri Lake (Sangestar Tso)" loading="lazy"></div>
                                 <div class="pd-gallery-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Apatani_woman_with_nose_plugs_and_tattoos.jpg/640px-Apatani_woman_with_nose_plugs_and_tattoos.jpg" alt="Apatani Woman Ziro" loading="lazy"></div> <!-- Example from Wikimedia -->
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
                         <p class="pd-sidebar-price">₹34,999</p> <!-- Hardcoded -->
                         <p class="pd-sidebar-price-note">per person on twin sharing</p>
                         <form action="process_booking.php" method="POST" style="margin-bottom: 10px;">
                             <input type="hidden" name="package_id" value="arunachal-discovery">
                             <input type="hidden" name="package_price" value="34999.00">
                             <!-- Optional: Add more fields -->
                             <button type="submit" class="btn primary-btn full-width">Book Now</button>
                         <button class="btn outline-btn full-width">Send Inquiry</button>
                     </div>
                     <!-- Travel Info Card (Static) -->
                     <div class="pd-sidebar-card">
                         <h3>Travel Information</h3>
                         <div class="pd-sidebar-info-list">
                            <div><i class="fas fa-mountain icon"></i><div><h4>Best Time to Visit</h4><p>Oct to Apr</p></div></div>
                            <div><i class="fas fa-route icon"></i><div><h4>Difficulty Level</h4><p>Moderate (Altitude, Roads)</p></div></div>
                            <div><i class="fas fa-language icon"></i><div><h4>Languages</h4><p>English, Hindi, Tribal Dialects</p></div></div>
                         </div>
                     </div>
                     <!-- Why Choose Card (Static) -->
                      <div class="pd-sidebar-card">
                         <h3>Why Choose This Package</h3>
                          <ul class="pd-sidebar-why-list">
                             <li><i class="fas fa-check icon"></i> Covers key cultural hubs (Tawang, Ziro)</li>
                             <li><i class="fas fa-check icon"></i> Includes stunning Sela Pass</li>
                             <li><i class="fas fa-check icon"></i> Mix of monasteries & tribal culture</li>
                             <li><i class="fas fa-check icon"></i> Experienced driver for mountain roads</li>
                             <li><i class="fas fa-check icon"></i> Hassle-free permit arrangement</li>
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
                 <!-- Static FAQ items relevant to Arunachal -->
                 <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">What permits are needed for Arunachal Pradesh?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Domestic Indian tourists require an Inner Line Permit (ILP). Foreign tourists require a Protected Area Permit (PAP). These are usually processed by the tour operator (ILP included in this package) and require valid ID proof (Aadhaar/Voter/Passport), photos, and itinerary details submitted in advance.</p></div>
                </div>
                <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">Is altitude sickness a concern in Tawang?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Yes, Tawang is at a high altitude (around 10,000 ft), and Sela Pass is even higher (13,700 ft). Acclimatization is important. The itinerary usually includes gradual ascent (via Dirang/Bomdila). Stay hydrated, avoid alcohol and heavy meals on ascent, and carry medication if prone to altitude sickness. Consult your doctor.</p></div>
                </div>
                 <div class="pd-accordion-item">
                    <button class="pd-accordion-trigger">How is the road connectivity?<i class="fas fa-chevron-down icon"></i></button>
                    <div class="pd-accordion-content"><p>Roads in Arunachal, especially in mountainous areas like the route to Tawang and Ziro, can be challenging. While improving, expect winding roads, potential rough patches, and possible delays due to weather or landslides, particularly during monsoon. Travel times are estimates. SUVs are generally used.</p></div>
                </div>
                <div class="pd-accordion-item">
                     <button class="pd-accordion-trigger">What should I know about visiting Ziro Valley?<i class="fas fa-chevron-down icon"></i></button>
                     <div class="pd-accordion-content"><p>Ziro is home to the Apatani tribe. Be respectful of their culture and privacy. Seek permission before photographing individuals. Accommodation is often in homestays or basic resorts. The valley is known for its unique agriculture and peaceful environment.</p></div>
                 </div>
                <div class="pd-accordion-item">
                     <button class="pd-accordion-trigger">Is the Bum La Pass excursion guaranteed?<i class="fas fa-chevron-down icon"></i></button>
                     <div class="pd-accordion-content"><p>No. The visit to Bum La Pass (India-China border) requires a separate permit obtained locally in Tawang, subject to approval by the Indian Army and dependent on weather/road conditions. It also requires hiring a local Tawang-registered vehicle at an additional cost. It's an optional add-on, not guaranteed.</p></div>
                 </div>
            </div> <!-- End pd-faq-accordion -->
        </div> <!-- End container -->
    </section> <!-- End pd-faq-section -->

    <!-- Related Packages Section -->
    <section class="pd-related-packages state-theme-arunachal-pradesh"> <!-- Add theme class -->
         <div class="container text-center">
              <h2 class="pd-section-title">Related Packages</h2>
              <p>Discover more amazing adventures in Arunachal and beyond</p> <!-- Hardcoded state -->
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