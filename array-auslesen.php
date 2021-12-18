<?php
	$marken = ["BMW", "Renault", "Opel", "Ford", "Maserati"];

	if (!empty($_GET['marke'])) {
		$ausgewaehlt = $_GET['marke'];

		for ($i = 0; $i < count($marken); $i++) {
			if ($ausgewaehlt == $marken[$i]) {
				$text = $ausgewaehlt . " vorhanden";
				break;
			} else {
				$text = "Marke nicht vorhanden";
			}
		}
		echo $text;
	}
?>