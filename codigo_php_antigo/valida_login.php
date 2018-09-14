<?php /*
	session_start();

	require_once("conexao.php");

	$email = $_POST['tEmail'];
	$senha = $_POST['tSenha'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$sql = "SELECT * FROM physis_usuario WHERE email='$email' AND senha = '$senha' LIMIT 1;";

	$resultado = mysqli_query($link, $sql);	

	$exibe = mysqli_fetch_assoc($resultado);	

	if(empty($exibe)) {
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