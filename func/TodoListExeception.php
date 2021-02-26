<?php

/**
 * Tratamento de possiveis erros do app Todo List
 *
 * @author Fabiano Basso <fabiano.basso.dev@gmail.com>
 * 
 * @copyright (c) Fabiano Basso
 */
class TodoListExeception extends Exception{
    
    private $error;
    
    public function __construct($msg, string $message = "", int $code = 0, \Throwable $previous = NULL): \Exception {
        $this->error = $msg;
        return parent::__construct($message, $code, $previous);
    }
    
    public function userErroView(){
        return $this->error;
    }
}
