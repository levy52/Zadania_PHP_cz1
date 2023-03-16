<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
Zadanie 2 - proste <br>
Do trzech zmiennych wpisz wartości liczbowe. Za pomocą instrukcji warunkowych wypisz liczbę<br>
największą jako największa z liczb 2,8,6 to 8.<br>
<br><br><br>

<?php

$a = 2;
$b = 8;
$c = 6;

if ($a > $b && $a > $c) {
    echo "Największa liczba to: " . $a;
} elseif ($b > $a && $b > $c) {
    echo "Największa liczba to: " . $b;
} else {
    echo "Największa liczba to: " . $c;
}

?>



</body>
</html>