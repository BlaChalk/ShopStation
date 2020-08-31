"use strict";

(function setblack() {
  console.log($window.scrollY);

  if ($window.scrollY < 30) {
    $('#header').css("background-color", "#333");
  }
});