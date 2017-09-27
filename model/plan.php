<?php

include_once 'dbConnection.php';

class Plan {

    function updateIndProd($style, $plant_no, $date, $plan, $plan_tot, $plan_remarks) {
        $conn = new Connection();
        $sql = "INSERT INTO production_plan VALUES('$plant_no','$date','$style','$plan','$plan_tot','$plan_remarks')";
        $conn->query($sql);
        return;
    }

    function updateIndShip($style, $plant_no, $date, $shipment, $ship_total, $shipment_remarks) {
        $conn = new Connection();
        $sql = "INSERT INTO shipment_plan VALUES('$plant_no','$date','$style','$shipment','$ship_total','$shipment_remarks')";
        $conn->query($sql);
        return;
    }

    function getPlan($style, $plant_no, $date, $table, $column) {
        $conn = new Connection();
        $sql = "SELECT $column FROM $table WHERE date LIKE '$date' AND style LIKE '$style' AND plant_no LIKE '$plant_no'";
        $result = $conn->query($sql);
        if (mysql_num_rows($result) > 0) {
            $array = mysql_fetch_array($result);
            $output = $array[$column];
        } else {
            $output = "";
        }
        return $output;
    }

}
