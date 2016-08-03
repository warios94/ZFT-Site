<?php


	session_start();

	login($_POST['username'],$_POST['password']);

	function login($username , $password){
		//$passwordMD = md5($password); // sta merda di md5 non funziona
		$conn= mysqli_connect("localhost","root", "", "sito_zft") or die (mysql_error()); // apre connessione con database locale

		$result = mysqli_query($conn,"SELECT * FROM users WHERE username='$username' AND password='$password' ") or die (mysql_error());
		$count = mysqli_num_rows($result); //conta il numero di righe che rispettano la condizione della query .... se i dati coincidono ci da 1
		//echo "$count";
		if($count == 1){
			$_SESSION['login']= $username;
			//echo $_SESSION['login'];
			header("Location:client.php");
			die();

		}else
		{
			//echo "Dati errati, controlla username e password";
			header("Location:login-ErrorData.php");
			die();
		}

	}





?>
