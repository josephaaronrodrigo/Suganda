<?php

require_once 'dbConnection.php';

class Production {

    function getDailyStyles($plant_no, $date, $line_no) {
        $conn = new Connection();
        $sql = "SELECT * FROM production_out WHERE plant_no = '$plant_no' AND date LIKE '$date' AND line_no='$line_no' ORDER BY session LIMIT 1";
        $result = $conn->query($sql);
        return $result;
    }

    function updateProd($plant_no, $date, $session, $line_no, $style, $session_start, $output, $accepted, $rejected,$rej_rep, $mos, $remarks) {
        $conn = new Connection();
        $sql = "INSERT INTO production_out VALUES('$plant_no','$date','$session','$line_no','$style','$session_start','$output','$accepted','$rejected','$rej_rep','$mos','$remarks')";
        $result = $conn->query($sql);
        return $result;
    }

    function updatedLines($plant_no, $date, $session) {
        $conn = new Connection();
        $sql = "SELECT line_no FROM production_out WHERE plant_no = '$plant_no' AND date LIKE '$date' AND session = '$session'";
        $result = $conn->query($sql);
        return $result;
    }

    function getStyle($date, $plant_no, $line_no) {
        $conn = new Connection();
        $sql = "SELECT style FROM month_plan WHERE plant_no = '$plant_no' AND date LIKE '$date' AND line_no LIKE '$line_no' AND plan > '0'";
        $result = $conn->query($sql);
        if (mysql_num_rows($result) > 0) {
            return $result;
        } else {
            $sql1 = "SELECT DISTINCT style FROM production_out WHERE plant_no = $plant_no AND date LIKE '$date' AND line_no LIKE '$line_no'";
            $result1 = $conn->query($sql1);
            return $result1;
        }
    }

    function getProd($date, $plant_no, $line_no, $session) {
        $conn = new Connection();
        $sql = "SELECT * FROM production_out WHERE plant_no = '$plant_no' AND date LIKE '$date' AND line_no = '$line_no' AND session = '$session'";
        $result = $conn->query($sql);
        return $result;
    }

    function allocateStyles($style, $plant_no, $status, $smv, $order_qty, $planned_qty, $start_date, $end_date, $unit_price, $rqd_helpers, $rqd_mos, $running_day) {
        $conn = new Connection();
        $sql = "INSERT INTO style_allocation VALUES('$style','$plant_no','$status','$smv','$order_qty','$planned_qty','$start_date','$end_date','$unit_price','$rqd_helpers','$rqd_mos','$running_day')";
        $result = $conn->query($sql);
        return $result;
    }

    function getStyles($what, $date, $plant_no, $line_no) {
        $conn = new Connection();
        $sql = "SELECT $what FROM month_plan WHERE plant_no = '$plant_no' AND date LIKE '$date' AND line_no LIKE '$line_no'";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $output = $array[$what];
        return $output;
    }

    function getSMV($date, $style, $plant_no) {
        $conn = new Connection();
        $sql = "SELECT * FROM style_allocation WHERE style='$style' AND start_date <= '$date' AND end_date > '$date' AND plant_no = '$plant_no'";
        $result = $conn->query($sql);
        return $result;
    }

    function getAllStyles() {
        $conn = new Connection();
        $sql = "SELECT DISTINCT style FROM style_allocation ORDER BY style ASC";
        $result = $conn->query($sql);
        return $result;
    }

    function updatePacking($plant_no, $date, $line_no, $session, $style, $output) {
        $conn = new Connection();
        $sql = "INSERT INTO packing VALUES('$plant_no','$date','$line_no','$session','$style','$output')";
        $result = $conn->query($sql);
        ;
        return $result;
    }

    function getAllStyleOrders() {
        $conn = new Connection();
        $sql = "SELECT * FROM style_allocation";
        $result = $conn->query($sql);
        return $result;
    }

    function getCompleted($style, $start_date, $end_date) {
        $conn = new Connection();
        $sql = "SELECT SUM(output) AS completed FROM production_out WHERE style = '$style' AND date >= '$start_date' AND date < '$end_date'";
        $result = $conn->query($sql);
        return $result;
    }

