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
	
	
	<!--JS interno-->
	<script text="text/javascript">
	
		
		function abreJanela(){
		minhaJanela = window.open("https://www.instagram.com/felipetodis/","", 
		"width=500 height=500");
		}
		function fechaJanela(){
		minhaJanela.close();
		}
		
		function colorir(){
		document.getElementById("titulo").style.color = "blue";
		}
		
		function recolorir(){
		document.getElementById("titulo").style.color = "green";

		}
		
		function pressiona(){
		document.getElementById("texto").style.color = "green";

		}
		
		function solta(){
		document.getElementById("texto").style.color = "blue";

		}
		
		function maiuscula(){
		var x = document.getElementById("nome");
		x.value = x.value.toUpperCase();
		
		}
		
		function mini(){
		var x = document.getElementById("nomemini");
		x.value = x.value.tLowerCase();
		
		}
		
		</script>
		
		
	
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
	<a href="encomenda.php">Encomenda</a>
	<a href="precos.php">Preços</a>
	</nav>
	
	
	
	
	<section class="container">
	
	
	
	<button onclick="abreJanela()"><img src="instagram.jpg" alt="paisagem" width="15%"</img></button>
	
	<div id="email">
	<a href="mailto:todeschini1992@gmail.com?cc=name2@rapidtables.com&bcc=name3@rapidtables.com&amp;subject=The%20subject%20of%20the%20email &amp;body=The%20body%20of%20the%20email">
	<img src="gmail.png" style=" height:40px; width:50px";/></a>
	</div>
	
	<a class="whatsapp-link" href="https://web.whatsapp.com/send?phone=5551980332045" target="_blank">
		<i class="fa fa-whatsapp"></i>
	</a>
	

	
	<p id="info_location_1">Estamos localizados na Avenida Bento Gonçalves, próximo a Pontifícia Universidade Católica do Rio Grande do Sul</p>
	<br>
	<p id="info_location_2">Uma região bem localizada, de fácil acesso</p>
	
	<div id="location">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.12152148764!2d-51.172941584884434!3d-30.062050981875895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95199d57bb48f2c9%3A0x5b51e5a7ff0900e4!2sAv.%20Bento%20Gon%C3%A7alves%2C%204517%20-%20Partenon%2C%20Porto%20Alegre%20-%20RS%2C%2090650-003!5e0!3m2!1sen!2sbr!4v1638824023058!5m2!1sen!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	
	</div>
	
	
	
	</section>
	
	
	
	<footer>
	<p><b>Vera marca registrada LTDA</br></p>
	<p><b>Confecções de roupas</b></p>
	
	</footer>
	</body>
	
	
	
	</html>