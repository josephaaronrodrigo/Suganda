<?php

include '../model/plan.php';
$switch = $_POST['switch'];
switch ($switch) {
    case 1: updateIndPlan();
        break;
    case 2: updateAllPlan();
        break;
}

function updateIndPlan() {
    $date = $_POST['date'];
    $style = $_POST['style'];
    $plant_no = $_POST['plant_no'];
    $plan = $_POST['p'];
    $plan_tot = $_POST['p_total'];
    $plan_remarks = $_POST['p_remarks'];

    $shipment = $_POST['s'];
    $ship_total = $_POST['s_total'];
    $shipment_remarks = $_POST['s_remarks'];
    $obj = new Plan();
    $i = 0;
    while ($i < sizeof($plan_tot)) {
        echo $plan_remarks[$i];
        if ($plan[$i] != "" || $plan_tot[$i] != "" || $plan_remarks[$i] != "") {
            $obj->updateIndProd($style, $plant_no, $date[$i], $plan[$i], $plan_tot[$i], $plan_remarks[$i]);
        }
        $i++;
    }
    $i = 0;
    while ($i < sizeof($ship_total)) {
        if ($shipment[$i] != "" || $ship_total[$i] != "" || $shipment_remarks[$i] != "") {
            $obj->updateIndShip($style, $plant_no, $date[$i], $shipment[$i], $ship_total[$i], $shipment_remarks[$i]);
        }
        $i++;
    }
    header("location:../view/plan-entry.php");
}

function updateAllPlan() {
    $style = $_POST['style'];
    $date = $_POST['date'];
    $p_1 = $_POST['p_1'];
    $p_2 = $_POST['p_2'];
    $p_3 = $_POST['p_3'];
    $p_4 = $_POST['p_4'];
    $p_5 = $_POST['p_5'];
    $p_6 = $_POST['p_6'];
    $p_7 = $_POST['p_7'];
    $p_total = $_POST['p_total'];
    $p_remarks = $_POST['p_remarks'];
    
    $s_1 = $_POST['s_1'];
    $s_2 = $_POST['s_2'];
    $s_3 = $_POST['s_3'];
    $s_4 = $_POST['s_4'];
    $s_5 = $_POST['s_5'];
    $s_6 = $_POST['s_6'];
    $s_7 = $_POST['s_7'];
    $s_total = $_POST['s_total'];
    $s_remarks = $_POST['s_remarks'];
    $obj = new Plan();
    $i = 0;
    while ($i < sizeof($p_total)) {
        if ($p_1[$i] != "" || $p_total[$i] != "" || $p_remarks[$i] != "") {
            $obj->updateIndProd($style, 1, $date[$i], $p_1[$i], $p_total[$i], $p_remarks[$i]);
        }
        if ($p_2[$i] != "" || $p_total[$i] != "" || $p_remarks[$i] != "") {
            $obj->updateIndProd($style, 2, $date[$i], $p_2[$i], $p_total[$i], $p_remarks[$i]);
        }
        if ($p_3[$i] != "" || $p_total[$i] != "" || $p_remarks[$i] != "") {
            $obj->updateIndProd($style, 3, $date[$i], $p_3[$i], $p_total[$i], $p_remarks[$i]);
        }
        if ($p_4[$i] != "" || $p_total[$i] != "" || $p_remarks[$i] != "") {
            $obj->updateIndProd($style, 4, $date[$i], $p_4[$i], $p_total[$i], $p_remarks[$i]);
        }
        if ($p_5[$i] != "" || $p_total[$i] != "" || $p_remarks[$i] != "") {
            $obj->updateIndProd($style, 5, $date[$i], $p_5[$i], $p_total[$i], $p_remarks[$i]);
        }
        if ($p_6[$i] != "" || $p_total[$i] != "" || $p_remarks[$i] != "") {
            $obj->updateIndProd($style, 6, $date[$i], $p_1[$i], $p_total[$i], $p_remarks[$i]);
        }
        if ($p_7[$i] != "" || $p_total[$i] != "" || $p_remarks[$i] != "") {
            $obj->updateIndProd($style, 7, $date[$i], $p_1[$i], $p_total[$i], $p_remarks[$i]);
        }
        $i++;
    }
    $i = 0;
    while ($i < sizeof($s_total)) {
        if ($s_1[$i] != "" || $s_total[$i] != "" || $s_remarks[$i] != "") {
            $obj->updateIndShip($style, 1, $date[$i], $s_1[$i], $s_total[$i], $s_remarks[$i]);
        }
        if ($s_2[$i] != "" || $s_total[$i] != "" || $s_remarks[$i] != "") {
            $obj->updateIndShip($style, 2, $date[$i], $s_2[$i], $s_total[$i], $s_remarks[$i]);
        }
        if ($s_3[$i] != "" || $s_total[$i] != "" || $s_remarks[$i] != "") {
            $obj->updateIndShip($style, 3, $date[$i], $s_3[$i], $s_total[$i], $s_remarks[$i]);
        }
        if ($s_4[$i] != "" || $s_total[$i] != "" || $s_remarks[$i] != "") {
            $obj->updateIndShip($style, 4, $date[$i], $s_4[$i], $s_total[$i], $s_remarks[$i]);
        }
        if ($s_5[$i] != "" || $s_total[$i] != "" || $s_remarks[$i] != "") {
            $obj->updateIndShip($style, 5, $date[$i], $s_5[$i], $s_total[$i], $s_remarks[$i]);
        }
        if ($s_6[$i] != "" || $s_total[$i] != "" || $s_remarks[$i] != "") {
            $obj->updateIndShip($style, 6, $date[$i], $s_1[$i], $s_total[$i], $s_remarks[$i]);
        }
        if ($s_7[$i] != "" || $s_total[$i] != "" || $s_remarks[$i] != "") {
            $obj->updateIndShip($style, 7, $date[$i], $s_1[$i], $s_total[$i], $s_remarks[$i]);
        }
        $i++;
    }
    header("location:../view/plan-entry.php");
}
