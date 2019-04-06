<html>
	<head>
		<title>Desafio GRTS Digital</title>
		<link href="<?php echo BASE_URL; ?>/assets/css/template.css" rel="stylesheet" />
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery-1.7.1.min.js"></script>
	</head>
	<body>
		<header>
			<h1>Listagem de Clientes</h1>
		</header>
		<section>
			<?php $this->loadViewInTemplate($viewName, $viewData); ?>
		</section>
		<footer>
			Todos os direitos reservados
		</footer>
	</body>
</html>