    function updateAttendance($date, $plant_no, $emp_type, $onRoll, $present, $absent, $i_late, $i_leave) {
        $conn = new Connection();
        $sql = "INSERT INTO attendance VALUES('$plant_no','$date','$emp_type','$onRoll','$present','$absent','$i_late','$i_leave')";
        $result = $conn->query($sql);
        return $result;
    }

    function getAttendance($emp_type, $plant_no, $date, $type) {
        $conn = new Connection();
        $sql = "SELECT $type FROM attendance WHERE plant_no = '$plant_no' AND date LIKE '$date' AND emp_type LIKE '$emp_type'";
        $result = $conn->query($sql);
        return $result;
    }

    function getTotalOutput($plant_no, $date, $line_no) {
        $conn = new Connection();
        $sql = "SELECT SUM(output) AS total FROM production_out WHERE plant_no = '$plant_no' AND date LIKE '$date' AND line_no = '$line_no'";
        $result = $conn->query($sql);
        return $result;
    }

    function updateResigned($date, $plant_no, $emp_type, $interviewed, $new, $resigned) {
        $conn = new Connection();
        $sql = "INSERT INTO resigned VALUES('$date','$plant_no','$emp_type','$interviewed','$new','$resigned')";
        $result = $conn->query($sql);
        return $result;
    }

    function getResigned($emp_type, $plant_no, $date) {
        $conn = new Connection();
        $sql = "SELECT * FROM resigned WHERE plant_no = '$plant_no' AND date LIKE '$date' AND emp_type='$emp_type'";
        $result = $conn->query($sql);
        return $result;
    }

    function getPacked($plant_no, $date, $line_no) {
        $conn = new Connection();
        $sql = "SELECT * FROM packing WHERE plant_no = '$plant_no' AND date LIKE '$date' AND line_no = '$line_no'";
        $result = $conn->query($sql);
        return $result;
    }

    function getUpdatedLines($plant_no, $date, $session) {
        $conn = new Connection();
        $sql = "SELECT line_no FROM packing WHERE plant_no = '$plant_no' AND date LIKE '$date' AND session = '$session'";
        $result = $conn->query($sql);
        return $result;
    }

    function getPackedStyle($date, $plant_no, $line_no) {
        $conn = new Connection();
        $sql = "SELECT style FROM packing WHERE plant_no = '$plant_no' AND date LIKE '$date' AND line_no = '$line_no'";
        $result = $conn->query($sql);
        return $result;
    }

    function packingReport($date, $plant_no, $line_no, $session) {
        $conn = new Connection();
        $sql = "SELECT * FROM packing WHERE plant_no = '$plant_no' AND date LIKE '$date' AND line_no = '$line_no' AND session = '$session'";
        $result = $conn->query($sql);
        return $result;
    }

    function totalPacked($plant_no, $date, $line_no) {
        $conn = new Connection();
        $sql = "SELECT SUM(output) AS total FROM packing WHERE plant_no = '$plant_no' AND date LIKE '$date' AND line_no = '$line_no'";
        $result = $conn->query($sql);
        return $result;
    }

    function getResCount($date, $resType, $emp_type, $plant_no) {
        $conn = new Connection();
        $sql = "SELECT $resType FROM resigned WHERE emp_type = '$emp_type' AND date LIKE '$date' AND plant_no = '$plant_no'";
        $result = $conn->query($sql);
        return $result;
    }

    function getResTot($date, $resType, $plant_no) {
        $conn = new Connection();
        $sql = "SELECT SUM($resType) AS total FROM resigned WHERE date LIKE '$date' AND plant_no = '$plant_no'";
        $result = $conn->query($sql);
        return $result;
    }

    function dailyOutStyle($plant_no, $date) {
        $conn = new Connection();
        $sql = "SELECT DISTINCT style AS dStyle FROM production_out WHERE plant_no = '$plant_no' AND date LIKE '$date'";
        $result = $conn->query($sql);
        return $result;
    }

    function totalDailyOut($plant_no, $date, $style, $line) {
        $conn = new Connection();
        $sql = "SELECT SUM(output) AS total FROM production_out WHERE plant_no LIKE '$plant_no' AND date LIKE '$date' AND style LIKE '$style' AND line_no LIKE '$line'";
        $result = $conn->query($sql);
        return $result;
    }

