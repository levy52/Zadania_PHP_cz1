<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 7</title>
</head>
<body>
Zadanie 7 <br>
W pliku waluty przygotuj pole jedno pole do wprowadzania kwoty. W polach typu radio wpisz:<br>
EUR -> USA<br>
EUR->PL<br>
PL -> USA<br>
USA->EUR<br>
PL>EUR<br>
Po wciśnięciu przycisku submit dane przesyłane są skryptu, skrypt przelicza kwotę zależnie od<br>
wybranego pola radio. Kwoty przeliczników mogą być fikcyjne. (można zastosować tablicę) <br>
<br><br><br>

	<?php
	// odczytanie przesłanej kwoty
	$kwota = $_POST["kwota"];

	// odczytanie wybranego przelicznika
	$przelicznik = $_POST["przelicznik"];

	// tablica przeliczników
	$przeliczniki = array(
		"eur_usa" => 1.2,
		"eur_pln" => 4.5,
		"pln_usa" => 0.3,
		"usa_eur" => 0.8,
		"pln_eur" => 0.2
	);

	// przeliczenie kwoty
	if (!is_numeric($kwota)) {
		echo "Błędne dane!";
	} else {
		if (!isset($przeliczniki[$przelicznik])) {
			echo "Nieprawidłowy przelicznik!";
		} else {
			$wynik = $kwota * $przeliczniki[$przelicznik];
			echo "Wynik: " . $wynik;
		}
	}
	?>

</body>
</html>