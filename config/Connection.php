<?php
//namespace Config;
/**
 * Responsavel por fazer a conexão com o banco de dados
 *
 * @author Fabiano Basso <fabiano.basso.dev@gmail.com>
 * 
 * @copyright (c) Fabiano Basso
 */
class Connection {
    
    private static $conn = null;
    private static $dbname = DBNAME;
    private static $drive = DRIVE;
    
    public static function connect(){
          if(self::$conn == null){
              try {
               $conn = new PDO(self::$drive.':'.self::$dbname);
            } catch (PDOException $e) {
                echo "Codigo: {$e->getCode()}, Mensagem: {$e->getMessage()}";
            }  
          }
        return $conn;
    }
    
    public function teste() {
        echo $this->dbname;
    }
}
