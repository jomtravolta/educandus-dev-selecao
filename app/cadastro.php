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
		<form action="dadosCadastro.php" method="POST">
		<fieldset>
        <legend>Cadastro</legend>
        <div>
        	<label for="huey">E-mail</label>
            <input type="email" name="email" placeholder="exemplo@hotmail.com">
        </div>
        <div>
         	<label for="huey">Senha</label>
            <input type="password" pattern="[a-zA-Z0-9]+" name="senha" minlength="8">            
        </div>
        <div>

              <select title="qual o tipo da conta?" data-width="100%" name="contas">
                <?php
                /*
  	              try{
  						require('conexaoMYSQLI.php');

  						$resultado = $conexao->query("SELECT id, descricao FROM contas");

                	 foreach ($resultado as $linha) {
            echo "<option data-tokens=".$linha['descricao']."value=".$linha['id'].">".$linha['descricao']."</option>";
            			}

  			         }catch(PDOException $e){
  			      echo $e->getMessage();
  			         }
  			         */
                ?>

              </select>
              </div>
    </fieldset>
			<input type="submit" name="cadastrar">
		</form>
	
	</div>
	
	<p style="margin-top: 5%;">
	
	<hr class="linhaSeparador">
	
</body>
</html>