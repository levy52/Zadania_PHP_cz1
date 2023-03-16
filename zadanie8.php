<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 8</title>
</head>
<body>
Zadanie 8 <br>
Odczytaj plik tekstowy sedziowie.txt za pomocą polecenia $tablica=file(sedziowie.txt). Wyświetl na<br>
stronie dane z tego pliku. Każdego sędziego w osobnej linii.<br>
<br><br><br>

<?php
// odczytaj plik sedziowie.txt i zapisz jego zawartość do tablicy
$tablica = file("sedziowie.txt");

// wyświetl każdego sędziego w osobnej linii
foreach ($tablica as $sedzia) {
    echo $sedzia . "<br>";
}
?>


</body>
</html>