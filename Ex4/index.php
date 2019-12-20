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
                <div class="card-header font-weight-bold bg-info">Récupération des cookies</div>
                <div class="font bg-light">
                    <?php
                    // on verifie que les cookies existent, si oui, on les les affichent...
                    if ((isset($_COOKIE['pseudo'])) && (isset($_COOKIE['password']))) { // Si le formulaire a été envoyé...
                        $login = filter_var($_COOKIE['login'], FILTER_SANITIZE_STRING);//on nettoie les cookies de toutes intrusions
                        $password = filter_var($_COOKIE['passsword'], FILTER_SANITIZE_STRING);
                        ?>      
                        <p>Voici ce qui a été stocké dans les cookies : <br><?= 'pseudo : ' . $login. ' et le mot de passe : ' . $password . '.' ?></p>
                        <?php
                    } // on a verifié et pas de cookies existant, on precise a l'utilisateur que pas de données dispo.
                    else {
                        ?>
                        <p>Rien à afficher, pas de données disponnibles</p>
                        <?php
                    }
                    ?>
                </div>
                </div>
        </div>
          </body>
                </html>