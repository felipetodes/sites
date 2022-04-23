<!DOCTYPE html>
<html>

	<head lang="pt-br" />
	<title> VERA CONFECÇÕES</title>
	<meta charset= "UTF-8" />
	<meta name="author" content="Felipe Todeschini" />
	<meta name="vera_confeccao" content="vera_confeccao" />
	<meta name="keywords" content="costura, confecção, consertos, roupas" />
	<link rel="icon" type="image/x-icon" href="short.jpeg" />
	<link rel="stylesheet" type="text/css" href="estilo.css"/><!--Link entre HTML e o CSS-->
	</head>
	
	
	
	
	
	<body>
	
	<header id="cabecalho">
	<div id="cabecalho_cor">
	<h1>VERA MODAS</h1>
	<h2>Roupas para festas, casa, banho</h2>
	<p>Fazemos todos os tipos de reparos</p>
	</div>
	</header>
	
	
	<nav id="horizontal">
	<a href="index.php">HOME</a>
	<a href="servicos.php">Meus Serviços</a>
	<a href="galeria.php">Galeria de fotos</a>
	<a href="contato.php">Contato</a>
	<a href="informacoes.php">Mostruário</a>
	<a href="formulario.php">Formulário</a>
	<a href="encomenda.php">Encomendas</a>
	<a href="precos.php">Preços</a>
	</nav>
	
	
	
	
	
	
	<section>
	
	
	
	<div id="container">
			
			<form method="post" action="clientes.php">
			
			<fieldset>
			<legend>Cadastro de cliente:</legend>
				
				<label>Nome:</label>
				<input type="text" name="nome" required />
				<br>
				
				<label>Email:</label>
				<input type="email" name="email" required />
				<br>
				
				<label>Telefone:</label>
				<input type="text" name="telefone" required />
				<br>
				<br>
							
			<h4>Informe a cidade que mora:</h4>	
				<select name="cidade">
					<option>Selecione</option>
					<option value="poa">Porto Alegre</option>
					<option value="viamao">Viamão</option>
					<option value="alvorada">Alvorada</option>
					<option value="sapucaia">Sapucaia do Sul</option>
					<option value="canoas">Canoas</option>
				</select>
			<br>
			<br>
				<input type="submit" name="enviar" value="Enviar" />
				<input type="reset" name="limpar" value="Limpar" />
			
			</fieldset>			
			</form>
			<br>
			<br>
			<hr>
	
	
	
	<form method="post" action="redes.php">
	
	<h3>Selecione como ficou sabendo de nossos produtos:</h3>
	
	<input type="checkbox" name="materialid[]" value="Facebook"/>Facebook
	<input type="hidden" name="materialnome[]" value="Facebook"/>
	
	<input type="checkbox" name="materialid[]" value="Instagram"/>Instagram
	<input type="hidden" name="materialnome[]" value="Instagram"/>
	
	<input type="checkbox" name="materialid[]" value="Nossosite"/>Nosso Site
	<input type="hidden" name="materialnome[]" value="Nossosite"/>
	
	<input type="checkbox" name="materialid[]" value="Indicacao"/>Indicação
	<input type="hidden" name="materialnome[]" value="Indicacao"/>
	<br>
	<br>
	<input type="submit" name="enviar" value="Escolher" />
	<input type="reset" name="limpar" value="Limpar" />
	</form>
			
		</div>
	
	</section>
	<footer>
	<p><b>Vera marca registrada LTDA</br></p>
	<p><b>Confecções de roupas</b></p>
	
	</footer>
	
	</body>
	
	
	
	</html>