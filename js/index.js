/*javascript para el efecto de scroll en la barra de navegación*/
window.addEventListener("scroll", function () {
  var logo = document.querySelector(".header-principal");
  logo.classList.toggle("logo-pequeño", window.scrollY > 0);
});
AOS.init();

