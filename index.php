<?php
	
	$dsn = "mysql:dbname=blog;host=localhost";
	$dbuser = "root";
	$dbpass = "";




	try {
		$pdo = new PDO($dsn,$dbuser,$dbpass);
		$sql = "SELECT * FROM usuarios";
		$sql = $pdo->query($sql);

		if($sql->rowCount() > 0 ){

			foreach ($sql->fetchAll() as $usuarios) {
				echo("nome : ".$usuarios["nome"]." --  Email:  ".$usuarios["email"]."  --  Senha: ".$usuarios["senha"]);
				# code...
			}

		}


		
	}
catch(PDOexcepetion $e){

		echo "falhou: ".$e->getMessege();

	}




?>