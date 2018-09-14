<?php 
	ob_start();

	if( ($_SESSION["usuarioId"] == "") || ($_SESSION["usuarioNome"] == "") || ($_SESSION['usuarioNivelAcesso'] == "") || ($_SESSION['usuarioEmail'] == "") || ($_SESSION['usuarioDocumento'] == "") || ($_SESSION['usuarioSenha'] == "")) {

		unset($_SESSION['usuarioId'],
            $_SESSION['usuarioNome'],
            $_SESSION['usuarioDocumento'],
            $_SESSION['usuarioEmail'],
            $_SESSION['usuarioSenha'],
            $_SESSION['usuarioNivelAcesso']);

		// mensagem de erro
		$_SESSION['loginErro'] = "Área restrita para usuários cadastrados";

		// retorna para página de login
		header("Location: login.php");

	}

 ?>