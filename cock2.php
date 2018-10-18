<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Nomes</title>
</head>

<body>
	<div class="container">
		<div class="box"> </div>
		<form method="GET" action = "t2.php">
		</form>
	</div>
</body>
<?php
	$var2 = $_GET["dormir"];
	session_start();
	$_SESSION["dormir"]=$var2;
	echo $var2;
	echo "<br><a href=t2.php>Proxima pagina </a></br>";
	echo "<a href=quiz3.html> Proxima questão </a>";
?>
</html>