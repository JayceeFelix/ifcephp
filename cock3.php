<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Nomes</title>
</head>

<body>
<div class="container">
        <div class="box"> </div>
            <form method="GET" action = "t3.php">
</form>
</div>
</body>
<?php

	$var3 = $_GET["azul"];
	session_start();
	$_SESSION["azul"]=$var3;
	echo $var3;
	echo "<br><a href=t3.php>Proxima pagina </a></br>";
	echo "<a href=quiz4.html> Proxima questão </a>";
?>
</html>