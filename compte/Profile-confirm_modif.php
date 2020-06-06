<?php

$db = new PDO('mysql:host=localhost;dbname=projet_web', 'root','');

$req = $db->prepare('UPDATE users SET firstname=:firstname, surname=:surname, email=:email');

$req->bindValue(':firstname', $_POST['firstname'],PDO::PARAM_STR);
$req->bindValue(':surname', $_POST['surname'],PDO::PARAM_STR);
$req->bindValue(':email', $_POST['email'],PDO::PARAM_STR);

$executeIsOk = $req->execute();

if($executeIsOk){
    $message = 'Le compte a été mis a jour';
}

else{
    $message = 'Le compte n a pas  été mis a jour';
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificationt</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1>Résultat de la modification</h1>
    <p><?= $message ?></p>
    <a href="../index2.php">
    <input type="submit" class="btn btn-warning" value="Retour a la page">
    </a> 
        
</body>
</html>