<?php
// File: tripura.php

// Define page specifics BEFORE including the header
$page_title = "Explore Tripura - Princely State, Rich History";
$page_specific_css = 'css/state-details-static.css'; // Link the SHARED static CSS

// Define state theme class for CSS targeting
$body_class = "state-theme-tripura";

include 'header.php'; // Include header
?>

<main id="state-detail-page" class="<?php echo $body_class; ?>"> <!-- Apply theme -->

    <!-- ========================== -->
    <!-- ===    HERO SECTION    === -->
    <!-- ========================== -->
    <section class="sd-hero state-hero-tripura"> <!-- Use theme class -->
        <div class="container sd-hero-container">
            <div class="sd-hero-content">
                <div class="sd-breadcrumbs">
                    <a href="destinations.php">Destinations</a> / <span>Tripura</span>
                </div>
                <h1>Tripura</h1>
                <div class="sd-hero-info">
                    <span><i class="fas fa-map-marker-alt icon"></i> Capital: Agartala</span>
                    <span><i class="fas fa-calendar-alt icon"></i> Best Time: September to March</span>
                </div>
                <p class="sd-hero-description">
                    Discover Tripura, a landlocked gem in Northeast India, known for its rich royal history reflected in magnificent palaces, ancient rock carvings, diverse tribal culture alongside Bengali influence, and skilled cane & bamboo craftsmanship.
                </p>
                 <a href="#tripura-packages" class="btn sd-hero-cta">View Tripura Packages</a>
            </div>
            <div class="sd-hero-image-wrapper">
                <!-- Specific Tripura Image -->
                <img src="https://images.unsplash.com/photo-1632081203329-4cc05508554c?q=80&w=800" alt="Ujjayanta Palace Tripura" class="sd-hero-image">
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
                    <i class="fas fa-chess-rook icon"></i> <!-- Represents Palace/Royalty -->
                    <span>Royal Palaces</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-stream icon"></i> <!-- Represents Lakes (Neermahal) -->
                    <span>Lakes & Water Palaces</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-carving icon"></i> <!-- Custom carving icon suggestion -->
                    <span>Rock Carvings (Unakoti)</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fab fa-pagelines icon"></i> <!-- Represents Bamboo/Cane -->
                    <span>Cane & Bamboo Crafts</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================== -->
    <!-- === POPULAR DESTINATIONS === -->
    <!-- ============================== -->
    <section class="sd-section sd-popular-destinations">
        <div class="container">
            <h2 class="sd-section-title">Popular Destinations in Tripura</h2>

            <!-- Destination 1: Agartala -->
            <div class="sd-destination-row">
                <div class="sd-destination-image">
                    <img src="https://images.unsplash.com/photo-1474181487882-5abf3f0ba6c2?q=80&w=800" alt="Ujjayanta Palace Agartala" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Agartala</h3>
                    <p>The capital city blends Bengali and tribal cultures. Explore the stunning Ujjayanta Palace (now State Museum), visit the Heritage Park showcasing Tripura's landmarks in miniature, see the Jagannath Temple, and experience local life.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Ujjayanta Palace (Tripura State Museum)</li>
                        <li>Heritage Park</li>
                        <li>Jagannath Temple</li>
                        <li>Sepahijala Wildlife Sanctuary (nearby)</li>
                        <li>State Tribal Museum</li>
                        <li>Local Markets</li>
                    </ul>
                     <!-- Link to a future agartala.php page -->
                    <a href="agartala.php" class="btn outline-btn sd-explore-btn">Explore Agartala</a>
                </div>
            </div>

             <!-- Destination 2: Unakoti -->
            <div class="sd-destination-row row-reverse">
                 <div class="sd-destination-image">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Unakuti_Rock_Cutting_at_Tripura.jpg/640px-Unakuti_Rock_Cutting_at_Tripura.jpg" alt="Unakoti Rock Carvings Tripura" loading="lazy"> <!-- Wikimedia Example -->
                </div>
                <div class="sd-destination-content">
                    <h3>Unakoti</h3>
                    <p>An ancient Shaivite pilgrimage site famous for its massive rock carvings and stone sculptures dating back centuries (estimated 7th-9th centuries). Discover giant heads of Shiva, Ganesha, and other deities carved into the hillside amidst a scenic, forested setting.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Central Shiva Head (Unakotiswara Kal Bhairava)</li>
                        <li>Giant Ganesha Figures</li>
                        <li>Waterfalls and Rocky Terrain</li>
                        <li>Annual Ashokastami Mela (Festival)</li>
                    </ul>
                    <!-- Link to a future unakoti.php page -->
                    <a href="unakoti.php" class="btn outline-btn sd-explore-btn">Explore Unakoti</a>
                </div>
            </div>

             <!-- Destination 3: Neermahal -->
            <div class="sd-destination-row">
                <div class="sd-destination-image">
                     <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Neermahal_palace_in_Tripura.jpg/640px-Neermahal_palace_in_Tripura.jpg" alt="Neermahal Water Palace Tripura" loading="lazy"> <!-- Wikimedia Example -->
                </div>
                <div class="sd-destination-content">
                    <h3>Neermahal (Water Palace)</h3>
                    <p>Located in the middle of Rudrasagar Lake, Neermahal is a stunning former royal palace inspired by Mughal architecture. Reachable by boat, it's one of the largest water palaces in India, offering beautiful views and a glimpse into Tripura's royal past.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Boat ride to the Palace</li>
                        <li>Explore Palace Architecture</li>
                        <li>Enjoy Lake Views</li>
                        <li>Nearby Bird Watching (Seasonal)</li>
                    </ul>
                    <!-- Link to a future neermahal.php page -->
                    <a href="neermahal.php" class="btn outline-btn sd-explore-btn">Explore Neermahal</a>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================ -->
    <!-- === RECOMMENDED PACKAGES === -->
    <!-- ============================ -->
    <section id="tripura-packages" class="sd-section sd-related-packages state-hero-tripura"> <!-- Reuse theme class -->
        <div class="container">
             <h2 class="sd-section-title">Recommended Tripura Packages</h2>
             <div class="sd-packages-grid">

                <!-- Package Card 1: Tripura Highlights -->
                <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="https://images.unsplash.com/photo-1632081203329-4cc05508554c?q=80&w=600" alt="Tripura Highlights Package" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">4 Days / 3 Nights</span>
                        <h3>Tripura Highlights Tour</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.4
                        </div>
                        <p>Covers the key attractions of Agartala including Ujjayanta Palace and Neermahal.</p>
                        <div class="sd-pkg-price">From ₹16,500</div>
                        <a href="tripura-highlights.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>

                <!-- Package Card 2: Tripura with Unakoti -->
                 <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Unakuti_Rock_Cutting_at_Tripura.jpg/640px-Unakuti_Rock_Cutting_at_Tripura.jpg" alt="Tripura Unakoti Tour" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">5 Days / 4 Nights</span>
                        <h3>Tripura Heritage & Unakoti</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.6
                        </div>
                        <p>Explore Agartala, Neermahal, and the ancient rock carvings of Unakoti.</p>
                        <div class="sd-pkg-price">From ₹22,000</div>
                        <a href="tripura-unakoti.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>

                 <!-- Package Card 3: Tripura & Bangladesh Border -->
                 <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b3/India-Bangladesh_border%2C_Agartala.jpg/640px-India-Bangladesh_border%2C_Agartala.jpg" alt="Tripura Bangladesh Border" loading="lazy"> <!-- Wikimedia Example -->
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">3 Days / 2 Nights</span>
                        <h3>Agartala & Border Ceremony</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.3
                        </div>
                        <p>Focuses on Agartala sightseeing and witnessing the border flag ceremony.</p>
                        <div class="sd-pkg-price">From ₹12,000</div>
                        <a href="agartala-border.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>


             </div>
              <div class="sd-view-all-btn-container">
                 <a href="packages.php?state=Tripura" class="btn related-btn">View All Tripura Packages</a>
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
                    <h2 class="sd-section-title text-left">Cultural Heritage of Tripura</h2>
                    <p>Tripura presents a fascinating blend of Bengali culture (due to migration and historical ties) and the traditions of its indigenous tribal communities like the Tripuris (Debbarma), Reangs, Jamatias, Chakmas, and Halams. This mix is reflected in its language, cuisine, festivals, music, and dance forms.</p>
                    <p>Bengali influence is seen in literature, music, and food, while tribal communities maintain their distinct customs, attire, bamboo crafts, and colourful festivals like Garia Puja and Kharchi Puja. Tripura's royal history under the Manikya dynasty has also left a significant mark on its architecture and heritage.</p>
                    <a href="#tripura-packages" class="btn outline-btn">Explore Cultural Experiences</a>
                </div>
                <div class="sd-heritage-images">
                     <div class="about-ne-img-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d2/Tripuri_people_dancing_at_Hornbill_Festival.jpg/640px-Tripuri_people_dancing_at_Hornbill_Festival.jpg" alt="Tripuri Dance" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Neermahal_palace_in_Tripura.jpg/640px-Neermahal_palace_in_Tripura.jpg" alt="Neermahal Palace" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Bamboo_Handicrafts_from_Tripura.jpg/640px-Bamboo_Handicrafts_from_Tripura.jpg" alt="Tripura Bamboo Crafts" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Unakuti_Rock_Cutting_at_Tripura.jpg/640px-Unakuti_Rock_Cutting_at_Tripura.jpg" alt="Unakoti Carving Detail" loading="lazy"></div>
                 </div>
            </div>
         </div>
    </section>

    <!-- ============================ -->
    <!-- === PLAN YOUR VISIT (CTA) === -->
    <!-- ============================ -->
    <section class="sd-section sd-plan-visit state-hero-tripura"> <!-- Reuse theme class -->
         <div class="container text-center">
              <h2 class="sd-section-title">Plan Your Visit to Tripura</h2>
              <p class="sd-plan-text">
                 The ideal period to visit Tripura is during the winter months, from <strong>September to March</strong>. The weather during this time is pleasant and comfortable for sightseeing, exploring palaces, and visiting archaeological sites like Unakoti. Summers can be hot and humid, and the monsoon season brings heavy rainfall.
              </p>
              <a href="packages.php?state=Tripura" class="btn related-btn">Browse Tripura Tour Packages</a>
         </div>
    </section>

</main>

<?php
// Optional: Include a footer partial
// include 'footer.php';
?>

<!-- Link Scripts -->
<script src="js/state-details-interactions.js"></script>
<script src="js/navbar.js"></script>

</body>
</html>