<?php
date_default_timezone_set('Europe/Paris');
// --- La setlocale() fonctionnne pour strftime mais pas pour DateTime->format()
setlocale(LC_TIME, 'fr_FR.utf8','fra');// OK
// strftime("jourEnLettres jour moisEnLettres annee") de la date courante
$timestamp = strtotime($_POST['date']);
$date = strftime("%B %Y", $timestamp);
$firstDayNo = strftime("%u", $timestamp);

$timestampNext = strtotime('+1 month', $timestamp);

$noDayMonth = round(($timestampNext - $timestamp) / (60*60*24));

echo $firstDayNo;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar App</title>
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
        p {
            padding: 20px;
        }
        .calendar {
            margin: 20px auto;
            padding: 10px;
            width: 80%;
            border-radius: 3px;
            border: 1px solid #555;
            text-align: center;
        }
        button {
        padding: 5px;
        display: block;
        margin: auto;
        font-size: 1em;
        }
        a {
            text-decoration: none;
        }
        ul {
            list-style: none;
        }
        li {
            width: 14.2857%;
            margin-top: 20px;
        }
        .days {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }
        .days-no {
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <h1>Calendar</h1>

    <div class="calendar">
        <p><b><?php echo ucwords($date)  ?></b></p>

        <ul class='days'>
            <li>Lundi</li>
            <li>Mardi</li>
            <li>Mercredi</li>
            <li>Jeudi</li>
            <li>Vendredi</li>
            <li>Samedi</li>
            <li>Dimanche</li>
        </ul>
        <ul class="days-no">
            <?php 
            for ($i = 1; $i < ($noDayMonth + $firstDayNo); $i++) {
                if ($i < $firstDayNo) {
                    echo '<li></li>';
                } else {
                    echo '<li>' . ($i +1 - $firstDayNo) . '</li>';
                }
            }
            ?>
        </ul>
    </div>
    <a href="dates.php"><button>Back</button></a>
</body>
</html>