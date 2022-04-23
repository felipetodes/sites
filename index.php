<!DOCTYPE html>
<html>

	<head lang="pt-br" />
	<title> VERA CONFECÇÕES</title>
	<meta charset= "UTF-8" />
	<meta name="author" content="Felipe Todeschini" />
	<meta name="vera_confeccao" content="vera_confeccao" />
	<meta name="keywords" content="costura, confecção, consertos, roupas" />
	<link rel="icon" type="image/x-icon" href="short.jpeg" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"><!--Pacotes de JavaScript para rodar as funcionalidades-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!--Pacotes de JavaScript para rodar as funcionalidades-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script><!--Pacotes de JavaScript para rodar as funcionalidades-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script><!--Pacotes de JavaScript para rodar as funcionalidades-->
	
	
	
	
	<!--width=device-width: define a largura da página de acordo com o dispositivo
	initial-scalw=1: define o zoom inicial da página encontrada
	-->
	<link rel="stylesheet" type="text/css" href="estilo.css"/><!--Link entre HTML e o CSS-->
	
	
	<!--JS interno-->
	<script text="text/javascript">
	
		function minhaFuncao (){<!--Funcionalidade para abir página inicial uma caixa de texto com essa mensagem-->
		alert("SEJA BEM-VINDO A VERA CONFECÇÕES!");
		}
		
		function abreJanela(){<!--Funcionalidade para abrir esse site quando solicitado-->
		minhaJanela = window.open("https://www.google.com.br","", 
		"width=500 height=500");
		}
		function fechaJanela(){<!--Funcionalidade para fechar esse site quando solicitado-->
		minhaJanela.close();
		}
		
		function colorir(){<!--Funcionalidade para colorir letras-->
		document.getElementById("titulo").style.color = "#DAA520";
		}
		
		function recolorir(){<!--Funcionalidade para recolorir letras-->
		document.getElementById("titulo").style.color = "#A0522D";

		}
		
		
		function pres(){<!--Funcionalidade para colorir letras quando pressionar o mouse-->
		document.getElementById("subtitulo").style.color = "#DAA520";

		}
		
		function sol(){<!--Funcionalidade para recolorir letras quando soltar o mouse-->
		document.getElementById("subtitulo").style.color = "#A0522D";
		}
		
		function pressiona(){<!--Funcionalidade para colorir letras quando pressionar o mouse-->
		document.getElementById("texto").style.color = "#DAA520";

		}
		
		function solta(){<!--Funcionalidade para recolorir letras quando soltar o mouse-->
		document.getElementById("texto").style.color = "#A0522D";
		}
		
		function maiuscula(){<!--Funcionalidade para rcolocar todas as letras em maiúsculo-->
		var x = document.getElementById("nome");
		x.value = x.value.toUpperCase();
		
		}
		
		function mini(){<!--Funcionalidade para rcolocar todas as letras em minúsculo-->
		var x = document.getElementById("nomemini");
		x.value = x.value.tLowerCase();
		
		}
	</script>
	
	</head>
	
	
	
	
	
	<body onload="minhaFuncao()"><!--Ativar funcionalidade minhaFuncao-->
	
	<header id="cabecalho_inicial">
	<h1 id="titulo" onmouseover="colorir()" onmouseout="recolorir()">VERA MODAS</h1><!--Ativar funcionalidade colorir e recolorir-->
	<h2 id="subtitulo" onmousedown="pres()" onmouseup="sol()">Roupas para festas, casa, banho</h2><!--Ativar funcionalidade pressiona e solta para colorir letras-->
	<p id="texto" onmousedown="pressiona()" onmouseup="solta()">Fazemos todos os tipos de reparos</p><!--Ativar funcionalidade pressiona e solta para colorir letras-->
	
	
	
	
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
	
	
	
	
	
	
	
	
	
	<section class="container" style="margin-top:30px">
		<div class="row">
			<div class="col-sm-4">
			<h4><b>Experiencia de mais de 25 anos na costura!!!!</b></h4>
			<h5><b>Roupas, vestidos, biquinis, shorts e muito mais!!!!</b> </h5>
			<div class="maquina_antiga">
			<img src="maquinaantiga.jpg" alt="maquina4" height="200px" width="300px">
			</div>
			<p class="text-info"><b>Meu aprendizado veio através da minha mãe e minha avó, que me inseriram dentro do mundo da costura. Realizei cursos de Costura Industrial pelo SENAI</b></p>
		</div>
		
		
		<div class="col-sm-8">
		<h2><b>Venha com a gente!!!!</b></h2>
		<h5><b>Melhores costuras de Porto Alegre</b></h5>
		<div class="maquina1">
      <img src="logo2.png" alt="logo2" height="200px" width="300px">
      </div>
		
		<p><b>Trabalhamos com cartão de débito, crédito, boleto, dinheiro e PIX!!!!</b></p>
		
		<p><b>Trabalhamos com diversos tecidos, para construção de roupas, reparos e desenhos de peças</b></p>
		<br>
		<h2><b>Noticia</b></h2>
		<h5><b>Temos atendimento personalizado, fazemos roupas para o seu estilo, do jeito que você gosta!</b></h5>
		  <img src="logovera.jpg" alt="logo1" height="200px" width="300px">
		
		<p><b>Confecções sob medida</b></p>
		
		
		</div>
		</div>
		
			</section>
	
	
	<footer>
	<p id="horario"><b>HORÁRIO DE FUNCIONAMENTO:</b></p>
	<p id="semana"><b><i>Segunda à sexta feira:8 horas às 20 horas</b></i></p>
	<p id="fim_de_semana"><b><i>Sabádos: 9 horas às 12 horas</b></i></p>
	
	</footer>
	
	
	</body>
	
	
	</html>