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
