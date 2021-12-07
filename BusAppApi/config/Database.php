<?php 
  class Database {
    // DB Params
    private $host = 'hwboeun2.homm7.gethompy.com';
    private $db_name = 'homm_hwboeun2';
    private $username = 'homm_hwboeun2';
    private $password = 'hwbo!7812!';
    private $conn;

    // DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }