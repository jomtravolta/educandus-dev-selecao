<?php
require_once 'conexaoMYSQLI.php';

session_start();

if(isset($_POST['btn-entrar'])):
	$erros = array();
	$login = mysqli_escape_string($connect, $_POST['login']);
	$senha = mysqli_escape_string($connect, $_POST['senha']);
	if(empty($login) or empty($senha)):
		$erros[] = "camos de login e senha vazios!";
	else:
		$sql = "SELECT email FROM usuario WHERE email = '$login'";
		$resultado = mysqli_query($connect, $sql);
		if(mysqli_num_rows($resultado) > 0):
			$sql = "SELECT * FROM usuario WHERE email = '$login' AND senha = '$senha'";
			$resultado = mysqli_query($connect, $sql);

			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id'];
				header('location: home.php');
			else: 
				$erros [] = "Usuário e senha incorretos";
			endif;
		else:
			$erros[] = "Usuário não existe!";
		endif;
	endif;
endif;
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
			educandus-dev-selecao 
		</p>

	</div>

	<div align="center" style="color: #6E6E6E; font-size: 30px;">

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
        <legend>Login</legend>
        <?php
        if(!empty($erros)):
        	foreach($erros as $erro):
        		echo $erro;
        	endforeach;
        endif;	
        ?>
        <div>
        	<label for="huey">E-mail</label>
            <input type="email" name="login" placeholder="exemplo@hotmail.com">
        </div>
        <div>
         	<label for="huey">Senha</label>
            <input type="password" pattern="[a-zA-Z0-9]+" name="senha" minlength="8">            
        </div>
    </fieldset>
			<button class="button button-block" name="btn-entrar">Entrar</button>
		</form>
		

	</div>
	
	<p style="margin-top: 5%;">
	
	<hr class="linhaSeparador">
	
</body>
</html>