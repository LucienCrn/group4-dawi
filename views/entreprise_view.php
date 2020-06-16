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
if($status->getPermission(4) || $status->getPermission(16)){?>

<!-- Div marges CSS -->
<div class='marge'>

<!-- Projet tut -->

<div class="margea">
    <h2>Projet tuteuré</h2>
    <!-- Contenu -->
    <div class="margec">
        <div class="texte">
            <h3>Ajouter un projet tuteuré</h3>
            <p>Pour rajouter un projet, cliquer sur le bouton ci-dessous. Attention seul les fichiers en .PDF sont pris en charge</p>
        </div>
        <div class="text-center" id="mrg">
            <form name="fnoteE" action="enseignant_controller.php" method="POST">
                <input type="hidden"  name="MAX_FILE_SIZE" value="30000"/> <!-- Value = taille du fichier .pdf -->
                <input type="file" name="btNoteE" accept="application/pdf" enctype="multipart/form-data"/>
                <input type="submit" name="ulNoteE" value="Envoyer"/>
            </form>
        </div>
        <h3>Consulter ses projets tuteuré</h3>
        <!-- affichage depuis la bdd -->
        <?php
        
        ?>
        <div class="text-center">
            <iframe width="70%" height="300" src="assets/img/dummyPtEl.pdf"></iframe>
        </div>

        <a href="assets/img/dummyPtEl.pdf"><div style="text-align:center;"><button style="color: #FFFFFF; background-color: #E06F24; 
        border: none; padding: 15px 32px; text-align: center; font-size: 16px; margin: 4px 2px; margin-top: 50px; margin-bottom: 20px; cursor: pointer;" 
        type="button">Télécharger Projet Tuteuré</button></div></a>

    </div>
</div>

<!-- Offre Alternance -->

<div class="margea">
    <h2>Offre d'alternance</h2>
    <!-- Contenu -->
    <div class="margec">
        <div class="texte">
            <h3>Ajouter une offre d'alternance</h3>
            <p>Pour rajouter une offre, cliquer sur le bouton ci-dessous. Attention seul les fichiers en .PDF sont pris en charge</p>
        <div>
        <div class="text-center" id="mrg">
            <form name="fnoteE" action="enseignant_controller.php" method="POST">
                <input type="hidden"  name="MAX_FILE_SIZE" value="30000"/> <!-- Value = taille du fichier .pdf -->
                <input type="file" name="btNoteE" accept="application/pdf" enctype="multipart/form-data"/>
                <input type="submit" name="ulNoteE" value="Envoyer"/>
            </form>
        </div>
        <h3>Consulter ses offres d'alternance</h3>
        <!-- affichage depuis la bdd -->
        <?php  ?>
        <div class="text-center" id="mrg">
            <iframe width="70%" height="300" src="assets/img/dummyOaEl.pdf"></iframe>
        </div>

        <a href="assets/img/dummyOaEl.pdf"><div style="text-align:center;"><button style="color: #FFFFFF; background-color: #00365B; 
        border: none; padding: 15px 32px; text-align: center; font-size: 16px; margin: 4px 2px;  margin-bottom: 20px; cursor: pointer;" 
        type="button">Télécharger Offres Alternances</button></div></a>

    </div>
</div>
</div>
</div>

<?php } else {

    if(isset($_SESSION['first_name'])){
        echo "<p class='d-flex justify-content-center' style='color: red;'>Votre compte détient les permissions : [" . strtoupper($_SESSION['status']) . "] - Celles-ci sont inssufisantes pour accéder à cette page.</p>";
    } else{
        echo "<p class='d-flex justify-content-center' style='color: red;'>Vous ne pouvez pas accéder à cette page en étant déconnecté.</p>";
    }
}?>

</body>
<?php include_once('includes/footer.php')?>
</html>