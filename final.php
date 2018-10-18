<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Nomes</title>
</head>
<body>
</body>

<?php
	$y=0;
	session_start();
	$var = $_SESSION["nome"];
	$var2= $_SESSION["dormir"];
	$var3= $_SESSION["azul"];
	$var4= $_SESSION["escritor"];
	$var5= $_SESSION["sala"];

	echo "<br>$var</br>";
	if ($var=="Brad Pitt")
		$y==$y++;
	echo "<br>$var2</br>";
	if ($var2=="Chão")
		$y==$y++;
	echo "<br>$var3</br>";
	if ($var3=="Smurff")
		$y==$y++;
	echo "<br>$var4</br>";
	if ($var4=="Jose de Alencar")
		$y==$y++;
	echo "<br>$var5</br>";
	if ($var5=="ar condicionado")
		$y==$y++;
	echo "<br>"."Seu resultado é $y ";
?>
</html>