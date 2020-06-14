<?php

if (isset($_POST['upload'])) {
    $image = $_FILES['image']['name'];
    $target = "../images/". $image;
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
}

$db = new PDO('mysql:host=localhost;dbname=projet_web', 'root','');

$req = $db->prepare('UPDATE objet_annonce SET image=:image WHERE id=:num');

$req->bindValue(':num',$_POST['IDtable'],PDO::PARAM_INT);
$req->bindValue(':image',$image,PDO::PARAM_STR);




$executeIsOk = $req->execute();

if($executeIsOk){
    header("Location: ../index2.php#experience");
}

?>