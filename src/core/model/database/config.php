<?php

namespace core\model\database;
use app\config\configdb;

class  config {
   
    function __construct() {
        
    
                       $stringconfig = file_get_contents(ROOT.D_S."src".D_S."app".D_S."config".D_S."database.json");
                       $json_config = json_decode($stringconfig, true);

            
                            $this->DB = $json_config['$DB'];
                            $this->dbhost = $json_config['$dbhost'];
                            $this->dbuser = $json_config['$dbuser'];
                            $this->dbpass = $json_config['$dbpass'];
                            $this->dbname = $json_config['$dbname'];
        
    }

    
}
