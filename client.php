<?php
	//------- Controllo per pagine che richiedono il login -------
	session_start();
	if(isset($_SESSION['login'])){
	//echo("Sei loggato come,"); echo $_SESSION['login'];
}else header("Location:login.html");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Users Main Page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleMainUser.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>
<body class="body">
<header class="mainHeader">
<nav>
	<ul>
		<li class="active"><a href="#">User Main Page</a></li>
		<li><a href="index.html">Home</a></li>
		<li><a href="#">Assistenza Online</a></li>
		<li><a href="#">Esempi siti</a></li>
		<li><a href="#">Contatti</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
</nav>
</header>

</body>
</html>