    function getAttTotal($date, $type, $plant_no) {
        $conn = new Connection();
        $sql = "SELECT SUM($type) AS total FROM attendance WHERE date LIKE '$date' AND plant_no = '$plant_no' AND emp_type NOT LIKE 'Training Center' AND emp_type NOT LIKE 'Maternity Leave' AND emp_type NOT LIKE 'Pregnant Women'";
        $result = $conn->query($sql);
        return $result;
    }

    function getRunningDay($style, $plant_no, $line_no, $today) {
        $conn = new Connection();
        $sql = "SELECT start_date FROM style_allocation WHERE style = '$style' AND plant_no = '$plant_no' ORDER BY start_date DESC LIMIT 1";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $date = $array['start_date'];
        $sql1 = "SELECT COUNT(DISTINCT(date)) AS dates FROM production_out WHERE date <= '$today' AND date >= '$date' AND style = '$style' AND plant_no='$plant_no' AND line_no = '$line_no'";
        $result1 = $conn->query($sql1);
        return $result1;
    }

    function lineUpdate($plant_no, $date, $line_no, $mos, $helpers, $others) {
        $conn = new Connection();
        $sql = "INSERT INTO line VALUES('$plant_no', '$date', '$line_no','$mos','$helpers','$others')";
        $result = $conn->query($sql);
        return $result;
    }

    function lineReport($plant_no, $date, $line_no, $staffType) {
        $conn = new Connection();
        $sql = "SELECT $staffType FROM line WHERE plant_no = '$plant_no' AND date LIKE '$date' AND line_no = '$line_no'";
        $result = $conn->query($sql);
        return $result;
    }

    function lineRepTot($plant_no, $date, $staffType) {
        $conn = new Connection();
        $sql = "SELECT SUM($staffType) AS total FROM line WHERE plant_no = '$plant_no' AND date LIKE '$date'";
        $result = $conn->query($sql);
        return $result;
    }

    function staffForProd($date, $plant_no, $type, $line_no) {
        $conn = new Connection();
        $sql = "SELECT $type FROM line WHERE line_no = '$line_no' AND plant_no = '$plant_no' AND date LIKE '$date'";
        $result = $conn->query($sql);
        return $result;
    }

    function lineEdit($plant_no, $date, $line_no, $mos, $others) {
        $conn = new Connection();
        $sql = "UPDATE line SET mos = '$mos', others = '$others' WHERE date LIKE '$date' AND plant_no = '$plant_no' AND line_no = '$line_no'";
        $result = $conn->query($sql);
        return $result;
    }

    function getUnitPrice($plant_no, $date, $style) {
        $conn = new Connection();
        $sql = "SELECT * FROM style_allocation WHERE plant_no = '$plant_no' AND style= '$style' AND start_date <= '$date' ORDER BY start_date DESC LIMIT 1";
        $result = $conn->query($sql);
        return $result;
    }

    function getCompletedByPlant($plant_no, $style, $start_date, $end_date, $date, $month, $line) {
        $conn = new Connection();
        $sql = "SELECT SUM(output) AS completed FROM production_out WHERE style = '$style' AND date >= '$start_date' AND date < '$end_date' AND date <= '$date' AND plant_no = '$plant_no' AND date LIKE '$month%' AND line_no LIKE '$line'";
        $result = $conn->query($sql);
        return $result;
    }

    function allocatedStaff($date, $style, $plant_no, $type) {
        $conn = new Connection();
        $sql = "SELECT $type FROM style_allocation WHERE start_date <= '$date' AND end_date >= '$date' AND plant_no = '$plant_no' and style='$style' ORDER BY start_date DESC LIMIT 1";
        $result = $conn->query($sql);
        return $result;
    }

    function allocatedOthers($date, $style, $plant_no) {
        $conn = new Connection();
        $sql = "SELECT rqd_helpers, rqd_mos FROM style_allocation WHERE start_date <= '$date' AND end_date >= '$date' AND plant_no = '$plant_no' and style='$style' ORDER BY start_date DESC LIMIT 1";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $mos = $array['rqd_mos'];
        $helper = $array['rqd_helpers'];
        $others = $mos - $helper;
        if ($others == 0) {
            $others = "";
        }
        return $others;
    }

