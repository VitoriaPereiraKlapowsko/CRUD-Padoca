<?php
class Produto {
    private $conexao;
    private $produto;
    private $id;
    private $telefone;
    private $email;
    private $cpf;

    public function __construct($db) {
        $this->conexao = $db;
    }

        
    public function setId($id){
        $this->id = $id;
    }

    public function setProduto($produto){
        $this->produto = $produto;
    }

    public function setCPF($cpf){
        $this->cpf = $cpf;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function setEmail($email){
        $this->email= $email;
    }

    public function create() {
        $query = "INSERT INTO produto SET produto=:produto, telefone=:telefone, email=:email, cpf=:cpf";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(":produto", $this->produto);
        $stmt->bindParam(":telefone", $this->telefone); $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":cpf", $this->cpf);
        
        if ($stmt->execute()) {
            return true;
        }
            return false;
    }
    public function read() {
        $query = "SELECT * FROM produto";
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        
        return $stmt;
    } 
    public function delete() {
        $query = "DELETE FROM produto WHERE id=:id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(":id", $this->id);
        
        if ($stmt->execute()) {
            return true;
    }
    return false;
    }    

    public function update() {
        $query = "UPDATE produto SET produto=:produto, telefone=:telefone, email=:email, cpf=:cpf WHERE id=:id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(":produto", $this->produto);
        $stmt->bindParam(":telefone", $this->telefone);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":cpf", $this->cpf);
        $stmt->bindParam(":id", $this->id);
      
        if ($stmt->execute()) {
            return true;
        }
       return false;
    }   

    public function consultar(){
        $query = "SELECT * FROM produto WHERE id=:id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindParam(":id", $this->id);
        $stmt->execute();
        return $stmt;
    }
}
?>