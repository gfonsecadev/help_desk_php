<?php
	session_start();
	$texto=$_SESSION['usuario_id'].'#'.$_POST['titulo'].'#'.$_POST['categoria'].'#'.$_POST['descricao'].PHP_EOL;

	$arquivo=fopen('chamado.help', 'a');
	fwrite($arquivo, $texto);
	fclose($arquivo);

	header('Location: area_cliente.php');



?>