    function allAllocated($date, $style, $plant_no) {
        $conn = new Connection();
        $sql = "SELECT rqd_mos FROM style_allocation WHERE start_date <= '$date' AND end_date >= '$date' AND plant_no = '$plant_no' and style='$style' ORDER BY start_date DESC LIMIT 1";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $mos = $array['rqd_mos'];
        $staff = $mos * 2;
        if ($staff == 0) {
            $staff = "";
        }
        return $staff;
    }

    function presentAtt($date, $plant_no, $emp_type) {
        $conn = new Connection();
        $sql = "SELECT present FROM attendance WHERE date LIKE '$date' AND emp_type = '$emp_type' AND plant_no = '$plant_no'";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $present = $array['present'];
        return $present;
    }

    function othersAtt($date, $plant_no) {
        $conn = new Connection();
        $sql = "SELECT SUM(present) AS total FROM attendance WHERE date LIKE '$date' AND emp_type NOT LIKE 'M/O' AND emp_type NOT LIKE 'Training Center' AND emp_type NOT LIKE 'Pregnant Women' AND emp_type NOT LIKE 'Maternity Leave' AND plant_no = '$plant_no'";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $present = $array['total'];
        return $present;
    }

    function getStylesForReport($period) {
        $conn = new Connection();
        $sql = "SELECT DISTINCT style FROM production_out WHERE date LIKE '$period%' ORDER BY style ASC";
        $result = $conn->query($sql);
        return $result;
    }

    function productionOut($style, $date) {
        $conn = new Connection();
        $sql = "SELECT SUM(output) AS total FROM production_out WHERE style = '$style' AND date LIKE '$date'";
        $result = $conn->query($sql);
        return $result;
    }

    function getStylesByPlant($plant_no, $month) {
        $conn = new Connection();
        $sql = "SELECT DISTINCT style AS dStyle, line_no FROM production_out WHERE plant_no = '$plant_no' AND date LIKE '$month%' ORDER BY dStyle ASC";
        $result = $conn->query($sql);
        return $result;
    }

    function monthRepCum($style, $date) {
        $conn = new Connection();
        $sql = "SELECT SUM(output) AS total FROM production_out WHERE style = '$style' AND date <= '$date'";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $total = $array['total'];
        return $total;
    }

    function getUnitPriceForRep($style, $date) {
        $conn = new Connection();
        $sql = "SELECT * FROM style_allocation WHERE style= '$style' AND start_date <= '$date' ORDER BY start_date DESC LIMIT 1";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $price = $array['unit_price'];
        return $price;
    }

    function getPlannedOut($plant_no, $line_no, $date, $style) {
        $conn = new Connection();
        $sql = "SELECT output FROM planned_output WHERE plant_no ='$plant_no' AND line_no = '$line_no' AND date LIKE '$date' AND style='$style'";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $output = $array['output'];
        return $output;
    }

    function updatePlannedOut($plant_no, $date, $line_no, $style, $planned_out, $planned_hours) {
        $conn = new Connection();
        $sql = "SELECT * FROM planned_output WHERE plant_no = '$plant_no' AND date LIKE '$date' AND line_no = '$line_no' AND style = '$style'";
        $result = $conn->query($sql);
        if (mysql_num_rows($result) == 0) {
            $sql1 = "INSERT INTO planned_output VALUES('$plant_no','$date','$line_no','$style','$planned_out','$planned_hours')";
            $result1 = $conn->query($sql1);
            return $result1;
        } else {
            return $result;
        }
    }

    function getDailyPlannedOut($plant_no, $date, $style, $line) {
        $conn = new Connection();
        $sql = "SELECT SUM(plan) AS total FROM month_plan WHERE plant_no LIKE '$plant_no' AND date LIKE '$date' AND style LIKE '$style' AND line_no LIKE '$line'";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $total = $array['total'];
        if ($total == NULL) {
            $total = 0;
        }
        return $total;
    }

