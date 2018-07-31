<?php

$servername = "localhost";
$username = "root";
$password = "";
$bd_name = "educandus";

$connect = mysqli_connect($servername, $username, $password, $bd_name);

if(mysqli_connect_error()):
	echo "falha na conexão: ".mysqli_connect_error();
endif;
?>














?>