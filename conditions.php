<?php
    // Exe 1
    $age = 17;

    // Exe 2
    $isEasy = true;

    // Exe 3
    $age = 17;
    $isMan = false;

    // Exe 4
    $magnitude = 7;

    // Exe 5
    $sexe = 'Femme';

    // Exe 6
    $myAge = 18;

    // Exe 7
    $exe7Var = false;
    
    // Exe 8
    $exe8Var = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn PHP - Conditions</title>
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
            width: 40%;
            margin: 20px auto;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #000;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Conditions</h1>

    <!-- exercice 1 -->
    <h2>Exercice 1</h2>
    <div class="my-text">
        <p><?php if ($age >= 18) echo 'Vous êtes majeur'; else echo 'Vous êtes mineur' ?></p>
    </div>

    <!-- exercice 2 -->
    <h2>Exercice 2</h2>
    <div class="my-text">
        <p><?php if ($isEasy) echo "C'est facile !"; else echo "C'est difficile !" ?></p>
    </div>

    <!-- exercice 3 -->
    <h2>Exercice 3</h2>
    <div class="my-text">
        <p>
        <?php 
        echo 'Vous êtes '; 
        if ($isMan) echo "un homme"; else echo "une femme";
        echo ' et vous êtes ';
        if ($age >= 18) echo "majeur"; else echo "mineur";
        ?>
        </p>
    </div>

    <!-- exercice 4 -->
    <h2>Exercice 4</h2>
    <div class="my-text">
        <p><?php switch ($magnitude) {
            case 1:
                echo "Micro-séisme impossible à ressentir.";
                break;
            case 2:
                echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
                break;
            case 3:
                echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
                break;
            case 4:
                echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
                break;
            case 5:
                echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
                break;
            case 6:
                echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
                break;
            case 7:
                echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
                break;
            case 8:
                echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
                break;
            case 9:
                echo "Séisme capable de tout détruire sur une très vaste zone.";
                break;
        }?></p>
    </div>

    <!-- exercice 5 -->
    <h2>Exercice 5</h2>
    <div class="my-text">
        <p><?php if ($sexe != 'Homme') echo 'C\'est une développeuse !!!'; else echo 'C\'est un développeur !!!'?></p>
    </div>

    <!-- exercice 6 -->
    <h2>Exercice 6</h2>
    <div class="my-text">
        <p><?php if ($myAge >= 18) echo 'Tu es majeur'; else echo 'Tu n\'es pas majeur'?></p>
    </div>

    <!-- exercice 7 -->
    <h2>Exercice 7</h2>
    <div class="my-text">
        <p><?php if (!$exe7Var) echo 'c\'est pas bon !!!'; else echo 'c\'est ok !!'?></p>
    </div>

    <!-- exercice 8 -->
    <h2>Exercice 8</h2>
    <div class="my-text">
        <p><?php if ($exe8Var) echo 'c\'est ok !!'; else echo 'c\'est pas bon !!!'?></p>
    </div>

</body>
</html>