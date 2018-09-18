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