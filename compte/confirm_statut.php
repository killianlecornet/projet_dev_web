<?php

$db = new PDO('mysql:host=localhost;dbname=projet_web', 'root','');

$req = $db->prepare('UPDATE objet_annonce SET statut=:statut');

$req->bindValue(':statut', $_POST['statut'],PDO::PARAM_STR);

$executeIsOk = $req->execute();

if($executeIsOk){
    header("Location: profile.php");
}

?>