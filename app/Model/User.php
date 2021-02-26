<?php
/**
 * classe modelo de dados da tabela usuário
 *
 * @author Fabiano Basso <fabiano.basso.dev@gmail.com>
 * 
 * @copyright (c) Fabiano Basso
 */
class User {
    
    private $id;
    private $name;
    private $email;
    private $password;
    private $conn;
    
    public function __get($attr){
        return $this->$attr;
    }
    
    public function __set($attr, $value){
        $this->$attr = $value;
    }
    
    public function __construct($conn, $name, $email, $password) {
        $this->conn = $conn;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    
    public function createUser(){
        $query = "insert into todo_user(email,name,password) values(:name,:email,:password)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':email', $this->__get('name'));
        $stmt->bindValue(':name', $this->__get('email'));
        $stmt->bindValue(':password', $this->__get('password'));
        $stmt->execute();
       
    }
    
    
    
}
