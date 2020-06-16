<header>
    <div class="centered-div">

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php 
include_once('controllers/CheckStatus.php'); 
$status = new CheckStatus();
?>

<div class="header">
  <a href="index.php?page=home"><img src="https://i.imgur.com/ntmIiEN.png" class="logo" alt="lg"></a>
  <div class="header-right">
    <a href="index.php?page=home">Présentation de la licence</a>
    <?php
      if($status->getPermission(2)){
        echo "<a href='index.php?page=etudiant'>Espace étudiant</a>";
      }elseif($status->getPermission(4)){
        echo "<a href='index.php?page=entreprise'>Espace entreprise</a>";
      }elseif($status->getPermission(8)){
        echo "<a href='index.php?page=enseignant'>Espace enseignants</a>";
      } elseif($status->getPermission(16)) {
        echo "<a href='index.php?page=etudiant'>Espace étudiant</a>";
        echo "<a href='index.php?page=entreprise'>Espace entreprise</a>";
        echo "<a href='index.php?page=enseignant'>Espace enseignants</a>";
        echo "<a href='index.php?page=admin'>Administration</a>";
      } else {
        echo "<a href='index.php?page=login'>Connectez-vous</a>";
      }
    ?>    
  </div>
</div>
<div class="banner">
    <h1><?php
      switch($page){
        case "home":
          $h1 = "Présentation de la licence";
        break;
        case "enseignant":
          $h1 = "Espace enseignant";
        break;
        case "entreprise":
          $h1 = "Espace entreprise";
        break;
        case "etudiant":
          $h1 = "Espace étudiant";
        break;
        case "account":
          $h1 = "Inscription";
        break;
        case "admin":
          $h1 = "Administration";
        break;
        case "login":
          $h1 = "Connexion";
        break;
        case "disconnect":
          $h1 = "Déconnexion";
        break;
        case "erreur":
          $h1 = "Erreur 404 : Page introuvable";
        break;
      }
     echo $h1;
     ?></h1>
</div>       
</header>