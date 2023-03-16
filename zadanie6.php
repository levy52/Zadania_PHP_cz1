<!DOCTYPE html>
<html>
<head>
	<title>Zadanie 6</title>
</head>
<body>
	<?php
	if (isset($_GET['start']) && isset($_GET['stop'])) {
		$start = $_GET['start'];
		$stop = $_GET['stop'];
		if (is_numeric($start) && is_numeric($stop)) {
			for ($i = $start; $i <= $stop; $i++) {
				echo "$i ";
			}
		} else {
			echo "Nieprawidłowe dane wejściowe";
		}
	} else {
		echo "Wypełnij wszystkie pola formularza";
	}
	?>
</body>
</html>
