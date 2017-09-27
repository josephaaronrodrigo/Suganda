<?php
$m = $_GET['m'];
$p = $_GET['p'];
$s = $_GET['s'];
$y = $_GET['y'];
$days = cal_days_in_month(CAL_GREGORIAN, date('m', strtotime($m)), $y);
if ($p == "%") {
    ?>
<input type="hidden" name="switch" value="2">
    <h3 class = "text-muted">Enter Production</h3>
    <p class = "text-muted">For all plants</p>
    <div class = "table-responsive">
        <div style = "overflow-x:auto; width:2500px; height:auto">
            <table class = "table table-bordered" style = "table-layout:fixed; border-color: black;">
                <thead>
                    <tr>
                        <th rowspan = "2" style = "width: 60px; border-color: black;"></th>
                        <th colspan = "9" style = "font-size: 24px; border-color: black; text-align: center;">Planned Production</th>

                        <th colspan = "9" style = "font-size: 24px; border-color: black; text-align: center;">Planned Shipment</th>

                    </tr>
                </thead>
                <tbody>
                    <tr style = "text-align: center;">
                        <td style = "border-color: black;">Date</td>
                        <td style = "border-color: black;">Plant 1</td>
                        <td style = "border-color: black;">Plant 2</td>
                        <td style = "border-color: black;">Plant 3</td>
                        <td style = "border-color: black;">Plant 4</td>
                        <td style = "border-color: black;">Plant 5</td>
                        <td style = "border-color: black;">Plant 6</td>
                        <td style = "border-color: black;">Plant 7</td>
                        <td style = "border-color: black;">Total</td>
                        <td style = "border-color: black;">Remarks</td>
                        <td style = "border-color: black;">Plant 1</td>
                        <td style = "border-color: black;">Plant 2</td>
                        <td style = "border-color: black;">Plant 3</td>
                        <td style = "border-color: black;">Plant 4</td>
                        <td style = "border-color: black;">Plant 5</td>
                        <td style = "border-color: black;">Plant 6</td>
                        <td style = "border-color: black;">Plant 7</td>
                        <td style = "border-color: black;">Total</td>
                        <td style = "border-color: black;">Remarks</td>

                    </tr>
                    <?php
                    $i = 1;
                    while ($i <= $days) {
                        if ($i < 10) {
                            $i = '0' . $i;
                        }
                        ?>
                        <tr>
                            <!--Date -->
                            <td style = "text-align: right; font-size: 20px; border-color: black;"><?php echo $i; ?></td>
                            <input type="hidden" name="date[]" value="<?php echo date('Y-m-d',strtotime($i." ".$m." ".$y));?>">
                            <!--Planned Production -->
                            <!--Value_01 -->
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" onkeyup="calFullTotalPlan()"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_2[]" onkeyup="calFullTotalPlan()"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_3[]" onkeyup="calFullTotalPlan()"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_4[]" onkeyup="calFullTotalPlan()"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_5[]" onkeyup="calFullTotalPlan()"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_6[]" onkeyup="calFullTotalPlan()"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_7[]" onkeyup="calFullTotalPlan()"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_total[]" readonly></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_remarks[]"></td>

                            <!--Value_01 -->
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="s_1[]" onkeyup="calFullTotalShip()"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="s_2[]" onkeyup="calFullTotalShip()"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="s_3[]" onkeyup="calFullTotalShip()"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="s_4[]" onkeyup="calFullTotalShip()"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="s_5[]" onkeyup="calFullTotalShip()"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="s_6[]" onkeyup="calFullTotalShip()"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="s_7[]" onkeyup="calFullTotalShip()"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="s_total[]" readonly></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="s_remarks[]"></td>
                        </tr>
                        <?php
                        $i++;
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <?php
} else {
    ?>
    <input type="hidden" name="switch" value="1">
    <h3 class = "text-muted">Enter Production</h3>
    <p class = "text-muted">For single plant</p>
    <div class = "table-responsive">
        <div style = "overflow-x:auto; width:800px; height:auto">
            <table class = "table table-bordered" style = "table-layout:fixed; border-color: black;">
                <thead>
                    <tr>
                        <th rowspan = "2" style = "width: 60px; border-color: black;"></th>
                        <th colspan = "3" style = "font-size: 24px; border-color: black; text-align: center;">Planned Production</th>

                        <th colspan = "3" style = "font-size: 24px; border-color: black; text-align: center;">Planned Shipment</th>

                    </tr>
                </thead>
                <tbody>
                    <tr style = "text-align: center;">
                        <td style = "border-color: black;">Date</td>
                        <td style = "border-color: black;">Plant <?php echo $p; ?></td>
                        <td style = "border-color: black;">Total</td>
                        <td style = "border-color: black;">Remarks</td>
                        <td style = "border-color: black;">Plant <?php echo $p; ?></td>
                        <td style = "border-color: black;">Total</td>
                        <td style = "border-color: black;">Remarks</td>



                    </tr>
                    <?php
                    $i = 1;
                    while ($i <= $days) {
                        if ($i < 10) {
                            $i = '0' . $i;
                        }
                        ?>
                        <tr>
                            <!--Date -->
                            <td style = "text-align: right; font-size: 20px; border-color: black;"><?php echo $i; ?></td>
                            <input type="hidden" name="date[]" value="<?php echo date('Y-m-d',strtotime($i." ".$m." ".$y));?>">
                            <!--Planned Production -->
                            <!--Value_01 -->
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p[]" onkeyup="calcTotalPlan()"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" readonly name="p_total[]"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_remarks[]"></td>



                            <!--Value_01 -->
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="s[]" onkeyup="calcTotalShip()"></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="s_total[]" readonly></td>
                            <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="s_remarks[]"></td>


                        </tr>
                        <?php
                        $i++;
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <?php
}
?>
    <input type="submit" value="Submit">