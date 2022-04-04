<?php
    class Database {
        
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "project_progra3";

        protected function connect() {
            return new mysqli($this->host, $this->username, $this->password, $this->database); 
        }
    }
?>