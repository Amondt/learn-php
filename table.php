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


</body>
</html>