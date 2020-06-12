<?php
$page = "erreur";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?= ucfirst($page) . " - DAW2I"?></title>
</head>
<?php
include_once('views/includes/head.php');
include_once("views/includes/header.php");?>
<body>

<div class='marge'>

    <div class="row">
        <div class="col-sm">
            <div class="d-flex justify-content-center">
                <p>Si habituellement cette page est joignable, je vous invite à prendre contact avec un <a href='mailto:admin@daw2i.fr'>administrateur</a>.</p>
            </div>
        </div>
    </div>

</body>
<?php include_once('includes/footer.php')?>
</html>