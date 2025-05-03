<?php
// File: manipur.php

// Define page specifics BEFORE including the header
$page_title = "Explore Manipur - The Jeweled Land";
$page_specific_css = 'css/state-details-static.css'; // Link the SHARED static CSS

// Define state theme class for CSS targeting
$body_class = "state-theme-manipur";

include 'header.php'; // Include header
?>

<main id="state-detail-page" class="<?php echo $body_class; ?>"> <!-- Apply theme -->

    <!-- ========================== -->
    <!-- ===    HERO SECTION    === -->
    <!-- ========================== -->
    <section class="sd-hero state-hero-manipur"> <!-- Use theme class -->
        <div class="container sd-hero-container">
            <div class="sd-hero-content">
                <div class="sd-breadcrumbs">
                    <a href="destinations.php">Destinations</a> / <span>Manipur</span>
                </div>
                <h1>Manipur</h1>
                <div class="sd-hero-info">
                    <span><i class="fas fa-map-marker-alt icon"></i> Capital: Imphal</span>
                    <span><i class="fas fa-calendar-alt icon"></i> Best Time: October to May</span>
                </div>
                <p class="sd-hero-description">
                    Discover Manipur, the 'Jeweled Land' of India, famed for its stunning Loktak Lake with unique floating islands (phumdis), the endangered Sangai deer, graceful classical dance, vibrant culture, and rich history.
                </p>
                 <a href="#manipur-packages" class="btn sd-hero-cta">View Manipur Packages</a>
            </div>
            <div class="sd-hero-image-wrapper">
                <!-- Specific Manipur Image -->
                <img src="https://images.unsplash.com/photo-1593939535589-8356e421b3cc?q=80&w=800" alt="Loktak Lake Manipur" class="sd-hero-image">
                 <div class="sd-hero-image-overlay"></div>
            </div>
        </div>
    </section>

    <!-- ========================== -->
    <!-- ===   FAMOUS FOR SECTION === -->
    <!-- ========================== -->
    <section class="sd-section sd-famous-for">
        <div class="container">
            <h2 class="sd-section-title">Famous For</h2>
            <div class="sd-famous-grid">
                <div class="sd-famous-item">
                    <i class="fas fa-water icon"></i> <!-- Lake/Water Icon -->
                    <span>Loktak Lake</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-dot-circle icon"></i> <!-- Represents Phumdis (floating islands) -->
                    <span>Phumdis</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-theater-masks icon"></i> <!-- Represents Dance/Culture -->
                    <span>Classical Dance</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-paw icon"></i> <!-- Wildlife Icon -->
                    <span>Sangai Deer</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================== -->
    <!-- === POPULAR DESTINATIONS === -->
    <!-- ============================== -->
    <section class="sd-section sd-popular-destinations">
        <div class="container">
            <h2 class="sd-section-title">Popular Destinations in Manipur</h2>

            <!-- Destination 1: Loktak Lake & Keibul Lamjao -->
            <div class="sd-destination-row">
                <div class="sd-destination-image">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Sangai_at_Keibul_Lamjao_National_Park.jpg/640px-Sangai_at_Keibul_Lamjao_National_Park.jpg" alt="Sangai Deer Keibul Lamjao" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Loktak Lake & Keibul Lamjao NP</h3>
                    <p>Witness the breathtaking expanse of Loktak Lake, the largest freshwater lake in the Northeast, famous for its unique 'phumdis'. Visit Keibul Lamjao, the world's only floating national park, and the last natural habitat of the endangered Sangai deer.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Boat Ride on Loktak Lake</li>
                        <li>Keibul Lamjao National Park Viewpoints</li>
                        <li>Spotting Sangai Deer (Early Morning/Late Afternoon)</li>
                        <li>Sendra Island Viewpoint</li>
                        <li>Homestays on Phumdis (Optional)</li>
                    </ul>
                     <!-- Link to a future loktak.php page -->
                    <a href="loktak.php" class="btn outline-btn sd-explore-btn">Explore Loktak Lake</a>
                </div>
            </div>

             <!-- Destination 2: Imphal -->
            <div class="sd-destination-row row-reverse">
                 <div class="sd-destination-image">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Kangla_Uttra_Sanglen.jpg/640px-Kangla_Uttra_Sanglen.jpg" alt="Kangla Fort Imphal" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Imphal</h3>
                    <p>The capital city offers a rich blend of history and culture. Explore the ancient Kangla Fort, experience the bustling Ima Keithel (Women's Market), visit the State Museum, pay respects at the War Cemetery, and see the sacred Shree Govindajee Temple.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Kangla Fort & Museum</li>
                        <li>Ima Keithel (Women's Market)</li>
                        <li>Manipur State Museum</li>
                        <li>Imphal War Cemetery</li>
                        <li>Shree Govindajee Temple</li>
                    </ul>
                    <!-- Link to a future imphal.php page -->
                    <a href="imphal.php" class="btn outline-btn sd-explore-btn">Explore Imphal</a>
                </div>
            </div>

             <!-- Destination 3: Moirang -->
            <div class="sd-destination-row">
                <div class="sd-destination-image">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/INA_MEMORIAL_MOIRANG_MANIPUR_%28INDIA%29.jpg/640px-INA_MEMORIAL_MOIRANG_MANIPUR_%28INDIA%29.jpg" alt="INA Memorial Moirang" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Moirang</h3>
                    <p>A town of significant historical importance, located near Loktak Lake. Moirang is where the flag of the Indian National Army (INA) was first hoisted on Indian soil in 1944. Visit the INA Memorial Complex and Museum to learn about this chapter of history.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>INA Memorial Complex & Museum</li>
                        <li>Explore surroundings near Loktak Lake</li>
                        <li>Local Market</li>
                    </ul>
                    <!-- Link to a future moirang.php page -->
                    <a href="moirang.php" class="btn outline-btn sd-explore-btn">Explore Moirang</a>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================ -->
    <!-- === RECOMMENDED PACKAGES === -->
    <!-- ============================ -->
    <section id="manipur-packages" class="sd-section sd-related-packages state-hero-manipur"> <!-- Reuse theme class -->
        <div class="container">
             <h2 class="sd-section-title">Recommended Manipur Packages</h2>
             <div class="sd-packages-grid">

                <!-- Package Card 1: Manipur Jewel -->
                <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="https://images.unsplash.com/photo-1593939535589-8356e421b3cc?q=80&w=600" alt="Manipur Jewel Package" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">4 Days / 3 Nights</span>
                        <h3>Manipur: The Jeweled Land</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.5
                        </div>
                        <p>Short tour focusing on Imphal's culture and the unique Loktak Lake experience.</p>
                        <div class="sd-pkg-price">From ₹19,999</div>
                        <a href="manipur-jewel.php" class="btn primary-btn sd-pkg-btn">View Details</a>
                     </div>
                 </div>

                <!-- Package Card 2: Manipur & Nagaland Combo -->
                 <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="https://images.unsplash.com/photo-1583159729100-2dc66956d41d?q=80&w=600" alt="Manipur Nagaland Combo Tour" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">7 Days / 6 Nights</span>
                        <h3>Manipur & Nagaland Explorer</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.6
                        </div>
                        <p>Combine the highlights of Manipur (Imphal, Loktak) with Kohima in Nagaland.</p>
                        <div class="sd-pkg-price">From ₹32,000</div>
                        <a href="manipur-nagaland.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>

                 <!-- Package Card 3: Sangai Festival Special (Seasonal) -->
                 <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Manipuri_dance_performance_02.jpg/640px-Manipuri_dance_performance_02.jpg" alt="Sangai Festival Manipur" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">5 Days / 4 Nights</span>
                        <h3>Sangai Festival Tour</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.8
                        </div>
                        <p>Experience the vibrant Sangai Festival showcasing Manipur's culture (Seasonal - Nov).</p>
                        <div class="sd-pkg-price">Contact Us</div>
                        <a href="sangai-festival.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>


             </div>
              <div class="sd-view-all-btn-container">
                 <a href="packages.php?state=Manipur" class="btn related-btn">View All Manipur Packages</a>
             </div>
        </div>
    </section>

     <!-- ============================ -->
    <!-- === CULTURAL HERITAGE === -->
    <!-- ============================ -->
    <section class="sd-section sd-cultural-heritage">
         <div class="container">
            <div class="sd-heritage-content">
                <div class="sd-heritage-text">
                    <h2 class="sd-section-title text-left">Cultural Heritage of Manipur</h2>
                    <p>Manipur's culture is deeply rooted in its history and traditions, primarily influenced by the Meitei people along with various Naga and Kuki tribes. It's globally renowned for the graceful Manipuri classical dance (Ras Leela), often depicting stories of Radha and Krishna.</p>
                    <p>The state is also famous for the martial art Thang-Ta (the art of sword and spear), intricate handloom weaving (producing fabrics like Moirang Phee), and unique festivals like Lai Haraoba (celebrating traditional deities) and the Sangai Festival (state tourism festival). The Ima Keithel stands as a powerful symbol of women's role in Manipuri society.</p>
                    <a href="#manipur-packages" class="btn outline-btn">Explore Cultural Experiences</a>
                </div>
                <div class="sd-heritage-images">
                     <div class="about-ne-img-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Manipuri_dance_performance_02.jpg/640px-Manipuri_dance_performance_02.jpg" alt="Manipuri Dance Performance" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Ima_Market.jpg/640px-Ima_Market.jpg" alt="Ima Keithel Market" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Thang_Ta_performance_at_Sangai_Festival.jpg/640px-Thang_Ta_performance_at_Sangai_Festival.jpg" alt="Thang-Ta Martial Art" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/A_traditional_Meitei_house_in_Manipur.jpg/640px-A_traditional_Meitei_house_in_Manipur.jpg" alt="Traditional Meitei House" loading="lazy"></div>
                 </div>
            </div>
         </div>
    </section>

    <!-- ============================ -->
    <!-- === PLAN YOUR VISIT (CTA) === -->
    <!-- ============================ -->
    <section class="sd-section sd-plan-visit state-hero-manipur"> <!-- Reuse theme class -->
         <div class="container text-center">
              <h2 class="sd-section-title">Plan Your Visit to Manipur</h2>
              <p class="sd-plan-text">
                The ideal time to explore Manipur is from <strong>October to May</strong>. Winter (November to February) offers cool, pleasant weather perfect for sightseeing and visiting Loktak Lake. Spring (March to May) is also agreeable. The Sangai Festival usually takes place in late November. Avoid the monsoon season (June to September) due to heavy rains.
              </p>
              <a href="packages.php?state=Manipur" class="btn related-btn">Browse Manipur Tour Packages</a>
         </div>
    </section>

</main>

<?php
// Optional: Include a footer partial
// include 'footer.php';
?>

<!-- Link Scripts -->
<script src="js/state-details-interactions.js"></script> <!-- For potential future interactions -->
<script src="js/navbar.js"></script>

</body>
</html>