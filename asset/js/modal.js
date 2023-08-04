// Récupération de l'élément modal et du bouton
var modal = document.getElementById("myModal");
var btn = document.getElementById("openModalBtn");

// Récupération de l'élément de fermeture de la modal
var span = document.getElementsByClassName("close")[0];

// Ouvrir la modal lorsque le bouton est cliqué
btn.onclick = function() {
  modal.style.display = "block";
}

// Fermer la modal lorsque l'utilisateur clique sur la croix
span.onclick = function() {
  modal.style.display = "none";
}

// Fermer la modal lorsque l'utilisateur clique en dehors de la modal
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
