<html>
<head>
	<link rel="stylesheet" href="style.css">
	<title>Nomes</title>
</head>

<body>
<?php
	session_start();
	$var = $_SESSION["nome"];
	echo $var;
#$var = $_COOKIE["nome"];
#echo $var . "paz e amor";

?>
</body>
</html>
