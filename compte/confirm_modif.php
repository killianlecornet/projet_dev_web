
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Resume - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="../css/resume.min.css" rel="stylesheet">

</head>
<?php 

$db = new PDO('mysql:host=localhost;dbname=projet_web', 'root','');


$req = $db->prepare('SELECT * FROM users');

$executeIsOk = $req->execute();

$liste = $req->fetch();

?>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-none d-lg-block">
      <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../images_PP/<?= $liste['image'] ?>" alt="">
      </span>
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="../index2.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="annonce.php">Mes Annonces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="profile.php">Mon Profil</a>
        </li>
        </li>
        </li>
  </form>
</nav>
      </ul>
    </div>
  </nav>
  <?php

$db = new PDO('mysql:host=localhost;dbname=projet_web', 'root','');

$req = $db->prepare('UPDATE objet_annonce SET titre=:titre, prix=:prix, description=:description, date=:date WHERE id=:num LIMIT 1');

$req->bindValue(':num',$_POST['IDtable'],PDO::PARAM_INT);
$req->bindValue(':titre', $_POST['titre'],PDO::PARAM_STR);
$req->bindValue(':prix', $_POST['prix'],PDO::PARAM_STR);
$req->bindValue(':description', $_POST['description'],PDO::PARAM_STR);
$req->bindValue(':date', $_POST['date'],PDO::PARAM_STR);

$executeIsOk = $req->execute();

if($executeIsOk){
    $message = 'L annonce a été mis a jour';
}

else{
    $message = 'L annonce n a pas  été mis a jour';
}

?>
  <h1>Résultat de la modification</h1>
    <p><?= $message ?></p>

    <a href="../index2.php#experience">
    <input type="submit" class="btn btn-warning" value="retour à la page">
    </a> 
        
</body>
</html>