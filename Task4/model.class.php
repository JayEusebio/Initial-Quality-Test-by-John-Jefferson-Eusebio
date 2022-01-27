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

        public function filterByMonthdesc(){
            $result = $this->conn->query("SELECT books.books_name, au.first_name, au.last_name, books.publish_date FROM books
            INNER JOIN authors au ON au.id = books.author_id
            ORDER by books.publish_date LIKE'2021-01-%' DESC LIMIT 1");
            return $result;
        }
        
        public function readAll(){
            $result = $this->conn->query("SELECT books.books_name, au.first_name, au.last_name, books.publish_date FROM books
            INNER JOIN authors au ON au.id = books.author_id
            ORDER by books.publish_date");
            return $result;
        }
    }