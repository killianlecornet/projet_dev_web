<?php 

$db = new PDO('mysql:host=localhost;dbname=projet_web', 'root','');


$req = $db->prepare('SELECT * FROM users');

$executeIsOk = $req->execute();

$liste = $req->fetch();

?>


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


<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="../img/profile.jpg" alt="">
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
<h1>C'est votre profile</h1>
<center><h1>Modifier</h1></center>

<form action="Profile-confirm_modif.php" method="post">

    <p>
        
        <label for="titre">Prénom</label><br>
        <input type="text" name="firstname" class="form-control"  id="exampleFormControlInput1 firstname" value="<?= $liste['firstname'] ?>">

    </p>
    <p>
        <label for="sous_titre">Nom</label><br>
        <input type="text" name="surname" class="form-control"  id="exampleFormControlInput1 surname" value="<?= $liste['surname'] ?>">
    
    </p>
    <p>
        <label for="texte">Email</label><br>
        <input type="text" name="email" class="form-control"  id="exampleFormControlInput1 email" value="<?= $liste['email'] ?>">

    </p>
    <p><center><input type="submit" class="btn btn-success" value="Enregistrer"></p></center>

</form>    

<a href="../connect/logout.php">
<input type="submit" class="btn btn-warning" value="Déconnexion">
</a>
</body>
</html>