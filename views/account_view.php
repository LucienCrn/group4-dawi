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
                    <input type='text' name='name' placeholder='Nom' required autofocus oninvalid=\"this.setCustomValidity('Saisissez un nom')\" oninput=\"this.setCustomValidity('')\">
                    <br><input type='text' name='first-name' placeholder='Prénom' required oninvalid=\"this . setCustomValidity('Saisissez un prénom')\" oninput=\"this . setCustomValidity('')\"><br>
                    <br><input type='mail' name='login' placeholder='Mail' required oninvalid=\"this . setCustomValidity('Saisissez une adresse mail')\" oninput=\"this . setCustomValidity('')\">
                    <br><input type='password' name='pwd' placeholder='Mot de passe' required oninvalid=\"this . setCustomValidity('Saisissez un mot de passe')\" oninput=\"this . setCustomValidity('')\">
                    <br><input type='password' name='pwd2' placeholder='Vérifier le mot de passe' required oninvalid=\"this . setCustomValidity('Saisissez un mot de passe')\" oninput=\"this . setCustomValidity('')\"><br>
                    <br><select name="statut" id="statut">
                        <option value="Etudiant">Etudiant</option>
                        <option value="Entreprise">Entreprise</option>
                        <option value="Enseignant">Enseignant</option>
                        <option value="Personnel MIAW">Personnel MIAW</option>
                        </select><br>
                    <br><button type='submit'>Création</button>
                </form>
            </div>
        </div>
    </div>

</body>
<?php include_once('includes/footer.php')?>
</html>