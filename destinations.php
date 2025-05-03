<?php
// File: destinations.php

// Define page specifics BEFORE including the header
$page_title = "Explore Northeast Destinations - TripNE";
$page_specific_css = 'css/destinations1.css'; // Link the NEW specific CSS

// Define State Data directly in PHP for this static page approach
// (Mirroring structure from your lib/data.ts)
$statesData = [
    [
        'id' => "assam",
        'name' => "Assam",
        'image' => "images/assam.jpg", // Use appropriate image URLs
        'description' => "Land of tea gardens, mighty Brahmaputra, and one-horned rhinos.",
        'capital' => "Dispur",
        'bestTimeToVisit' => "October to May",
        'famousFor' => ["Tea Gardens", "Kaziranga NP", "Majuli Island", "Kamakhya Temple"],
    ],
    [
        'id' => "meghalaya",
        'name' => "Meghalaya",
        'image' => "images/meghalaya.jpg",
        'description' => "'Abode of Clouds', famous for living root bridges and stunning waterfalls.",
        'capital' => "Shillong",
        'bestTimeToVisit' => "October to June",
        'famousFor' => ["Living Root Bridges", "Cherrapunji", "Shillong", "Caves"],
    ],
     [
        'id' => "arunachal", // Use consistent ID (lowercase)
        'name' => "Arunachal Pradesh",
        'image' => "images/ap2.jpg",
        'description' => "'Land of Dawn-lit Mountains', diverse tribes and untouched landscapes.",
        'capital' => "Itanagar",
        'bestTimeToVisit' => "October to April",
        'famousFor' => ["Tawang Monastery", "Namdapha NP", "Tribal Culture", "Adventure"],
    ],
    [
        'id' => "nagaland",
        'name' => "Nagaland",
        'image' => "images/Dzukovalley.jpg",
        'description' => "'Land of Festivals', rich tribal heritage and the famous Hornbill Festival.",
        'capital' => "Kohima",
        'bestTimeToVisit' => "October to May (Dec for Hornbill)",
        'famousFor' => ["Hornbill Festival", "Tribal Cultures", "Dzukou Valley", "War Cemetery"],
    ],
     [
        'id' => "manipur",
        'name' => "Manipur",
        'image' => "images/Manipur.webp",
        'description' => "'Jewel of India', known for Loktak Lake and classical Manipuri dance.",
        'capital' => "Imphal",
        'bestTimeToVisit' => "October to May",
        'famousFor' => ["Loktak Lake", "Phumdis", "Classical Dance", "Shirui Lily"],
    ],
     [
        'id' => "mizoram",
        'name' => "Mizoram",
        'image' => "images/mizoram.jpg",
        'description' => "'Land of the Highlanders', rolling hills and vibrant Mizo culture.",
        'capital' => "Aizawl",
        'bestTimeToVisit' => "October to May",
        'famousFor' => ["Bamboo Handicrafts", "Blue Mountains", "Cheraw Dance", "Phawngpui Peak"],
    ],
     [
        'id' => "tripura",
        'name' => "Tripura",
        'image' => "images/Ujjayanta-Palace.jpg",
        'description' => "Royal palaces, rock carvings, and a blend of Bengali and tribal culture.",
        'capital' => "Agartala",
        'bestTimeToVisit' => "September to March",
        'famousFor' => ["Royal Palaces", "Rock Carvings", "Cane & Bamboo Crafts", "Lakes"],
    ],
    [
        'id' => "sikkim",
        'name' => "Sikkim",
        'image' => "images/sikkim.jpg",
        'description' => "Himalayan wonderland with stunning Kanchenjunga views and monasteries.",
        'capital' => "Gangtok",
        'bestTimeToVisit' => "Mar-Jun, Sep-Dec",
        'famousFor' => ["Kanchenjunga", "Monasteries", "Tea Gardens", "Adventure"],
    ]
    // Add other states if necessary
];

include 'header.php'; // Include header
?>

