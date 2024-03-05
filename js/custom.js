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
