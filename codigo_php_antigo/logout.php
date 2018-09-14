<?php 
	session_start();

	// destruir a sessão
	session_destroy();


	//remover todas as informações contindas na sessão
	unset($_SESSION['usuarioId'],
        $_SESSION['usuarioNome'],
        $_SESSION['usuarioDocumento'],
        $_SESSION['usuarioEmail'],
        $_SESSION['usuarioSenha'],
        $_SESSION['usuarioNivelAcesso']);

	//retorna para página de login
	header("Location: login.php");

 ?>