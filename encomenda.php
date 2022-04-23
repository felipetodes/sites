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
	<script type="text/javascript" src="banner.js"><!--Link entre HTML e o JavaScript para banner-->
	</script>
	
	<script text="text/javascript"><!--Funções do Javascript-->
			
		function minhaFuncao (){<!--Funções de abrir caixa de texto logo no incio da abertura da pagina-->
		alert("Sua encomenda em poucos dias em sua casa!");
		}
		
		function abreJanela(){<!--Abrir a url dos correios quando solicitado-->
		minhaJanela = window.open("https://rastreamento.correios.com.br/app/index.php","", 
		"width=500 height=500");
		}
		function colorir(){<!--Colorir letras-->
		document.getElementById("titulo1").style.color = "#DAA520";
		}
		
		function recolorir(){<!--Recolorir letras-->
		document.getElementById("titulo1").style.color = "#A0522D";

		}
		function pressiona(){<!--Colorir letras quando pressiona o mouse-->
		document.getElementById("texto1").style.color = "#DAA520";

		}
		
		function solta(){<!--Recolorir letras quando solta o mouse-->
		document.getElementById("texto1").style.color = "#A0522D";

		}
			</script>
	</head>
	
	
	
	
	
	<body onload="minhaFuncao()"><!--Ativa a aplicabilidade minhaFuncao-->
	

	
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
	
	
	
	
	
	<section class="container">
	

	
	
	<h1 id="titulo1" onmouseover="colorir()" onmouseout="recolorir()">INSIRA SEUS DADOS PARA RECEBER SUA ENCOMENDA</h1><!--Ativa as funcionalidades do mouse e da coloração das letras-->
	<h2 id="texto1" onmousedown="pressiona()" onmouseup="solta()">Cobramos o frete junto com a encomenda</h2><!--Ativa as funcionalidades do mouse e da coloração das letras-->
	
	
	<hr>
	<form method="post" action="pedido.php">
			<fieldset>
			<legend>Faça sua encomenda aqui:</legend>
	
				<label>Nome:</label>
				<input type="text" name="nome" required />
				<br>
				
				<label>Email:</label>
				<input type="email" name="email" required />
				<br>
				
				<label>Estado:</label>
				<input type="text" name="estado" required />
				<br>
				
				<label>Cidade:</label>
				<input type="text" name="cidade" required />
				<br>
	
				<label>CEP:</label>
				<input type="text" name="cep" required />
				<br>
				
				<label>Bairro:</label>
				<input type="text" name="bairro" required />
				<br>
				
				<label>Rua:</label>
				<input type="text" name="rua" required />
				<br>
				
				<label>Complemento:</label>
				<input type="text" name="complemento" required />
				<br>
				
			<h4>Selecione o produto que desejas:</h4>
			
				<select name="roupa">
				<option value="inicio">---------</option>
				<option value="biquini">Biquini</option>
				<option value="vestido">Vestido</option>
				<option value="calçaf">Calça Feminina</option>
				<option value="calçam">Calça Masculina</option>
				<option value="saia">Saia</option>
				<option value="blusa">Blusa</option>
				<option value="vestidocasamento">Vestido de casamamento</option>
				<option value="ternof">Terno Feminino</option>
				<option value="ternom">Terno Masculino</option>
				<option value="calcasocial">Calça Social</option>
				</select>
	
			<h4>Selecione o seu gênero:</h4>
				<select name="genero">
				<option value="inicio_dois">---------</option>
				<option value="masculino">Masculino</option>
				<option value="feminino">Feminino</option>
				</select>
	
			<h4>Selecione sua faixa etária:</h4>
				<select name="idade">
				<option value="inicio_tres">---------</option>
				<option value="bebe">Recém-nascido</option>
				<option value="criança">Criança</option>
				<option value="adolescente">Adolescente</option>
				<option value="adulto">Adulto</option>
				</select>
	
			<h4>Selecione o seu tamanho de roupa:</h4>
				<select name="tamanho">
				<option value="inicio_quatro">---------</option>
				<option value="muitopequeno">PP</option>
				<option value="pequeno">P</option>
				<option value="medio">M</option>
				<option value="grande">G</option>
				<option value="muitogrande">GG</option>
				<option value="extragrande">XG</option>
				<option value="extramuitogrande">XGG</option>
				<option value="ESPECIAL">Tamanho especial</option>
				</select>
			<br>
			<br>
	
	
		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="limpar" value="Limpar" />
	
	
	</fieldset>
	</form>
	

	
	<hr>
	<h3 id="rastreamento"><b>Rastreie seu pedido por aqui!</b></h3>
  <button onclick="abreJanela()">Abrir rastreamento de sua encomenda</button>
  <br>
	
  <hr>
 
  <h3 id="previsao"><b><i>Se quiser buscar seu pedido no nosso endereço, confira a previsão do tempo para facilitar seu deslocamento!!</b></i><h3>
  <div id="cont_1752eb928c76ba32c739ae0c06e2b980"><script type="text/javascript" async src="https://www.tempo.com/wid_loader/1752eb928c76ba32c739ae0c06e2b980"></script></div>

  
  <hr>
	</section>
	<footer>
	<p><b>Vera marca registrada LTDA</br></p>
	<p><b>Confecções de roupas</b></p>
	</footer>
	</body>
	
	
	
	
	
	</html>