	<div class="container" id="container-cadastro">
		<div class="row">
			<div class="col-md-6" id="cadastro-form">
				<h2 id="titulo-form">Faça seu cadastro!</h2>
				<?php echo form_open('Cliente/cadastrar'); ?>
					<h2>Dados pessoais:</h2>
					<div class="form-group">
						<label for="nome">Nome</label>
						<input type="text" name="nome" id="nome" class="form-control" placeholder="Escreva seu nome completo">
					</div>
					<div class="form-group">
						<label for="cpf">CPF</label>
						<input type="text" name="cpf" id="cpf" class="form-control" placeholder="Informe o seu CPF">
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="text" name="email" id="email" class="form-control" placeholder="Informe seu email no formato email@provedor.com.br">
					</div>
					<div class="form-group">
						<label for="senha">Senha</label>
						<input type="password" name="senha" id="senha" class="form-control">
					</div>
					<!--<div class="form-group">
						<label for="senhaconf">Confirme a senha</label>
						<input type="password" name="senhaconf" id="senha" class="form-control">
					</div>-->

					<hr>

					<h2>Dados para contato:</h2>

					<div class="form-group">
						<label for="telefone-fixo">Telefone (fixo)</label>
						<input type="text" id="telefone-fixo" name="telefone-fixo" class="form-control" placeholder="Informe o telefone com DDD sem espaço">
					</div>
					<!--<div class="form-group">
						<label for="telefone-cel">Telefone (cel)</label>
						<input type="text" id="telefone-cel" name="telefone-cel" class="form-control" placeholder="Informe o telefone com DDD sem espaço">
					</div>
					<div class="form-group">
						<label for="rua">Rua</label>
						<input type="text" id="rua" name="rua" class="form-control">
					</div>-->
					<div class="form-group">
						<label for="UF">UF</label>
						<select id="UF" name="UF" class="form-control">
							<?php foreach ($estados as $estado) { ?>
								<option><?php echo $estado->estado; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label for="cidade">Cidade</label>
						<select id="cidade" name="cidade" class="form-control">
							<?php foreach ($cidades as $cidade) { ?>
								<option><?php echo $cidade->nome; ?></option>
							<?php } ?>
						</select>
					</div>
					<button type="submit" class="btn btn-primary pull-right" id="cadastrar">Cadastrar</button>
				</form>
			</div>	
		</div>
	</div>