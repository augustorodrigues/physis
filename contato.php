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