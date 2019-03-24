<?php
session_start();
$_SESSION['result'] = '';

function possibleCalc($calcStr) {
    $opS = ['+', '-', '*', '/', '%', '@', ')'];
    $opE = ['+', '-', '*', '/', '%', '&', '('];
    $opBase = ['+', '-', '*', '/', '%'];
    $openPar = false;
    if ( in_array($calcStr[0], $opS) || in_array($calcStr[strlen($calcStr)-1], $opE) ) { return false; }
    for ($i=0; $i<strlen($calcStr); $i++) {
        if ($calcStr[$i] == '(') { $openPar = true; } else if ($calcStr[$i] == ')') { $openPar = false; }
        if (in_array($calcStr[$i], $opE) && in_array($calcStr[$i+1], $opS)) { return false; }
        if ($calcStr[$i] == '@' && !in_array($calcStr[$i+1], $opS) && $i < strlen(strlen($calcStr)-1)) { return false; }
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
    $calcStr = preg_replace('/²/', '@', $calcStr);
    $calcStr = preg_replace('/,/', '.', $calcStr);
    return $calcStr;
}

function createCalcArray($calcStr) {
    // Separate numbers (int or double) and place em into an array "calcArr", in calcul order
    $calcArray = [];
    $operators = ['+', '-', '*', '/', '%', '@', '&', '(', ')'];
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
    while (sizeof($calcArr) > 1) {
        $j = 0;
        while ($j < sizeof($calcArr)) {
            displayArr($calcArr);
            echo 'el: ' . $calcArr[$j] . '<br>type of el: ' . gettype($calcArr[$j]) . '<br>$j: ' . $j . "<br>";
            echo print_r($calcArr) . '<br>';
            // Parenthesis
            if ($calcArr[$j] == '(' && $calcArr[$j+2] == ')') {
                array_splice($calcArr, $j, 1);
                array_splice($calcArr, $j+1, 1);
                echo 'parenthesis remove' . '<br>';
            // pow
            } else if ($calcArr[$j] == '@' && $calcArr[$j-1] != ')') {
                echo 'pow ' . $calcArr[$j-1] . '<br>';
                $res = strval(pow($calcArr[$j-1], 2));
                echo gettype($res) . '<br>';
                array_splice($calcArr, $j-1, 2);
                array_splice($calcArr, $j-1, 0, $res);
            // sqrt
            } else if ($calcArr[$j] == '&' && $calcArr[$j+1] != '(') {
                echo 'sqrt ' . $calcArr[$j+1] . '<br>';
                $res = strval(sqrt($calcArr[$j+1]));
                array_splice($calcArr, $j, 2);
                array_splice($calcArr, $j, 0, $res);
            // Multiply
            } else if ($calcArr[$j] == '*' && $calcArr[$j+1] != '(' && $calcArr[$j-1] != ')' && $calcArr[$j+1] != '&') {
                echo 'multiply : ' . $calcArr[$j-1] . ' * ' . $calcArr[$j+1] . '<br>';
                $res = strval($calcArr[$j-1] * $calcArr[$j+1]);
                array_splice($calcArr, $j-1, 3);
                array_splice($calcArr, $j-1, 0, $res);
            // Divide
            } else if ($calcArr[$j] == '/' && $calcArr[$j+1] != '(' && $calcArr[$j-1] != ')' && $calcArr[$j+1] != '&') {
                if ($calcArr[$j+1] == 0) {
                    echo 'division per ' . $calcArr[$j+1] . ' (IS 0)' . '<br>';
                    $calcArr = ['Division by 0 impossible'];
                    return $calcArr;
                } else {
                    echo 'division per ' . $calcArr[$j+1] . ' (IS NOT 0)' . '<br>';
                    $res = strval($calcArr[$j-1] / $calcArr[$j+1]);
                    array_splice($calcArr, $j-1, 3);
                    array_splice($calcArr, $j-1, 0, $res);
                }
            // Modulo
            } else if ($calcArr[$j] == '%' && $calcArr[$j+1] != '(' && $calcArr[$j-1] != ')' && $calcArr[$j+1] != '&') {
                echo 'modulo : ' . $calcArr[$j-1] . ' % ' . $calcArr[$j+1] . "<br>";
                $res = strval($calcArr[$j-1] % $calcArr[$j+1]);
                array_splice($calcArr, $j-1, 3);
                array_splice($calcArr, $j-1, 0, $res);
            // Addition
            } else if ($calcArr[$j] == '+' && $calcArr[$j+1] != '(' && $calcArr[$j-1] != ')' && $calcArr[$j+1] != '&') {
                echo 'addition : ' . $calcArr[$j-1] . ' + ' . $calcArr[$j+1] . '<br>';
                $res = strval($calcArr[$j-1] + $calcArr[$j+1]);
                array_splice($calcArr, $j-1, 3);
                array_splice($calcArr, $j-1, 0, $res);
            // Substraction
            } else if ($calcArr[$j] == '-' && $calcArr[$j+1] != '(' && $calcArr[$j-1] != ')' && $calcArr[$j+1] != '&') {
                echo 'substraction : ' . $calcArr[$j-1] . ' - ' . $calcArr[$j+1] . '<br>';
                $res = strval($calcArr[$j-1] - $calcArr[$j+1]);
                array_splice($calcArr, $j-1, 3);
                array_splice($calcArr, $j-1, 0, $res);
            }
            $j++;
            echo '<br>';
        }
    }
    return $calcArr;
}


// ! <----- TODO gestion +/- ----->
$calc = $_POST['usrInput'];
// $calc = '45 / ((2² + 3²) - 13)';
// $calc = "5.3×5²×(5.1+6÷8.4)+√((41-3-42.256)*6)";
// 45.8+84-(785.6*2)%454.2
// $calc = "5/0";
$calc = standardiseCalc($calc);
$calcArr = createCalcArray($calc);

if (preg_match('/[^0-9\/\*\-\+\.\,\@()%&]/', $calc) || !possibleCalc($calc)) {

    $_SESSION['result'] = 'Error';
    echo 'error<br>';
    print_r($calcArr);
    echo '<br>' . $calc . '<br>';

} else {
    echo 'pass<br>';
    print_r($calcArr);
    echo '<br>';
    $result = calculate($calcArr);
    print_r($result);
    if (is_nan($result[0])) {
        $_SESSION['result'] = 'Calcul error';
    } else {
        $_SESSION['result'] = number_format((float)$result[0], 4, '.', '');
    }
}

header('Location: calculator.php');