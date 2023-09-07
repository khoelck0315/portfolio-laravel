// Globals for primitive state tracking
var languages = document.querySelectorAll(".language");
var currLanguage = languages[0];


export default function ScrollHandler() {
  
    let position = getScrollPos.call(currLanguage);
    let windowTop = getWindowHeight();

    if(position < windowTop && position > 0) {
      // do stuff to move and color the shadow
      let percentage = getPercentage(position)

      // Calculate the Y offset
      let yOffset = getyOffset(percentage);
      let color = getColor(currLanguage.id);

      // Set a CSS variable from this calculation:
      document.body.style.setProperty("--shadow-y-offset", yOffset);
      document.body.style.setProperty("--effect-color", color);
    }
    else if (position < 0 && currLanguage.nextElementSibling !== null) {
      currLanguage = currLanguage.nextElementSibling;
    }
    else if (position > windowTop && currLanguage.previousElementSibling !== null) {
      currLanguage = currLanguage.previousElementSibling;
    }
}

//Functions to calculate bounds for enter and exit animations/transitions based on viewport height
function getColor(elementId) {
  let root = document.querySelector(':root');
  let cs = getComputedStyle(root);
  return cs.getPropertyValue(`--${elementId}-color`);
}
function getyOffset(p) {
  let value = -Math.abs(Math.floor(p / 10))
  return `${value}px`;
}
function getScrollPos() {
  return this.offsetTop - window.scrollY;
}
function getWindowHeight() {
  return Math.abs(window.innerHeight);
}
function getPercentage(p) {
  let currentPosition = p / window.innerHeight;
  return Math.floor(currentPosition * 100);
}
