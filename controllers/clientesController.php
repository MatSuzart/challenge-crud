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
        $logradouro = $_POST['address'];
        $numero = $_POST['address_number'];
        $bairro = $_POST['address_neighb'];
        $cidade = $_POST['address_city'];
        $estado = $_POST['address_state'];
        $pais = $_POST['address_country'];
        $cep = $_POST['address_zipcode'];

  			$clientes = new Clientes();
  			if($clientes->add($nome, $email,$telefone, $sexo)) {
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
