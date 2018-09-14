<?php  
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    

    <title>Login | Physis</title>
    <link rel="icon" href="imagens/favicon.png">

    <!-- Bootstrap -->    
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">    
    <link href="css/estilo_login.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php 
        unset($_SESSION['usuarioId'],
            $_SESSION['usuarioNome'],
            $_SESSION['usuarioDocumento'],
            $_SESSION['usuarioEmail'],
            $_SESSION['usuarioSenha'],
            $_SESSION['usuarioNivelAcesso']);
     ?>

    <div class="container">
	    <form class="form-signin" method="post" action="valida_login.php">
	        <h2 class="form-signin-heading text-center">Faça login em sua conta da Physis!</h2>
	        <label for="inputEmail" class="sr-only">Email</label>
	        <input type="email" name="tEmail" class="form-control" placeholder="Digite seu e-mail" required autofocus><br>
	        <label for="inputPassword" class="sr-only">Senha</label>
	        <input type="password" name="tSenha" class="form-control" placeholder="Senha" required>
	        
	        <div class="checkbox">
	          	<label> <input type="checkbox" value="remember-me">Lembrar senha</label>
	        </div>

	        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>

	    </form>

        <p class="text-center text-danger">
            <?php 
                if(isset($_SESSION['loginErro'])) {
                    echo $_SESSION['loginErro'];
                    unset($_SESSION['loginErro']);
                }
             ?>
        </p>

    </div> <!-- /container -->    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

  </body>
</html>
