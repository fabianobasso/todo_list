<?php

    class SetupSqlite{

        private $db;

        public function __construct($dbName){
            $this->db = new SQLite3($dbName);
        }

        public function createTable($query){
            
            if($this->db->exec($query)){
                return true;
            }else{
                return false;
            }
        }
        
    }
    $dbName = '../db/todo_list.db';

    if(!file_exists($dbName)){
        $sqlite = new SetupSqlite($dbName);

        $fileSql = '../db/database.sql';
        if(file_exists($fileSql)){
        $file = fopen($fileSql, 'r');
        $state = [];
        while(!feof($file)){
            $query = fgets($file);
            $query = str_replace(';', '', $query);
            $status = $sqlite->createTable($query);
            if($status){
                $state[] = 1;
            }else{
                $state[] = 2;
            }
        }
        foreach($state as $value){
            if($value == 2){
                echo 'As querry não foram excutadas.';
                break;
            }
        }
        
        echo 'O banco foi criado com sucesso';

        }else{
        echo "{$fileSql}, não encontrado.";
        }
    }else{
        echo '1';
    }
    