<?php

namespace App;

use App\Models\Article;
use \PDO;
use \PDOException;
class DB {
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("sqlite:db.sqlite");
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
      
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }
    public function all($table, $class){
      $stmt = $this->conn->prepare("SELECT  * FROM $table");
      $stmt->execute();

// set the resulting array to associative
$stmt->setFetchMode(PDO::FETCH_CLASS, $class);
return $stmt->fetchAll();

    }

    public function insert($table, $fields){
      var_dump($fields);


      $sql = "INSERT INTO $table  (firstname, lastname, email)
      VALUES ('John', 'Doe', 'john@example.com')";
      var_dump($sql);
      die();

      // use exec() because no results are returned
      $this->conn->exec($sql);

    }
}