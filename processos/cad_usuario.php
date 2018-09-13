<?php 
	session_start();
	require_once("../seguranca.php");
	require_once("../conexao.php");


	$nome 		= $_POST['tNome'];
	$documento 	= $_POST['tDocumento'];
	$nascimento = $_POST['tDataNasc'];
	$email 		= $_POST['tEmail'];
	$senha 		= $_POST['tSenha'];
	$nivel_acesso = $_POST['tNivel_Acesso'];


	$objDb = new db();
	$link = $objDb->conecta_mysql();	

	$sql = "INSERT INTO physis_usuario (`id_usuario`, `nome`, `documento`, `nascimento`, `email`, `senha`, `nivel_acesso_id`, `criacao`, `modificacao`) VALUES (NULL, '$nome', '$documento', 'nascimento', '$email', '$senha', '$nivel_acesso', now(), NULL);";

	$resultado = mysqli_query($link, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
</head>

<body>
<?php

	if(mysqli_affected_rows($link) != 0) {
		header("Location: ../usuarios.php");
	}	

?>

</body>
</html>
