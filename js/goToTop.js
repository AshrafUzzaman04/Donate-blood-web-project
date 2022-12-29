const goToTop = document.querySelector(".goToTop");

window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    goToTop.classList.add("active");
  } else {
    goToTop.classList.remove("active");
  }
});
