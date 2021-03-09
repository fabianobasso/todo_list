<?php

/**
 * Model da tabela todo_task
 * 
 * @author Fabiano Basso <fabiano.basso.dev@gmail.com>
 * 
 * @copyright 2021 Fabiano Basso
 */

class Task{
    private $idTask;
    private $idTodoStatusPeding;
    private $idTodoStatusComplete;
    private $idTodoUser;
    private $taskActive;
    private $taskInactive;
    private $task;

    public function __get($attr){
        return $this->$attr;
    }
    public function __set($attr, $value){
        $this->$attr = $value;
    }
}