<?php
    

    $pdo = new PDO("mysql:host=localhost;dbname=projet_web", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    
    
    if (!empty($_POST)) {
    
        $_POST["destinataire"] = htmlentities($_POST["destinataire"], ENT_QUOTES); 
        $_POST["messages"] = htmlentities($_POST["messages"], ENT_QUOTES);
        $requeteSQL = "INSERT INTO message (destinataire, messages) VALUES ('$_POST[destinataire]', '$_POST[messages]')"; 
        $result = $pdo->exec($requeteSQL); 
    
    }
    
if($result){
    header("Location: messagerie_vendeur.php");
}

?>