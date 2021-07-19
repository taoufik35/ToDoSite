//fonction pour afficher les comptes apres appuie sur le bouton 
let btn = document.getElementById("myBtn");
let container = document.getElementById("ind");

btn.onclick = (() => {
  ind.style.display = "block";
  btn.style.display = "none";
})



// /----------------------modal instruction--------------------------------/





let consigne = "Lorem ipsum dolorsit amet consectetur adipisicing elit. Sunt accusantium tempora, iste ad ea reiciendis deleniti enim neque,excepturi tempore molestiae consectetur cupiditate impedit et in alias aliquid illum quidem! Perferendis doloribus beatae optio eos obcaecati omnis quidem delectus molestiae autem quibusdam magnam ab sunt fugit, tempora soluta alias veniam dicta explicabo cupiditate consequuntur! Suscipit porro,iusto esse unde ullam modi et magnam in officia voluptates quasi illo excepturi ea,aliquid dolorum facere fuga ipsa ipsam quaerat culpa eos. Laborum ullam maxime doloribus"

function securmess() {
  alert(consigne);
}