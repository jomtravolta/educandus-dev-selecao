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
			
				<li><a href="">Home</a></li>		

				<li><a>|</a></li>
				
				<li><a href="">cadastro</a></li>
				
				<li><a>|</a></li>
				
				<li><a href="">login</a></li>
				
				<li><a>|</a></li>
				
				<li><a href="">Sair</a></li>
				
			</ul>
		</div>
	</div>	
</nav>

	<div align="center" style="color: #6E6E6E; font-size: 30px;">
		<p>
			educandus-dev-selecao 
		</p>

	</div>

	<div align="center">

		<form action="bd_login" method="POST">
		<fieldset>
        <legend>Login</legend>
        <div>
        	<label for="huey">E-mail</label>
            <input type="text" name="email">
        </div>
        <div>
         	<label for="huey">Senha</label>
            <input type="password" name="senha" minlength="8">            
        </div>
    </fieldset>
			<button type="submit" name="btn-entrar">Entrar</button>
		</form>
		

	</div>
	
	<p style="margin-top: 5%;">
	
	<hr class="linhaSeparador">
	
</body>
</html>