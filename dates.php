<?php
date_default_timezone_set('Europe/Paris');
// --- La setlocale() fonctionnne pour strftime mais pas pour DateTime->format()
setlocale(LC_TIME, 'fr_FR.utf8','fra');// OK
// strftime("jourEnLettres jour moisEnLettres annee") de la date courante
$dates = [
    'jours' => ['dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'],
    'mois' => ['janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Learn PHP - Dates</title>
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
            margin: 40px auto 10px auto;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input {
            margin: 10px;
            padding: 5px;
        }
        button {
            margin: 10px;
            padding: 5px;
        }
        select {
            margin: 10px;
            padding: 5px;
            align-self: flex-start;
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
    <h1>Dates</h1>

    <!-- exercices -->
    <h2>Exercices</h2>
    <div class="my-text">
        <!-- exe 1 -->
        <p><?php echo date("d/m/Y") ?></p>
        <br>
        <!-- exe 2 -->
        <p><?php echo date("d-m-Y") ?></p>
        <br>
        <!-- exe 3 -->
        <p><?php echo date("l d F Y") ?></p>
        <br>
        <p><?php echo strftime("%A %d %B %Y")  ?></p>
        <br>
        <!-- exe 4 -->
        <p><?php echo time() . ' | ' . strtotime('2016-09-02 15:00') ?></p>
        <br>
        <!-- exe 5 -->
        <p><?php echo 'Days of difference : ' . round((time() - strtotime("2016-05-16") ) / (60*60*24) ) ?></p>
        <br>
        <!-- exe 6 -->
        <p><?php echo 'No of days in feb 2017 : ' . round((strtotime('2017-03-01') - strtotime('2017-02-01')) / (60*60*24)) ?></p>
        <br>
        <!-- exe 7 -->
        <p><?php echo 'Add 20 days to actual date : ' . date('d-m-Y', time()+ 20*24*60*60)  ?></p>
        <br>
        <!-- exe 8 -->
        <p><?php echo 'Rem 22 days to actual date : ' . date('d-m-Y', time()- 22*24*60*60)  ?></p>
    </div>

    <!-- TP -->
    <h2>TP</h2>
    <div class="my-text">
        <form action="calendarApp.php" method="post">
            <label for="date">Choose your month</label>
            <input type="month" id="date" name="date" min="1900-01">

            <button type="submit">Send</button>
        
        </form>
    </div>

</body>
</html>