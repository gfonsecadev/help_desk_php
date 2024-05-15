<?php
$verifica_autenticacao=false;
$usuario_autenticado=null;
$is_admin=null;
session_start();
$_SESSION['autenticado']=false;

	$lista_usuarios = [['id'=>'1','email'=>'gilmareneliane4@gmail.com','senha'=>'1234','is_admin'=>true],
					   ['id'=>'2','email'=>'neliane@gmail.com','senha'=>'1234','is_admin'=>false], 
					   ['id'=>'3','email'=>'gabriela@gmail.com','senha'=>'1234','is_admin'=>true],
					   ['id'=>'4','email'=>'gilmar@gmail.com','senha'=>'1234','is_admin'=>false], ];


	$email=$_POST['email'];
	$senha=$_POST['senha'];


	foreach ($lista_usuarios as $usuarios=> $value) {

		if ((isset($email) && $value['email']==$email)&&(isset($senha) && $value['senha']==$senha)) {
			$verifica_autenticacao=true;
			$is_admin=$value['is_admin'];
			$usuario_autenticado=$value['id'];
		}

	}

	if ($verifica_autenticacao===true) {
		$_SESSION['autenticado']=true;
		$_SESSION['usuario_id']=$usuario_autenticado;
		$_SESSION['is_admin']=$is_admin;
		header('Location: area_cliente.php');
	}else{
		header('Location: ../index.php?Login=erro');
	}
	
	

?>