<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$complemento = $_POST['complemento'];
$roupa = $_POST['roupa'];
$genero = $_POST['genero'];
$idade = $_POST['idade'];
$tamanho = $_POST['tamanho'];

$cadastra = mysqli_query($conexao, "INSERT INTO encomenda(nome, email, estado, cidade, cep, bairro, rua, complemento, produto, genero, idade, tamanho)
					VALUES('$nome', '$email','$estado', '$cidade','$cep','$bairro','$rua','$complemento','$roupa','$genero','$idade','$tamanho')");


if(mysqli_affected_rows($conexao) > 0){
	echo "<script type='text/javascript'>
		alert ('Obrigado pela sua participação!!!!');
	</script>";
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0
			URL=http://localhost/costura/encomenda.php'>";
	
}else{
	echo "<script type='text/javascript'>
		alert ('Não foi possível gravar o Banco de Dados!!!!');
	</script>";
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0
			URL=http://localhost/costura/encomenda.php'>";
	
}


?>




