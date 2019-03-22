<?php
session_start();
$_SESSION['result'] = '';

function possibleCalc($calcStr) {
    $opS = ['+', '-', '*', '/', '%', '|', ')'];
    $opE = ['+', '-', '*', '/', '%', '&', '('];
    $opBase = ['+', '-', '*', '/', '%'];
    $openPar = false;
    if ( in_array($calcStr[0], $opS) || in_array($calcStr[strlen($calcStr)-1], $opE) ) { return false; }
    for ($i=0; $i<strlen($calcStr); $i++) {
        if ($calcStr[$i] == '(') { $openPar = true; } else if ($calcStr[$i] == ')') { $openPar = false; }
        if (in_array($calcStr[$i], $opE) && in_array($calcStr[$i+1], $opS)) { return false; }
        if ($calcStr[$i] == '|' && !in_array($calcStr[$i+1], $opS)) { return false; }
        if ($calcStr[$i] == '&' && !in_array($calcStr[$i-1], $opE)) { return false; }
    }
    if ($openPar) { return false;}
    return true;
}

function standardiseCalc($calcStr) {
    $calcStr = preg_replace('/ /', '',  $calcStr);
    $calcStr = preg_replace('/÷/', '/', $calcStr);
    $calcStr = preg_replace('/×/', '*', $calcStr);
    // !! ------   & means √    ----- !!
    $calcStr = preg_replace('/√/', '&', $calcStr);
    $calcStr = preg_replace('/²/', '|', $calcStr);
    $calcStr = preg_replace('/,/', '.', $calcStr);
    return $calcStr;
}

$calc = $_POST['usrInput'];
$calc = standardiseCalc($calc);


if (preg_match('/[^0-9\/\*\-\+\.\,\|()%&]/', $calc) || !possibleCalc($calc)) {

    $_SESSION['result'] = 'Error';
    echo 'error';
} else {

    // Separate numbers (int or double) and place em into an array "calcArr", in calcul order
    $calcArr = [];
    $operators = ['+', '-', '*', '/', '%', '|', '&', '(', ')'];
    $curNum = '';
    for ($i=0; $i<strlen($calc); $i++) {
        if (in_array($calc[$i], $operators)) {
            if ($curNum != '') { array_push($calcArr, $curNum);}
            $curNum = '';
            array_push($calcArr, $calc[$i]);
        } else /* (is_numeric($calc[$i]) || === '.') */ {
            $curNum .= $calc[$i];
        }
    }
    array_push($calcArr, $curNum);

    print_r($calcArr);
    echo '<br>' . $calc . '<br>';
    echo '<br>' . ('15.5' + '5') . ' | ' . gettype(('15.5' + '5')) . '<br>';
    $_SESSION['result'] = '';
}


header('Location: calculator.php');