<!DOCTYPE html>
<html>
<head>
    <title><?= ucfirst($page) . " - DAW2I"?></title>
</head>
<?php
include_once('views/includes/head.php');
include_once("views/includes/header.php");
?>

<body>
<!-- Div marges CSS -->
<div class='marge'>
    <div class="row">
        <div class="col-sm">
            <div class="text-center" style="margin-top: 5%; margin-bottom: 5%;">
                <form id='frm_disconnect' action='index.php?page=disconnect' method='POST' onsubmit='return validate_input()'>
                    <p>Veuillez saisir ci-dessous "confirmer" puis cliquer sur déconnexion.</p>
                    <input type='text' name='confrm' placeholder='Déconnexion...' required oninvalid=\"this . setCustomValidity('Veuillez entrer une saisie')\" oninput=\"this . setCustomValidity('')\">
                    <br><button type='submit' style="margin-top: 20px;">Valider</button>
                </form>
            </div>
        </div>
    </div>
</body>
<?php include_once('includes/footer.php')?>
</html>