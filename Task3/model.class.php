<?php

    class model {
        var $servername = "Localhost";
        var $username = "root";
        var $password = "";
        var $db = "initial_quality_test";
        private $conn;

        public function __construct($table){
            $this->table = $table;
            $this->connect();
        }

        function connect(){
            $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->db);
        }
        
        public function selectById($x){    
            $result = $this->conn->query("SELECT * FROM  $this->table  WHERE id=" . $x );
            return $result;  
        }

}
  
