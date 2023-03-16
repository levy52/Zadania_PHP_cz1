<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 5</title>
</head>
<body>
Zadanie 5 <br>
Napisz funkcję suma_parzystych, funcja pobiera trzy argumenty.<br>
Jeżeli którykolwiek parametr nie jest liczbą całkowitą funkcją zwraca napis "błędne dane"<br>
w przeciwnym wypadku funkcja zwraca sumę liczb parzystych podanych jako parametry.<br>
<br><br><br>

<?php

function suma_parzystych($liczba1, $liczba2, $liczba3) {
    if (!is_int($liczba1) || !is_int($liczba2) || !is_int($liczba3)) {
        return "błędne dane";
    }
    
    $suma = 0;
    if ($liczba1 % 2 == 0) {
        $suma += $liczba1;
    }
    if ($liczba2 % 2 == 0) {
        $suma += $liczba2;
    }
    if ($liczba3 % 2 == 0) {
        $suma += $liczba3;
    }
    return $suma;
}

// przykładowe wywołanie funkcji
echo suma_parzystych(2, 5, "test"); // powinno wyświetlić "błędne dane"
echo "<br>";
echo "<br>";
echo suma_parzystych(2, 5, 6); // powinno wyświetlić 8

?>

</body>
</html>