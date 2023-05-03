<!DOCTYPE html>
<html>
<head>
	<title>Form di censura</title>
</head>
<body>
	<form action="myscript.php" method="post">
		<label for="paragrafo">Inserisci il paragrafo:</label><br>
		<textarea id="paragrafo" name="paragrafo" rows="8" cols="80"></textarea><br>
		<label for="parola">Inserisci la parola da censurare:</label><br>
		<input type="text" id="parola" name="parola"><br><br>
		<input type="submit" value="Censura">
	</form>
</body>
</html>