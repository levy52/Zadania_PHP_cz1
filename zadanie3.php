<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>
Zadanie 3 <br>
Stwórz zmienną tablicą owoce, jako wartości wpisz nazwy swoich ulubionych owoców. Na stronie<br>
wypisz:<br>
Pierwszy owoc to: … (w miejsce kropek pierwszy element tablicy)<br>
Ostatni owoc to: … (w miejsce kropek ostatni element tablicy)<br>
posortuj tablice alfabetycznie.<br>
W pętli wypisz wszystkie owoce (każdy w nowej linii)<br>
największą jako największa z liczb 2,8,6 to 8.<br>
<br><br><br>

<?php

// Tworzenie zmiennej tablicy z ulubionymi owocami
$owoce = array("banan", "truskawka", "jabłko", "kiwi", "gruszka");

// Wypisanie pierwszego i ostatniego elementu tablicy
echo "Pierwszy owoc to: " . $owoce[0] . "<br>";
echo "Ostatni owoc to: " . end($owoce) . "<br>";

// Sortowanie tablicy alfabetycznie
sort($owoce);

// Wypisanie wszystkich owoców w pętli
foreach ($owoce as $owoc) {
    echo $owoc . "<br>";
}

?>




</body>
</html>