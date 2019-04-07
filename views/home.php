<a href="<?php echo BASE_URL; ?>clientes/add"><img src="assets/images/more.png" border="0" width="40" height="40" /></a>

<div class="tabcontent">
<table border="0" width="100%">
	<tr>
		<th>ID</th>
		<th>NOME</th>
		<th>E-MAIL</th>
		<th>AÇÕES</th>
	</tr>
	<?php foreach($lista as $item): ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['nome']; ?></td>
			<td><?php echo $item['email']; ?></td>
			<td>
				<div class="button button_small"><a href="<?php echo BASE_URL; ?>clientes/edit/<?php echo $item['id']; ?>">Editar</a></div>
				<div class="button button_small"><a href="<?php echo BASE_URL; ?>clientes/del/<?php echo $item['id']; ?>">Excluir</a></div>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
</div>
