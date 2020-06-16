<?php
  // Initialiser la session
  session_start(); //crée une session ou restaure celle trouvée sur le serveur, via l'identifiant de session passé dans une requête GET, POST
  
  // Détruire la session.
  if(session_destroy()) //détruit toutes les données associées à la session courante.
  {
    // Redirection vers la page de connexion
    header("Location: ../index.php");
  }
?>