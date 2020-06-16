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

<?php
include_once('controllers/CheckStatus.php');
$status = new CheckStatus();
if($status->getPermission(16)){?>

<!-- Div marges CSS -->
<div class='marge'>

    <!-- Admin -->
    <div class="margea">
        <h2>Panel utilisateurs</h2>
        <!-- Contenu -->
        <div class="margec">
            <div class="texte">

                <table class="table ">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Mail</th>
                            <th>Status</th>
                            <th>Modifier</th>
                        <?php
                            include_once("models/admin_model.php");
                            $model = new AdminModel;

                            $datas = $model->getUsers();

                            foreach($datas as $row){
                                echo '<tr>';
                                    echo '<td>' . ucfirst($row['user_id']) . '</td>';
                                    echo '<td>' . ucfirst($row['user_prenom']) . '</td>';
                                    echo '<td>' . ucfirst($row['user_nom']) . '</td>';
                                    echo '<td>' . strtolower($row['user_mail']) . '</td>';
                                    echo '<td>' . ucfirst($row['sta_lib']) . '</td>';
                                    echo '<td><a></a></td>';
                                echo '</tr>';
                            }
                        ?>
                    </thead>
                </table>
                
            </div>
        </div>
    </div>
</div>

<?php } else {

    if(isset($_SESSION['first_name'])){
        echo "<p class='d-flex justify-content-center' style='color: red;'>Votre compte détient les permissions : [" . strtoupper($_SESSION['status']) . "] - Celles-ci sont inssufisantes pour accéder à cette page.</p>";
    } else{
        echo "<p class='d-flex justify-content-center' style='color: red;'>Vous ne pouvez pas accéder à cette page en étant déconnecté.</p>";
    }
}?>

</body>
<?php include_once('includes/footer.php')?>
</html>