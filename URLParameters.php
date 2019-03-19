<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn PHP - URL's Parameters</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'sans serif'
        }
        h1 {
            text-align: center;
            margin: 40px auto;
        }
        h2 {
            text-align: center;
            margin: 20px auto;
        }
        .my-text {
            width: 50%;
            margin: 20px auto;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #000;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>URL's Parameters</h1>

    <!-- exercice 1  -->
    <h2>Exercice 1</h2>
    <div class="my-text">
        <p><?php echo (isset($_GET['nom'])) ? $_GET['nom'] : 'Enter last name in URL\'s param "nom"' ?></p>
        <p><?php echo (isset($_GET['prenom'])) ? $_GET['prenom'] : 'Enter first name in URL\'s param "prenom"' ?></p>
    </div>

    <!-- exercice 2  -->
    <h2>Exercice 2</h2>
    <div class="my-text">
        <p><?php echo (isset($_GET['age'])) ? $_GET['age'] : 'Enter the age in URL\'s param "age"' ?></p>
    </div>

    <!-- exercice 3  -->
    <h2>Exercice 3</h2>
    <div class="my-text">
        <p><?php echo ((isset($_GET['dateDebut'])) ? $_GET['dateDebut'] : 'Enter the starting date in URL\'s param "dateDebut"') . ' - ' . ((isset($_GET['dateFin'])) ? $_GET['dateFin'] : 'Enter the end date in URL\'s param "dateFin"') ?></p>
    </div>

    <!-- exercice 4  -->
    <h2>Exercice 4</h2>
    <div class="my-text">
        <p><?php echo (isset($_GET['langage'])) ? $_GET['langage'] : 'Enter programming language in URL\'s param "langage"' ?></p>
        <p><?php echo (isset($_GET['serveur'])) ? $_GET['serveur'] : 'Enter serveur in URL\'s param "serveur"' ?></p>
    </div>

    <!-- exercice 5  -->
    <h2>Exercice 5</h2>
    <div class="my-text">
        <p><?php echo (isset($_GET['semaine'])) ? ('week number ' . $_GET['semaine']) : 'Enter the week in URL\'s param "semaine"' ?></p>
    </div>

    <!-- exercice 6  -->
    <h2>Exercice 6</h2>
    <div class="my-text">
        <p><?php echo (isset($_GET['batiment'])) ? ('build no ' . $_GET['batiment']) : 'Enter the building no in URL\'s param "batiment"' ?></p>
        <p><?php echo (isset($_GET['salle'])) ? ('room no ' . $_GET['salle']) : 'Enter the room no in URL\'s param "salle' ?></p>
    </div>

</body>
</html>