<?php	require_once 'liberar_sessao.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link  rel="stylesheet"  href="../bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Help desk-área cliente</title>

	<style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }

      .icones{
      	width: 80px;
      }
    </style>
</head>
<body>

	<nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="../imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>

      <ul class="navbar-nav">
      	<li class="nav-item">
      		<a class="nav-link" href="logoff.php">Sair</a>
      	</li>
      </ul>
    </nav>

	<section class="row">

		<div class="container">

			
				<div class="card mt-5 ">
			      <div class="card-header">Menu</div>
			      <div class="card-body d-flex justify-content-around">
							<a href="abrir_chamado.php">
								<img src='../imagens/formulario_abrir_chamado.png' class='icones'>
							</a>

							<a href="consultar_chamado.php">
								<img src='../imagens/formulario_consultar_chamado.png' class="icones">
							</a>
						</div>
				</div>
			
			
		</div>
		
	</section>

</body>
</html>