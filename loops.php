<?php
    // Exe 2 / 3
    $number = rand(1, 100);

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
            width: 50%;
            margin: 20px auto;
            padding: 10px;
            border-radius: 3px;
            border: 1px solid #000;
            text-align: center;
            max-height: 20vh;
            overflow-y: scroll;
        }
    </style>
</head>
<body>
    <h1>Loops</h1>

    <!-- exercice 1 -->
    <h2>Exercice 1</h2>
    <div class="my-text">
        <p>
        <?php 
        $i = 0;
        while ($i <= 10) {
            echo $i++.' ';
        }
        ?>
        </p>
    </div>

    <!-- exercice 2 -->
    <h2>Exercice 2</h2>
    <div class="my-text">
        <p>
        <?php 
        $i = 0;
        while ($i <= 20) {
            echo $i++ * $number . ' ';
        }
        ?>
        </p>
    </div>

    <!-- exercice 3 -->
    <h2>Exercice 3</h2>
    <div class="my-text">
        <p>
        <?php 
        $i = 100;
        while ($i > 10) {
            echo $i-- * $number . ' ';
        }
        ?>
        </p>
    </div>

    <!-- exercice 4 -->
    <h2>Exercice 4</h2>
    <div class="my-text">
        <p>
        <?php 
        $i = 1;
        while ($i < 10) {
            echo $i . ' ';
            $i += $i / 2;
        }
        ?>
        </p>
    </div>

    <!-- exercice 5 -->
    <h2>Exercice 5</h2>
    <div class="my-text">
        <p><?php for ($i = 0; $i <= 15; $i++) { 
            echo '<span style="color:blue;">' . ($i+1) . '</span> ' . 'On y arrive presque' . '<br>';}?></p>
    </div>

    <!-- exercice 6 -->
    <h2>Exercice 6</h2>
    <div class="my-text">
        <p><?php for ($i = 20; $i > 0; $i--) { echo 'C\'est presque bon' . '<br>';}?></p>
    </div>

    <!-- exercice 7 -->
    <h2>Exercice 7</h2>
    <div class="my-text">
        <p><?php for ($i = 1; $i <= 100; $i += 15) { echo 'On tient le bon bout' . '<br>';}?></p>
    </div>

    <!-- exercice 8 -->
    <h2>Exercice 8</h2>
    <div class="my-text">
        <p><?php for ($i = 200; $i >= 0; $i -= 12) { echo 'Enfin !!!' . '<br>';}?></p>
    </div>

</body>
</html>