<main id="destinations-page">

    <!-- Page Header Section -->
    <section class="page-header destinations-header-bg">
        <div class="container text-center">
            <h1 class="page-title">Explore Northeast India</h1>
            <p class="page-subtitle">
                Discover the unique cultural heritage, breathtaking landscapes, and natural wonders of the Eight Sister States.
            </p>
        </div>
    </section>

    <!-- States Horizontal Scrolling Section -->
    <section class="destinations-list-section">
        <div class="container">
            <h2 class="dest-section-title">Choose Your Destination</h2>

            <div class="destinations-scroll-wrapper">
                <!-- Scroll Left Button -->
                <button id="scroll-left-btn" class="scroll-btn" aria-label="Scroll Left">
                    <i class="fas fa-chevron-left"></i>
                </button>

                <!-- Scrollable Container -->
                <div class="destinations-container" id="destinationsContainer">
                    <?php foreach ($statesData as $state): ?>
                        <?php
                            // Prepare data for the card - sanitize output
                            $stateId = htmlspecialchars($state['id']);
                            $stateName = htmlspecialchars($state['name']);
                            $stateImage = htmlspecialchars($state['image']);
                            $stateDesc = htmlspecialchars($state['description']);
                            // Link assuming detail pages are named like 'assam.php', 'meghalaya.php' etc.
                            // Adjust if your naming convention is different (e.g., state-details.php?id=...)
                            $detailPageLink = $stateId . ".php";

                            // Prepare hover info (first 2 famous items)
                            $famousForText = '';
                            if (!empty($state['famousFor'])) {
                                $famousItems = array_slice($state['famousFor'], 0, 2);
                                $famousForText = htmlspecialchars(implode(", ", $famousItems));
                                if (count($state['famousFor']) > 2) {
                                    $famousForText .= "...";
                                }
                            }
                            $bestTime = htmlspecialchars($state['bestTimeToVisit']);
                        ?>
                        <!-- State Card -->
                        <a href="<?php echo $detailPageLink; ?>" class="state-card-link">
                            <div class="state-card" data-state-id="<?php echo $stateId; ?>">
                                <img src="<?php echo $stateImage; ?>" alt="<?php echo $stateName; ?>" class="state-card-image" loading="lazy">
                                <div class="state-card-overlay"></div>
                                <div class="state-card-content">
                                    <div class="state-card-title">
                                        <i class="fas fa-map-pin icon"></i>
                                        <h3><?php echo $stateName; ?></h3>
                                    </div>
                                    <!-- Info shown by default -->
                                    <div class="initial-info">
                                        <p><?php echo $stateDesc; ?></p>
                                    </div>
                                    <!-- Info shown on hover -->
                                    <div class="hover-info">
                                        <p><strong>Famous for:</strong> <?php echo $famousForText; ?></p>
                                        <p><strong>Best time:</strong> <?php echo $bestTime; ?></p>
                                        <span class="explore-prompt">
                                            Explore Destinations <i class="fas fa-chevron-right icon"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div> <!-- End destinations-container -->

                <!-- Scroll Right Button -->
                <button id="scroll-right-btn" class="scroll-btn" aria-label="Scroll Right">
                     <i class="fas fa-chevron-right"></i>
                </button>
            </div> <!-- End destinations-scroll-wrapper -->
        </div> <!-- End container -->
    </section>

    <!-- About Northeast Section -->
    <section class="about-northeast-section">
        <div class="container">
             <div class="about-ne-content">
                <div class="about-ne-text">
                    <h2 class="dest-section-title text-left">About Northeast India</h2>
                    <p>
                        Northeast India, often called the "Seven Sisters" plus Sikkim, comprises eight states: Assam, Meghalaya,
                        Arunachal Pradesh, Nagaland, Manipur, Mizoram, Tripura, and Sikkim. This region is one of the most culturally diverse
                        areas in Asia.
                    </p>
                    <p>
                        With over 220 ethnic groups and languages, it's a unique blend of cultures and landscapes. From Assam's tea gardens to Meghalaya's root bridges, Arunachal's monasteries to Nagaland's festivals, each state offers distinct experiences.
                    </p>
                    <p>
                        Blessed with stunning natural beauty – dense forests, mighty rivers, waterfalls, and the Eastern Himalayas – Northeast India is a hidden paradise for travelers seeking authentic culture and unspoiled nature.
                    </p>
                </div>
                 <div class="about-ne-images">
                     <div class="about-ne-img-item"><img src="images/neland.jpg" alt="NE Landscape" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/1.jpg" alt="NE Wildlife Rhino" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/2-3.jpg" alt="NE Culture Root Bridge" loading="lazy"></div>
                     <div class="about-ne-img-item"><img src="images/8-1.jpg" alt="NE Mountains Meghalaya" loading="lazy"></div>
                 </div>
             </div>
        </div>
    </section>

</main>

<?php
// Optional: Include a footer partial
// include 'footer.php';
?>

<!-- Link Scripts -->
<script src="js/destinations1.js"></script> <!-- NEW JS File for scroll buttons -->
<script src="js/navbar.js"></script>

</body>
</html>