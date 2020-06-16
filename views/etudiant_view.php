<?php
include_once('views/includes/head.php');
include_once("views/includes/header.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= ucfirst($page) . " - DAW2I"?></title>
</head>
<body>

<?php 
include_once('controllers/CheckStatus.php');
$status = new CheckStatus();
if($status->getPermission(2) || $status->getPermission(16)){
    ?>
    <!-- Div marges CSS -->
<div class='marge'>

<!-- NOTES Eleve -->

<div class="margea">
    <h2>Notes</h2>
    <!-- Contenu -->
    <div class="margec">
        <!-- affichage depuis la bdd -->
        <?php
        
        ?>
        <div class="text-center">
            <iframe width="70%" height="300" src="assets/img/dummyNoteEl.pdf"></iframe>
        </div>

        <a href="assets/img/dummyNoteEl.pdf"><div style="text-align:center;"><button style="color: #FFFFFF; background-color: #E06F24; 
        border: none; padding: 15px 32px; text-align: center; font-size: 16px; margin: 4px 2px;  margin-bottom: 20px; cursor: pointer;" 
        type="button">Télécharger Notes</button></div></a>

    </div>
</div>

<!-- EDT Eleve -->

<div class="margea">
    <h2>Emploi du temps</h2>
    <!-- Contenu -->
    <div class="margec">
        <!-- affichage depuis la bdd -->
        <?php
        
        ?>
        <div class="text-center">
            <iframe width="70%" height="300" src="assets/img/dummyEdtEl.pdf"></iframe>
        </div>

        <a href="assets/img/dummyEdtEl.pdf"><div style="text-align:center;"><button style="color: #FFFFFF; background-color: #00365B; 
        border: none; padding: 15px 32px; text-align: center; font-size: 16px; margin: 4px 2px;  margin-bottom: 20px; cursor: pointer;" 
        type="button">Télécharger Emploi du temps</button></div></a>

    </div>
</div>

<!-- Projet tutoré -->

<div class="margea">
    <h2>Projet tuteuré</h2>
    <!-- Contenu -->
    <div class="margec">
        <!-- affichage depuis la bdd -->
        <?php
        
        ?>
        <div class="text-center">
            <iframe width="70%" height="300" src="assets/img/dummyPtEl.pdf"></iframe>
        </div>

        <a href="assets/img/dummyPtEl.pdf"><div style="text-align:center;"><button style="color: #FFFFFF; background-color: #E06F24; 
        border: none; padding: 15px 32px; text-align: center; font-size: 16px; margin: 4px 2px;  margin-bottom: 20px; cursor: pointer;" 
        type="button">Télécharger Projet tuteuré</button></div></a>

    </div>
</div>

<!-- Offre alternance -->

<div class="margea">
    <h2>Offres d'alternances</h2>
    <!-- Contenu -->
    <div class="margec">
        <!-- affichage depuis la bdd -->
        <?php
        
        ?>
        <div class="text-center">
            <iframe width="70%" height="300" src="assets/img/dummyOaEl.pdf"></iframe>
        </div>

        <a href="assets/img/dummyOaEl.pdf"><div style="text-align:center;"><button style="color: #FFFFFF; background-color: #00365B; 
        border: none; padding: 15px 32px; text-align: center; font-size: 16px; margin: 4px 2px;  margin-bottom: 20px; cursor: pointer;" 
        type="button">Télécharger Offres Alternances</button></div></a>

    </div>
</div>

    <?php
} else {

    if(isset($_SESSION['first_name'])){
        echo "<p class='d-flex justify-content-center' style='color: red;'>Votre compte détient les permissions : [" . strtoupper($_SESSION['status']) . "] - Celles-ci sont inssufisantes pour accéder à cette page.</p>";
    } else{
        echo "<p class='d-flex justify-content-center' style='color: red;'>Vous ne pouvez pas accéder à cette page en étant déconnecté.</p>";
    }
}
?>
</body>
<?php include_once('includes/footer.php')?>
</html>