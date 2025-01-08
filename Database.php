<?php

    class Database{
        private $host = 'localhost';
        private $user = 'root';
        private $password = '';
        private $db_name = 'lab';
        private $connection;
        public function __construct()
        {
            try{
                $this->connection = new PDO('mysql:host=localhost;dbname=lab', 'root','');
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch( PDOException $e){
                die("Fail connection: ".$e->getMessage());
            }
        }

        public function getConnection()
        {
            return $this->connection;
        }

    }

?>