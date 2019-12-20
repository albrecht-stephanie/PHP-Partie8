<?php
//on verifie que des variables POST existent. si oui, on les inscrits dans des cookies.
if ((isset($_POST['login'])) && (isset($_POST['pwd']))) {
    setcookie('pseudo', htmlspecialchars($_POST['login']), time() + 365 * 24 * 3600, null, null, false, true);
    setcookie('password', htmlspecialchars($_POST['pwd']), time() + 365 * 24 * 3600, null, null, false, true);
    ?>
    <p>Cookies ecrits avec success ! Avec les valeurs : <?= $_POST['login'] ?> et <?= $_POST['pwd']; ?></p>
<?php }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ex4</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="card col-sm-6 bg-light">
                <div class="card-header font-weight-bold bg-info">Stocker les données du formulaire dans des cookies</div>
                <div class="font bg-light">
                    <form method="POST" action="#">
                        <p> Veuillez vous identifier </p>
                        <div class="login">
                            <label for="login"> Identifiant : </label>
                            <input type="text" id="login" name="login" placeholder="PVN635">
                        </div>
                        <div class="pwd">
                            <label for="pwd"> Mot de passe : </label>
                            <input type="password" id="pwd" name="pwd">
                        </div>
                        <div class="button btn btn-info">
                            <input type="submit" value="Envoyer" name="submit"><!-- envoi du formulaire, les donnees sont envoyé en POST -->
                            <!-- le formulaire transmet les donnees au fichier index.php (lui-meme) et seront traités par le php en haut de la page.-->
                        </div>
                    </form>   
                </div>
            </div>
        </div>
    </body>
</html>
