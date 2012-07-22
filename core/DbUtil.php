<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Database functional wrapper
 *
 * @author satriaprayoga
 */
class DbUtil extends PDO {

    public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS) {
        parent::__construct($DB_TYPE . ':host=' . $DB_HOST . ';dbname=' . $DB_NAME, $DB_USER, $DB_PASS);
    }

    public function insert($table, $data) {
        ksort($data);
        $fieldNames = implode('` , `', array_keys($data));
        $fieldValue = ':' . implode(', :', array_keys($data));
        $query = "INSERT INTO $table (`$fieldNames`) VALUES($fieldValue)";
        $stmt = $this->prepare($query);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
    }

    public function update($table, $data, $selector) {
        ksort($data);
        $fieldDetails = NULL;
        foreach ($data as $key => $value) {
            $fieldDetails.="`$key`=:$key,";
        }
        $fieldDetails = rtrim($fieldDetails, ', ');
        $query = "UPDATE $table SET $fieldDetails WHERE $selector";
        $stmt = $this->prepare($query);
        foreach ($data as $key => $value) {
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();
    }

    public function delete($table, $id) {
        $query = "DELETE FROM $table WHERE id=:id";
        $stmt = $this->prepare($query);
        $stmt->execute(array(':id' => $id));
    }

    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_BOTH) {
        $stmt = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $stmt->bindValue("$key", $value);
        }
        $stmt->execute();
        return $stmt->fetchAll($fetchMode);
    }

    public function single($sql, $array = array()) {
        $stmt = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $stmt->bindValue("$key", $value);
        }
        $stmt->execute();
        return $stmt->fetch();
    }

}

