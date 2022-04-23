<?php


include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cidade = $_POST['cidade'];




$cadastra = mysqli_query($conexao, "INSERT INTO cliente(nome, email, telefone, cidade)
					VALUES('$nome', '$email','$telefone', '$cidade')");


if(mysqli_affected_rows($conexao) > 0){
	echo "<script type='text/javascript'>
		alert ('Obrigado pela sua participação!!!!');
	</script>";
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0
			URL=http://localhost/costura/formulario.php'>";
	
}else{
	echo "<script type='text/javascript'>
		alert ('Não foi possível gravar o Banco de Dados!!!!');
	</script>";
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0
			URL=http://localhost/costura/formulario.php'>";
	
}


?>

