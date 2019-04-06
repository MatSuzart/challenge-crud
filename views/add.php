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
	<label for="address_zipcode">CEP</label><br/>
	<input type="text" name="address_zipcode" /><br/><br/>

	<label for="address">Logradouro</label><br/>
	<input type="text" name="address" /><br/><br/>

	<label for="address_number">Número</label><br/>
	<input type="text" name="address_number" /><br/><br/>

	<label for="address2">Complemento</label><br/>
	<input type="text" name="address2" /><br/><br/>

	<label for="address_neighb">Bairro</label><br/>
	<input type="text" name="address_neighb" /><br/><br/>

	<label for="address_state">Estado</label><br/>
	<input type="text" name="address_state" /><br/>

	<label for="address_city">Cidade</label><br/>
	<input type="text" name="address_city" /><br/>

	</select><br/><br/>

	<label for="address_country">País</label><br/>
	<input type="text" name="address_country" /><br/><br/>

	<input type="submit" value="Salvar" />


</form>

<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script_clientes_add.js"></script>
