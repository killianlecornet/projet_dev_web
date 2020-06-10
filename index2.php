<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Resume - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Clarence Taylor</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#experience">Annonces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="compte/profile.php">Profile</a>
        </li>
        </li>
        <nav class="navbar navbar-light">
        <form class="form-inline" method='POST'>
        <input class="form-control mr-sm-2" type="search" name="recherche" placeholder="Search" aria-label="Search">
        <!-- <button class="btn btn-light" type="submit">Search</button> -->
        </li>
  </form>
</nav>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
      <div class="w-100">
      <img src="img/header.jpg" class="images_LBC">
        <h1 class="mb-0">Leboncoin
          <span class="text-primary">meilleur site de transaction en ligne</span>
        </h1>
      </div>
    </section>

    <hr class="m-0">

    <?php

$db_server = 'localhost'; // Adresse du serveur MySQL
$db_name = 'projet_web';            // Nom de la base de données
$db_user_login = 'root';  // Nom de l'utilisateur
$db_user_pass = '';       // Mot de passe de l'utilisateur

// Ouvre une connexion au serveur MySQL
$conn = mysqli_connect($db_server,$db_user_login, $db_user_pass, $db_name);

 // Récupère la recherche
 $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

 // la requete mysql
 $q = $conn->query(
 "SELECT * FROM objet_annonce
 WHERE titre LIKE '%$recherche%'
 OR prix LIKE '%$recherche%'
 LIMIT 10");?>

<section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
      <div class="w-100">
        <h2 class="mb-5">Mes Annonces</h2>

<?php
 // affichage du résultat
 while( $recherche = mysqli_fetch_array($q)){?>
<br><div class="card">
    <div class="card-body">
        <h3 class="card-title"><?php echo $recherche['titre'] ; ?></h3>
        <div class="subheading mb-3"><?php echo $recherche['prix'] ; ?></div>
        <p><?php echo $recherche['description'] ; ?>.</p>
        </div>
        <div class="resume-date text-md-right">
        <span class="text-primary"><?php echo $recherche['date'] ; ?></span><br><?php echo $recherche['statut'] ; ?></div>
        <a href="compte/modification.php?IDtable=<?= $recherche['id'] ?>" class="btn btn-info">Modifier</a>
        <a href="compte/supprimer.php?IDtable=<?= $recherche['id'] ?>" class="btn btn-danger">Supprimer</a>
        <br>
   <?php } ?>
   
    </div>
    </section>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>

</html>
