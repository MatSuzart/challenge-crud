<?php
class Clientes extends model{

  public function getAll(){
    $array = array();
    $sql = "SELECT * FROM clientes";
    $sql = $this->db->query($sql);

    if($sql->rowCount()>0){
      $array = $sql->fetchAll();
    }

    return $array;


  }
  public function get($id){
    $array = array();

    $sql = "SELECT * FROM clientes WHERE id =:id";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() >0){
      $array = $sql->fetch();
    }
    return $array;
  }
  public function add($nome, $email,$telefone, $sexo) {
		if($this->emailExists($email) == false) {
			$sql = "INSERT INTO clientes (nome, email, telefone, sexo) VALUES (:nome, :email, :telefone, :sexo)";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':nome', $nome);
			$sql->bindValue(':email', $email);
			$sql->bindValue(':telefone', $telefone);
			$sql->bindValue(':sexo', $sexo);

			$sql->execute();
			return true;
		} else {
			return false;
		}
	}

  public function address($logradouro, $numero, $bairro, $cidade, $estado, $pais, $cep){
  $sql = "INSERT INTO endereco (logradouro, numero, bairro, cidade, estado, pais, cep)
   VALUES (:logradouro, :numero, :bairro, :cidade, :estado, :pais, :cep)";

  $sql->bindValue(':address', $logradouro);
  $sql->bindValue(':address_number', $numero);
  $sql->bindValue('address_neighb', $bairro);
  $sql->bindValue('address_city',$cidade );
  $sql->bindValue('address_state', $estado);
  $sql->bindValue('address_country', $pais);
  $sql->bindValue('address_zipcode',$cep);
  $sql->execute();
}


public function edit($nome, $id) {
  $sql = "UPDATE clientes SET nome = :nome WHERE id = :id";
  $sql = $this->db->prepare($sql);
  $sql->bindValue(':nome', $nome);
  $sql->bindValue(':id', $id);
  $sql->execute();
}

public function delete($id){
  $sql= "DELETE FROM clientes WHERE id =:id";
  $sql = $this->db->prepare($sql);
  $sql->bindValue(':id', $id);
  $sql->execute();
}

  public function emailExists($email){
    $sql = "SELECT * FROM clientes WHERE email =:email";
    $sql= $this->db->prepare($sql);
    $sql->bindValue(':email',$email);

    if($sql->rowCount>0){
      return true;
    }else{
      return false;
      }
    }
  }

 ?>
