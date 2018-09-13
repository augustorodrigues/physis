<?php 
	session_start();

	require_once("seguranca.php");

	echo "Bem vindo " .$_SESSION['usuarioNome'];
 ?>

 <br>

 <a href="logout.php">Sair</a>

 <!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, intial-scale=1">

	<title>Administração | Physis</title>
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
							<li><a href="#">Editar Usuário</a></li>
							<li><a href="">Excluir Usuário</a></li>
						</ul>						
					</li>

					<li class="dropdown"><a href="#planos" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gerenciar Exercícios <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="usuarios.php">Buscar Exercício</a></li>
							<li><a href="cadastrar_usuario.php">Cadastrar Exercício</a></li>
							<li><a href="#">Editar Exercício</a></li>
							<li><a href="">Excluir Exercício</a></li>
						</ul>
					</li>

					<li><a href="#contato">Editar Perfil</a></li>
					<li class="divisor" role="separator"></li>
					<li><a href="logout.php">Sair</a></li>			
				</ul>				
			</div>
		</div><!-- /container -->		
	</nav><!-- /nav -->

	<div class="capa">
		<div class="texto-capa">
			<h1>Bem-vindo Administrador!</h1>			
			<a href="usuarios.php" class="btn btn-custom btn-azul1 btn-lg">Gerenciar Usuários</a>
			<a href="exercicios.php" class="btn btn-custom btn-azul2 btn-lg">Gerenciar Exercícios</a>
			<a href="controle_financeiro.php" class="btn btn-custom btn-azul1 btn-lg">Controle Financeiro</a>
		</div>		
	</div>


	<!-- Lista de usuários -->
	<section id="">		
		<div class="container">

			
		</div> <!-- container listade usuários -->
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