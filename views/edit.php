<h3>Editar</h3>

<form method="POST">
	Nome:<br/>
	<input type="text" name="nome" value="<?php echo $info['nome']; ?>" /><br/><br/>

	E-mail:<br/>
	<?php echo $info['email']; ?><br/><br/>

	<label for="address_zipcode">CEP</label><br/>
	<?php echo $info['cep']; ?><br/><br/>
	<label for="address">Logradouro</label><br/>
<?php echo $info['logradouro']; ?><br/><br/>
	<label for="address_number">Número</label><br/>
	<?php echo $info['numero']; ?><br/><br/>
	<label for="address2">Complemento</label><br/>

	<label for="address_neighb">Bairro</label><br/>
<?php echo $info['bairro']; ?><br/><br/>
	<label for="address_state">Estado</label><br/>
<?php echo $info['estado']; ?><br/><br/>
	<label for="address_city">Cidade</label><br/>
<?php echo $info['cidade']; ?><br/><br/>

	<label for="address_country">País</label><br/>
<?php echo $info['pais']; ?><br/><br/>
	<input type="submit" value="Salvar" />


</form>
