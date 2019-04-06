<h3>Ficha de Registro</h3>

<form method="POST">
	Nome:<br/>
	<input type="text" name="nome" value="<?php echo $info['nome']; ?>" /><br/><br/>

	E-mail:<br/>
	<?php echo $info['email']; ?><br/><br/>

	<label for="telefone">Telefone</label><br/>
	<input type="text" name="telefone" /><br/><br/>

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
