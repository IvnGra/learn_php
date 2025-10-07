<?php

namespace App;

use PDO;
use PDOException;

class DB
{
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("sqlite:db.sqlite");
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function all($table, $class)
    {
        $stmt = $this->conn->prepare("SELECT * FROM $table where id=$id");
        $stmt->execute();
        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetch();
    }

    public function insert($table, $fields)
    {   
        $fieldNames = array_keys($fields);
        $fieldNamesText = implode(', ', $fieldNames);
        
        $fieldValuesText = implode("', '", $fields);

        $sql = "INSERT INTO $table ($fieldNamesText)
                VALUES ('$fieldValuesText')";
        // use exec() because no results are returned
        $this->conn->exec($sql);
    }

    public function update($table, $fields, $id) {
        $updateText = '';
        foreach($fields as $key=>$value){
            $updateText.="$key='$value', ";
        }
        $updateText = rtrim($updateText, 0, -2);
        dump($updateText);
      $sql = "UPDATE MyGuests SET lastname='Doe', bla='something' WHERE id=$id";
        dd($sql);
        // Prepare statement
        $stmt = $conn->prepare($sql);

        // execute the query
        $stmt->execute();
        }

        public function delete($table, $id){
        $sql = "DELTE FROM $table WHERE id=$id";

        $this->conn->exec($sql);
    }
}
