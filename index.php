<?php

// %2B => +
// %2A => *
// %2F => /
// -   => -

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];

switch ($c) {
    case "+":
        echo $a + $b;
        break;
    case "-":
        echo $a - $b;
        break;
    case "/":
        echo $a / $b;
        break;
    case "*":
        echo $a * $b;
        break;
    default:
        echo "не правильная операция";
}
