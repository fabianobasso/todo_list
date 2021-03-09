<?php

    class Dashboard{

        private $task;
        private $conn;

        public function __construct($conn, Task $task){
            $this->conn = $conn;
            $this->task = $task;
        }

        public function totalTask(){
            $query = "select count(*) as total 
                    from todo_task 
                    where id_todo_user = :id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindValue(':id', $this->task->__get('idTodoUser'));
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function totalTaskComplete(){

        }

        public function totalTaskPeding(){

        }

        public function totalTaskDelete(){

        }
    }