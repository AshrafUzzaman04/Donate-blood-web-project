const goToTop = document.querySelector(".goToTop");

window.addEventListener("scroll", () => {
  if (window.scrollY > 250) {
    goToTop.classList.add("active");
  } else {
    goToTop.classList.remove("active");
  }
});
