/* Main navigation (show/hide links)*/
// Mobile
function openNavi() {
  document.getElementById("aeroNav").style.width = "100%";
}
// Tablet
function openNaviTablet() {
  document.getElementById("aeroNav").style.width = "50%";
}
// PC
function openNaviDesk() {
  document.getElementById("aeroNav").style.width = "25%";
}
// Close navigation
function closeNav() {
  document.getElementById("aeroNav").style.width = "0%";
}

// Function to toggle the popup
function togglePopup() {
  var popup = document.getElementById("contactForm");
  if (popup.style.display === "block") {
    popup.style.display = "none"; // Hide the popup if it's already open
  } else {
    popup.style.display = "block"; // Show the popup if it's closed
  }
}

// Function to close the popup
function closePopup() {
  document.getElementById("contactForm").style.display = "none";
}