<?php	require_once 'liberar_sessao.php';


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link  rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Help desk-área cliente</title>

	

    </style>
</head>
<body>

	<nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
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
			      <div class="card-header">Abertura de chamado</div>
			      <div class="card-body">
			      	<form class="form-group" method="POST" action="chamado_post.php">
			      		<label for="titulo">Titulo</label>
								<input type="text" class="form-control" name="titulo">

								<label for="categoria" class="mt-3">Categoria</label>
								<select  class="form-control" name="categoria">
									<option value="">Criação Usuário</option>
									<option value="impressora">Impressora</option>
									<option value="hardware">Hardware</option>
									<option value="software">Software</option>
									<option value="rede">Rede</option>
								</select>

			      		<label for="descricao" class="mt-3">Descrição</label>
								<textarea class="form-control" name="descricao"></textarea>
								<div class=" card-body row d-flex justify-content-between mt-5">
									<button type="button" class="btn btn-lg btn-warning col-5" onclick="window.location.href='area_cliente.php'">
										Voltar
									</button>
									<button type="submit" class="btn btn-lg btn-info col-5">Abrir</button>
								</div>
			      	</form>
								
						</div>
				</div>
			
			
		</div>
		
	</section>

</body>
</html>