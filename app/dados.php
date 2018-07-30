<?php

try{		
			require('conexao.php');

			$stmt = $conexao->prepare("insert into usuario (email, senha, tipo_conta) values (?,?,?)");
			
				session_start();
	
				$email =$_POST["email"];
				$_SESSION["email"] = $email;
				$senha = $_POST["senha"];
				$_SESSION["senha"] = $senha;
				$tipoConta =$_POST["tipoConta"];
				$_SESSION["tipoConta"] = $tipoConta;

				$stmt->bindValue(1, $email);
				$stmt->bindValue(2, $senha);
				$stmt->bindValue(3, $tipoConta);

				$stmt->execute();

				header("Location: index.php");

	}catch(PDOException $e){
			echo $e->getMessage();
		}

?>