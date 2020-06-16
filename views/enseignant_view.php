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
if($status->getPermission(8) || $status->getPermission(16)){
    ?>
    <!-- Div marges CSS -->
    <div class='marge'>

        <!-- NOTES ENSEIGNANT -->

        <div class="margea">
            <h2>Notes</h2>
            <!-- Contenu -->
            <div class="margec">
                <div class="texte">
                    <h3>Ajouter des notes</h3>
                    <p>Pour rajouter des notes, cliquer sur le bouton ci-dessous. Attention seul les fichiers en .PDF sont pris en charge</p>
                </div>
                <div class="text-center" id="mrg">
                    <form name="fnoteE" action="../controllers/CheckAccount.php" method="POST" onsubmit='return validate_input()'>
                        <input type="hidden"  name="MAX_FILE_SIZE" value="30000"/> <!-- Value = taille du fichier .pdf -->
                        <input type="file" name="NoteE" accept="application/pdf" enctype="multipart/form-data"/>
                        <input type="submit" name="ulNoteE" value="Envoyer"/>
                    </form>
                </div>
                <h3>Consulter ses notes déposées</h3>
                <!-- affichage depuis la bdd -->
                <?php
                
                ?>
                <div class="text-center">
                    <iframe width="70%" height="300" src="assets/img/dummyNoteEn.pdf"></iframe>
                </div>

                <a href="assets/img/dummyNoteEn.pdf"><div style="text-align:center;"><button style="color: #FFFFFF; background-color: #E06F24; 
        border: none; padding: 15px 32px; text-align: center; font-size: 16px; margin: 4px 2px; margin-bottom: 20px; cursor: pointer;" 
        type="button">Télécharger Notes</button></div></a>

                
            </div>
        </div>

        <!-- EDT ENSEIGNANT -->

        <div class="margea">
            <h2>Emploi du temps</h2>
            <!-- affichage depuis la bdd -->
            <div class="margec">
                <?php  ?>
                <div class="text-center" id="mrg">
                    <iframe width="70%" height="300" src="assets/img/dummyEdtEn.pdf"></iframe>
                </div>

                <a href="assets/img/dummyEdtEn.pdf"><div style="text-align:center;"><button style="color: #FFFFFF; background-color: #00365B; 
        border: none; padding: 15px 32px; text-align: center; font-size: 16px; margin: 4px 2px; margin-bottom: 20px; cursor: pointer;" 
        type="button">Télécharger Emploi du temps</button></div></a>

            </div>
        </div>

        <!-- EDT ENSEIGNANT -->

        <div class="margea">
            <h2>Support de cours</h2>
            <!-- Contenu -->
            <div class="margec">
                <div class="texte">
                    <h3>Ajouter un support de cours</h3>
                    <p>Pour rajouter un support de cours, cliquer sur le bouton ci-dessous. Attention seul les fichiers en .PDF sont pris en charge</p>
                <div>
                <div class="text-center" id="mrg">
                    <form name="fnoteE" action="enseignant_controller.php" method="POST">
                        <input type="hidden"  name="MAX_FILE_SIZE" value="500000"/> <!-- Value = taille du fichier .pdf -->
                        <input type="file" name="btNoteE" accept="application/pdf" enctype="multipart/form-data"/>
                        <input type="submit" name="ulNoteE" value="Envoyer"/>
                    </form>
                </div>
                <h3>Consulter ses supports de cours</h3>
                <!-- affichage depuis la bdd -->
                <?php  ?>
                <div class="text-center" id="mrg">
                    <iframe width="70%" height="300" src="assets/img/Cours_Groupware.pdf"></iframe>
                </div>

                <a href="assets/img/Cours_Groupware.pdf"><div style="text-align:center;"><button style="color: #FFFFFF; background-color: #E06F24; 
        border: none; padding: 15px 32px; text-align: center; font-size: 16px; margin: 4px 2px; margin-bottom: 20px; cursor: pointer;" 
        type="button">Télécharger Support de cours</button></div></a>
            </div>
        </div>
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