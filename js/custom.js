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

// Course page other courses
var other_container = document.getElementById('other-courses-container');
var course_slider = document.getElementById('course-slider-list');
var course_slides = document.getElementsByClassName('course-slide').length;
var navigation = document.getElementsByClassName('btn');

var currentPosition = 0;
var currentMargin = 0;
var slidesPerPage = 0;
var slidesCount = course_slides - slidesPerPage;
var containerWidth = other_container.offsetWidth;
var prevKeyActive = false;
var nextKeyActive = true;

window.addEventListener("resize", checkWidth);

function checkWidth() {
  containerWidth = other_container.offsetWidth; 
  setParams(containerWidth);
}

function setParams(w) {
  if (w < 791) {
    slidesPerPage = 1;
  } else {
    if (w < 1199) {
      slidesPerPage = 2;
    } else {
      slidesPerPage = 3;
    }
  }
  slidesCount = course_slides - slidesPerPage;
  if (currentPosition > slidesCount) {
    currentPosition -= slidesPerPage;
  }
  currentMargin = - currentPosition * (100 / slidesPerPage);
  course_slider.style.marginLeft = currentMargin + '%';
  if (currentPosition > 0) {
    navigation[0].classList.add('inactive');
  }
  if (currentPosition < slidesCount) {
    navigation[1].classList.remove('inactive');
  }
  if (currentPosition >= slidesCount) {
    navigation[1].classList.add('inactive');
  }
}

setParams(containerWidth);
console.log(slidesPerPage);
console.log(currentPosition);

function slideRight() {
  if (currentPosition != 0) {
    course_slider.style.marginLeft = currentMargin + (100 / slidesPerPage) + '%';
    currentMargin += (100 / slidesPerPage);
    currentPosition--;
  }
  if (currentPosition === 0) {
    navigation[0].classList.add('inactive');
  }
  if (currentPosition < slidesCount) {
    navigation[1].classList.remove('inactive');
  }
}

function slideLeft() {
  if (currentPosition < slidesCount) {
    course_slider.style.marginLeft = currentMargin - (100 / slidesPerPage) + '%';
    currentMargin -= (100 / slidesPerPage);
    currentPosition++;
  }
  if (currentPosition == slidesCount) {
    navigation[1].classList.add('inactive');
  }
  if (currentPosition > 0) {
    navigation[0].classList.remove('inactive');
  }
}
