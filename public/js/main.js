var myCanvas = new Canvas();
//procédural à mettre en POO. Sélection d'une pièce, surbrilance et dépalcement 
var piece = document.querySelector('img');
var selected = false;
console.log(selected);
piece.onclick = function() {
  if (selected == true) {
    piece.style.rotate = null;
    console.log('Pièce posée');
    selected = false;
  } else {
    piece.style.rotate = "45deg";
    selected = true;
    console.log('Pièce sélectionnée!');
    console.log(selected);
  }
};