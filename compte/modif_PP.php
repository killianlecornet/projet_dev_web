<?php

if (isset($_POST['upload'])) {
    $image = $_FILES['image']['name'];
    $target = "../images_PP/". $image;
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
}

$db = new PDO('mysql:host=localhost;dbname=projet_web', 'root','');

$req = $db->prepare('UPDATE users SET image=:image');

$req->bindValue(':image',$image,PDO::PARAM_STR);



$executeIsOk = $req->execute();

if($executeIsOk){
    header("Location: profile.php");
}
