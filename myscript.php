<!DOCTYPE html>
<html>
<head>
	<title>Risultato censura</title>
</head>
<body>
<?php

// Leggi i dati dal form
$paragrafo = $_POST["paragrafo"];
$parola_censurata = $_POST["parola"];

// Censura la parola
$paragrafo_censurato = str_replace($parola_censurata, '***', $paragrafo);

// Stampa il paragrafo censurato e la sua lunghezza
echo "<h2>Paragrafo censurato</h2>";
echo "<p>Lunghezza: " . strlen($paragrafo_censurato) . "</p>";
echo "<p>" . $paragrafo_censurato . "</p>";

?>
</body>
</html>
