<?php
class homeController extends controller {

	public function index() {
		$dados = array();
		
		$clientes = new Clientes();
		$dados['lista'] = $clientes->getAll();

		$this->loadTemplate('home', $dados);
	}

}
