<?php 

  try{

      $conexao = new PDO('mysql:host=localhost;dbname=educandus', "root", "");

      $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e){
      echo $e->getMessage();
    }

?>