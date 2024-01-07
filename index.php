<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link  rel="stylesheet"  href="bootstrap/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Help desk</title>

	<style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
</head>
<body>

	<nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="imagens/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>


    </nav>

	<section class="container">

		<div class="row">

			<div class="card-login">
				<div class="card">
			      <div class="card-header">Login</div>
			      <div class="card-body">
					<form action="validar.php" method="POST" class="form-group">
						<input type="email" name='email' class="form-control mb-2" placeholder="Email" value="gilmar@gmail.com">
						<input type="password" name="senha" class="form-control mb-3" placeholder="Senha" value="1234">
						
							<?php if (isset($_GET['Login']) && $_GET['Login']=='erro'){ ?>

									<div class="text-danger">*Usuário ou senha inválido(s)</div>
								

							<?php } ?>

							<?php if (isset($_GET['Login']) && $_GET['Login']=='erro2'){ ?>

									<div class="text-danger">*acesso somente a usuários autenticados</div>
								

							<?php } ?>


						
						<button type="submit" class="btn btn-info btn-lg btn-block">Entrar</button>
					</form>
			</div>
			</div>
			
		</div>
		</div>
		
	</section>

</body>
</html>