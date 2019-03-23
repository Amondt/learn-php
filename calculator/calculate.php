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
        if ($calcStr[$i] == '|' && !in_array($calcStr[$i+1], $opS) && $i < strlen(strlen($calcStr)-1)) { return false; }
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

function createCalcArray($calcStr) {
    // Separate numbers (int or double) and place em into an array "calcArr", in calcul order
    $calcArray = [];
    $operators = ['+', '-', '*', '/', '%', '|', '&', '(', ')'];
    $curNum = '';
    for ($i=0; $i<strlen($calcStr); $i++) {
        if (in_array($calcStr[$i], $operators)) {
            if ($curNum != '') { array_push($calcArray, $curNum);}
            $curNum = '';
            array_push($calcArray, $calcStr[$i]);
        } else /* (is_numeric($calcStr[$i]) || === '.') */ {
            $curNum .= $calcStr[$i];
        }
    }
    array_push($calcArray, $curNum);
    if ($calcArray[sizeof($calcArray)-2] === ')') { 
        array_pop($calcArray);
    }
    return $calcArray;
}

function displayArr($arr) {
    for ($i=0; $i<sizeof($arr); $i++) {
        echo $arr[$i] . ' ';
    }
    echo '<br>';
}

function calculate($calcArr) {
    $j = 0;
    while (sizeof($calcArr) > 1) {
        displayArr($calcArr);
        echo $j . '<br>' . sizeof($calcArr) . "<br><br>";
        if ($calcArr[$j] == '(' && $calcArr[$j+2] == ')') {
            array_splice($calcArr, $j, 1);
            array_splice($calcArr, $j+1, 1);
        } else if ($calcArr[$j] == '|' && $calcArr[$j-1] != ')') {
            $res = pow($calcArr[$j-1], 2);
            array_splice($calcArr, $j-1, 2);
            array_splice($calcArr, $j-1, 0, $res);
        } else if ($calcArr[$j] == '&' && $calcArr[$j+1] != '(') {
            $res = sqrt($calcArr[$j+1]);
            array_splice($calcArr, $j, 2);
            array_splice($calcArr, $j, 0, $res);
        } else if ($calcArr[$j] == '*' && $calcArr[$j+1] != '(' && $calcArr[$j-1] != ')' && $calcArr[$j+1] != '&') {
            $res = $calcArr[$j-1] * $calcArr[$j+1];
            array_splice($calcArr, $j-1, 3);
            array_splice($calcArr, $j-1, 0, $res);
        }else if ($calcArr[$j] == '/' && $calcArr[$j+1] != '(' && $calcArr[$j-1] != ')' && $calcArr[$j+1] != '&') {
            $res = $calcArr[$j-1] / $calcArr[$j+1];
            array_splice($calcArr, $j-1, 3);
            array_splice($calcArr, $j-1, 0, $res);
        }else if ($calcArr[$j] == '%' && $calcArr[$j+1] != '(' && $calcArr[$j-1] != ')' && $calcArr[$j+1] != '&') {
            $res = $calcArr[$j-1] % $calcArr[$j+1];
            array_splice($calcArr, $j-1, 3);
            array_splice($calcArr, $j-1, 0, $res);
        } else if ($calcArr[$j] == '+' && $calcArr[$j+1] != '(' && $calcArr[$j-1] != ')' && $calcArr[$j+1] != '&') {
            $res = $calcArr[$j-1] + $calcArr[$j+1];
            array_splice($calcArr, $j-1, 3);
            array_splice($calcArr, $j-1, 0, $res);
        } else if ($calcArr[$j] == '-' && $calcArr[$j+1] != '(' && $calcArr[$j-1] != ')' && $calcArr[$j+1] != '&') {
            $res = $calcArr[$j-1] - $calcArr[$j+1];
            array_splice($calcArr, $j-1, 3);
            array_splice($calcArr, $j-1, 0, $res);
        }
        $j++;
        if ($j >= sizeof($calcArr)) {
            $j = 0;
        }
    }
    return $calcArr;
}

$calc = $_POST['usrInput'];
// $calc = "5.3×5²×(5.1+6÷8.4)+√((41-3-42.256)*6)";
$calc = standardiseCalc($calc);
$calcArr = createCalcArray($calc);

if (preg_match('/[^0-9\/\*\-\+\.\,\|()%&]/', $calc) || !possibleCalc($calc)) {

    $_SESSION['result'] = 'Error';
    echo 'error<br>';
    print_r($calcArr);
    echo '<br>' . $calc . '<br>';

} else {
    echo 'pass<br>';
    print_r($calcArr);
    echo '<br>' . $calc . '<br>';

    $result = calculate($calcArr);
    print_r($result);
    if (is_nan($result[0])) {
        $_SESSION['result'] = 'Calcul error';
    } else {
        $_SESSION['result'] = $result[0];
    }
}

// 45.8+84-(785.6*2)%454.2
header('Location: calculator.php');