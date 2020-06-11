<?php 

$db = new PDO('mysql:host=localhost;dbname=projet_web', 'root','');


$req = $db->prepare('DELETE FROM message');


$executeIsOk = $req->execute();

if($executeIsOk){
    header("Location: messagerie_vendeur.php");
    
}
