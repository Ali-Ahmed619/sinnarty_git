document.addEventListener("DOMContentLoaded", function () {
  const hamburgerBtn = document.getElementById("hamburgerBtn");
  const mobileMenu = document.getElementById("mobileMenu");

  setActiveNavLink();

  hamburgerBtn.addEventListener("click", function () {
    const isOpen = mobileMenu.classList.toggle("show");
    hamburgerBtn.classList.toggle("open", isOpen);
    hamburgerBtn.setAttribute("aria-expanded", isOpen);
  });

  // Close mobile menu automatically if screen resizes back to desktop
  window.addEventListener("resize", function () {
    if (window.innerWidth > 640 && mobileMenu.classList.contains("show")) {
      mobileMenu.classList.remove("show");
      hamburgerBtn.classList.remove("open");
      hamburgerBtn.setAttribute("aria-expanded", "false");
    }
  });

  // Close menu after clicking a link (mobile UX)   
  document.querySelectorAll(".mobile-menu .nav-link").forEach(function (link) {
    link.addEventListener("click", function () {
      mobileMenu.classList.remove("show");
      hamburgerBtn.classList.remove("open");
      hamburgerBtn.setAttribute("aria-expanded", "false");
    });
  });
});

function setActiveNavLink() {

  let currentPage = window.location.pathname.split("/").pop();
  if (currentPage === "" || currentPage === "index.php") {
    currentPage = "home.php";
  }

  const allLinks = document.querySelectorAll(".navbar-links .nav-link, .mobile-menu .nav-link");

  allLinks.forEach(function (link) {

    link.classList.remove("active");

    const linkPage = link.getAttribute("href").split("/").pop();

    if (linkPage === currentPage) {
      link.classList.add("active");
    }
  });
}