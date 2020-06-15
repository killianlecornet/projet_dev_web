<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('config.php'); // se connecte a config.php
// Détermine si une variable est déclarée et est différente de NULL 
if (isset($_POST['username'], $_POST['firstname'], $_POST['surname'], $_POST['email'], $_POST['password'])){
  // récupérer le nom d'utilisateur 
  $username = ($_POST['username']); 
  $username = mysqli_real_escape_string($db, $username);  // récupérer l'ID 
  $firstname = ($_POST['firstname']);  // récupérer le Prénom 
  $firstname = mysqli_real_escape_string($db, $firstname);
  $surname = ($_POST['surname']);  // récupérer le Nom 
  $surname = mysqli_real_escape_string($db, $surname);
  $email = ($_POST['email']); // récupérer l'email 
  $email = mysqli_real_escape_string($db, $email);
  $password = ($_POST['password']);  // récupérer le Mot de passe 
  $password = mysqli_real_escape_string($db, $password);

    $query = "INSERT into `users` (username, firstname, surname, email, password) 
              VALUES ('$username', '$firstname', '$surname', '$email','".hash('sha256', $password)."')";  //mot de passe crypté / Exécuter la requête sur la base de données
    $res = mysqli_query($db, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='login.php'>connecter</a></p>
       </div>";
    }
}else{
?>
<form class="box" action="" method="post">
    <h1 class="box-title">S'inscrire</h1>
  <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />
  <input type="text" class="box-input" name="firstname" placeholder="Prénom" required />
    <input type="text" class="box-input" name="surname" placeholder="Nom" required />
    <input type="text" class="box-input" name="email" placeholder="Email" required />
    <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />
    <input type="submit" name="submit" value="S'inscrire" class="box-button" />
    <p class="box-register">Déjà inscrit? <a href="login.php">Connectez-vous ici</a></p>
</form>
<?php } ?>
</body>
</html>


  
