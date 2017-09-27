<?php
$u = $_GET['s'];
$date = date('Y-m-d', strtotime($_GET['d']));
$month = date('Y-m', strtotime($_GET['d']));
$plant_no = $_GET['p'];
include '../../model/production.php';
include '../../model/general.php';
$obj = new Production();
$obj1 = new General();
$result2 = $obj1->getPlant($plant_no);
$array2 = mysql_fetch_array($result2);
$location = $array2['location'];
$megatot = 0;
$totcuminc = 0;
?>
<div class="row">
    <h2 style="text-align: center;"><?php echo $location; ?> - Plant <?php echo $plant_no; ?></h2><br>
    <div class="table-responsive" style="max-width: none;">
        <div class="container-fluid">
            <div style="overflow-x:auto; width:200px;">
                <table class="table table-bordered table-condensed" style="text-align: center;">
                    <tr>
                        <th style="background-color: #5cb85c ; text-align: center;">Present</th>
                        <th style="background-color: #5cb85c; text-align: center;">A/M/O</th>
                        <th style="background-color: #5cb85c; text-align: center;">+/-</th>
                    </tr>
                    <tr>
                        <?php
                        $m = 1;
                        $mos = $obj->getAttendance('M/O', $plant_no, $date, 'present');
                        $amos = mysql_fetch_array($mos);
                        $moscard = $amos['present'];
                        $tactMO = 0;
                        $actMO = array();
                        while ($m < 21) {
                            $result = $obj->lineReport($plant_no, $date, $m, 'mos');
                            $array5 = mysql_fetch_array($result);
                            $count = $array5['mos'];
                            if ($count == 0) {
                                $count = "";
                            }
                            $actMO[$m] = $count;
                            $tactMO += $count;
                            $m++;
                        }
                        ?><td><?php echo $moscard; ?></td>

                        <td><?php echo $tactMO; ?></td>

                        <td><?php echo $moscard - $tactMO; ?></td>
                    </tr>
                </table><br>

            </div>
            <div style="overflow-x:auto; width:2000px; height:auto">
                <table class="table table-bordered table-condensed">
                    <tbody>

                        <tr>
                            <th class="btn-info" style="text-align: center; background-color: #5bc0de; width:60px;"><text style="font-size: 16px;">L/No.</text></th>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="1" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="2" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="3" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="4" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="5" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="6" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="7" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="8" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="9" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="10" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]"/></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="11" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="12" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="13" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="14" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="15" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="16" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="17" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="18" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="19" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]" /></td>
                            <td colspan="5" style="margin: 0; padding: 0; color: white; background-color: #337ab7; "><input readonly value="20" style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #337ab7; font-size: 16px" type="text" class="form-control" name="line_no[]"/></td>
                        </tr>
                        <tr>
                            <th class="btn-info" style="text-align: center; background-color: #5bc0de;"><text style="font-size: 16px;">S/No.</text></th>
                            <?php
                            $i = 1;
                            $style = array();
                            while ($i < 21) {
                                $result = $obj->getStyle($date, $plant_no, $i);
                                $array5 = mysql_fetch_array($result);
                                $style[$i] = $array5['style'];
                                if ($style[$i] != "") {
                                    $s = $style[$i] . "-L" . $i;
                                } else {
                                    $s = "";
                                }
                                ?>
                                <td colspan="5" style="margin: 0; padding: 0; background-color: #337ab7;"><input style="color: white; background-color: #337ab7;display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center;" type="text" class="form-control" readonly value="<?php echo $s; ?>"/></td>
                                <?php
                                $i++;
                            }
                            ?>
                        </tr>
                        <tr>
                            <th class="btn-info" style="text-align: center; background-color: #5bc0de;"><text style="font-size: 16px;">P/Day</text></th>
                            <?php
                            $m = 1;
                            $dayPlan = array();
                            while ($m < 21) {
                                $dailyplan = $obj->getDailyPlan($plant_no, $style[$m], $date, $m);
                                $dayPlan[$m] = $dailyplan;
                                ?>

                                <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: ash" readonly  type="text" class="form-control" value="<?php echo $dayPlan[$m]; ?>" /></td>
                                <?php
                                $m++;
                            }
                            ?>
                        </tr>

                        <tr>
                            <th class="btn-success" style="text-align: center; background-color: #5cb85c;"><text style="font-size: 16px;">P/M/O</text></th>
                            <?php
                            $m = 1;
                            $totS = 0;
                            $actual = 0;
                            $planMO = array();
                            while ($m < 21) {
                                $res3 = $obj->allocatedStaff($date, $style[$m], $plant_no, 'rqd_mos');
                                $ar3 = mysql_fetch_array($res3);
                                $count = $ar3['rqd_mos'];
                                $planMO[$m] = $count;

                                $totS += $count;

                                $result1 = $obj->lineReport($plant_no, $date, $m, 'mos');
                                $array6 = mysql_fetch_array($result1);
                                $count1 = $array6['mos'];
                                $actual += $count1;
                                ?>

                                <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: ash" readonly  type="text" class="form-control" value="<?php echo $count; ?>" /></td>
                                <?php
                                $m++;
                            }
                            $planmo = $totS;
                            $mos = $obj->getAttendance('M/O', $plant_no, $date, 'on_roll');
                            $amos = mysql_fetch_array($mos);
                            $moscard = $amos['on_roll'];
                            ?>
                        </tr>
                        <tr>
                            <th class="btn-success" style="text-align: center; background-color: #5bc0de;"><text style="font-size: 16px;">T/P/M/O</text></th>
                            <?php
                            $m = 1;
                            $totMO = 0;
                            $actual = 0;
                            $pfMO = array();
                            while ($m < 21) {
                                $dailyplan = $obj->getDailyPlan($plant_no, $style[$m], $date, $m);
                                if ($dailyplan != "") {
                                    $pf = $dailyplan / $planMO[$m];
                                    $pfMO[$m] = round($pf, 2);
                                } else {
                                    $pfMO[$m] = "";
                                }
                                ?>

                                <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: ash" readonly  type="text" class="form-control" value="<?php echo $pfMO[$m]; ?>" /></td>
                                <?php
                                $m++;
                            }
                            ?>

                        </tr>

                        <tr>
                            <th class="btn-info" style="text-align: center; background-color: #5bc0de;"><text style="font-size: 16px;">P/R/Day</text></th>
                            <?php
                            $m = 1;
                            while ($m < 21) {

                                $prday = $obj->getPRDays($plant_no, $m, $style[$m]);
                                ?>
                                <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: white" readonly  type="text" class="form-control" value="<?php echo $prday; ?>" /></td>
                                <?php
                                $m++;
                            }
                            ?>
                        </tr>
                        <tr>
                            <th class="btn-info" style="text-align: center; background-color: #5bc0de;"><text style="font-size: 16px;">P/W/Ses</text></th>
                            <?php
                            $m = 1;
                            $planh = array();
                            while ($m < 21) {
                                $planned_hours = "";
                                if ($style[$m] != "") {
                                    $planned_hours = $obj->getPlannedHours($plant_no, $date);
                                    $planh[$m] = $planned_hours;
                                }
                                ?>
                                <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: ash" readonly  type="text" class="form-control" value="<?php echo $planned_hours; ?>" /></td>
                                <?php
                                $m++;
                            }
                            ?>
                        </tr>

                        <tr>
                            <th class="btn-info" style="text-align: center; background-color: #5bc0de;"><text style="font-size: 16px;">P/P/Ses</text></th>
                            <?php
                            $m = 1;
                            while ($m < 21) {
                                if ($planh[$m] != "") {
                                    $pph = $dayPlan[$m] / $planh[$m];
                                    $pph = ceil($pph);
                                } else {
                                    $pph = "";
                                }
                                ?>
                                <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: ash" readonly  type="text" class="form-control" value="<?php echo $pph; ?>" /></td>
                                <?php
                                $m++;
                            }
                            ?>
                        </tr>

                        <tr>
                            <th class="btn-success" style="text-align: center; background-color: #5cb85c;"><text style="font-size: 16px;">A/M/O</text></th>
                            <?php
                            $m = 1;
                            $totS = 0;
                            while ($m < 21) {
                                ?>

                                <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: white" readonly  type="text" class="form-control" value="<?php echo $actMO[$m]; ?>" /></td>
                                <?php
                                $m++;
                            }
                            ?>
                        </tr>
                        <tr>
                            <th class="btn-info" style="text-align: center; background-color: #5bc0de;"><text style="font-size: 16px;">A/P/Day</text></th>
                            <?php
                            $m = 1;
                            $dayPlan = array();
                            while ($m < 21) {
                                $dailyplan = $obj->getDailyPlan($plant_no, $style[$m], $date, $m);
                                $dayPlan[$m] = $dailyplan;
                                if ($actMO[$m] > $planMO[$m]) {
                                    $dayPlan[$m] = ceil(($dayPlan[$m] / $planMO[$m]) * ($actMO[$m]));
                                }
                                ?>

                                <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: white" readonly  type="text" class="form-control" value="<?php echo $dayPlan[$m]; ?>" /></td>
                                <?php
                                $m++;
                            }
                            ?>
                        </tr>
                        <tr>
                            <th class="btn-info" style="text-align: center; background-color: #5bc0de;"><text style="font-size: 16px;">A/W/Ses</text></th>
                            <?php
                            $m = 1;
                            while ($m < 21) {
                                $planned_hours = $obj->getPlannedHours($plant_no, $date);
                                if ($actMO[$m] != "") {
                                    if ($planMO[$m] > $actMO[$m]) {
                                        $actualHours[$m] = ceil(($planMO[$m] * $planned_hours) / $actMO[$m]);
                                    } else {
                                        $actualHours[$m] = $planned_hours;
                                    }
                                } else {
                                    $actualHours[$m] = "";
                                }
                                ?>

                                <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: white" readonly  type="text" class="form-control" value="<?php echo $actualHours[$m]; ?>" /></td>
                                <?php
                                $m++;
                            }
                            ?>
                        </tr>

                        <tr>
                            <th class="btn-info" style="text-align: center; background-color: #5bc0de;"><text style="font-size: 16px;">A/P/Ses</text></th>
                            <?php
                            $m = 1;
                            $hplan = array();
                            while ($m < 21) {
                                if ($dayPlan[$m] == "") {
                                    $hplan[$m] = "";
                                } else {
                                    $hplan[$m] = ceil($dayPlan[$m] / $actualHours[$m]);
                                }
                                ?>

                                <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: white" readonly  type="text" class="form-control" value="<?php echo $hplan[$m]; ?>" /></td>
                                <?php
                                $m++;
                            }
                            ?>
                        </tr>
                        <tr>
                            <th class="btn-info" style="text-align: center; background-color: #5bc0de;"><text style="font-size: 16px;">R/Day</text></th>
                            <?php
                            $i = 1;
                            while ($i < 21) {
                                $res2 = $obj->getRunningDay($style[$i], $plant_no, $i, $date);
                                $ar2 = mysql_fetch_array($res2);
                                $rday = $ar2['dates'];
                                if ($rday == 0) {
                                    $rday = "";
                                }
                                ?>
                                <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: white" readonly  type="text" class="form-control" value="<?php echo $rday; ?>" /></td>
                                <?php
                                $i++;
                            }
                            ?>

                        </tr>
                        <tr>
                            <th class="btn-info" style="text-align: center; background-color: #5bc0de;"><text style="font-size: 16px;">Eff(%)</text></th>
                            <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center;" type="text" class="form-control" /></td>
                            <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center;" type="text" class="form-control" /></td>
                            <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center;" type="text" class="form-control" /></td>
                            <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center;" type="text" class="form-control" /></td>
                            <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center;" type="text" class="form-control" /></td>
                            <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center;" type="text" class="form-control" /></td>
                            <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center;" type="text" class="form-control" /></td>
                            <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center;" type="text" class="form-control" /></td>
                            <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center;" type="text" class="form-control" /></td>
                            <td colspan="5" style="margin: 0; padding: 0;"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center;" type="text" class="form-control" /></td>
                        </tr>
                        <tr>
                            <td style="text-align: center; background-color: #5bc0de;"></td>
                            <td colspan="50" style="text-align: center; width: 200px; background-color: #337ab7;"></td>
                        </tr>
                        <?php
                        $ot = $obj->getHours($date, $plant_no, 'ot_h');
                        $working = $obj->getHours($date, $plant_no, 'working_h');
                        $j = 1;
                        $cumprod = array();
                        $hplancum = array();
                        while ($j < 16) {
                            $result3 = $obj1->getSessionTime($j);
                            $array6 = mysql_fetch_array($result3);
                            $time = date('h:i a', strtotime($array6['time']));
                            if ($j < 10) {
                                $j = '0' . $j;
                            }
                            ?>
                            <tr>
                                <th class="btn-info" style="width: 200px; text-align: center; background-color: #5bc0de;"><text style="font-size: 16px;"><?php echo $j . " - " . $time; ?></text></th>
                                <?php
                                $i = 1;

                                while ($i < 21) {
                                    $bordercol = $obj->getColor($style[$i], $plant_no, $i);
                                    $planned_hours = 0;
                                    $dailyplan = $obj->getDailyPlan($plant_no, $style[$i], $date, $i);
                                    if ($style[$i] == "") {
                                        $hplan[$i] = 0;
                                    } else {
                                        $planned_hours = $obj->getPlannedHours($plant_no, $date);
                                        $hplan[$i] = ceil($dayPlan[$i] / $actualHours[$i]);
                                    }


                                    $result1 = $obj->getProd($date, $plant_no, $i, $j);
                                    $array1 = mysql_fetch_array($result1);
                                    $start_session = $obj->getStartSession($date, $i, $plant_no);
                                    $cumprod[$i] += $array1['output'];
                                    $modal = false;
                                    if ($start_session == 0) {
                                        $color = 'white';
                                        $planout = 0;
                                    } else {
                                        if (($j > $working) && ($array1['output'] != NULL)) {
                                            $color = '#FEEFB3';
                                            $planout = $hplan[$i];
                                        } elseif ($j < $start_session) {
                                            $color = 'white';
                                            $planout = 0;
                                        } else {
                                            $color = 'white';
                                            $planout = $hplan[$i];
                                        }

                                        if (($j > ($actualHours[$i] + $start_session - 1)) && ($array1['output'] != NULL)) {
                                            $color = '#FEEFB3';
                                            $planout = 0;
                                        }
                                        if (($j > ($planned_hours + $start_session - 1)) && ($j > ($actualHours[$i] + $start_session - 1)) && ($array1['output'] != NULL)) {
                                            $color = '#f2dede';
                                            $planout = 0;
                                        }
                                        if (($j > ($planned_hours + $start_session - 1)) && ($j <= ($actualHours[$i] + $start_session - 1)) && ($array1['output'] != NULL)) {
                                            $color = '#f2dede';
                                            $planout = $hplan[$i];
                                        }
                                    }
                                    $hplancum[$i] += $planout;
                                    ?>

                                    <td style="margin: 0; padding: 0; background-color: <?php echo $color; ?>">
                                        <input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: <?php echo $color; ?>;" readonly type="text" class="form-control" name="output[]" value="<?php
                                        if (($array1['output'] != "") || ($j < ($start_session + $actualHours[$i])) && ($j >= $start_session)) {
                                            echo $planout;
                                        }
                                        ?>"/></td>
                                    <td style="margin: 0; padding: 0; background-color: <?php echo $color; ?>; border-right-color: #606060"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: <?php echo $color; ?>; font-weight: bold;" readonly type="text" class="form-control" name="output[]" value="<?php
                                        if (($array1['output'] != "") || ($j < ($start_session + $actualHours[$i])) && ($j >= $start_session)) {
                                            echo $hplancum[$i];
                                        }
                                        ?>"/></td>

                                    <td style="margin: 0; padding: 0; background-color: #fffdaf; border-right-width: 5px; border-right-color: <?php echo $bordercol; ?>"  <?php
                                    if (mysql_num_rows($result1) == 1) {
                                        if ($array1['remarks'] != "") {
                                            echo 'class="note"';
                                            $modal = true;
                                        }
                                    }
                                    ?>>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="<?php
                                        if ($modal) {
                                            echo "Remarks: " . $array1['remarks'] . "--------";
                                        }
                                        echo "Number of M/Os: " . $array1['mos'];
                                        ?>">
                                            <input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: #fffdaf" readonly type="text" class="form-control" name="output[]" value="<?php
                                            if ($array1['output'] != "") {
                                                echo $array1['output'];
                                            }
                                            ?>"/>
                                        </a></td>
                                    <td style="margin: 0; padding: 0; border-right-color: black; background-color: <?php echo $color; ?>;  border-right-color: #606060"><input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: <?php echo $color; ?>; font-weight: bold;" readonly type="text" class="form-control" name="output[]" value="<?php
                                        if ($array1['output'] != "") {
                                            echo $cumprod[$i];
                                        }
                                        ?>"/></td>
                                        <?php
                                        $diff = ($cumprod[$i] - $hplancum[$i]);
                                        if ($array1['output'] == "") {
                                            $color = $color;
                                        } elseif ($diff < 0) {
                                            $color = '#b44545';
                                        } elseif ($diff == 0) {
                                            $color = '#ffa500';
                                        } else {
                                            $color = '#008000';
                                        }
                                        ?>
                                    <td style="margin: 0; padding: 0; color: white; border-right-color: #428bca; border-right-width: 6px; background-color: <?php echo $color; ?>"><input style="display: block; padding: 0; margin: 0; color: white; border: 0; width: 100%; text-align: center; background-color: <?php echo $color; ?>" readonly type="text" class="form-control" name="output[]" value="<?php
                                        if ($array1['output'] != "") {
                                            echo $diff;
                                        }
                                        ?>"/></td>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                            </tr>
                            <?php
                            $j++;
                        }
                        ?>
                        <tr>
                            <th class="btn-success" style="text-align: center; background-color: #5bc0de;"><text style="font-size: 16px;">TTL</text></th>
                            <?php
                            $i = 1;
                            while ($i < 21) {
                                $result6 = $obj->getTotalOutput($plant_no, $date, $i);
                                $array6 = mysql_fetch_array($result6);
                                ?>
                                <td colspan="5" style="margin: 0; padding: 0;" >
                                    <input style="display: block; padding: 0; margin: 0; border: 0; width: 100%; text-align: center; background-color: " readonly type="text" class="form-control" name="one_one" value="<?php echo $array6['total']; ?>"/>
                                </td>
                                <?php
                                $i++;
                            }
                            ?>
                        </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="table-responsive" style="max-width: none;">
            <div style="overflow-x: auto; width: max">

                <br>
                <table class="table table-bordered table-condensed">
                    <tr>
                        <th class="btn-info" style="vertical-align: middle; text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">Style</th>
                        <th class="btn-info" style="vertical-align: middle; text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">Unit Price</th>
                        <th class="btn-info" style="vertical-align: middle; text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">P/Day (PCS)</th> 
                        <th class="btn-info" style="vertical-align: middle; text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">A/Day (PCS)</th>  
                        <th class="btn-info" style="vertical-align: middle; text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">(+/-) P/D/Q (PCS)</th>              		
                        <th class="btn-info" style="vertical-align: middle; text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">P/TTL (PCS)</th>            		
                        <th class="btn-info" style="vertical-align: middle; text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">A/TTL (PCS)</th>
                        <th class="btn-info" style="vertical-align: middle; text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">(+/-) TTL/Q (PCS)</th>             		
                        <th class="btn-info" style="vertical-align: middle; text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">P/Inc (USD)</th>
                        <th class="btn-info" style="vertical-align: middle; text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">A/Inc (USD)</th>
                        <th class="btn-info" style="vertical-align: middle; text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">(+/-) P/D/Inc (USD)</th>
                        <th class="btn-info" style="vertical-align: middle; text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">P/TTL/Inc (USD)</th>
                        <th class="btn-info" style="vertical-align: middle; text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">A/TTL/Inc (USD)</th>            		
                        <th class="btn-info" style="vertical-align: middle; text-align: center; width: 150px; background-color: #5bc0de;"><text style="font-size: 16px;">(+/-) TTL/Inc (USD)</th>
                        <th colspan=5 class="btn-info" style="vertical-align: middle; text-align: center; width: 300px; background-color: #5bc0de;"><text style="font-size: 16px;">Incentive</th>

                    </tr>
                    <?php
                    $totact = 0;
                    $megatotVar = 0;
                    $totPlan = 0;
                    $res = $obj->getStylesByPlant($plant_no, $month);
                    while ($r = mysql_fetch_array($res)) {
                        $style = $r['dStyle'];
                        $i = $r['line_no'];
                        $color = $obj->getColor($style, $plant_no, $i);
                        ?>
                        <tr style="border-style: solid; border-top-width: 5px; border-top-color: <?php echo $color; ?>;">
                            <td style="margin: 0; padding: 0;" align="center" ><?php echo $style . "-L" . $i; ?></td>
                            <?php
                            $res1 = $obj->totalDailyOut($plant_no, $date, $style, $i);
                            $r1 = mysql_fetch_array($res1);
                            $ruprice = $obj->getUnitPrice($plant_no, $date, $style);
                            $aprice = mysql_fetch_array($ruprice);
                            $unit_price = $aprice['unit_price'];
                            $sdate = $aprice['start_date'];
                            $edate = $aprice['end_date'];
                            $rescum = $obj->getCompletedByPlant($plant_no, $style, $sdate, $edate, $date, $month, $i);
                            $acum = mysql_fetch_array($rescum);
                            $cumtot = $acum['completed'];
                            $cuminc = $unit_price * $cumtot;
                            $totcuminc += $cuminc;
                            $tot = $r1['total'];
                            if ($tot == "") {
                                $tot = 0;
                            }
                            $totact += $tot;
                            $totactcum += $cumtot;

                            $Plan = $obj->getDailyPlannedOut($plant_no, $date, $style, $i);
                            $totPlan += $Plan;
                            $cumPlan = $obj->getPlannedByPlant($plant_no, $style, $sdate, $edate, $date, $month, $i);
                            $cumPlanTot += $cumPlan;
                            ?>
                            <td style="margin: 0; padding: 0;" align="center"><?php echo number_format($unit_price, 2, ".", ","); ?></td>            		 	
                            <td style="margin: 0; padding: 0;" align="center"><?php echo $Plan; ?></td>            		 	
                            <td style="margin: 0; padding: 0;" align="center"><?php echo $tot; ?></td>


                            <?php
                            $income = $unit_price * $tot;
                            $planInc = $unit_price * $Plan;
                            $cumPlanInc = $unit_price * $cumPlan;
                            $prodVar = $tot - $Plan;
                            $prodTotVar = $totact - $totPlan;
                            $cumProdVar = $cumtot - $cumPlan;

                            $dayVar = $income - $planInc;
                            $cumDayVar = $cuminc - $cumPlanInc;
                            $dayVarTot = $megatotact - $megatotplan;

                            $megatotplan += $planInc;
                            $cumPlanIncTot += $cumPlanInc;
                            $megatotact += $income;
                            $megatotVar = $totcuminc - $cumPlanIncTot;
                            $dayVarTot = $megatotact - $megatotplan;
                            ?>
                            <td style="margin: 0; padding: 0; background-color: #dbbff6;" align="center"><?php echo $prodVar; ?></td>
                            <td style="margin: 0; padding: 0;" align="center"><?php echo $cumPlan; ?></td>            		 	        		 	
                            <td style="margin: 0; padding: 0;" align="center"><?php echo $cumtot; ?></td>
                            <td style="margin: 0; padding: 0; background-color: #dbbff6;" align="center"><?php echo $cumProdVar; ?></td>
                            <td style="margin: 0; padding: 0;" align="center"><?php echo number_format($planInc, 2, ".", ","); ?></td>            		 	
                            <td style="margin: 0; padding: 0;" align="center"><?php echo number_format($income, 2, ".", ","); ?></td>
                            <td style="margin: 0; padding: 0; background-color: #dbbff6;" align="center"><?php echo number_format($dayVar, 2, ".", ","); ?></td>     
                            <td style="margin: 0; padding: 0;" align="center"><?php echo number_format($cumPlanInc, 2, ".", ","); ?></td>   
                            <td style="margin: 0; padding: 0;" align="center"><?php echo number_format($cuminc, 2, ".", ","); ?></td>    

                            <td style="margin: 0; padding: 0; background-color: #dbbff6;" align="center"><?php echo number_format($cumDayVar, 2, ".", ","); ?></td>    
                            <td style="background-color: red;"></td>
                            <td style="background-color: green;"></td>
                            <td style="background-color: #cd7f32 ;"></td>
                            <td style="background-color: silver;"></td>
                            <td style="background-color: gold;"></td>        		 	
                        </tr>
                        <?php
                    }
                    ?>
                    <tr>
                        <td style="margin: 0; padding: 0;" align="center" colspan='2'><b>Total</b></td>   
                        <td style="margin: 0; padding: 0;" align="center"><b><?php echo $totPlan; ?></b></td>
                        <td style="margin: 0; padding: 0;" align="center"><b><?php echo $totact; ?></b></td>
                        <td style="margin: 0; padding: 0; background-color: #dbbff6;" align="center"><b><?php echo $prodTotVar; ?></b></td>            		 	
                        <td style="margin: 0; padding: 0;" align="center"><b></b><?php echo $cumPlanTot; ?></td>   
                        <td style="margin: 0; padding: 0;" align="center"><b><?php echo $totactcum; ?></b></td>   
                        <td style="margin: 0; padding: 0; background-color: #dbbff6;" align="center"><b><?php echo $totactcum - $cumPlanTot; ?></b></td>  
                        <td style="margin: 0; padding: 0;" align="center"><b><?php echo number_format($megatotplan, 2, ".", ","); ?></b></td>
                        <td style="margin: 0; padding: 0;" align="center"><b><?php echo number_format($megatotact, 2, ".", ","); ?></b></td>
                        <td style="margin: 0; padding: 0; background-color: #dbbff6;" align="center"><b><?php echo number_format($dayVarTot, 2, ".", ","); ?></b></td> 
                        <td style="margin: 0; padding: 0;" align="center"><b><?php echo number_format($cumPlanIncTot, 2, ".", ","); ?></b></td>
                        <td style="margin: 0; padding: 0;" align="center"><b><?php echo number_format($totcuminc, 2, ".", ","); ?></b></td> 
                        <td style="margin: 0; padding: 0; background-color: #dbbff6;" align="center"><b><?php echo number_format($megatotVar, 2, ".", ","); ?></b></td>
                        <td></td><td></td><td></td><td></td><td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>


    <div class="clearfix"></div>

</div>