    function getPlannedByPlant($plant_no, $style, $start_date, $end_date, $date, $month, $line) {
        $conn = new Connection();
        $sql = "SELECT SUM(plan) AS total FROM month_plan WHERE style = '$style' AND date >= '$start_date' AND date < '$end_date' AND date <= '$date' AND plant_no = '$plant_no'  AND date LIKE '$month%' AND line_no LIKE '$line'";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $total = $array['total'];
        if ($total == NULL) {
            $total = 0;
        }
        return $total;
    }

    function getDailyPlan($plant_no, $style, $date, $line_no) {
        $conn = new Connection();
        $sql = "SELECT plan AS completed FROM month_plan WHERE style LIKE '$style' AND date LIKE '$date' AND plant_no LIKE '$plant_no' AND line_no LIKE '$line_no' AND plan > 0 LIMIT 1";
        $result = $conn->query($sql);
        if (mysql_num_rows($result) > 0) {
            $array = mysql_fetch_array($result);
            $total = $array['completed'];
            if ($total == 0) {
                $total = "";
            }
            return $total;
        } else {
            $sql1 = "SELECT output FROM planned_output WHERE style LIKE '$style' AND date LIKE '$date' AND plant_no LIKE '$plant_no' AND line_no LIKE '$line_no'";
            $result1 = $conn->query($sql1);
            $array = mysql_fetch_array($result1);
            $total = $array['output'];
            return $total;
        }
    }

    function getPlannedHours($plant_no, $date) {
        $conn = new Connection();
        $sql = "SELECT * FROM ot_plan WHERE plant_no LIKE '$plant_no' AND date LIKE '$date'";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $working = $array['working_h'];
        $ot = $array['ot_h'];
        $output = $working + $ot;
        return $output;
    }

    function planUpdate($plant_no, $date, $color, $style, $line_no, $plan) {
        $conn = new Connection();
        $sql = "INSERT INTO month_plan VALUES('$plant_no','$date','$color','$style','$line_no','$plan')";
        $result = $conn->query($sql);
        return $sql;
    }

    function getStylesPlan($period, $plant_no) {
        $conn = new Connection();
        $sql = "SELECT DISTINCT style, color, line_no FROM month_plan WHERE date LIKE '$period%' AND plant_no LIKE '$plant_no'";
        $result = $conn->query($sql);
        return $result;
    }

    function dailyMonthPlan($plant_no, $style, $color, $date, $line_no) {
        $conn = new Connection();
        $sql = "SELECT * FROM month_plan WHERE plant_no LIKE '$plant_no' AND style LIKE '$style' AND color LIKE '$color' AND date LIKE '$date' AND line_no LIKE '$line_no'";
        $result = $conn->query($sql);
        if (mysql_num_rows($result) > 0) {
            $array = mysql_fetch_array($result);
            $plan = $array['plan'];
        } else {
            $plan = 0;
        }
        return $plan;
    }

    function getStartSession($date, $line_no, $plant_no) {
        $conn = new Connection();
        $sql = "SELECT DISTINCT session_start FROM production_out WHERE date LIKE '$date' AND line_no LIKE '$line_no' AND plant_no LIKE '$plant_no'";
        $result = $conn->query($sql);
        if (mysql_num_rows($result) == 0) {
            $start = 0;
        } else {
            $array = mysql_fetch_array($result);
            $start = $array['session_start'];
        }
        return $start;
    }

    function updateHourPlan($date, $ot_h, $working_h, $plant_no) {
        $conn = new Connection();
        $sql = "SELECT * FROM ot_plan WHERE plant_no LIKE '$plant_no' AND date LIKE '$date'";
        $result = $conn->query($sql);
        if (mysql_num_rows($result) == 0) {
            $sql1 = "INSERT INTO ot_plan VALUES('$plant_no','$date','$working_h','$ot_h')";
            $conn->query($sql1);
        }
        return;
    }

    function getHours($date, $plant_no, $type) {
        $conn = new Connection();
        $sql = "SELECT $type FROM ot_plan WHERE plant_no LIKE '$plant_no' AND date LIKE '$date'";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $count = $array[$type];
        return $count;
    }

    function totDailyOut($plant_no, $date, $style) {
        $conn = new Connection();
        $sql = "SELECT SUM(output) AS total FROM production_out WHERE plant_no LIKE '$plant_no' AND date LIKE '$date' AND style LIKE '$style'";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $value = $array['total'];
        return $value;
    }

