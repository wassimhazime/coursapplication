<?php
namespace app\config ;
class configdb{
    
 public $DB;
    public $dbhost ;
    public $dbuser ;
    public $dbpass ;
    public $dbname ;
    
    public static function a(){
        echo 'ff';
    }
            function __construct(   $DB='mysql',
                        $dbhost = "localhost",
                        $dbuser = "root", 
                        $dbpass = "", 
                        $dbname = "achraf") {
         
                            $this->DB = $DB;
                            $this->dbhost = $dbhost;
                            $this->dbuser = $dbuser;
                            $this->dbpass = $dbpass;
                            $this->dbname = $dbname;
        
}

                        }