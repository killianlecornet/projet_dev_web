<?php
// Informations d'identification
define('SERVER', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DB_NAME', 'projet_web');
 
// Connexion à la base de données MySQL 
$db = mysqli_connect(SERVER, USERNAME, PASSWORD, DB_NAME);
 
// Vérifie si la connexion marche.
if($db === false){
    die("Impossible de se connecter. " . mysqli_connect_error()); //Affiche un message d'erreur + Retourne le message d'erreur de connexion MySQL
}
?>