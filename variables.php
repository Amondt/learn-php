<?php
    //Exe 1
    $nom = "Mondt";
    $prenom = "Alexandre";
    $age = 24;
    $msg = 'Bonjour ' . $prenom . ', enfant de la famille ' . $nom . " ayant atteint l'age de " . $age . " ans!";

    // Exe2
    $km = 1;

    // Exe 3
    $myVars = ['Coucou', 15, 7.5, true];
    // $myString = 'Coucou';
    // $myInt = 15;
    // $myFloat = 7.5;
    // $myBool = true;

    // Exe 4
    $myInt = NULL;

    // Exe 5
    $sum = 3 + 4;
    $mult = 5 * 20;
    $div = 45 / 5;

    // Exe 6
    $startPrice = 785;
    $reduce = 30 * $startPrice / 100;
    $newPrice = $startPrice - $reduce;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn PHP - Variables</title>
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
    <h1>Variables</h1>

    <!-- PHP exercice 1 -->
    <h2>Exercice 1</h2>
    <div class="my-text">
        <p><?php echo $msg ?></p>
    </div>

    <!-- PHP exercice 2 -->
    <h2>Exercice 2</h2>
    <div class="my-text">
        <p><?php echo $km ?></p>
    </div>
    <?php $km = 3 ?>
    <div class="my-text">
        <p><?php echo $km ?></p>
    </div>
    <?php $km = 125 ?>
    <div class="my-text">
        <p><?php echo $km ?></p>
    </div>

    <!-- PHP exercice 3 -->
    <h2>Exercice 3</h2>
    <div class="my-text">
        <p><?php foreach ($myVars as $value) echo $value . '<br>' ?></p>
    </div>

    <!-- PHP exercice 4 -->
    <h2>Exercice 4</h2>
    <div class="my-text">
        <p><?php echo $myInt ?></p>
    </div>
    <?php $myInt = 10 ?>
    <div class="my-text">
        <p><?php echo $myInt ?></p>
    </div>

    <!-- PHP exercice 5 -->
    <h2>Exercice 5</h2>
    <div class="my-text">
        <p><?php echo $sum . '<br>' . $mult . '<br>' . $div ?></p>
    </div>

    <!-- PHP exercice 6 -->
    <h2>Exercice 6</h2>
    <div class="my-text">
        <p><?php echo 'Le prix de base était de ' . $startPrice . '€' . '<br>' 
        . 'La réduction de 30% vaut ' . $reduce . '€' . '<br>'
        . 'Le prix final vaut ' . $newPrice . '€'?></p>
    </div>
    
</body>
</html>