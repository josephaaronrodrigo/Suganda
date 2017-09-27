<?php
$m = $_GET['m'];
$p = $_GET['p'];
$s = $_GET['s'];
$y = $_GET['y'];
$days = cal_days_in_month(CAL_GREGORIAN, date('m', strtotime($m)), $y);
include '../../model/plan.php';
$obj = new Plan();
if ($p == "%") {
    ?>
    <h3 class = "text-muted">View Production</h3>
    <p class = "text-muted">For all plants</p>
    <div class = "table-responsive">
        <div style = "overflow-x:auto; width:2500px; height:auto">
            <table class = "table table-bordered" style = "table-layout:fixed; border-color: black;">
                <thead>
                    <tr>
                        <th rowspan = "2" style = "width: 60px; border-color: black;"></th>
                        <th colspan = "8" style = "font-size: 24px; border-color: black; text-align: center;">Planned Production</th>

                        <th colspan = "8" style = "font-size: 24px; border-color: black; text-align: center;">Planned Shipment</th>

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

                        <td style = "border-color: black;">Plant 1</td>
                        <td style = "border-color: black;">Plant 2</td>
                        <td style = "border-color: black;">Plant 3</td>
                        <td style = "border-color: black;">Plant 4</td>
                        <td style = "border-color: black;">Plant 5</td>
                        <td style = "border-color: black;">Plant 6</td>
                        <td style = "border-color: black;">Plant 7</td>
                        <td style = "border-color: black;">Total</td>

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
                    <input type="hidden" name="date[]" value="<?php echo $date = date('Y-m-d', strtotime($i . " " . $m . " " . $y)); ?>">
                    <!--Planned Production -->
                    <!--Value_01 -->
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, 1, $date, 'production_plan', 'plan'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, 2, $date, 'production_plan', 'plan'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, 3, $date, 'production_plan', 'plan'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, 4, $date, 'production_plan', 'plan'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, 5, $date, 'production_plan', 'plan'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, 6, $date, 'production_plan', 'plan'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, 7, $date, 'production_plan', 'plan'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_total[]" readonly value="<?php echo $obj->getPlan($s, 1, $date, 'production_plan', 'plan_total'); ?>"></td>


                    <!--Value_01 -->
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, 1, $date, 'shipment_plan', 'shipment'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, 2, $date, 'shipment_plan', 'shipment'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, 3, $date, 'shipment_plan', 'shipment'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, 4, $date, 'shipment_plan', 'shipment'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, 5, $date, 'shipment_plan', 'shipment'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, 6, $date, 'shipment_plan', 'shipment'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, 7, $date, 'shipment_plan', 'shipment'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_total[]" readonly value="<?php echo $obj->getPlan($s, 1, $date, 'shipment_plan', 'ship_total'); ?>"></td>
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

    <h3 class = "text-muted">View Production</h3>
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
                    <input type="hidden" name="date[]" value="<?php echo $date = date('Y-m-d', strtotime($i . " " . $m . " " . $y)); ?>">
                    <!--Planned Production -->
                    <!--Value_01 -->
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, $p, $date, 'production_plan', 'plan'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, $p, $date, 'production_plan', 'plan_total'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, $p, $date, 'production_plan', 'plan_remarks'); ?>"></td>



                    <!--Value_01 -->
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, $p, $date, 'shipment_plan', 'shipment'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, $p, $date, 'shipment_plan', 'ship_total'); ?>"></td>
                    <td style = "border-color: black; "><input class = "form-control input-sm" type = "text" style = "font-size: 20px; text-align: center; width: 100%; border: none" name="p_1[]" readonly value="<?php echo $obj->getPlan($s, $p, $date, 'shipment_plan', 'shipment_remarks'); ?>"></td>


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