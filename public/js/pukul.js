const popcat = document.querySelector(".kana");
const btn = document.querySelector(".btn-game");
const point = document.getElementById("point");
const text = document.getElementById("info-game");

//img
const closeImg = "https://i.ibb.co/zr547QB/New-Project-39-059-A32-A.png";
const openImg = "https://i.ibb.co/7r7wnLd/New-Project-39-29-D7-CAA.png";

//sound
// const openSound = new Audio("/audio/soundOpen.mp3");
// const closeSound = new Audio("/audio/soundClose.mp3");
// const sakanigadik = new Audio("/audio/sakanigadik.mp3");
// const bakso = new Audio("/audio/bakso.mp3");
//sakanigadik.play();
//

// Event Handlers (Desktops)
btn.addEventListener("mousedown", openMouth);
btn.addEventListener("mouseup", closeMouth);

// Event Handers (Touch Screens)
btn.addEventListener("touchstart", function (e) {
  e.preventDefault();
  openMouth();
});

btn.addEventListener("touchend", function (e) {
  e.preventDefault();
  closeMouth();
});

// The functions which will perform the cool stuff
let score = 0;
let nilais = 0;
let nilaib = 0;
function openMouth() {
  popcat.src = openImg;
  // openSound.play();
  score++;
  point.innerHTML = score;

  //shake animation
  point.classList.toggle("move");

  //sakanigedik play jika score berkelipatan 100

  nilais++;
  nilaib++;
  // if (nilais == 10) {
  //   sakanigadik.play();
  //   nilais -= 1000;
  //   text.innerHTML = "STOP :3";
  // }
  // if (nilaib == 100) {
  //   bakso.play();
  //   nilaib -= 100;
  // }
}

function closeMouth() {
  popcat.src = closeImg;
  // closeSound.play();
}