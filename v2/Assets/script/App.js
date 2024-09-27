window.addEventListener("scroll", function () {
  const scrollTop = window.scrollY;
  const docHeight = document.documentElement.scrollHeight - window.innerHeight;
  const scrollPercent = scrollTop / docHeight;
  const progressBar = document.querySelector(".progress-bar");
  progressBar.style.transform = `scaleX(${scrollPercent})`;
});

// ***************** PROGRESS BAR ***************
// Select the cursor element
const cursor = document.querySelector(".cursor");

// Update cursor position
function updateCursorPosition(e) {
  const mouseX = e.clientX;
  const mouseY = e.clientY;

  // Apply the transform immediately
  cursor.style.transform = `
        translate3d(calc(${mouseX}px - 50vw), calc(${mouseY}px - 50vh), 0px)
        scale3d(1, 1, 1)
        rotateX(0deg) rotateY(0deg) rotateZ(0deg)
        skew(0deg, 0deg)
    `;
}

// Update cursor position on mouse move
document.addEventListener("mousemove", updateCursorPosition);

// Add the will-change and transform-style properties
cursor.style.willChange = "transform";
cursor.style.transformStyle = "preserve-3d";

// *****************Navbar***************
function zk_humburger_menu() {
  document.querySelector(".header-navbar").classList.add("open");
}
const burgerCheckbox = document.querySelector("#burger");
document
  .querySelector(".zk-close-menu-bar")
  .addEventListener("click", function () {
    document.querySelector(".header-navbar").classList.remove("open");
    burgerCheckbox.checked = false;
  });

document.querySelectorAll(".zk-menu-one:has(ul) > a").forEach((menuLink) => {
  menuLink.addEventListener("click", function (event) {
    event.preventDefault();
    const menuItem = this.parentElement;
    menuItem.classList.toggle("active");

    const megaMenu = document.querySelector(".zk-mega-menu");
    megaMenu.classList.toggle("active");
    document.querySelectorAll(".zk-menu-one").forEach((item) => {
      if (item !== menuItem) {
        item.classList.remove("active");
      }
    });
  });
});

document.querySelectorAll(".zk-back-cta").forEach((backButton) => {
  backButton.addEventListener("click", function () {
    const megaMenu = document.querySelector(".zk-mega-menu");
    megaMenu.classList.remove("active");

    document.querySelectorAll(".zk-menu-one").forEach((item) => {
      item.classList.remove("active");
    });
  });
});
