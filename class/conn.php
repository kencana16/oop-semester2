<?php
    class conn{
        public $conn;


        public function __construct(){
              $servername = 'localhost';
              $username = 'root';
              $password = '';
              $database = 'a221802684';
              
              try {
                    $this->conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
                    
                    $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
              }
              catch (PDOException $error) {
                    echo "Connection failed: " . $error->getMessage();
              };
        }
    }
?>    