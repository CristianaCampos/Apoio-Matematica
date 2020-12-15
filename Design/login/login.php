<?php
	session_start();

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
	 
	$sql = "SELECT nome, pass FROM account WHERE email='".$email."'";
	$result = mysqli_query($conn, $sql);
		
	if (mysqli_num_rows($result) > 0) 
	{
		if($row = mysqli_fetch_assoc($result)) 
		{
			$passwordDB = $row['pass'];
			
			if (md5($passwordUser) == $passwordDB)
			{											
				$_SESSION["nome"] = $row['nome'];				
			}
			else
			{
				// remove all session variables
				session_unset(); 

				// destroy the session 
				session_destroy(); 
			}	
			
			header("Location: ../index/index_html.php");
		}
	}
	mysqli_close($conn);
?>