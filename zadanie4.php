<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 4</title>
</head>
<body>
Zadanie 4 <br>
Stwórz tablicę i uzupełnij ją wartościami różnego typu np. $dane=[12, "napis", 13.8, "produkt", 13]<br>
Wyświetl tylko wartości typu string, oblicz sumę liczb całkowitych.<br>
<br><br><br>

<?php

// Tworzenie zmiennej tablicy z wartościami różnego typu
$dane = array(12, "napis", 13.8, "produkt", 13);

// Wyświetlanie tylko wartości typu string
foreach ($dane as $wartosc) {
    if (is_string($wartosc)) {
        echo $wartosc . "<br>";
    }
}

// Obliczanie sumy liczb całkowitych
$suma = 0;
foreach ($dane as $wartosc) {
    if (is_int($wartosc)) {
        $suma += $wartosc;
    }
}
echo "Suma liczb całkowitych: " . $suma;

?>





</body>
</html>