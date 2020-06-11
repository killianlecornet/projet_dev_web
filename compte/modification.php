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
          <a class="nav-link js-scroll-trigger" href="profile.php">Mon Profile</a>
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


$req = $db->prepare('SELECT * FROM objet_annonce WHERE id=:num');

$req->bindValue(':num',$_GET['IDtable'],PDO::PARAM_INT);

$executeIsOk = $req->execute();

$liste = $req->fetch();

?>
  <form action="confirm_modif.php" method="post" enctype="multipart/form-data">
    <input type="hidden"  name="IDtable" value="<?= $liste['id'] ?>">

    <p>
        
        <label for="titre">Titre</label><br>
        <input type="text" name="titre" class="form-control"  id="exampleFormControlInput1 titre" value="<?= $liste['titre'] ?>">

    </p>
    <p>
        <label for="prix">prix</label><br>
        <input type="text" name="prix" class="form-control"  id="exampleFormControlInput1 prix" value="<?= $liste['prix'] ?>">
    
    </p>
    <p>
        <label for="description">description</label><br>
        <textarea rows="10" class="form-control" id="description exampleFormControlInput1" name="description"><?= $liste['description'] ?></textarea>

    </p>
    <p>
        <label for="date">Date</label><br>
        <input type="date" name="date" class="form-control"  id="exampleFormControlInput1 date" value="<?= $liste['date'] ?>">

    </p>
    <p><center><input type="submit" class="btn btn-success" value="Enregistrer"></p></center>
</form>
<div>
  <form method="POST" action="confirm_modif_img.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
    <button  name="upload" type="submit" class="btn btn-primary" id="OK">Post</button> <br><br><br><br><br><br>
  	</div>
  </form>
</div>
</body>
</head>