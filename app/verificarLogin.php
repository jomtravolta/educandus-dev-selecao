<?php
  $login = $_POST["login"];
  $senha = $_POST["senha"];

  try{

	require('conexao.php');

	$stmt =$conexao->prepare("select email, senha from usuario where email = ? ");

	$stmt->bindParam(1, $login);

	$stmt->execute();	

	$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
	
	foreach($resultado as $linha){
	
		if(password_verify($senha, $linha["senha"])){
			
			session_start();
			$_SESSION["login"]=$login;
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