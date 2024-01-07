<?php
	session_start();
	$texto=$_SESSION['usuario_id'].'#'.$_POST['titulo'].'#'.$_POST['categoria'].'#'.$_POST['descricao'].PHP_EOL;

	$arquivo=fopen('../../app_help_desk/chamado.help', 'a');
	fwrite($arquivo, $texto);
	fclose($arquivo);

	header('Location: area_cliente.php');



?>