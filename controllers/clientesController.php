<?php
class clientesController extends controller{

  public function index(){}

    public function add(){
      $dados = array(
        'error'=>''
      );
      if(!empty($_GET['error'])){
        $dados['error'] = $_GET['error'];
      }

      $this->loadTemplate('add', $dados);
    }
    public function add_save() {
  		if(!empty($_POST['email'])) {
  			$nome = $_POST['nome'];
  			$email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $logradouro = $_POST['logradouro'];
        $numero = $_POST['numero'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $pais = $_POST['pais'];
        $cep = $_POST['cep'];

  			$clientes = new Clientes();
  			if($clientes->add($nome, $email, $telefone, $sexo, $logradouro, $numero, $bairro, $cidade, $estado, $pais, $cep)) {
  				header("Location: ".BASE_URL);
  			} else {
  				header("Location: ".BASE_URL.'clientes/add?error=exist');
  			}
  		} else {
  			header("Location: ".BASE_URL.'clientes/add');
  		}
  	}

    public function edit($id) {
      $dados = array();

      if(!empty($id)) {
        $clientes = new Clientes();

        if(!empty($_POST['nome'])) {
          $nome = $_POST['nome'];

          $clientes->edit($nome, $id);
        } else {
          $dados['info'] = $clientes->get($id);

          if(isset($dados['info']['id'])) {
            $this->loadTemplate('edit', $dados);
            exit;
          }
        }
      }

      header("Location: ".BASE_URL);

      }

    public function del($id){
      if (!empty($id)){
        $clientes = new Clientes();
        $clientes->delete($id);
      }
      header("Location".BASE_URL);
    }
}

 ?>
