<?php

try{		
			require('conexaoPDO.php');

			$stmt = $conexao->prepare("INSERT INTO usuario (email, senha, id_contas) VALUES (?,?,?)");
			
				session_start();
	
				$email =$_POST["email"];
				$_SESSION["email"] = $email;
				$senha = $_POST["senha"];
				$_SESSION["senha"] = $senha;
				$tipoConta =$_POST["id_contas"];
				$_SESSION["id_contas"] = $tipoConta;

				$stmt->bindValue(1, $email);
				$stmt->bindValue(2, $senha);
				$stmt->bindValue(3, $tipoConta);

				$stmt->execute();

				header("Location: index.php");

	}catch(PDOException $e){
			echo $e->getMessage();
		}

?>