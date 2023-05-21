$(document).ready(function() {
  // Selectors
  const domge = $(".domge");
  const chinaCharacter = $(".main-character");
  const btn = $("#btn-game");
  const point = $("#point");

  // Image URLs
  const pukul = "https://i.ibb.co/Mgfz4BH/pukul2.png";
  const belumPukul = "https://i.ibb.co/GFPLz3w/pukul1.png";

  const china = "https://i.ibb.co/GVZZdjQ/hit-china.png";
  const chinaHit = "https://i.ibb.co/rpZfz5k/hitjohn-china.png";
  const chinaBenjol = "https://i.ibb.co/8czJJ2J/benjol-china.png";
  const chinaBenjolHit = "https://i.ibb.co/djpX3jf/benjolhit-china.png";

  // Sound
  const openSound = new Audio("../audio/bonk.mp3");

  // Event Handlers (Desktops)
  btn.mousedown(openMouth);
  btn.mouseup(closeMouth);

  // Event Handlers (Touch Screens)
  btn.on("touchstart", function(e) {
    e.preventDefault();
    openMouth();
  });

  btn.on("touchend", function(e) {
    e.preventDefault();
    closeMouth();
  });

  // The functions which will perform the cool stuff
  let score = 0;

  function openMouth() {
    if (openSound.canPlay) {
      openSound.play();
    } else {
      openSound.load();
      openSound.play();
    }

    if (score >= 50) {
      chinaCharacter.attr('src', chinaBenjolHit)
    }else {
      chinaCharacter.attr("src", chinaHit)
    }

    domge.attr("src", pukul);
    
    score++;
    point.html(score)
    
  }

  function closeMouth() {
    if(score >= 50) {
      chinaCharacter.attr("src", chinaBenjol)
    }else {
      chinaCharacter.attr("src", china)
    }
    domge.attr("src", belumPukul);
  }
});


// const popcat = document.querySelector(".domge");
// const btn = document.getElementById("btn-game");
// const point = document.getElementById("point");
// // const text = document.getElementById("info-game");

// //img
// const closeImg = "https://i.redd.it/a2cfcg57ccf51.jpg";
// const openImg = "https://th.bing.com/th/id/OIP.hcni5QDNPPLrq70pI0Xc2QAAAA?pid=ImgDet&rs=1";

// //sound
// const openSound = new Audio("../audio/bonk.mp3");
// // const closeSound = new Audio("/audio/soundClose.mp3");
// // const sakanigadik = new Audio("/audio/sakanigadik.mp3");
// // const bakso = new Audio("/audio/bakso.mp3");
// //sakanigadik.play();
// //

// // Event Handlers (Desktops)
// btn.addEventListener("mousedown", openMouth);
// btn.addEventListener("mouseup", closeMouth);

// // Event Handers (Touch Screens)
// btn.addEventListener("touchstart", function (e) {
//   e.preventDefault();
//   openMouth();
// });

// btn.addEventListener("touchend", function (e) {
//   e.preventDefault();
//   closeMouth();
// });

// // The functions which will perform the cool stuff
// let score = 0;
// let nilais = 0;
// let nilaib = 0;
// function openMouth() {
//   openSound.play();
//   popcat.src = openImg;
//   score++ ;
//   point.innerHTML = score;

//   //shake animation
//   point.classList.toggle("move");


//   nilais++;
//   nilaib++;
//   // if (nilais == 10) {
//   //   sakanigadik.play();
//   //   nilais -= 1000;
//   //   text.innerHTML = "STOP :3";
//   // }
//   // if (nilaib == 100) {
//   //   bakso.play();
//   //   nilaib -= 100;
//   // }
// }

// function closeMouth() {
//   popcat.src = closeImg;
//   // closeSound.play();
// }
