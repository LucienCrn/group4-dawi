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
<?php
include_once('controllers/CheckStatus.php');
$status = new CheckStatus();
if(!isset($_SESSION['first_name'])){?>
<!-- Div marges CSS -->
<div class='marge'>
    <div class="row">
        <div class="col-sm">
            <div class="text-center" style="margin-top: 5%; margin-bottom: 5%;">
                <form id='frm_login' action='index.php?page=login' method='POST' onsubmit='return validate_input()'>
                    <input type='mail' name='login' placeholder='Mail' required oninvalid=\"this . setCustomValidity('Saisissez une adresse mail')\" oninput=\"this . setCustomValidity('')\">
                    <br><input style='margin-top: 5px;' type='password' name='pwd' placeholder='Mot de passe' required oninvalid=\"this . setCustomValidity('Saisissez un mot de passe')\" oninput=\"this . setCustomValidity('')\">
                    <br><button type='submit' style="margin-top: 20px;">Connexion</button>
                </form>
            </div>
        </div>
    </div>

    <?php } else {
    echo "<p class='d-flex justify-content-center' style='color: red;'>Vous ne pouvez pas accéder à cette page en étant connecté.</p>";
}?>

</body>
<?php include_once('includes/footer.php')?>
</html>