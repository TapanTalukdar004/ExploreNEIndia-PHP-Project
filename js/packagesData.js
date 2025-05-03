// js/packagesData.js

// Make this data available globally for package-details.js to access
// In a real app, you'd use modules or fetch this
const packagesData = [
  {
    id: "meghalaya-adventure",
    title: "Meghalaya Adventure Explorer",
    state: "Meghalaya",
    duration: "6 Days / 5 Nights",
    numericDuration: 6,
    price: 24999,
    image:
      "https://images.unsplash.com/photo-1609185669394-86bdaf568a31?q=80&w=1887",
    rating: 4.8,
    destinations: ["Shillong", "Cherrapunji", "Dawki", "Mawlynnong"],
    description:
      "Explore the magical land of clouds with our comprehensive Meghalaya package. Trek to living root bridges, swim in crystal clear rivers, and experience the local Khasi culture amidst stunning waterfalls and caves.",
    included: [
      "Accommodation in 3-star hotels/homestays",
      "All transfers (Guwahati-Shillong-Cherrapunji etc.)",
      "Daily breakfast and dinner",
      "English-speaking local guide for treks/sightseeing",
      "Entry fees to parks, caves, waterfalls",
      "Boating charges in Dawki",
      "All necessary permits",
    ],
    exclusions: [
      "Flights/trains to/from Guwahati",
      "Lunches",
      "Personal expenses (shopping, tips)",
      "Optional activities (e.g., zip-lining)",
      "Travel insurance",
    ],
    itinerary: [
      {
        day: 1,
        activities: [
          "Arrive Guwahati, transfer to Shillong (Approx 3-4 hrs)",
          "Check-in, explore Police Bazaar",
        ],
      },
      {
        day: 2,
        activities: [
          "Shillong Sightseeing: Ward's Lake, Elephant Falls, Shillong Peak",
          "Don Bosco Museum",
        ],
      },
      {
        day: 3,
        activities: [
          "Drive to Cherrapunji (Approx 2 hrs)",
          "Visit Nohkalikai Falls, Seven Sisters Falls, Mawsmai Cave",
        ],
      },
      {
        day: 4,
        activities: [
          "Trek to Double Decker Living Root Bridge (Approx 3-5 hrs trek)",
          "Explore Nongriat village",
        ],
      },
      {
        day: 5,
        activities: [
          "Drive to Dawki (Approx 3 hrs)",
          "Boat ride on Umngot River",
          "Visit Mawlynnong (Asia's Cleanest Village)",
        ],
      },
      {
        day: 6,
        activities: [
          "Drive back to Guwahati (Approx 5-6 hrs)",
          "Drop at airport/station for departure",
        ],
      },
    ],
    highlights: [
      "Witness majestic waterfalls in Cherrapunji",
      "Trek to the unique Living Root Bridges",
      "Boat on the crystal-clear Umngot River",
      "Explore Asia's cleanest village, Mawlynnong",
      "Experience Shillong's vibrant culture",
    ],
    accommodation: [
      // Example specific accommodation
      {
        name: "Hotel Polo Towers",
        type: "3-Star",
        image:
          "https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=800",
        description: "Comfortable stay in Shillong city center.",
      },
      {
        name: "Cherrapunjee Holiday Resort",
        type: "Resort",
        image:
          "https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?q=80&w=800",
        description: "Scenic resort near major attractions.",
      },
      {
        name: "Local Homestay",
        type: "Homestay",
        image:
          "https://images.unsplash.com/photo-1580587771525-78b9dba3b914?q=80&w=800",
        description: "Authentic experience in Nongriat/Mawlynnong.",
      },
    ],
  },
  {
    id: "assam-wildlife",
    title: "Assam Wildlife & Culture", // Renamed slightly
    state: "Assam",
    duration: "5 Days / 4 Nights",
    numericDuration: 5,
    price: 22999,
    image:
      "https://images.unsplash.com/photo-1574608534511-0436dbae6c5f?q=80&w=1738",
    rating: 4.7,
    destinations: ["Kaziranga National Park", "Majuli Island", "Guwahati"],
    description:
      "Experience Assam's rich wildlife at Kaziranga, home to the one-horned rhino, and delve into the unique Vaishnavite culture of Majuli, the world's largest river island.",
    included: [
      "Accommodation (Wildlife Resorts/Hotels)",
      "All transfers and ferry crossings",
      "Daily breakfast, lunch, and dinner",
      "1 Jeep Safari & 1 Elephant Safari in Kaziranga",
      "English-speaking naturalist guide in Kaziranga",
      "Entry fees & permits",
    ],
    exclusions: ["Flights/trains", "Camera fees", "Personal expenses"],
    itinerary: [
      {
        day: 1,
        activities: [
          "Arrive Guwahati, transfer to Kaziranga (Approx 4-5 hrs)",
          "Check-in, evening cultural show (optional)",
        ],
      },
      {
        day: 2,
        activities: [
          "Morning Elephant Safari (Central Range)",
          "Afternoon Jeep Safari (Western/Eastern Range)",
          "Visit Orchid Park",
        ],
      },
      {
        day: 3,
        activities: [
          "Drive to Nimati Ghat (Approx 2-3 hrs), Ferry to Majuli Island (Approx 1.5 hrs)",
          "Visit Satras (monasteries), interact with monks",
          "Mask-making village visit",
        ],
      },
      {
        day: 4,
        activities: [
          "Ferry back from Majuli, drive to Guwahati (Approx 5-6 hrs)",
          "Visit Kamakhya Temple (exterior view if time permits)",
          "Optional Brahmaputra sunset cruise",
        ],
      },
      {
        day: 5,
        activities: ["Transfer to Guwahati airport/station for departure"],
      },
    ],
    highlights: [
      "Spot one-horned rhinos in Kaziranga",
      "Explore unique river island culture in Majuli",
      "Visit ancient Vaishnavite Satras",
      "Experience thrilling jungle safaris",
    ],
    // Add accommodation details if available for this package
  },
  {
    id: "sikkim-adventure",
    title: "Sikkim Himalayan Explorer",
    state: "Sikkim",
    duration: "7 Days / 6 Nights",
    numericDuration: 7,
    price: 29999,
    image:
      "https://images.unsplash.com/photo-1578968537135-af7d7fdfdf3c?q=80&w=1738",
    rating: 4.9,
    destinations: [
      "Gangtok",
      "Nathula Pass",
      "Tsomgo Lake",
      "Lachung",
      "Yumthang Valley",
    ], // Added Lachung
    description:
      "Experience breathtaking Eastern Himalayas views. Visit monasteries, high-altitude lakes like Tsomgo, the Indo-China border at Nathula, and the 'Valley of Flowers' at Yumthang.",
    included: [
      "Accommodation (3-star equivalent hotels)",
      "All transfers (Bagdogra/NJP - Gangtok - North Sikkim)",
      "Daily breakfast and dinner (All meals in North Sikkim)",
      "English-speaking driver/guide",
      "All permits including Nathula & North Sikkim",
      "Entry fees for standard sightseeing",
    ],
    exclusions: [
      "Flights/trains",
      "Lunches (except in N.Sikkim)",
      "Personal expenses",
      "Yak rides/Cable car fees",
    ],
    itinerary: [
      {
        day: 1,
        activities: [
          "Arrive Bagdogra/NJP, transfer to Gangtok (Approx 4-5 hrs)",
          "Check-in, relax or stroll MG Marg",
        ],
      },
      {
        day: 2,
        activities: [
          "Gangtok Sightseeing: Rumtek Monastery (or Enchey), Flower Show, Hanuman Tok, Tashi Viewpoint",
        ],
      },
      {
        day: 3,
        activities: [
          "Excursion to Tsomgo Lake & Baba Mandir",
          "(Optional: Nathula Pass - subject to permit/road conditions)",
        ],
      },
      {
        day: 4,
        activities: [
          "Drive to Lachung, North Sikkim (Approx 5-6 hrs, scenic route)",
          "Stop at waterfalls en route",
        ],
      },
      {
        day: 5,
        activities: [
          "Excursion to Yumthang Valley ('Valley of Flowers')",
          "Optional visit to Yumesamdong (Zero Point - extra cost, subject to permit)",
        ],
      },
      {
        day: 6,
        activities: ["Drive back to Gangtok from Lachung (Approx 5-6 hrs)"],
      },
      {
        day: 7,
        activities: ["Transfer to Bagdogra/NJP for departure (Approx 4-5 hrs)"],
      },
    ],
    highlights: [
      "Panoramic views of Kanchenjunga range",
      "Visit serene Tsomgo Lake & Baba Mandir",
      "Explore the vibrant capital Gangtok",
      "Witness the beauty of Yumthang Valley",
      "(Optional) Experience the high altitude Nathula Pass",
    ],
    accommodation: [
      // Example specific accommodation for Sikkim
      {
        name: "Summit Denzong Hotel",
        type: "3-Star",
        image:
          "https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?q=80&w=800",
        description: "Central location in Gangtok with good amenities.",
      },
      {
        name: "Yarlam Resort",
        type: "Resort",
        image:
          "https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?q=80&w=800",
        description: "Comfortable stay in Lachung, North Sikkim.",
      },
    ],
  },
  {
    id: "arunachal-discovery",
    title: "Arunachal Cultural Discovery",
    state: "Arunachal Pradesh",
    duration: "8 Days / 7 Nights",
    numericDuration: 8,
    price: 34999,
    image:
      "https://images.unsplash.com/photo-1595953488545-f99bd0659d70?q=80&w=1740",
    rating: 4.6,
    destinations: ["Tawang", "Bomdila", "Dirang", "Ziro Valley"], // Added Dirang
    description:
      "Discover Arunachal's monasteries, tribal villages (Apatani), and stunning mountain landscapes. Includes Sela Pass and exploration of Tawang & Ziro.",
    included: [
      "Accommodation (Hotels/Guest Houses)",
      "All transfers (Guwahati start/end)",
      "Daily breakfast and dinner",
      "English-speaking driver/guide",
      "Inner Line Permit (ILP)",
      "Entry fees for standard sightseeing",
    ],
    exclusions: [
      "Flights/trains",
      "Lunches",
      "Personal expenses",
      "Guides in specific locations",
    ],
    itinerary: [
      {
        day: 1,
        activities: [
          "Arrive Guwahati, drive to Dirang (Approx 7-8 hrs)",
          "Check-in",
        ],
      },
      {
        day: 2,
        activities: [
          "Visit Dirang Monastery, Hot Springs",
          "Drive to Tawang via Sela Pass & Jaswant Garh War Memorial (Approx 5-6 hrs)",
        ],
      },
      {
        day: 3,
        activities: [
          "Tawang Sightseeing: Tawang Monastery (morning prayers), Urgelling Gompa (6th Dalai Lama's birthplace)",
          "Craft Centre, local market",
        ],
      },
      {
        day: 4,
        activities: [
          "Excursion towards Bum La Pass (Subject to permit/conditions): PTSO Lake, Madhuri Lake",
        ],
      },
      {
        day: 5,
        activities: [
          "Drive Tawang to Bomdila (Approx 6-7 hrs)",
          "Visit Bomdila Monastery",
        ],
      },
      { day: 6, activities: ["Drive Bomdila to Ziro (Approx 7-8 hrs)"] },
      {
        day: 7,
        activities: [
          "Ziro Valley: Explore Apatani villages (Hong, Hari, Bulla)",
          "Paddy-cum-fish cultivation fields, local market",
        ],
      },
      {
        day: 8,
        activities: [
          "Drive Ziro to Guwahati (Approx 8-9 hrs)",
          "Drop at airport/station for departure",
        ],
      },
    ],
    highlights: [
      "Visit the iconic Tawang Monastery",
      "Cross the breathtaking Sela Pass",
      "Explore unique Apatani villages in Ziro",
      "Witness stunning Himalayan landscapes",
      "Experience diverse tribal cultures",
    ],
  },
  // Add more package objects here, following the same structure
];
