<?php 
	session_start();

	require_once("seguranca.php");

	echo "Bem vindo " .$_SESSION['usuarioNome'];
 ?>

 <br>

 <a href="logout.php">Sair</a>