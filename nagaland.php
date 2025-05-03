<?php
// File: nagaland.php

// Define page specifics BEFORE including the header
$page_title = "Explore Nagaland - Land of Festivals";
$page_specific_css = 'css/state-details-static.css'; // Link the SHARED static CSS

// Define state theme class for CSS targeting
$body_class = "state-theme-nagaland";

include 'header.php'; // Include header
?>

<main id="state-detail-page" class="<?php echo $body_class; ?>"> <!-- Apply theme -->

    <!-- ========================== -->
    <!-- ===    HERO SECTION    === -->
    <!-- ========================== -->
    <section class="sd-hero state-hero-nagaland"> <!-- Use theme class -->
        <div class="container sd-hero-container">
            <div class="sd-hero-content">
                <div class="sd-breadcrumbs">
                    <a href="destinations.php">Destinations</a> / <span>Nagaland</span>
                </div>
                <h1>Nagaland</h1>
                <div class="sd-hero-info">
                    <span><i class="fas fa-map-marker-alt icon"></i> Capital: Kohima</span>
                    <span><i class="fas fa-calendar-alt icon"></i> Best Time: Oct-May (Dec for Hornbill)</span>
                </div>
                <p class="sd-hero-description">
                    Step into the vibrant 'Land of Festivals', home to diverse Naga tribes, each with unique traditions. Explore historic Kohima, trek the stunning Dzukou Valley, and witness the fascinating culture of the Konyaks in Mon.
                </p>
                 <a href="#nagaland-packages" class="btn sd-hero-cta">View Nagaland Packages</a>
            </div>
            <div class="sd-hero-image-wrapper">
                <!-- Specific Nagaland Image -->
                <img src="images/naga.jpg" alt="Naga Warrior Nagaland" class="sd-hero-image">
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
                    <i class="fas fa-feather-alt icon"></i> <!-- Represents Hornbill/Festival -->
                    <span>Hornbill Festival</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-users icon"></i> <!-- People/Tribes Icon -->
                    <span>Diverse Naga Tribes</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-hiking icon"></i> <!-- Trekking Icon -->
                    <span>Dzukou Valley Trek</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-landmark icon"></i> <!-- History/Memorial Icon -->
                    <span>Kohima War Cemetery</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================== -->
    <!-- === POPULAR DESTINATIONS === -->
    <!-- ============================== -->
    <section class="sd-section sd-popular-destinations">
        <div class="container">
            <h2 class="sd-section-title">Popular Destinations in Nagaland</h2>

            <!-- Destination 1: Kohima -->
            <div class="sd-destination-row">
                <div class="sd-destination-image">
                    <img src="images/mon.png" alt="Kohima City View Nagaland" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Kohima</h3>
                    <p>The historic capital city, site of a crucial World War II battle. Visit the poignant War Cemetery, explore the State Museum showcasing Naga heritage, and see Kisama Heritage Village, the venue for the Hornbill Festival.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Kohima War Cemetery</li>
                        <li>Nagaland State Museum</li>
                        <li>Kisama Heritage Village</li>
                        <li>Kohima Cathedral</li>
                        <li>Local Markets</li>
                        <li>Jakhama / Khonoma Villages (Optional)</li>
                    </ul>
                     <!-- Link to a future kohima.php page -->
                    <a href="kohima.php" class="btn outline-btn sd-explore-btn">Explore Kohima</a>
                </div>
            </div>

             <!-- Destination 2: Mon District -->
            <div class="sd-destination-row row-reverse">
                 <div class="sd-destination-image">
                    <img src="images/mon.jpg" alt="Konyak Naga Elder Mon" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Mon District (Konyak Region)</h3>
                    <p>Journey to the remote Mon district, home to the fascinating Konyak Naga tribe, historically known as headhunters. Visit villages like Longwa, which straddles the India-Myanmar border, and interact respectfully with the elders (some with traditional tattoos).</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Longwa Village & Angh's House</li>
                        <li>Shangnyu Village (Wooden Carvings)</li>
                        <li>Hongphoi Village</li>
                        <li>Observe Konyak Culture & Crafts</li>
                        <li>Interact with Village Chiefs (Anghs)</li>
                    </ul>
                    <!-- Link to a future mon.php page -->
                    <a href="mon.php" class="btn outline-btn sd-explore-btn">Explore Mon District</a>
                </div>
            </div>

             <!-- Destination 3: Dzukou Valley -->
            <div class="sd-destination-row">
                <div class="sd-destination-image">
                    <img src="images/Dzukovalley.jpg" alt="Dzukou Valley Nagaland Trek" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Dzukou Valley</h3>
                    <p>A breathtaking valley famed for its rolling hills, seasonal flowers (especially lilies post-monsoon), and pristine beauty. Accessible via moderate treks from Viswema or Jakhama villages near Kohima, offering stunning landscapes ideal for trekking and camping.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Valley Trekking (Viswema/Jakhama Route)</li>
                        <li>Seasonal Flower Blooms (Mainly June-Sept)</li>
                        <li>Panoramic Valley Views</li>
                        <li>Natural Caves & Streams</li>
                        <li>Camping (Requires Arrangement)</li>
                    </ul>
                    <!-- Link to a future dzukou-valley.php page -->
                    <a href="dzukou-valley.php" class="btn outline-btn sd-explore-btn">Explore Dzukou Valley</a>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================ -->
    <!-- === RECOMMENDED PACKAGES === -->
    <!-- ============================ -->
    <section id="nagaland-packages" class="sd-section sd-related-packages state-hero-nagaland"> <!-- Reuse theme class -->
        <div class="container">
             <h2 class="sd-section-title">Recommended Nagaland Packages</h2>
             <div class="sd-packages-grid">

                <!-- Package Card 1: Nagaland Festive Tribes -->
                <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="images/nagatribe.jpg" alt="Nagaland Festive Tribes Package" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">6 Days / 5 Nights</span>
                        <h3>Nagaland Festive Tribes</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.7
                        </div>
                        <p>Covers Kohima's history, Mon's Konyak culture, and includes Dzukou Valley trek.</p>
                        <div class="sd-pkg-price">From ₹27,500</div>
                        <a href="nagaland-festive.php" class="btn primary-btn sd-pkg-btn">View Details</a>
                     </div>
                 </div>

                <!-- Package Card 2: Hornbill Festival Special -->
                 <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="images/horn.jpg" alt="Hornbill Festival Tour" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">5 Days / 4 Nights</span>
                        <h3>Hornbill Festival Experience</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.9
                        </div>
                        <p>Focuses on attending the vibrant Hornbill Festival at Kisama (Dec 1-10 Only).</p>
                        <div class="sd-pkg-price">Contact Us</div>
                        <a href="hornbill-festival.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>

                 <!-- Package Card 3: Dzukou Valley Trek Focus -->
                 <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="images/Dzukovalley.jpg" alt="Dzukou Valley Trek Package" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">4 Days / 3 Nights</span>
                        <h3>Dzukou Valley Trek</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.6
                        </div>
                        <p>A dedicated trekking package focusing on the beautiful Dzukou Valley experience.</p>
                        <div class="sd-pkg-price">From ₹15,000</div>
                        <a href="dzukou-trek.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>

             </div>
              <div class="sd-view-all-btn-container">
                 <a href="packages.php?state=Nagaland" class="btn related-btn">View All Nagaland Packages</a>
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
                    <h2 class="sd-section-title text-left">Cultural Heritage of Nagaland</h2>
                    <p>Nagaland is home to 16 major recognized tribes (including Angami, Ao, Chakhesang, Konyak, Lotha, Sema, Rengma, Zeliang, etc.), each with its own distinct language, dialect, attire, customs, and festivals. Traditionally organized around villages and clans, Naga society places strong emphasis on community bonds and oral history.</p>
                    <p>Warrior traditions, intricate beadwork, wood carvings (especially among Konyaks), colourful shawls signifying tribal identity, and vibrant harvest festivals (like Moatsu Mong for Aos, Sekrenyi for Angamis) are key cultural aspects. The Hornbill Festival is a state-sponsored event bringing all tribes together to showcase their rich heritage.</p>
                    <a href="#nagaland-packages" class="btn outline-btn">Explore Cultural Experiences</a>
                </div>
                <div class="sd-heritage-images">
                     <div class="about-ne-img-item"><img src="images/warrior.webp" alt="Warrior Dance" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/horn.jpg" alt="Hornbill Festival Dance" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/village.jpg" alt="Longwa Naga House" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/angami.jpg" alt="Angami Woman" loading="lazy"></div>
                 </div>
            </div>
         </div>
    </section>

    <!-- ============================ -->
    <!-- === PLAN YOUR VISIT (CTA) === -->
    <!-- ============================ -->
    <section class="sd-section sd-plan-visit state-hero-nagaland"> <!-- Reuse theme class -->
         <div class="container text-center">
              <h2 class="sd-section-title">Plan Your Visit to Nagaland</h2>
              <p class="sd-plan-text">
                 The best time to visit Nagaland is from <strong>October to May</strong> when the weather is dry and pleasant. For witnessing the grand Hornbill Festival, plan your visit during the first week of <strong>December (1st-10th)</strong>. The monsoon season (June-September) sees heavy rainfall, making travel difficult. Dzukou Valley is best trekked post-monsoon or in spring for flowers.
              </p>
              <a href="packages.php?state=Nagaland" class="btn related-btn">Browse Nagaland Tour Packages</a>
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