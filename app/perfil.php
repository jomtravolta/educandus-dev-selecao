<?php

    if(isset($_POST['salvar'])):
    	$formatosPermitidos = array("png", "jpeg", "jpg", "gif", "mp4", "txt");
    	$extensao = pathinfo($FILES['arquivo']['name'], PATHINFO_EXTENSION);
    	if(in_array($extensao, $formatosPermitidos)):
    		echo "sim existe";
    	else:
    		echo "não existe";
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

<div align="center">
		<form action="salvarArquivo.php" method="POST" enctype="multipart/form-data">
		<fieldset>
        <legend>salvar arquivo</legend>

        <div>
            <input type="file" name="arquivo"/>
        </div>
    	</fieldset>
			<input type="submit" name="salvar">
		</form>
	
	</div>
	
	<p style="margin-top: 5%;">
	
	<hr class="linhaSeparador">
	
</body>
</html>