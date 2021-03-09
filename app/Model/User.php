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
    

    public function __construct($conn, $name = null, $email, $password) {
        $this->conn = $conn;
        $this->name = $name;
        $this->email = $email;
        $this->password = md5($password);
    }
    
    
    public function createUser(){
        $query = "insert into todo_user(email,name,password) values(:name,:email,:password)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':email', $this->__get('name'));
        $stmt->bindValue(':name', $this->__get('email'));
        $stmt->bindValue(':password', $this->__get('password'));
        $stmt->execute();
        
        return $stmt->rowCount();
    }

    public function login(){
        $query = "
            select * 
            from todo_user
            where email = :email and password = :password 
        ";

        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':password', $this->password);
        $stmt->execute();

        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        if(!empty($resultado)){
            extract($resultado);
            $this->id = $id;
            $this->name = $name;
            $this->startSession();
            return true;
        }else{
            return false;
        }
        
    }

    private function startSession(){
        session_start();
        $_SESSION['id'] = $this->__get('id');
        $_SESSION['user'] = $this->__get('name');
    }
    
    
    
}
