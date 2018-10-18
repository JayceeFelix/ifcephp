<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Escritore</title>

</head>
<body>
	<div class="container">
		<div class="box"> </div>
		<form method="GET" action = "t4.php">
		</form>
	</div>
</body>
<?php
	$var4 = $_GET["escritor"];
	session_start();
	$_SESSION["escritor"]=$var4;
	echo $var4;
	echo "<br><a href=t4.php>Proxima pagina </a></br>";
	echo "<a href=quiz5.html> Proxima questão </a>";
?>
</html>