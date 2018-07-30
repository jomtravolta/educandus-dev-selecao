<?php

  try{

       require('conexao.php');

        $arquivo = $_POST["arquivo"];

        $stmt = $conexao->prepare("insert into usuario (nome, email, comentario) values (?, ?, ?);");

        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $comentario);


        $stmt->execute();

        header("Location: index.php");


  }catch(PDOException $e){
      echo $e->getMessage();
    }



 ?>