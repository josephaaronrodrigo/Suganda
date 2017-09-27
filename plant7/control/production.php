<?php

$switch = $_POST['switch'];

switch ($switch) {
    case 1 : updateProd();
        break;
    case 2 : allocateStyles();
        break;
    case 3 : packingUpdate();
        break;
    case 4 : updateAttendance();
        break;
    case 5 : updateResigned();
        break;
    case 6 : updateLine();
        break;
    case 7: lineEdit();
        break;
    case 8: planUpdate();
        break;
    case 9: hourPlanUpdate();
        break;
}

function updateProd() {
    $plant_no = $_POST['plant_no'];
    $date = date('Y-m-d', strtotime($_POST['date']));
    $session = $_POST['session'];
    $session_start = $_POST['session_start'];
    $line_nos = $_POST['line_no'];
    $styles = $_POST['style'];
    $outputs = $_POST['output'];
    $mos = $_POST['mos'];
    $remarks = $_POST['remarks'];
    $planned_out = $_POST['plannedOut'];
    $planned_hours = $_POST['planned_hours'];
    $i = 0;
    include '../model/production.php';
    $obj = new Production();
    while ($i < sizeof($styles)) {
        if ($styles[$i] != "") {
            $start = substr($session_start[$i], 17);
            $result = $obj->updateProd($plant_no, $date, $session, $line_nos[$i], $styles[$i], $start, $outputs[$i], $mos[$i], $remarks[$i]);
            $result1 = $obj->updatePlannedOut($plant_no, $date, $line_nos[$i], $styles[$i], $planned_out[$i], $planned_hours[$i]);
        }
        $i++;
    }

    header("location:../view/prodUpdate.php?suc=1");
}

function allocateStyles() {
    $style = $_POST['style'];
    $plant_no = $_POST['plant_no'];
    $status = $_POST['status'];
    $smv = $_POST['smv'];
    $order_qty = $_POST['order_qty'];
    $planned_qty = $_POST['planned_qty'];
    $start_date = date('Y-m-d', strtotime($_POST['start_date']));
    $end_date = date('Y-m-d', strtotime($_POST['end_date']));
    $unit_price = $_POST['unit_price'];
    $rqd_helpers = $_POST['rqd_helpers'];
    $rqd_mos = $_POST['rqd_mos'];
    $running_day = $_POST['running_day'];

    include '../model/production.php';
    $obj = new Production();
    $result = $obj->allocateStyles($style, $plant_no, $status, $smv, $order_qty, $planned_qty, $start_date, $end_date, $unit_price, $rqd_helpers, $rqd_mos,$running_day);
    header("location:../view/addstyle.php?suc=1");
}

function packingUpdate() {
    $plant_no = $_POST['plant_no'];
    $session = $_POST['session'];
    $lines = $_POST['line_no'];
    $styles = $_POST['style'];
    $date = date('Y-m-d', strtotime($_POST['date']));
    $output = $_POST['output'];
    $i = 0;
    include '../model/production.php';
    $obj = new Production();
    while ($i < sizeof($styles)) {
        if ($styles[$i] != "") {
            $result = $obj->updatePacking($plant_no, $date, $lines[$i], $session, $styles[$i], $output[$i]);
        }
        $i++;
    }
    header("location:../view/packingUpdate.php?suc=1");
}

function updateAttendance() {
    $date_unf = $_POST['date'];
    $date = date('Y-m-d', strtotime($date_unf));
    $plant_no = $_POST['plant_no'];
    $onRoll = $_POST['onRoll'];
    $present = $_POST['present'];
    $absent = $_POST['absent'];
    $emp_type = $_POST['emp_type'];
    $i_late = $_POST['i_late'];
    $i_leave = $_POST['i_leave'];
    $i = 0;
    include '../model/production.php';
    $obj = new Production();
    while ($i < sizeof($emp_type)) {
        $result = $obj->updateAttendance($date, $plant_no, $emp_type[$i], $onRoll[$i], $present[$i], $absent[$i], $i_late[$i], $i_leave[$i]);
        $i++;
    }
    header("location:../view/onroll.php");
}

function updateResigned() {
    $date_unf = $_POST['date'];
    $date = date('Y-m-d', strtotime($date_unf));
    $plant_no = $_POST['plant_no'];
    $interviewed = $_POST['interviewed'];
    $new = $_POST['new'];
    $resigned = $_POST['resigned'];
    $emp_type = $_POST['emp_type'];
    $i = 0;
    include '../model/production.php';
    $obj = new Production();
    while ($i < sizeof($emp_type)) {
        $result = $obj->updateResigned($date, $plant_no, $emp_type[$i], $interviewed[$i], $new[$i], $resigned[$i]);
        $i++;
    }
    header("location:../view/resigned.php?suc=1");
}

function updateLine() {
    $date_unf = $_POST['date'];
    $date = date('Y-m-d', strtotime($date_unf));
    $plant_no = $_POST['plant_no'];
    $line_no = $_POST['line_no'];
    $mos = $_POST['mos'];
    $helpers = $_POST['helpers'];
    $others = $_POST['others'];
    $i = 0;
    include '../model/production.php';
    $obj = new Production();
    while ($i < sizeof($line_no)) {
        $result = $obj->lineUpdate($plant_no, $date, $line_no[$i], $mos[$i], $helpers[$i], $others[$i]);
        $i++;
    }
    header("location:../view/lineUpdate.php?suc=1");
}

function lineEdit() {
    $date_unf = $_POST['date'];
    $date = date('Y-m-d', strtotime($date_unf));
    $plant_no = $_POST['plant_no'];
    $line_no = $_POST['line_no'];
    $mos = $_POST['mos'];
    $others = $_POST['others'];
    $i = 0;
    include '../model/production.php';
    $obj = new Production();
    while ($i < sizeof($line_no)) {
        $result = $obj->lineEdit($plant_no, $date, $line_no[$i], $mos[$i], $others[$i]);
        $i++;
    }
    header("location:../view/lineEdit.php?suc=1");
}

function planUpdate() {
    $line_no = $_POST['line_no'];
    $style = $_POST['style'];
    $date = $_POST['date'];
    $plan = $_POST['plan'];
    $plant_no = $_POST['plant_no'];
    $color = $_POST['color'];
    include '../model/production.php';
    $obj = new Production();
    $i = 0;
    $k = 0;
    $j = 0;
    while ($i < sizeof($plan)) {
        if ($j >= sizeof($style)) {
            ++$k;
            $j = 0;
        }
        if (($style[$j] != "") && ($plan[$i] != "")) {
            $obj->planUpdate($plant_no, $date[$k], $color[$j], $style[$j], $line_no[$j], $plan[$i]);
        }
        $j++;
        $i++;
    }
    header("location:../view/planFormat.php?suc=1");
}

function hourPlanUpdate() {
    $plant_no = $_POST['plant_no'];
    $d = $_POST['date'];
    $date = date('Y-m-d', strtotime($d));
    $working_h = $_POST['working_h'];
    $ot_h = $_POST['ot_h'];

    include '../model/production.php';
    $obj = new Production();
    $obj->updateHourPlan($date, $ot_h, $working_h, $plant_no);
    header("location:../view/hourPlanEntry.php?suc=1");
}
