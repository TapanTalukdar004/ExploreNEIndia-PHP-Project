<?php
// File: arunachal.php

// Define page specifics BEFORE including the header
$page_title = "Explore Arunachal Pradesh - Land of Dawn-lit Mountains";
$page_specific_css = 'css/state-details-static.css'; // Link the SHARED static CSS

// Define state theme class for CSS targeting
$body_class = "state-theme-arunachal-pradesh"; // Match CSS definition

include 'header.php'; // Include header
?>

<main id="state-detail-page" class="<?php echo $body_class; ?>"> <!-- Apply theme -->

    <!-- ========================== -->
    <!-- ===    HERO SECTION    === -->
    <!-- ========================== -->
    <section class="sd-hero state-hero-arunachal-pradesh"> <!-- Use theme class -->
        <div class="container sd-hero-container">
            <div class="sd-hero-content">
                <div class="sd-breadcrumbs">
                    <a href="destinations.php">Destinations</a> / <span>Arunachal Pradesh</span>
                </div>
                <h1>Arunachal Pradesh</h1>
                <div class="sd-hero-info">
                    <span><i class="fas fa-map-marker-alt icon"></i> Capital: Itanagar</span>
                    <span><i class="fas fa-calendar-alt icon"></i> Best Time: October to April</span>
                </div>
                <p class="sd-hero-description">
                    Discover the 'Land of Dawn-lit Mountains', India's easternmost state, boasting stunning Himalayan landscapes, ancient monasteries, diverse tribal cultures, and unparalleled adventure opportunities.
                </p>
                 <a href="#arunachal-packages" class="btn sd-hero-cta">View Arunachal Packages</a>
            </div>
            <div class="sd-hero-image-wrapper">
                <!-- Specific Arunachal Image -->
                <img src="images/3-1.jpg" alt="Tawang Monastery Arunachal Pradesh" class="sd-hero-image">
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
                    <i class="fas fa-gopuram icon"></i> <!-- Temple/Monastery Icon -->
                    <span>Tawang Monastery</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-users icon"></i> <!-- People/Tribes Icon -->
                    <span>Diverse Tribal Cultures</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-mountain icon"></i> <!-- Mountains Icon -->
                    <span>Himalayan Landscapes</span>
                </div>
                 <div class="sd-famous-item">
                     <i class="fas fa-route icon"></i> <!-- Adventure/Pass Icon -->
                    <span>High Altitude Passes</span>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================== -->
    <!-- === POPULAR DESTINATIONS === -->
    <!-- ============================== -->
    <section class="sd-section sd-popular-destinations">
        <div class="container">
            <h2 class="sd-section-title">Popular Destinations in Arunachal Pradesh</h2>

            <!-- Destination 1: Tawang -->
            <div class="sd-destination-row">
                <div class="sd-destination-image">
                    <img src="images/AP-slide.jpg" alt="Tawang Monastery Arunachal Pradesh" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Tawang</h3>
                    <p>Home to the magnificent Tawang Monastery (Galden Namgyal Lhatse), the largest in India. Explore its serene complex, witness breathtaking mountain views, cross the high-altitude Sela Pass, and visit pristine lakes like PTSO and Madhuri Lake.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Tawang Monastery & Museum</li>
                        <li>Sela Pass & Sela Lake</li>
                        <li>Jaswant Garh War Memorial</li>
                        <li>PTSO Lake & Madhuri Lake</li>
                        <li>Urgelling Gompa (Dalai Lama Birthplace)</li>
                        <li>Bum La Pass (Optional/Permit Required)</li>
                    </ul>
                     <!-- Link to a future tawang.php page -->
                    <a href="tawang.php" class="btn outline-btn sd-explore-btn">Explore Tawang</a>
                </div>
            </div>

             <!-- Destination 2: Ziro Valley -->
            <div class="sd-destination-row row-reverse">
                 <div class="sd-destination-image">
                    <img src="images/ziro.jpg" alt="Ziro Valley Paddy Fields" loading="lazy">
                </div>
                <div class="sd-destination-content">
                    <h3>Ziro Valley</h3>
                    <p>A UNESCO World Heritage tentative site, famous for the unique culture of the Apatani tribe and their sustainable paddy-cum-fish cultivation. Explore traditional villages, enjoy the scenic beauty, and experience the renowned Ziro Music Festival (seasonal).</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Apatani Villages (Hong, Hari, etc.)</li>
                        <li>Tarin Fish Farm (Paddy-cum-fish)</li>
                        <li>Pine Groves & Nature Walks</li>
                        <li>Talley Valley Wildlife Sanctuary (Trekking)</li>
                        <li>Ziro Music Festival (September)</li>
                    </ul>
                    <!-- Link to a future ziro.php page -->
                    <a href="ziro.php" class="btn outline-btn sd-explore-btn">Explore Ziro Valley</a>
                </div>
            </div>

             <!-- Destination 3: Mechuka -->
            <div class="sd-destination-row">
                <div class="sd-destination-image">
                    <img src="images/mechuka.jpg" alt="Mechuka Valley Arunachal Pradesh" loading="lazy"> <!-- Wikimedia Example -->
                </div>
                <div class="sd-destination-content">
                    <h3>Mechuka (Menchukha)</h3>
                    <p>A stunningly beautiful valley often called the 'Forbidden Valley', close to the China border. Known for its picturesque landscapes, the Siyom River, the ancient Samten Yongcha Monastery (400 years old), hanging bridges, and serene atmosphere.</p>
                    <h4>Must Visit:</h4>
                    <ul class="sd-must-visit-list">
                        <li>Samten Yongcha Monastery</li>
                        <li>Siyom River & Hanging Bridges</li>
                        <li>Gurudwara & Hanuman Temple</li>
                        <li>Dorjeeling Village Viewpoint</li>
                        <li>Exploring the Valley & Villages</li>
                    </ul>
                    <!-- Link to a future mechuka.php page -->
                    <a href="mechuka.php" class="btn outline-btn sd-explore-btn">Explore Mechuka</a>
                </div>
            </div>

        </div>
    </section>

    <!-- ============================ -->
    <!-- === RECOMMENDED PACKAGES === -->
    <!-- ============================ -->
    <section id="arunachal-packages" class="sd-section sd-related-packages state-hero-arunachal-pradesh"> <!-- Reuse theme class -->
        <div class="container">
             <h2 class="sd-section-title">Recommended Arunachal Packages</h2>
             <div class="sd-packages-grid">

                <!-- Package Card 1: Arunachal Cultural Discovery -->
                <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="images/sign-img.jpg" alt="Arunachal Discovery Package" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">8 Days / 7 Nights</span>
                        <h3>Arunachal Cultural Discovery</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.6
                        </div>
                        <p>Covers Tawang, Bomdila, Dirang, and the unique Apatani culture in Ziro.</p>
                        <div class="sd-pkg-price">From ₹34,999</div>
                        <a href="arunachal-discovery.php" class="btn primary-btn sd-pkg-btn">View Details</a>
                     </div>
                 </div>

                <!-- Package Card 2: Tawang Focus -->
                 <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="images/3-2.jpg" alt="Tawang Tour Package" loading="lazy">
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">6 Days / 5 Nights</span>
                        <h3>Essence of Tawang</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.7
                        </div>
                        <p>Focused tour covering Tawang Monastery, Sela Pass, lakes, and memorials.</p>
                        <div class="sd-pkg-price">From ₹28,500</div>
                        <a href="tawang-essence.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>

                 <!-- Package Card 3: Ziro Music Festival (Seasonal) -->
                 <div class="sd-package-card">
                     <div class="sd-pkg-image">
                        <img src="images/musicziro.jpg" alt="Ziro Music Festival Package" loading="lazy"> <!-- Wikimedia Example -->
                     </div>
                     <div class="sd-pkg-content">
                        <span class="sd-pkg-duration">5 Days / 4 Nights</span>
                        <h3>Ziro Music Festival Special</h3>
                        <div class="sd-pkg-rating">
                            <i class="fas fa-star"></i> 4.8
                        </div>
                        <p>Experience the iconic music festival along with exploring Ziro Valley (Seasonal - Sept).</p>
                        <div class="sd-pkg-price">Contact Us</div>
                        <a href="ziro-festival.php" class="btn primary-btn sd-pkg-btn">View Details</a> <!-- Example link -->
                     </div>
                 </div>

             </div>
              <div class="sd-view-all-btn-container">
                 <a href="packages.php?state=Arunachal Pradesh" class="btn related-btn">View All Arunachal Packages</a>
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
                    <h2 class="sd-section-title text-left">Cultural Heritage of Arunachal</h2>
                    <p>Arunachal Pradesh is home to a remarkable diversity of indigenous tribes (estimated over 26 major tribes and numerous sub-tribes), including the Monpas, Apatanis, Nyishis, Adis, Galos, Tagins, and many more. Each tribe possesses its own unique language, customs, festivals, social structures, and traditional attire.</p>
                    <p>Buddhism (especially Tibetan Buddhism in the western regions like Tawang), Donyi-Polo (an indigenous faith worshipping the sun and moon), and traditional animist beliefs coexist. Major festivals like Losar (Monpa New Year), Solung (Adi harvest festival), Nyokum (Nyishi festival), and Mopin (Galo harvest festival) are celebrated with great fervor, showcasing vibrant dances, rituals, and community spirit.</p>
                    <a href="#arunachal-packages" class="btn outline-btn">Explore Cultural Experiences</a>
                </div>
                <div class="sd-heritage-images">
                     <div class="about-ne-img-item"><img src="images/apatani.jpg" alt="Apatani Woman" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/monpa.jpg" alt="Monpa Dance" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/adi.jpg" alt="Adi Girl" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/mone.jpg" alt="Tawang Monastery Detail" loading="lazy"></div>
                 </div>
            </div>
         </div>
    </section>

    <!-- ============================ -->
    <!-- === PLAN YOUR VISIT (CTA) === -->
    <!-- ============================ -->
    <section class="sd-section sd-plan-visit state-hero-arunachal-pradesh"> <!-- Reuse theme class -->
         <div class="container text-center">
              <h2 class="sd-section-title">Plan Your Visit to Arunachal</h2>
              <p class="sd-plan-text">
                The best months to visit Arunachal Pradesh are typically from <strong>October to April</strong>. This period avoids the heavy monsoon rains and offers clear skies for mountain views. Spring (Mar-Apr) brings blooming rhododendrons, while autumn (Oct-Nov) offers pleasant weather. Winter (Dec-Feb) can be very cold, especially at higher altitudes like Tawang, with potential snowfall.
              </p>
              <a href="packages.php?state=Arunachal Pradesh" class="btn related-btn">Browse Arunachal Tour Packages</a>
         </div>
    </section>

</main>

<?php
// Optional: Include a footer partial
// include 'footer.php';
?>

<!-- Link Scripts -->
<script src="js/state-details-interactions.js"></script> <!-- For Carousel if used -->
<script src="js/navbar.js"></script>

</body>
</html>