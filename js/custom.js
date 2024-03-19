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
  var elements = document.querySelectorAll(".content");
  for (var i = 0; i < elements.length; i++) {
    if (elements[i].id === id) {
      elements[i].style.display = "block";
    } else {
      elements[i].style.display = "none";
    }
  }
}
// Changing classes or adding classes to Comments
(function ($) {
  $("#comments #reply-title").addClass("reply-header");
  $(".comment-author").addClass("side-by-side");
  $(".comment-author > cite").addClass("who-says");
  $(".comment-author > img").addClass("rounded-avatar");
  $(".comment-meta").addClass("comment-date");
  $(".reply > a").addClass("post-comment");
  $(".comment-list > li").addClass("li-style");
  $(
    "#commentform #comment, #commentform #author, #commentform #email, #commentform #url"
  ).addClass("comment-full");
  $("#commentform #author, #commentform #email, #commentform #url").addClass(
    "comment-height"
  );
  $(".author-image > img").addClass("rounded-avatar");
})(jQuery);

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

function toggleContent(contentId) {
  var elements = document.getElementsByClassName("content");
  for (var i = 0; i < elements.length; i++) {
    elements[i].style.display = "none";
  }
  document.getElementById(contentId).style.display = "block";
}

// Show the first content by default
window.onload = function () {
  var firstContent = document.querySelector(".content");
  if (firstContent) {
    firstContent.style.display = "block";
  }
};
