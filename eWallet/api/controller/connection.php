<?php

  class Connect {

    protected $conn;

    function __construct() {
      $this->conn = new mysqli('localhost', 'root', '', 'api_db');
      if($this->conn->connect_error) {
          die('Connect Error (' . $conn->connect_errno . ') ' . $conn->connect_error); 
      }
    }

    public function getConnection() {
      return $this->conn;
    }

  }

?>