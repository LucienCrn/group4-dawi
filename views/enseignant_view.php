<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <link href='/group4-dawi/assets/css/style.css' rel='stylesheet'>
    <link href='/group4-dawi/assets/Bootstrap/css/bootstrap.min.css' rel='stylesheet'>
    <link href='/group4-dawi/assets/Bootstrap/js/bootstrap.min.js' rel='script'>
    <!-- <link href='assets/images/logo.png' rel="icon"> -->
</head>


<body>
<header>
    <div class="centered-div">
    <!DOCTYPE html>

<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<div class="header">
  <a href="#home"><img src="https://i.imgur.com/4dlfgvZ.png" class="logo" alt="lg"></a>
  <div class="header-right">
    <a class="active" href="#pdll">Présentation de la licence</a>
    <a href="entreprise">Espace entreprise</a>
    <a href="#eetudiant">Espace étudiant</a>
    <a href="enseignant_view.php">Espace enseignants</a>
  </div>
</div>  
<div class="banner">
    <h1 class="text-center">Nom de la page</h1>
</div>     
</header>


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
                    <form name="fnoteE" action="enseignant_controller.php" method="POST">
                        <input type="hidden"  name="MAX_FILE_SIZE" value="30000"/> <!-- Value = taille du fichier .pdf -->
                        <input type="file" name="btNoteE" accept="application/pdf" enctype="multipart/form-data"/>
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

</body>
</html>