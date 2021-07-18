//fonction pour afficher les comptes apres appuie sur le bouton 
let btn = document.getElementById("myBtn");
let container = document.getElementById("ind");

btn.onclick = (() => {
  ind.style.display = "block";
  btn.style.display = "none";
})



$("#all ul li").hover(function() { // Mouse over
    $(this).siblings().stop().fadeTo(300, 0.6);
    $(this).parent().siblings().stop().fadeTo(300, 0.3); 
  }, function() { // Mouse out
    $(this).siblings().stop().fadeTo(300, 1);
    $(this).parent().siblings().stop().fadeTo(300, 1);
  });