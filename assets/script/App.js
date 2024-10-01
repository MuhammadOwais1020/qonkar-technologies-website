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
//**************sticky header*********************//
let lastScrollTop = 0;
const header = document.querySelector(".site-header");

window.addEventListener("scroll", function () {
  let currentScroll = window.scrollY || document.documentElement.scrollTop;

  if (currentScroll > lastScrollTop) {
    header.classList.remove("sticky");
  } else {
    header.classList.add("sticky");
  }

  lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // For Mobile or negative scrolling
});
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

// ****************faq/js************

const FAQt_a = document.getElementsByClassName("WI_pD_a_acc_heading");
for (let i = 0; i < FAQt_a.length; i++) {
  if (window.innerWidth > 1024) {
    FAQt_a[0].nextElementSibling.style.maxHeight = "1000px";
    FAQt_a[0].querySelector(".plus_a").classList.add("plus_a_rotate");
  }
  FAQt_a[i].addEventListener("click", function () {
    let accordionContent = this.nextElementSibling;
    let plisICON = this.querySelector(".plus_a");
    if (accordionContent.style.maxHeight) {
      accordionContent.style.maxHeight = null;
      plisICON.classList.remove("plus_a_rotate");
    } else {
      accordionContent.style.maxHeight = accordionContent.scrollHeight + "px";
      plisICON.classList.add("plus_a_rotate");
    }
  });
}
