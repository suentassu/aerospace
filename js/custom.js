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

/* Course page content viewer */
function toggleContent(id) {
  var elements = document.querySelectorAll('.content'); 
  for (var i = 0; i < elements.length; i++) {
    if (elements[i].id === id) {
      elements[i].style.display = 'block';
    } else {
      elements[i].style.display = 'none';
    }
  }
}
