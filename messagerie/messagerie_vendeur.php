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
          <a class="nav-link js-scroll-trigger" href="../compte/annonce.php">Mes Annonces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="../compte/profile.php">Mon Profil</a>
        </li>
  </form>
</nav>
      </ul>
    </div>
  </nav>
</body>
<body>
    <h1 ALIGN="CENTER">Messagerie</h1>
    <div class="card">
    <?php 
        $pdo = new PDO("mysql:host=localhost;dbname=projet_web", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

              $result = $pdo->query("SELECT * FROM message WHERE id"); 
              while ($message = $result->fetch(PDO::FETCH_OBJ)) { ?>
              
                  <div><b><?php echo $message->destinataire ; ?></b> : <?php echo $message->messages ; ?></div>

                  
            <?php } ?>
    </div>

    <div class="starter-template">  <br>
    <form method="POST" action="execute_vendeur.php" enctype='multipart/form-data'>

        <div class="form-group">
            <input type="text" class="form-control" id="messages" name="messages">
        </div>

        <div class="form-group">
            <input type="hidden" class="form-control" id="destinataire" name="destinataire" value="Vendeur">
            <button type="submit" class="btn btn-primary" id="OK">Envoyer</button>
        </div>
    </form>
</div>

<form method="POST" action="supp_mess.php" enctype='multipart/form-data'>
  <button type="submit" class="btn btn-danger" id="OK">Supprimer</button>
</form>

</body>
</html>
