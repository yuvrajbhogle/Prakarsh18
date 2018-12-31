

const left = document.querySelector(".left");
const right = document.querySelector(".right");
const container = document.querySelector(".containe");

left.addEventListener("mouseenter", () => {
  container.classList.add("hover-left");
});

left.addEventListener("mouseleave", () => {
  container.classList.remove("hover-left");
});

right.addEventListener("mouseenter", () => {
  container.classList.add("hover-right");
});

right.addEventListener("mouseleave", () => {
  container.classList.remove("hover-right");
});



// $(document).ready(function(){
//
//   $(window).load(function(){
//     alert('hi');
//       //$('body,html').animate({
//       //   scrollTop: $('.containe').offset().top;
//       // },1000);
//   });
//
// });
