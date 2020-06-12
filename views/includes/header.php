<header>
    <div class="centered-div">

<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="header">
  <a href="#home"><img src="https://i.imgur.com/ntmIiEN.png" class="logo" alt="lg"></a>
  <div class="header-right">
  <a class="active" href="index.php?page=home">Présentation de la licence</a>
    <a href="index.php?page=entreprise">Espace entreprise</a>
    <a href="index.php?page=etudiant">Espace étudiant</a>
    <a href="index.php?page=enseignant">Espace enseignants</a>
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
      }
     echo $h1;
     ?></h1>
</div>       
</header>