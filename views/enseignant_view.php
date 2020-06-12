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
                    <iframe width="70%" height="300" src=""></iframe>
                </div>
            </div>
        </div>

        <!-- EDT ENSEIGNANT -->

        <div class="margea">
            <h2>Emploi du temps</h2>
            <!-- affichage depuis la bdd -->
            <div class="margec">
                <?php  ?>
                <div class="text-center" id="mrg">
                    <iframe width="70%" height="300" src=""></iframe>
                </div>
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
                        <input type="hidden"  name="MAX_FILE_SIZE" value="30000"/> <!-- Value = taille du fichier .pdf -->
                        <input type="file" name="btNoteE" accept="application/pdf" enctype="multipart/form-data"/>
                        <input type="submit" name="ulNoteE" value="Envoyer"/>
                    </form>
                </div>
                <h3>Consulter ses supports de cours</h3>
                <!-- affichage depuis la bdd -->
                <?php  ?>
                <div class="text-center" id="mrg">
                    <iframe width="70%" height="300" src=""></iframe>
                </div>
            </div>
        </div>
        </div>
    </div>
    </body>
<?php include_once('includes/footer.php')?>
</html>