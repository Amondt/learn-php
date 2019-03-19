<?php
    $firstName = 'Alexandre';
    $lastName = 'Mondt';
    $msg = 'coucou';
    $num = 24;
    $isMan = false;

    // Exe 1
    function vrai() {
        return true;
    }

    // Exe 2
    function returnSameString($s) {
        return $s;
    }

    // Exe 3
    function fullName($firstName, $lastName) {
        return $firstName . ' ' . $lastName;
    }

    // Exe 4
    function testNumbers($n1, $n2) {
        if ($n1 > $n2) {
            return 'Le premier nombre est plus grand';
        } else if ($n1 == $n2) {
            return 'Les deux nombres sont identiques';
        } else {
            return 'Le premier nombre est plus petit';
        }
    }

    // Exe 5
    function concatNumString($n, $s) {
        return $n . ' ' . $s;
    }

    // Exe 6
    function present($firstName, $lastName, $age) {
        return 'Bonjour ' . fullName($firstName, $lastName) . ', tu as ' . $age . ' ans.';
    }

    // Exe 7
    function present2($age, $isMan) {
        return 'Vous êtes ' . (($isMan) ? 'un homme' : 'une femme') . ' et vous êtes ' . (($age >= 18) ? 'majeur' : 'mineur');
    }

    // Exe 8
    function sum($n1 = 1, $n2 = 2, $n3 = 4) {
        return $n1 + $n2 + $n3;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn PHP - Functions</title>
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
            /* max-height: 20vh; */
            /* overflow-y: scroll; */
        }
    </style>
</head>
<body>
    <h1>Functions</h1>

    <!-- exercice 1 -->
    <h2>Exercice 1</h2>
    <div class="my-text">
        <p><?php if (vrai()) echo vrai() ?></p>
    </div>

    <!-- exercice 2 -->
    <h2>Exercice 2</h2>
    <div class="my-text">
        <p><?php echo returnSameString($msg) ?></p>
    </div>

    <!-- exercice 3 -->
    <h2>Exercice 3</h2>
    <div class="my-text">
        <p><?php echo fullName($firstName, $lastName) ?></p>
    </div>

    <!-- exercice 4 -->
    <h2>Exercice 4</h2>
    <div class="my-text">
        <p><?php echo testNumbers(4, 3) ?></p>
    </div>

    <!-- exercice 5 -->
    <h2>Exercice 5</h2>
    <div class="my-text">
        <p><?php echo concatNumString($num, $msg) ?></p>
    </div>

    <!-- exercice 6 -->
    <h2>Exercice 6</h2>
    <div class="my-text">
        <p><?php echo present($firstName, $lastName, $num) ?></p>
    </div>

    <!-- exercice 7 -->
    <h2>Exercice 7</h2>
    <div class="my-text">
        <p><?php echo present2($num, $isMan) ?></p>
    </div>

    <!-- exercice 8 -->
    <h2>Exercice 8</h2>
    <div class="my-text">
        <p><?php echo sum() ?></p>
    </div>

</body>
</html>