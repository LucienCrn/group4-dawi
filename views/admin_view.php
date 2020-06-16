<?php
include_once('views/includes/head.php');
include_once("views/includes/header.php");
?>
<!DOCTYPE html>
<html'>
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
                            <th>Statut</th>
                            <th>Modifier</th>
                            <th></th>
                        <?php
                            $model = new AdminModel;

                            $datas = $model->getUsers();

                            /**
                             * On test si un formulaire à été envoyé
                             * Si oui, on met a jour les données dans la base
                             */
                            if(isset($_POST['submit'])){
                                $model->changeStatus($_POST['statut'], $_POST['id_user']);
                                header('location: index.php?page=admin');
                            }

                            foreach($datas as $row){
                                echo '<tr>';
                                    echo '<td>' . ucfirst($row['user_id']) . '</td>';
                                    echo '<td>' . ucfirst($row['user_prenom']) . '</td>';
                                    echo '<td>' . ucfirst($row['user_nom']) . '</td>';
                                    echo '<td>' . strtolower($row['user_mail']) . '</td>';
                                    echo '<td>' . ucfirst($row['sta_lib']) . '</td>';
                                    echo '<td>';
                                        echo '<form action="index.php?page=admin" method="POST">';
                                            echo '<select id="statut" name="statut">';
                                                echo '<option value="2">Etudiant</option>';
                                                echo '<option value="4">Entreprise</option>';
                                                echo '<option value="8">Enseignant</option>';
                                                echo '<option value="16">Personnel miaw</option>';
                                            echo '</select>';
                                    echo '</td>';
                                    echo '<td>';
                                            echo '<input name="id_user" type="hidden" value="' . $row['user_id'] . '">';
                                            echo '<input type="submit" name="submit" value="Valider">';
                                        echo '</form>';
                                    echo '</td>';
                                    echo '</td>';
                                echo '</tr>';
                            }
                        ?>
                    </thead>
                </table>
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