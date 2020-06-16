<footer class="footer">
    <div>
        <br>
        <div class="text-center">
        <?php
        if (isset($_SESSION['first_name']) && isset( $_SESSION['name']) && isset($_SESSION['mail']) && isset($_SESSION['status'])){
            echo "<a href='?page=disconnect'>Déconnexion</a>";
        } else {
            echo "<a href='?page=login'>Connectez-vous</a>";
            echo "<br>";
            echo "<a href='?page=account'>Créer un compte</a>";
        }
        ?>
        </div>
        <!--Récupération de la date pour afficher le copyright-->
        <br>
        <br>
        <div class="row">
            <div class="col-sm">
                <div class="text-right">
                    <img src="assets/img/logoDawi.png" class="logod" alt="logo DAWI">
                    <img src="https://i.imgur.com/ntmIiEN.png" class="logo" alt="lg">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <p><strong>© <?php $date = date('Y'); echo $date ;?> Copyright - IUT d'Évry Val d'Essonne</strong></p>
            </div>
        </div>
    </div>
    
</footer>