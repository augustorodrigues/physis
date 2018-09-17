<?php 
	session_start();

	require_once("db/conexao.php");

	$email = $_POST['tEmail'];
	$senha = $_POST['tSenha'];

	$dbc = new db();
	$con = $dbc->conectar();

	$qry = $con -> prepare("SELECT * FROM physis_usuario WHERE email =:email AND senha =:senha");
	$qry -> bindValue(":email", $email);
	$qry -> bindValue(":senha", $senha);
	$qry -> execute();

	print_r($qry -> rowCount());

	if (($qry -> rowCount()) > 0) {		
		$_SESSION['email'] = $email;
		$_SESSION['senha'] = $senha;
		header('location:usuarios.php');
	} else {
		unset($_SESSION['email']);
		unset($_SESSION['senha']);		
		header('location:login.php');
	}

	//$sql = "SELECT * FROM physis_usuario WHERE email='$email' AND senha = '$senha' LIMIT 1;";

	//$resultado = mysqli_query($link, $sql);	

	//$exibe = mysqli_fetch_assoc($resultado);	

	/*if(empty($exibe)) {
		//mensagem de erro
		$_SESSION['loginErro'] = "Usuário ou senha incorreto";

		//retorna para página de login
		header("Location: login.php");
	} else {
		//Define os valores atribuidso na sesao do usuario
		$_SESSION['usuarioId'] 			= $exibe['id_usuario'];
		$_SESSION['usuarioNome'] 		= $exibe['nome'];
		$_SESSION['usuarioDocumento'] 	= $exibe['documento'];
		$_SESSION['usuarioEmail'] 		= $exibe['email'];
		$_SESSION['usuarioSenha'] 		= $exibe['senha'];
		$_SESSION['usuarioNivelAcesso'] = $exibe['nivel_acesso_id'];

		if($_SESSION['usuarioNivelAcesso'] == 1) {
			header("Location: administracao.php");
		} else {
			header("Location: painel.php");
	}*/

?>