<?php
	
	$dsn = "mysql:dbname=blog;host=localhost";
	$dbuser = "root";
	$dbpass = "";




	try {
		$pdo = new PDO($dsn,$dbuser,$dbpass);
		$sql = "DELETE FROM usuarios WHERE id = '7' ";
		$sql = $pdo->query($sql);


		
	}
catch(PDOexcepetion $e){

		echo "falhou: ".$e->getMessege();

	}




?>