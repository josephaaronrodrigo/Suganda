<?php

//Create Database Connection
class Connection {

    function query($sql) {
        //Connect to the server or display error if connection unsuccessful
        $conn = mysql_connect('localhost', 'suganda', 'aprl123321') or die("Cannot establish the connection");
        //Connect to the database or display error if connection unsuccessful
        $db = mysql_select_db('suganda_production', $conn) or die("Cannot connect to the database suganda");
        //Execute query or display error with query syntax if execution unsuccessful
        $result = mysql_query($sql) or die("Cannot execute the query sql." . mysql_error());
        return $result;
    }

}

?>