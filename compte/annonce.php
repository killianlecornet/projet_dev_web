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

$pdo = new PDO("mysql:host=localhost;dbname=projet_web", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));


if (!empty($_POST)) {

    $_POST["titre"] = htmlentities($_POST["titre"], ENT_QUOTES); 
    $_POST["prix"] = htmlentities($_POST["prix"], ENT_QUOTES);
    $_POST["description"] = htmlentities($_POST["description"], ENT_QUOTES);
    $_POST["date"] = htmlentities($_POST["date"], ENT_QUOTES);
    $_POST["statut"] = htmlentities($_POST["statut"], ENT_QUOTES);
    
    $msg = "";

      // If upload button is clicked ...
      if (isset($_POST['upload'])) {
        // Get image name
        $image = $_FILES['image']['name'];
      
        // image file directory
        $target = "../images/".basename($image);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
          $msg = "Image uploaded successfully";
        }else{
          $msg = "Failed to upload image";
        }
      }
    $requeteSQL = "INSERT INTO objet_annonce (titre, prix, description, date, statut, image) VALUES ('$_POST[titre]', '$_POST[prix]', '$_POST[description]', '$_POST[date]', '$_POST[statut]', '$image')"; 
    $result = $pdo->exec($requeteSQL); 
  }
?>
<h1>Creation de l'annonce</h1>

<div class="starter-template">  
    <form method="POST" action="" enctype='multipart/form-data'>

        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" id="titre" name="titre">
        </div>

        <div class="form-group">
            <label for="prix">prix</label>
            <input type="text" class="form-control" id="prix" name="prix">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea rows="10" class="form-control" id="description" name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>

        <div class="form-group">
            <input type="hidden" class="form-control" id="statut" name="statut" value="Actif">
        </div>
        <input type="hidden" name="size" value="1000000">
  	   <div>
  	  <input type="file" name="image">
  	   </div>

        <button  name="upload" type="submit" class="btn btn-primary" id="OK">Enregistrer</button>

    </form>
</div>

<br><br>

<a href="../index2.php#experience" class="btn btn-primary">Accueil</a>
