<?php
session_start();
if (!isset($_SESSION['result'])) { $_SESSION['result'] = '';}
if (!isset($_SESSION['history'])) { $_SESSION['history'] = []; }
// $_SESSION['history'] = [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator App</title>
    <script src="./js/scripts.js"></script>
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
    <!-- <div id='debug'><?php echo print_r($_SESSION['history']) . '<br>' . count($_SESSION['history']) ?></div> -->
    <div id="calculator">
        <form action="calculate.php" method="post">
            <h1>Calculator</h1>
            
            <p><?php 
                if (count($_SESSION['history'] > 0)) { 
                    for ($i=(count($_SESSION['history'])-1); $i>=0; $i--) {
                        echo $_SESSION['history'][$i] . '<br>'; 
                    }
                } else { echo '';}
            ?></p>

            <input type="text" value="" id="usrInput" name="usrInput" autocomplete="off" autofocus>

            <div class="row">
                <input type="button" value="(" id="openPar" class="border lighterBtn">
                <input type="button" value=")" id="closePar" class="border lighterBtn">
                <input type="button" value="%" id="opMod" class="border lighterBtn">
                <input type="button" value="&divide;" id="opDiv" class='noBorder lighterBtn'>
            </div>
            <div class="row">
                <input type="button" value="7" id="n7" class="border">
                <input type="button" value="8" id="n8" class="border">
                <input type="button" value="9" id="n9" class="border">
                <input type="button" value="&times;" id="opTimes" class='noBorder lighterBtn'>
            </div>
            <div class="row">
                <input type="button" value="4" id="n4" class="border">
                <input type="button" value="5" id="n5" class="border">
                <input type="button" value="6" id="n6" class="border">
                <input type="button" value="-" id="opSub" class='noBorder lighterBtn'>
            </div>
            <div class="row">
                <input type="button" value="1" id="n1" class="border">
                <input type="button" value="2" id="n2" class="border">
                <input type="button" value="3" id="n3" class="border">
                <input type="button" value="+" id="opAdd" class='noBorder lighterBtn'>
            </div>
            <div class="row">
                <input type="button" value="0" id="n0" class="border">
                <input type="button" value="." id="coma" class="border">
                <input type="button" value="del" id="del" class="border">
                <input type="button" value="&#8730;" id="sqrt" class='noBorder lighterBtn'>
            </div>
            <div class="row botRow">
                <input type="submit" value="=" id="equal" class="">
                <input type="button" value="C" id="clear" class=''>
                <input type="button" value="x²" id="pow" class="noBorder lighterBtn">
            </div>
        </form>
    </div>
</body>
</html>