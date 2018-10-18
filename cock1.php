<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Nomes</title>

</head>
<body>
	<div class="container">
		<div class="box"> </div>
		<form method="GET" action = "t1.php">
		</form>
	</div>
</body>
<?php
	$var = $_GET["nome"];
	session_start();
	$_SESSION["nome"]=$var;
	echo $var;
	echo "<br><a href=t1.php>Proxima pagina </a></br>";
	echo "<a href=quiz2.html> Proxima questão </a>";
?>
</html>