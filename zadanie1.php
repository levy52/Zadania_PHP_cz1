<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 1</title>
</head>
<body>
Zadanie 1 – proste <br>
Do zmiennych wpisz następujące wartości<br>
$numer=4;<br>
$numer2=”4”<br>
Za pomocą instrukcji warunkowej sprawdź czy obie zmienne są równe (operator ==)<br>
za pomocą kolejnej instrukcji warunkowej sprawdź czy zmienne są identyczne (operator ===)<br>
W komentarzu // opis różnice między operatorami == oraz ===<br>
<br><br><br>
<?php

$numer = 4;
$numer2 = "4";

// sprawdzenie czy zmienne są równe (operator ==)
if ($numer == $numer2) {
    echo "Zmienne są równe (operator ==)";
} else {
    echo "Zmienne nie są równe (operator ==)";
}

echo "<br>";

// sprawdzenie czy zmienne są identyczne (operator ===)
if ($numer === $numer2) {
    echo "Zmienne są identyczne (operator ===)";
} else {
    echo "Zmienne nie są identyczne (operator ===)";
}

// różnica między operatorem == a ===
// operator == porównuje wartości zmiennych, a więc pozwala na konwersję typów danych (np. string na int), jeśli jest to konieczne, aby dokonać porównania
// operator === porównuje wartości zmiennych oraz typy danych, a więc nie dokonuje konwersji typów danych, co może prowadzić do różnych wyników w porównaniach
?>


</body>
</html>