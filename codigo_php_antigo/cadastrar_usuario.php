<?php
	session_start();
	require_once("seguranca.php");
	require_once("conexao.php");
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, intial-scale=1">

	<title>Cadastrar Usuário | Physis</title>
	<link rel="icon" href="imagens/favicon.png">

	<!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<?php

		$objDb = new db();
		$link = $objDb->conecta_mysql();

		$sql = "SELECT * FROM physis_usuario ORDER BY 'id_usuario'";		

		$resultado = mysqli_query($link, $sql);		

		$linhas = mysqli_num_rows($resultado);
		
 	?>
	<nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
		<div class="container">
			
			<!-- header -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-navegacao">
					<span class="sr-only">alternar navegação</span><!-- screen reader - acessibilidade -->
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

				<a href="index.php" class="navbar-brand">					
					<span class="img-logo">Physis</span>
				</a>
			</div><!-- navbar -->

			<div class="collapse navbar-collapse" id="barra-navegacao">
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gerenciar Usuário<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="usuarios.php">Buscar Usuário</a></li>
							<li><a href="cadastrar_usuario.php">Cadastrar Usuário</a></li>
							<li><a href="editar_usuario.php">Editar Usuário</a></li>
							<li><a href="excluir_usuario.php">Excluir Usuário</a></li>
						</ul>						
					</li>

					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gerenciar Exercícios <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="exercicios.php">Buscar Exercício</a></li>
							<li><a href="cadastrar_exercicio.php">Cadastrar Exercício</a></li>
							<li><a href="editar_exercicio.php">Editar Exercício</a></li>
							<li><a href="excluir_exercicio.php">Excluir Exercício</a></li>
						</ul>
					</li>

					<li><a href="#">Editar Perfil</a></li>
					<li class="divisor" role="separator"></li>
					<li><a href="logout.php">Sair</a></li>			
				</ul>				
			</div>
		</div><!-- /container -->		
	</nav><!-- /nav -->


	<!-- cadastro de usuários -->
	<section id="">		
		<div class="container">
			<div class="col-md-2"></div>

			<div class="col-md-8">
				<div>
					<h2>Cadastrar Usuário</h2>
				</div>

				<form action="processos/cad_usuario.php" method="post" id="form_cadastro">
					<div>
						<!-- dados pessoais -->
						<fieldset> <legend>Cadastro de usuário</legend>
							<div class="form-group">
								<label for="cNome">Nome Completo</label> 
								<input type="text" name="tNome" id="cNome" class="form-control" placeholder="digite seu nome">
							</div>

							<div class="form-group">
								<label for="cDocumento">Documento (CPF ou RG)</label>
								<input type="text" name="tDocumento" id="cDocumento" class="form-control" placeholder="CPF ou RG">
							</div>

							<div class="form-group">
								<label for="cDataNasc">Data de Nascimento:</label> 
								<input type="date" name="tDataNasc" id="cDataNasc" class="form-control">
							</div>					
							
							<div class="form-group">
								<label for="cEmail">E-mail</label> 
								<input type="email" class="form-control" name="tEmail" id="cEmail" maxlength="40" placeholder="digite um e-mail válido">
							</div>

							<div class="form-group">
								<label for="cSenha">Senha</label> 
								<input type="password" class="form-control" name="tSenha" id="cSenha" placeholder="digite uma senha">
							</div>							

							<div class="form-group">
								<label for="cNivel_Acesso">Nivel de Acesso</label>
								<div >
									<select class="form-control" name="tNivel_Acesso">
										<option value="2">Usuário Comum</option>
										<option value="1">Administrador</option>
									</select>
								</div>
							</div>
							
						</fieldset>
					</div>							

					<input type="hidden" name="acao" value="formulario"><br>

					<div class="conteudo_direita2">
						<input type="submit" name="tEnviar" id="btnEnviar" value="Cadastrar" class="btn btn-custom btn-azul1 btn-lg">
						<input type="reset" name="tLimpar" id="btnLimpar" value="Limpar" class="btn btn-custom btn-azul1 btn-lg">											
					</div>					
										
				</form>

			</div> <!-- /col-md-8 -->
			<div class="col-md-2"></div>
		</div> <!-- container cadastrar usuario -->
	</section>



	<!-- Rodape -->
	<footer id="rodape">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<span class="img-logo">Physis</span>
				</div>

				<div class="col-md-3">
					<div class="footer-endereco">
						<h4>Endereço</h4>
						<p>R. Riachuelo, 18, Varginha-MG, <br/> 00000-000</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-funcionamento">
						<h4>Funcionamento</h4>
						<p>Segunda 05:00 às 22:00</p>
						<p>Sábado 08:00 às 13:00</p>
						<p>Domingo 09:00 às 12:00</p>	
					</div>					
				</div>

				<div class="col-md-3">					
					<a href="#"><img src="imagens/facebook.png"></a>
					<a href="#"><img src="imagens/twitter.png"></a>
					<a href="#"><img src="imagens/instagram.png"></a>					
				</div>
			</div><!-- row -->

			<div class="row">
				<div class="col-md-12 copyright">
					Todos os direitos reservados &copy; 2017 <a href="mailto:jrodriguesaugusto@gmail.com">Augusto Rodrigues</a>
				</div>
			</div>
		</div>
	</footer>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>