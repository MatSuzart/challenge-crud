<h3>Editar</h3>

<form method="POST">
	Nome:<br/>
	<input type="text" name="nome" value="<?php echo $info['nome']; ?>" /><br/><br/>

	E-mail:<br/>
	<?php echo $info['email']; ?><br/><br/>

	<label for="address_zipcode">CEP</label><br/>

	<label for="address">Logradouro</label><br/>

	<label for="address_number">Número</label><br/>

	<label for="address2">Complemento</label><br/>

	<label for="address_neighb">Bairro</label><br/>

	<label for="address_state">Estado</label><br/>

	<label for="address_city">Cidade</label><br/>


	<label for="address_country">País</label><br/>

	<input type="submit" value="Salvar" />


</form>
