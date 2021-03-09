<?php 
/**
 * Modelo de operações da tarefas
 * 
 * @author Fabiano Basso <fabiano.basso.dev@gmail.com>
 * 
 * @copyright 2021 Fabiano Basso
 */

class TaskOperation{

    private $task;
    private $conn;


    public function __construct($conn, Task $task){
        $this->conn = $conn;
        $this->task = $task;
    }

    public function createTask(){
        $query = "insert into todo_task(id_todo_user,task,create_task_date) values(:idUser,:task,:date)";
        // echo $query;
        // echo $this->task->__get('idTodoUser');
        // echo $this->task->__get('task');
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':idUser', $this->task->__get('idTodoUser'));
        $stmt->bindValue(':task', $this->task->__get('task'));
        $stmt->bindValue(':date', date('Y-m-d H:i:s'));
        $stmt->execute();

        return $stmt->rowCount();

    }

    public function readTask(){
        
    }

    public function updateTask(){

    }

    public function deleteTask(){

    }

    
}