<?php

	try{
				require('conexaoMYSQLI.php');

        $resultado = $conexao->query("SELECT id FROM usuario;");

          foreach ($resultado as $linha) {
                $id = $linha["id"];
               }

				$stmt = $conexao->prepare("INSERT INTO arquivos (descricao, id_usuario) VALUES (?,'$id');");

				$descricao = $_POST["descricao"];
				$id_usuario = $_POST["id_usuario"];

				$stmt->bindValue(1, $descricao);
				$stmt->bindValue(2, $id_usuario);

				$stmt->execute();

        header("Location: home.php");

	}catch(PDOException $e){
			echo $e->getMessage();
		}

 ?>