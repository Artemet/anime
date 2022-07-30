/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/models.js ***!
  \********************************/
//model: get_in(open)
var in_container_element = document.querySelector(".get_in_container");
var get_vk_button = document.querySelector(".get_in_button button.get_in");
var rong_anser_element = document.querySelector(".rong_anser_container");

window.open_modal_getin = function () {
  in_container_element.style.display = "grid";
}; //model: get_in(close)


window.close_modal_getin = function () {
  in_container_element.style.display = "none";
}; //model: rong_information(open)


if (get_vk_button.style.color = "#b0c0b2") {
  window.rong_anser = function () {
    rong_anser_element.style.display = "grid";
  };
}
/******/ })()
;