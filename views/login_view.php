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
                <form id='frm_login' action='../controllers/CheckAccount.php' method='POST' onsubmit='return validate_input()'>
                    <input type='mail' name='login' placeholder='Mail' required oninvalid=\"this . setCustomValidity('Saisissez une adresse mail')\" oninput=\"this . setCustomValidity('')\">
                    <br><input type='password' name='pwd' placeholder='Mot de passe' required oninvalid=\"this . setCustomValidity('Saisissez un mot de passe')\" oninput=\"this . setCustomValidity('')\">
                    <br><button type='submit' style="margin-top: 20px;">Connexion</button>
                </form>
            </div>
        </div>
    </div>

</body>
<?php include_once('includes/footer.php')?>
</html>