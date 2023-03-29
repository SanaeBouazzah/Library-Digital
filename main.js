// sticky header with scrolll ***********************************************************************************************************************
window.addEventListener("scroll", function () {
  var navbar = document.querySelector(".navbar");
  navbar.classList.toggle("sticky", window.scrollY > 0);
});
// reponsive bar************************************************************************************************************************************
var menu = document.querySelector("nav");
var openbtn = document.querySelector(".toggle-open");
var closebtn = document.querySelector(".toggle-close");

openbtn.onclick = () => {
  menu.classList.add("active");
};
closebtn.onclick = () => {
  menu.classList.remove("active");
};