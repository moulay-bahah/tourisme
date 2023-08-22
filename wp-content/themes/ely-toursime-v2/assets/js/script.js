let nav = document.getElementById("nav");
let navBotton = document.getElementById("navBotton");
let container = document.getElementById("wp-container")
let titel = document.getElementById("titel")



let curentPage = location.href;
let homePage = "http://localhost/tourisme/";

if (curentPage == homePage) {
  container.classList.remove("wp-container");
  titel.remove();
}


navBotton.addEventListener("click", function () {
  if (nav.style.display.length == 0) {
    nav.style.display = "none";
  }
  if (nav.style.display === "none") {
    nav.style.display = "flex";
  } else {
    nav.style.display = "none";
  }
  
});
