<!DOCTYPE html>
<html>

<?php include_once("./includes/head.php");?>

<body>

<div class="text-center" style="margin-top: 10%;">

<label style="font-weight: bold; font-size: 18px;">Inscription</label>

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

<img src="https://i.imgur.com/ntmIiEN.png" class="logo" alt="lg" style="margin-top: 40px;">

</div>

</body>
<?php include_once('includes/footer.php')?>
</html>