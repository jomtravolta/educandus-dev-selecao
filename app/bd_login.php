<?php
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  try{

	require('conexao.php');

	$stmt =$conexao->prepare("select email, senha from usuario where email = ? ");

	$stmt->bindParam(1, $email);

	$stmt->execute();	

	$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	foreach($resultado as $linha){
	
		if(password_verify($senha, $linha["senha"])){
			
			session_start();

			$_SESSION["email"]=$email;
			$_SESSION["email"]=$linha["email"];


			header("Location: index.php");

		}else{
			echo "senhas não combinam";
		}
	}
	}	catch(PDOException $e){
		echo $e->getMessage();
	}
?>