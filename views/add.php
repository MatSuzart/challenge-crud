<h3>ADICIONAR</h3>

<?php if($error == 'exist'): ?>
	<div class="aviso">E-mail já existente, tente outro.</div>
<?php endif; ?>

<form method="POST" action="<?php echo BASE_URL; ?>clientes/add_save">

  Nome<br/>
	<input type="text" name="nome" /><br/><br/>

	E-mail<br/>
	<input type="email" name="email" /><br/><br/>

	<label for="telefone">Telefone</label><br/>
	<input type="text" name="telefone" /><br/><br/>

  <div class="radio">
    <strong>Sexo:</strong><br/>
    <label><input type="radio" name="sexo" value="0" /> Mulher</label><br/>
    <label><input type="radio" name="sexo" value="1" checked="checked" /> Homem</label>
  </div>
	<label for="cep">CEP</label><br/>
	<input type="text" name="cep" /><br/><br/>

	<label for="logradouro">Logradouro</label><br/>
	<input type="text" name="logradouro" /><br/><br/>

	<label for="numero">Número</label><br/>
	<input type="text" name="numero" /><br/><br/>

	<label for="address2">Complemento</label><br/>
	<input type="text" name="address2" /><br/><br/>

	<label for="bairro">Bairro</label><br/>
	<input type="text" name="bairro" /><br/><br/>

	<label for="estado">Estado</label><br/>
	<input type="text" name="estado" /><br/>

	<label for="cidade">Cidade</label><br/>
	<input type="text" name="cidade" /><br/>

	</select><br/><br/>

	<label for="pais">País</label><br/>
	<input type="text" name="pais" /><br/><br/>

	<input type="submit" value="Salvar" />


</form>

<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script_clientes_add.js"></script>
