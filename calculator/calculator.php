<?php
session_start();
if (!isset($_SESSION['result'])) { $_SESSION['result'] = '';}
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
</head>
<body>
    <div id="calculator">
        <form action="calculate.php" method="post">
            <h1>Calculator</h1>
            <p><?php echo $_SESSION['result'] ?></p>
            <input type="text" value="" id="usrInput" name="usrInput" autofocus>

            <div class="row">
                <input type="button" value="(" id="openPar">
                <input type="button" value=")" id="closePar">
                <input type="button" value="%" id="opMod">
                <input type="button" value="&divide;" id="opDiv">
            </div>
            <div class="row">
                <input type="button" value="7" id="n7">
                <input type="button" value="8" id="n8">
                <input type="button" value="9" id="n9">
                <input type="button" value="&times;" id="opTimes">
            </div>
            <div class="row">
                <input type="button" value="4" id="n4">
                <input type="button" value="5" id="n5">
                <input type="button" value="6" id="n6">
                <input type="button" value="-" id="opSub">
            </div>
            <div class="row">
                <input type="button" value="1" id="n1">
                <input type="button" value="2" id="n2">
                <input type="button" value="3" id="n3">
                <input type="button" value="+" id="opAdd">
            </div>
            <div class="row">
                <input type="button" value="0" id="n0">
                <input type="button" value="." id="coma">
                <input type="button" value="x²" id="pow">
                <input type="button" value="&#8730;" id="sqrt">
            </div>
            <div class="row">
                <input type="submit" value="=" id="equal" class="big">
                <input type="button" value="del" id="del">
                <input type="button" value="C" id="clear">
            </div>
        </form>
    </div>
</body>
</html>