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

<!-- NOTES Eleve -->

<div class="margea">
    <h2>Note</h2>
    <!-- Contenu -->
    <div class="margec">
        <!-- affichage depuis la bdd -->
        <?php
        
        ?>
        <div class="text-center">
            <iframe width="70%" height="300" src="assets/img/dummyNoteEl.pdf"></iframe>
        </div>
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
    </div>
</div>

<!-- Offre alternance -->

<div class="margea">
    <h2>Offre d'alternance</h2>
    <!-- Contenu -->
    <div class="margec">
        <!-- affichage depuis la bdd -->
        <?php
        
        ?>
        <div class="text-center">
            <iframe width="70%" height="300" src="assets/img/dummyOaEl.pdf"></iframe>
        </div>
    </div>
</div>

</body>
<?php include_once('includes/footer.php')?>
</html>