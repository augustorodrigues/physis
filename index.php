<!DOCTYPE html> <!-- Teste -->
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, intial-scale=1">

	<title>Physis</title>
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
	<!-- Nav-bar -->
	<?php
	include('nav.php');
	/*include('capa.php');
	include('a-physis.php');
	include('planos.php');
	include('horarios.php');
	include('matricula.php');
	include('matricula.php');
	include('contato.php');
	include('footer.php');*/
	?>

	<!-- capa -->
	<?php
	include('capa.php');
	?>

	<!-- A Physis -->
	<?php
	include('a-physis.php');
	?>

	<!-- Planos -->
	<?php
	include('planos.php');
	?>

	<!-- Horário de Aulas -->
	<?php
	include('horarios.php');
	?>

	<!-- Matricula -->
	<?php
	include('matricula.php');
	?>

	<!-- Contato -->
	<?php
	include('contato.php');
	?>

	<!-- Rodape -->
	<?php
	include('footer.php');
	?>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>