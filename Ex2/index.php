<?php
//On démarre la session avant le HTML
session_start();
$_SESSION['firstname'] = 'Dupont';
$_SESSION['lastname'] = 'Georges';
$_SESSION['age'] = '52';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ex2</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>   
        <div class="container">
            <div class="row">
                <div class="card col-sm-8 bg-light offset-2">
                    <div class="card-header font-weight-bold bg-info"> Afficher des variables sur une autre page par les sessions</div>
                    <div class="font bg-light">
                        <a href="result.php">Cliquer ici</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>