// sticky header with scrolll ***********************************************************************************************************************
window.addEventListener("scroll", function () {
  var navbar = document.querySelector(".Libraray-Digital-navbar");
  navbar.classList.toggle("sticky", window.scrollY > 0);
});
// reponsive bar************************************************************************************************************************************
var menu = document.querySelector("nav");
var openbtn = document.querySelector(".Library-Digital_toggle-open");
var closebtn = document.querySelector(".Library-Digital_toggle-close");

openbtn.onclick = () => {
  menu.classList.add("active");
};
closebtn.onclick = () => {
  menu.classList.remove("active");
};