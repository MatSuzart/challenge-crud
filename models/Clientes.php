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
  public function add($nome, $email, $telefone, $sexo, $logradouro, $numero, $bairro, $cidade, $estado, $pais, $cep) {
    if($this->emailExists($email) == false) {
      $sql = "INSERT INTO clientes (nome, email, telefone, sexo, logradouro, numero, bairro, cidade, estado, pais, cep)
      VALUES (:nome, :email, :telefone, :sexo, :logradouro, :numero, :bairro, :cidade, :estado, :pais, :cep)";
      $sql = $this->db->prepare($sql);
      $sql->bindValue(':nome', $nome);
      $sql->bindValue(':email', $email);
      $sql->bindValue(':telefone', $telefone);
      $sql->bindValue(':sexo', $sexo);
      $sql->bindValue(':logradouro',$logradouro);
      $sql->bindValue(':numero',$numero);
      $sql->bindValue(':bairro',$bairro);
      $sql->bindValue(':cidade',$cidade);
      $sql->bindValue(':estado',$estado);
      $sql->bindValue(':pais',$pais);
      $sql->bindValue(':cep',$cep);
      $sql->execute();

      return true;
    } else {
      return false;
    }
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
