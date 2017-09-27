<?php

require_once 'dbConnection.php';

class General {

    function getData($table_name, $column_name) {
        $conn = new Connection();
        $sql = "SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$table_name' AND COLUMN_NAME = '$column_name'";
        $result = $conn->query($sql);
        return $result;
    }

    function login($username, $password) {
        $conn = new Connection();
        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);
        return $result;
    }

    function getPlant($plant_no) {
        $conn = new Connection();
        $sql = "SELECT * FROM plant WHERE plant_no = '$plant_no'";
        $result = $conn->query($sql);
        return $result;
    }

    function getSessionTime($session) {
        $conn = new Connection();
        $sql = "SELECT time FROM session WHERE session = '$session'";
        $result = $conn->query($sql);
        return $result;
    }

    function changePwd($username, $password) {
        $conn = new Connection();
        $sql = "UPDATE login SET password = '$password' WHERE username = '$username'";
        $result = $conn->query($sql);
        return $result;
    }

}
