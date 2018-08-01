<?php

require_once 'conexaoMYSQLI.php';

session_start();

if(!isset($_SESSION['logado'])):
	header("location: index.php");
endif;

$id = $_SESSION['id_usuario'];

$sql = "SELECT * FROM usuario WHERE id = '$id'";

$resultado = mysqli_query($connect, $sql);

$dados = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<head>
<title>educandus-dev-selecao</title>

<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
  
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</head>

<body>

	<?php
	if(isset($_POST['btn-salvar'])):
		$formatos = array("png","mp4","txt");
		$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

		if(in_array($extensao, $formatos)):
		$pasta = "arquivos/";
		$temporario = $_FILES['arquivo']['tmp_name'];
		$novoNome = uniqid().".$extensao";

		if(move_uploaded_file($temporario, $pasta.$novoNome)):
			$mensagem = "upload feito corretamente!";
		else:
			$mensagem = "erro no upload!";
		endif;	
		else:
		$mensagem = "formato inválido!";
	endif;	

	echo $mensagem;

	?>
<nav id="divMenu" class="navbar navbar-inverse">
	<div class="container-fluid">
		
	    <div>
			<ul class="nav navbar-nav">
			
				<li><a href="index.php">Home</a></li>		

				<li><a>|</a></li>
				
				<li><a href="cadastro.php">cadastro</a></li>
				
				<li><a>|</a></li>
				
				<li><a href="login.php">login</a></li>
				
				<li><a>|</a></li>
				
				<li><a href="logout.php">Sair</a></li>
				
			</ul>
		</div>
	</div>	
</nav>

	<div align="center" style="color: #6E6E6E; font-size: 30px;">
		<p>
			Bem vindo <?php echo $dados['email']; ?> <br>
		</p>


	</div>

	<div align="center" style="color: #6E6E6E; font-size: 30px;">

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

		<fieldset>

        <legend>uploud</legend>

        <div>

         	<label for="huey">Arquivo</label>

            <input type="file"  name="arquivo" >   

        </div>

  		</fieldset>

			<button class="button button-block" name="btn-salvar">salvar</button>

		</form>
		
	</div>

	<p style="margin-top: 5%;">
	
	<hr class="linhaSeparador">
	
</body>
</html>