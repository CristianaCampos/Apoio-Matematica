<?php

	session_start();

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$passwordUser = $_POST["pass"];

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "baseDados";
	 
	// Efetua a ligação
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	
	// Verifica a ligação
	if (!$conn) {
		die("Ligação falhou: " . mysqli_connect_error());
	}
	 
	$sql2 = "SELECT email FROM account WHERE email='".$email."'";
	$result = mysqli_query($conn, $sql2);

	if (mysqli_num_rows($result) == 0) 
	{
		$sql = "INSERT INTO account(nome, email, pass) VALUES ('".$nome . "', '".$email . "', '".md5($passwordUser) . "')";
		$result = mysqli_query($conn, $sql);
	
		$_SESSION["nome"] = $nome;
	}

	header("Location: ../index/index_html.php");
	 
	mysqli_close($conn);
?>