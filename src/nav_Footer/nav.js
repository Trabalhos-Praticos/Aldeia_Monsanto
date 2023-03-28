var hamburger = document.querySelector(".hamburger");
var nav = document.querySelector("nav");
hamburger.onclick = function () {
    nav.classList.toggle("active");
}