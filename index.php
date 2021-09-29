<?php
	
	$dsn = "mysql:dbname=blog;host=localhost";
	$dbuser = "root";
	$dbpass = "";




	try {
	$pdo = new PDO($dsn,$dbuser,$dbpass);

	$nome = 'Cezar';
	$id = 5;

	$sql = 	"UPDATE usuarios SET nome = :nome WHERE id = :id";
	$sql =  $pdo->prepare($sql);
	$sql->bindValue(':nome',$nome);
	$sql->bindValue(':id',$id);
	$sql->execute();	
	$sql = "SELECT nome FROM usuarios WHERE id = :id";
	$sql =  $pdo->prepare($sql);
	$sql->bindValue(':id',$id);
	$sql->execute();

		if($sql->rowCount() > 0 ){

			foreach($sql->fetchAll() as $usuarios) {
				echo("nome : ".$usuarios["nome"]);
				# code...
			}

	
		
	}else{


		echo 'Erro';
	}

}
catch(PDOexcepetion $e){

		echo "falhou: ".$e->getMessege();

	}




?>

