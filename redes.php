<?php
include_once("conexao.php");

if(true)
{
	$chec_array = $_POST['materialid'];
	foreach ($_POST['materialnome'] as $val => $valor)
	{
		if(in_array($_POST['materialnome'][$val], $chec_array)){
			
			$materialnome = $_POST['materialnome'][$val];
			
			$cadastra = mysqli_query($conexao, "INSERT INTO produtos(tipo_produto)
			               VALUES('$materialnome')");
		}
	}
	
}
header('location:formulario.php');

?>
