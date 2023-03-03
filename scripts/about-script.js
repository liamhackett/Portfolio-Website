// const cards = document.querySelectorAll('.card');

// cards.forEach((card) => {
//   card.addEventListener('touchend', function() {
//     this.classList.toggle('tapped');
//   }, false);
// });

var card = document.querySelectorAll('.card')[0];
function click(){
    card.classList.toggle('tapped');
}
card.addEventListener("click", click);


