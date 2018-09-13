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
					<li><a href="#a-physis">A Physis</a></li>					
					<li><a href="#planos">Planos</a></li>
					<li><a href="#aulas">Aulas</a></li>
					<li><a href="#matricula">Matricule-se</a></li>
					<li><a href="#contato">Contato</a></li>
					<li class="divisor" role="separator"></li>					
					<li><a href="login.php">Entrar</a></li>				
				</ul>				
			</div>
		</div><!-- /container -->		
	</nav><!-- /nav -->

	<!-- capa -->
	<div class="capa">
		<div class="texto-capa">
			<h1>A sua melhor opção em saúde</h1>
			<a href="#" class="btn btn-custom btn-azul1 btn-lg">Nossos Planos</a>
			<a href="#" class="btn btn-custom btn-azul2 btn-lg">Pré-Matricula</a>
		</div>		
	</div>

	<!-- A Physis -->
	<section id="a-physis">
		<div class="container">
			<div class="row">
				<!-- fotos -->
				<div class="col-md-6">
					<div class="row fotos">
						<div class="col-md-6">
							<img src="imagens/musculacao.jpg" class="img-responsive">
						</div>

						<div class="col-md-6">
							<img src="imagens/natacao.jpg" class="img-responsive">			
						</div>				
					</div>

					<div class="row fotos">
						<div class="col-md-6">
							<img src="imagens/danca.jpg" class="img-responsive">
						</div>

						<div class="col-md-6">
							<img src="imagens/artes-marciais.jpg" class="img-responsive">			
						</div>				
					</div>					
				</div>

				<!-- serviços -->
				<div class="col-md-6 titulo">
					<h2>Venha fazer parte da Physis</h2>

					<h3>Musculação</h3>					
					<p>Treinamentos de hipertrofia muscular, <i>endurance</i>, força pura e resistência baseado nos princípios do treinamento desportivo.</p>

					<h3>Natação</h3>
					<p>A natação é uma forma divertida, saudável e desafiadora de se exercitar por ser praticada na água, despertando uma sensação de prazer e bem-estar.</p>

					<h3>Dança</h3>
					<p>Aula com duração de 50 minutos que ensina as coreografias de vários ritmos dançantes, como axé, funk, salsa e outros.</p>

					<h3>Artes Marciais</h3>
					<p>Aula de luta com duração de 60 min, utilizando técnicas de soco e chute. Aula com gasto calórico elevado. Para Homens e Mulheres.</p>
				</div>				
			</div> <!-- /row -->
		</div>
	</section>

	<!-- Planos -->
	<section id="planos">
		<div class="container">
		<h2>Planos</h2>
			<div class="row">								
				<div class="col-md-4">
					<div class="plano-individual">
						<h3>Individual</h3>
						<p><strong>R$ 300,00/mês</strong></p>
						<p>1 pessoa</p>
						<p>Musculação</p>
						<p>Natação</p>
						<p>1 modalidade de dança</p>
						<p>1 modalidade de arte marcial</p>
						<a href="#" class="btn btn-custom btn-azul2 btn-lg">Obter Plano</a>
					</div>
				</div>

				<div class="col-md-4">
					<div class="plano-parceiro">
						<h3>Parceiros</h3>
						<p><strong>R$ 560,00/mês</strong></p>
						<p>até 2 pessoas</p>
						<p>Musculação</p>
						<p>Natação</p>
						<p>1 modalidade de dança por pessoa</p>
						<p>1 modalidade de arte marcial por pessoa</p>
						<a href="#" class="btn btn-custom btn-azul1 btn-lg">Obter Plano</a>

					</div>
				</div>

				<div class="col-md-4">
					<div class="plano-familia">
						<h3>Família</h3>
						<p><strong>R$ 1.250,00/mês</strong></p>
						<p>até 5 pessoas</p>
						<p>Musculação</p>
						<p>Natação</p>
						<p>1 modalidade de dança por pessoa</p>
						<p>1 modalidade de arte marcial por pessoa</p>
						<a href="#" class="btn btn-custom btn-azul2 btn-lg">Obter Plano</a>
					</div>
				</div>
			</div>			
		</div>		
	</section>

	<!-- Horário de Aulas -->
	<section id="aulas">		
		<div class="container">
			<h2>Horários de Aulas</h2>
			<div class="agenda">
			    <div class="table-responsive">
			        <table class="table table-condensed table-bordered">
			            <thead>
			                <tr>
			                	<th>Horário</th>			                    
			                    <th>Segunda-feira</th>
			                    <th>Terça-feira</th>
			                    <th>Quarta-feira</th>
			                    <th>Quinta-feira</th>
			                    <th>Sexta-feira</th>
			                    <th>Sábado</th>
			                    <th>Domingo</th>
			              	</tr>
			            </thead>
			            <tbody>
			                <!-- Single event in a single day -->
			                <tr>
			                    <td class="agenda-data" rowspan="1">
			                        <div class="horario">06:00</div>	                        
			                        <div class="periodo text-muted">AM</div>
			                    </td>
			                    <td>Jump</td> <!-- segunda-feira -->
			                    <td>Spinning</td> <!-- terca-feira -->
			                    <td>Pilates</td> <!-- quarta-feira -->
			                    <td></td> <!-- quinta-feira -->
			                    <td>Pilates</td> <!-- sexta-feira -->
			                    <td></td> <!-- sábado -->
			                    <td></td> <!-- domingo -->
			                </tr>                   
			                
			                <tr>
			                    <td class="agenda-data" rowspan="1">
			                        <div class="horario">08:00</div>	                        
			                        <div class="periodo text-muted">AM</div>
			                    </td>
			                    <td>Karatê</td> <!-- segunda-feira -->
			                    <td>Judô</td> <!-- terca-feira -->
			                    <td>Karatê</td> <!-- quarta-feira -->
			                    <td>Judô</td> <!-- quinta-feira -->
			                    <td>Boxe</td> <!-- sexta-feira -->
			                    <td></td> <!-- sábado -->
			                    <td></td> <!-- domingo -->
			                </tr>

			                <tr>
			                    <td class="agenda-data" rowspan="1">
			                        <div class="horario">10:00</div>	                        
			                        <div class="periodo text-muted">AM</div>
			                    </td>
			                    <td>Natação</td> <!-- segunda-feira -->
			                    <td>Natação</td> <!-- terca-feira -->
			                    <td>Natação</td> <!-- quarta-feira -->
			                    <td>Natação</td> <!-- quinta-feira -->
			                    <td>Natação</td> <!-- sexta-feira -->
			                    <td>Natação</td> <!-- sábado -->
			                    <td>Natação</td> <!-- domingo -->
			                </tr>

			                <tr>
			                    <td class="agenda-data" rowspan="1">
			                        <div class="horario">14:00</div>	                        
			                        <div class="periodo text-muted">AM</div>
			                    </td>
			                    <td>Natação</td> <!-- segunda-feira -->
			                    <td>Natação</td> <!-- terca-feira -->
			                    <td>Natação</td> <!-- quarta-feira -->
			                    <td>Natação</td> <!-- quinta-feira -->
			                    <td>Natação</td> <!-- sexta-feira -->
			                    <td>Natação</td> <!-- sábado -->
			                    <td>Natação</td> <!-- domingo -->
			                </tr>
			                
			    	    </tbody>
				    </table>
				    <p>Ambiente para prática de musculação disponível todos os horários e dias.</p>
				</div>
			</div>
		</div> <!-- container aulas -->
	</section>

	<!-- Matricula -->
	<section id="matricula">
		<div class="container">
			<div class="col-md-2"></div>

			<div class="col-md-8">
				<div>
					<h2>Pré-Matricula</h2>
				</div>

				<form action="index.php" method="post" id="form_matricula">
					<div>
						<!-- dados pessoais -->
						<fieldset> <legend>Crie sua conta</legend>
							<div class="form-group">
								<label for="cNome">Nome Completo</label> 
								<input type="text" name="tNome" id="cNome" class="form-control" placeholder="digite seu nome">
							</div>

							<div class="form-group">
								<label for="cDocumento">Documento (CPF ou RG)</label>
								<input type="text" name="tDocumento" id="cDocumento" class="form-control" placeholder="CPF ou RG">
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
								<label for="cConfirmar_Senha">Confirmar Senha</label>
								<input type="password" class="form-control" name="tConfirmar_Senha" id="cConfirmar_Senha" placeholder="confirme a sua senha">
							</div>
							
						</fieldset>
					</div>							

					<input type="hidden" name="acao" value="formulario"><br>

					<div class="conteudo_direita">
						<input type="submit" name="tEnviar" id="btnEnviar" value="Cadastrar" class="btn btn-custom btn-azul1 btn-lg">
						<input type="reset" name="tLimpar" id="btnLimpar" value="Limpar" class="btn btn-custom btn-azul1 btn-lg">												
					</div>					
										
				</form>

			</div> <!-- /col-md-8 -->
			<div class="col-md-2"></div>
		</div> <!-- container matricula -->
	</section>

	<!-- Contato -->
	<section id="contato">
		<div class="container">
			<div class="col-md-2"></div>

			<div class="col-md-8">
				<div>
					<h2>Alguma dúvida? Entre em contato!</h2>
				</div>

				<form action="index.php" method="post" id="form_contato">
					<div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Nome</label> 
								<input type="text" name="tNome" id="cNome" class="form-control" placeholder="digite seu nome">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>E-mail</label>
								<input type="email" class="form-control" name="tEmail" id="cEmail" maxlength="40" placeholder="digite um e-mail válido">
							</div>
						</div>
						
						<div class="col-md-12">
							<div class="form-group">
								<label for="cMsg">Mensagem ou dúvida</label>
								<textarea class="form-control" name="tMsg" id="cMsg" rows="6" cols="100" placeholder="Dúvidas, elogios, sugestões. Pode mandar!"></textarea>
							</div>
						</div>						
					</div>							

					<input type="hidden" name="acao" value="formulario"><br>

					<div class="conteudo_direita">
						<input type="submit" name="tEnviar" id="btnEnviar" value="Enviar" class="btn btn-custom btn-azul1 btn-lg">
						<input type="reset" name="tLimpar" id="btnLimpar" value="Limpar" class="btn btn-custom btn-azul1 btn-lg">
					</div>				
				</form>

			</div> <!-- /col-md-8 -->
			<div class="col-md-2"></div>
		</div> <!-- container contato -->
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