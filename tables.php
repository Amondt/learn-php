<?php
    // Exe 1 / 2
    $month = ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august',
            'september', 'october', 'december'];
    
    // Exe 3
    $departements = ['01' => 'Ain', '03' => 'Allier', '07' => 'Ardèche', '15' => 'Cantal', 
                    '26' => 'Drôme', '38' => 'Isère', '42' => 'Loire', '43' => 'Haute-Loire',
                    '63' => 'Puy-de-Dôme', '69' => 'Rhône', '73' => 'Savoie', '74' => 'Haute-Savoie'];
    $departements['57'] = 'Moselle';

    // var_dump($departements);

    // Exe 4
    $mailing = array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn PHP - Tables</title>
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
            max-height: 30vh;
            overflow-y: scroll;
        }
    </style>
</head>
<body>
    <h1>Tables</h1>

    <!-- exercice 1 / 2 -->
    <h2>Exercice 1 / 2</h2>
    <div class="my-text">
        <p><?php echo $month[2] . '<br>' . $month[5] ?></p>
    </div>

    <!-- exercice 3 -->
    <h2>Exercice 3</h2>
    <div class="my-text">
        <p><?php foreach ($departements as $key => $value) { echo 'Le département ' . $value . ' a le numéro ' . $key . '<br><br>'; } ?></p>
    </div>

    <!-- exercice 4 -->
    <h2>Exercice 4</h2>
    <div class="my-text">
        <p><?php foreach ($mailing as $value) { echo "Salut " . $value . ", devine quoi ! Je me marie samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)<br><br>"; } ?></p>
    </div>

</body>
</html>