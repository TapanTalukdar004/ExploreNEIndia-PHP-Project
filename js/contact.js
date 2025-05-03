document.addEventListener("DOMContentLoaded", () => {
  // ==================== Chatbot Functionality ====================
  const chatBtn = document.getElementById("chatBtn");
  const chatPopup = document.getElementById("chatPopup");
  const closeChat = document.getElementById("closeChat");
  const sendMessageBtn = document.getElementById("sendMessage");
  const userMessageInput = document.getElementById("userMessage");
  const chatMessages = document.getElementById("chatMessages");
  const chatCategoriesContainer = document.getElementById("chatCategories");
  // Function to add messages to the chat UI
  const addMessageToChat = (text, sender) => {
    if (!chatMessages) return;
    // Sanitize text before inserting - VERY Basic example
    const sanitizedText = text.replace(/</g, "<").replace(/>/g, ">");

    const messageDiv = document.createElement("div");
    messageDiv.className = `message ${sender}`; // 'user' or 'agent'
    // Use innerHTML carefully - ensure links are safe if added
    messageDiv.innerHTML = `<div class="message-content"><p>${sanitizedText}</p></div>`;

    chatMessages.appendChild(messageDiv);
    scrollToBottom();
  };

  // Function to scroll chat to bottom
  const scrollToBottom = () => {
    if (chatMessages) {
      chatMessages.scrollTop = chatMessages.scrollHeight;
    }
  };

  // Function to show typing indicator
  const showTypingIndicator = () => {
    if (!chatMessages) return;
    // Remove existing typing indicator first
    const existingIndicator = chatMessages.querySelector(".typing");
    if (existingIndicator) {
      chatMessages.removeChild(existingIndicator);
    }
    // Add new one
    const typingIndicator = document.createElement("div");
    typingIndicator.className = "message agent typing";
    typingIndicator.innerHTML =
      '<div class="typing-dots"><span></span><span></span><span></span></div>';
    chatMessages.appendChild(typingIndicator);
    scrollToBottom();
  };

  // Function to remove typing indicator
  const removeTypingIndicator = () => {
    if (!chatMessages) return;
    const typingIndicator = chatMessages.querySelector(".typing");
    if (typingIndicator) {
      chatMessages.removeChild(typingIndicator);
    }
  };

  // Function to handle sending a typed message
  const handleSendMessage = () => {
    if (!userMessageInput || !chatMessages) return;
    const messageText = userMessageInput.value.trim();

    if (messageText) {
      addMessageToChat(messageText, "user");
      userMessageInput.value = ""; // Clear input

      // Simulate Agent Response for typed message
      showTypingIndicator();
      setTimeout(() => {
        removeTypingIndicator();
        const genericResponses = [
          "Thanks! How can I help specifically regarding that?",
          "Okay, I see. Could you provide a few more details?",
          "Interesting! Let me see what information I have on that.",
          "Noted. What else would you like to know?",
        ];
        const randomResponse =
          genericResponses[Math.floor(Math.random() * genericResponses.length)];
        addMessageToChat(randomResponse, "agent");
      }, 1500 + Math.random() * 500);
    }
  };

  // ****** NEW: Function to handle category button clicks ******
  const handleCategoryClick = (category) => {
    if (!chatMessages) return;

    // Hide the category buttons after one is clicked (optional)
    // if (chatCategoriesContainer) chatCategoriesContainer.style.display = 'none';

    let responseText = "";
    let userMessageText = ""; // To show what user conceptually clicked

    switch (category) {
      case "trekking":
        userMessageText = "Tell me about Trekking & Adventure";
        responseText = `For trekking, Meghalaya (Root Bridges, David Scott Trail), Sikkim (Goechala, Dzongri), Nagaland (Dzukou Valley), and Arunachal (challenging routes) are fantastic! Check our <a href="packages.php?filter=trekking">Trekking Packages</a> or ask about specific trails.`;
        break;
      case "sightseeing":
        userMessageText = "Tell me about Culture & Sightseeing";
        responseText = `Great choice! For rich culture and sights, explore Assam's temples & Majuli, Tawang Monastery in Arunachal, Nagaland's tribal villages, Manipur's Loktak Lake & Ima Market, Tripura's palaces, or Sikkim's monasteries. See <a href="packages.php?filter=culture">Cultural Tours</a>.`;
        break;
      case "mountains":
        userMessageText = "Tell me about Mountains & Views";
        responseText = `You'll love Arunachal Pradesh and Sikkim for Himalayan views (Tawang, Sela Pass, Pelling, Gangtok). Nagaland and Mizoram offer stunning hill landscapes. Explore our <a href="packages.php?filter=mountains">Mountain View Packages</a>.`;
        break;
      case "waterfalls":
        userMessageText = "Tell me about Waterfalls & Lakes";
        responseText = `Meghalaya is the king of waterfalls (Nohkalikai, Seven Sisters)! Don't miss Loktak Lake (Manipur) or Tsomgo Lake (Sikkim). Assam also has lakes near Guwahati. See our <a href="packages.php?filter=nature">Nature Packages</a>!`;
        break;
      case "wildlife":
        userMessageText = "Tell me about Wildlife & Nature";
        responseText = `Kaziranga (Assam) is world-famous for rhinos! Manas (Assam) and Namdapha (Arunachal) are great too. Keibul Lamjao (Manipur) has the Sangai deer. Check <a href="packages.php?filter=wildlife">Wildlife Tours</a>.`;
        break;
      case "packages":
        userMessageText = "Show me the packages";
        // Redirect or provide link
        window.location.href = "packages.php"; // Redirect directly
        // Or provide a link:
        // responseText = `Sure! You can browse all our curated experiences on the <a href="packages.php">Packages Page</a>.`;
        break;
      default:
        userMessageText = "Clicked an unknown category";
        responseText =
          "Sorry, I don't have specific information for that category right now. Please type your question.";
    }

    // Add user's implicit message (what they clicked)
    addMessageToChat(userMessageText, "user");

    // Simulate agent response
    showTypingIndicator();
    setTimeout(() => {
      removeTypingIndicator();
      addMessageToChat(responseText, "agent");
    }, 800 + Math.random() * 400); // Shorter delay for category response
  };

  // Event listeners for chat open/close/send
  if (chatBtn && chatPopup) {
    chatBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      chatPopup.classList.toggle("active");
      if (chatPopup.classList.contains("active")) {
        // Show categories again when opened (optional)
        if (chatCategoriesContainer)
          chatCategoriesContainer.style.display = "flex";
        scrollToBottom(); // Scroll down in case content was long
        if (userMessageInput) setTimeout(() => userMessageInput.focus(), 300);
      }
    });
  }
  if (closeChat && chatPopup) {
    closeChat.addEventListener("click", () =>
      chatPopup.classList.remove("active")
    );
  }
  if (sendMessageBtn && userMessageInput) {
    sendMessageBtn.addEventListener("click", handleSendMessage);
    userMessageInput.addEventListener("keypress", (e) => {
      if (e.key === "Enter" && !e.shiftKey) {
        // Send on Enter, allow Shift+Enter for newline
        e.preventDefault(); // Prevent default Enter behavior (like newline in textarea)
        handleSendMessage();
      }
    });
  }
  // Close chat popup if clicked outside
  document.addEventListener("click", (e) => {
    if (chatPopup && chatPopup.classList.contains("active")) {
      if (
        !chatPopup.contains(e.target) &&
        e.target !== chatBtn &&
        !chatBtn.contains(e.target)
      ) {
        chatPopup.classList.remove("active");
      }
    }
  });

  // ****** NEW: Add Event Listener for Category Buttons ******
  if (chatCategoriesContainer) {
    // Use event delegation on the container
    chatCategoriesContainer.addEventListener("click", (event) => {
      if (event.target.classList.contains("category-btn")) {
        const category = event.target.getAttribute("data-category");
        if (category) {
          handleCategoryClick(category);
        }
      }
    });
  }
  
  

 
 

  // ==================== Contact Form Submission (Basic Alert) ====================
  const contactForm = document.getElementById("contactForm");
  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      e.preventDefault(); // Prevent actual form submission for this example

      const nameInput = this.querySelector('input[name="contact_name"]');
      const emailInput = this.querySelector('input[name="contact_email"]');
      const messageInput = this.querySelector(
        'textarea[name="contact_message"]'
      );

      // Basic validation
      if (
        !nameInput?.value.trim() ||
        !emailInput?.value.trim() ||
        !messageInput?.value.trim()
      ) {
        alert("Please fill in all fields.");
        return;
      }
      if (!/^\S+@\S+\.\S+$/.test(emailInput.value.trim())) {
        // Simple email check
        alert("Please enter a valid email address.");
        return;
      }

      // --- Replace with actual AJAX/Fetch submission to process_contact.php ---
      console.log("Form submitted (simulated):");
      console.log("Name:", nameInput.value);
      console.log("Email:", emailInput.value);
      console.log("Message:", messageInput.value);

      alert(
        `Thank you, ${nameInput.value}! Your message has been sent (simulated).\nWe'll contact you at ${emailInput.value} soon.`
      );
      this.reset(); // Clear the form
      // --- End Simulation ---
    });
  }

  // ==================== Google Map Initialization (Placeholder) ====================
  // The iframe handles the basic map. This is only needed if using the JS API.
  // window.initMap = () => {
  //     // Example: Create a map instance if needed
  //     // const mapElement = document.getElementById('map'); // Assuming you have a div with id="map" if not using iframe
  //     // if (mapElement) {
  //     //     const map = new google.maps.Map(mapElement, {
  //     //         center: { lat: 26.124, lng: 91.593 }, // Coordinates for Azara
  //     //         zoom: 14,
  //     //     });
  //     //     new google.maps.Marker({
  //     //         position: { lat: 26.124, lng: 91.593 },
  //     //         map: map,
  //     //         title: "Azara, Guwahati",
  //     //     });
  //     // }
  //     console.log("Google Maps Initialized (placeholder - iframe used)");
  // }
  // --- If using the JS API, make sure the script tag with your key and callback=initMap is included ---

  // --- Initialize Destination Card JS (if not already in destinations.js) ---
  // Make sure the code from destinations.js is also running, either by including
  // that script file OR by copying its DOMContentLoaded content here.
  // Example Placeholder - ensure your destinations.js logic is active.
  console.log("Destination card JS should be active.");
}); // End DOMContentLoaded