    function getPlannedDailyIncome($plant_no, $date) {
        $conn = new Connection();
        $sql = "SELECT DISTINCT style, plant_no FROM planned_output WHERE plant_no LIKE '$plant_no' AND date LIKE '$date'";
        $result = $conn->query($sql);
        $dailyInc = 0;
        while ($row = mysql_fetch_array($result)) {
            $style = $row['style'];
            $plant_no = $row['plant_no'];
            $sql1 = "SELECT * FROM style_allocation WHERE plant_no LIKE '$plant_no' AND style LIKE '$style' AND start_date <= '$date' ORDER BY start_date DESC LIMIT 1";
            $result1 = $conn->query($sql1);
            $aprice = mysql_fetch_array($result1);
            $unit_price = $aprice['unit_price'];
            $sql2 = "SELECT SUM(output) AS total FROM planned_output WHERE plant_no LIKE '$plant_no' AND date LIKE '$date' AND style LIKE '$style'";
            $result2 = $conn->query($sql2);
            $array2 = mysql_fetch_array($result2);
            $totOut = $array2['total'];
            $income = $totOut * $unit_price;
            $dailyInc += $income;
        }
        return $dailyInc;
    }

    function getActualDailyIncome($plant_no, $date) {
        $conn = new Connection();
        $sql = "SELECT DISTINCT style, plant_no FROM production_out WHERE plant_no LIKE '$plant_no' AND date LIKE '$date'";
        $result = $conn->query($sql);
        $dailyInc = 0;
        while ($row = mysql_fetch_array($result)) {
            $style = $row['style'];
            $plant_no = $row['plant_no'];
            $sql1 = "SELECT * FROM style_allocation WHERE plant_no LIKE '$plant_no' AND style LIKE '$style' AND start_date <= '$date' ORDER BY start_date DESC LIMIT 1";
            $result1 = $conn->query($sql1);
            $aprice = mysql_fetch_array($result1);
            $unit_price = $aprice['unit_price'];
            $sql2 = "SELECT SUM(output) AS total FROM production_out WHERE plant_no LIKE '$plant_no' AND date LIKE '$date' AND style LIKE '$style'";
            $result2 = $conn->query($sql2);
            $array2 = mysql_fetch_array($result2);
            $totOut = $array2['total'];
            $income = $totOut * $unit_price;
            $dailyInc += $income;
        }
        return $dailyInc;
    }

    function getPlanRDay($date, $plant_no, $line_no) {
        $conn = new Connection();
        $sql = "SELECT style FROM month_plan WHERE date LIKE '$date' AND plant_no LIKE '$plant_no' AND line_no LIKE '$line_no'";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $style = $array['style'];
        $sql1 = "SELECT start_date, end_date FROM style_allocation WHERE start_date <= '$date' AND end_date >='$date' AND style LIKE '$style' AND plant_no LIKE '$plant_no' ORDER BY start_date DESC LIMIT 1";
        $result1 = $conn->query($sql1);
        $array1 = mysql_fetch_array($result1);
        $start = $array1['start_date'];
        $end = $array1['end_date'];
        $sql2 = "SELECT count(plan) AS rday FROM month_plan WHERE plant_no LIKE '$plant_no' AND date >= '$start' AND line_no LIKE '$line_no' AND style LIKE '$style' AND plan NOT LIKE '0'";
        $result2 = $conn->query($sql2);
        $array2 = mysql_fetch_array($result2);
        $rday = $array2['rday'];
        return $rday;
    }

    function getPRDays($plant_no, $line_no, $style) {
        $conn = new Connection();
        $sql = "SELECT days FROM plan_rday WHERE plant_no LIKE '$plant_no' AND line_no LIKE '$line_no' AND style LIKE '$style'";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $days = $array['days'];
        return $days;
    }

    function getColor($style, $plant_no, $line_no) {
        $conn = new Connection();
        $sql = "SELECT DISTINCT color FROM month_plan WHERE style LIKE '$style' AND plant_no LIKE '$plant_no' AND line_no LIKE '$line_no'";
        $result = $conn->query($sql);
        $array = mysql_fetch_array($result);
        $color = $array['color'];
        return $color;
    }

}

?>