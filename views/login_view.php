<!DOCTYPE html>
<html>

<?php include_once("./includes/head.php");?>

<body>

<div class="text-center" style="margin-top: 10%;">

<label style="font-weight: bold; font-size: 18px;">Connexion</label>

<form id='frm_login' action='../controllers/CheckAccount.php' method='POST' onsubmit='return validate_input()'>
    <input type='mail' name='login' placeholder='Mail' required oninvalid=\"this . setCustomValidity('Saisissez une adresse mail')\" oninput=\"this . setCustomValidity('')\">
    <br><input type='password' name='pwd' placeholder='Mot de passe' required oninvalid=\"this . setCustomValidity('Saisissez un mot de passe')\" oninput=\"this . setCustomValidity('')\">

    <br><button type='submit' style="margin-top: 20px;">Ok</button>
</form>

<img src="https://i.imgur.com/ntmIiEN.png" class="logo" alt="lg" style="margin-top: 40px;">

</div>

</body>
<?php include_once('includes/footer.php')?>
</html>