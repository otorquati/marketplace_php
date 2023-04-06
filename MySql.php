<?php 
  class MySql{
    private $pdo = null;
    public static function getConn(){
      if(self::$pdo == null){
        self::$pdo = new PDO('mysql:host=localhost;dbname=marketplace_curso','root','root');
        return self::$pdo;
        }else{
          return self::$pdo;
        }
    }
  }


?>