<?php
$y = $_GET['y'];
$m = $_GET['m'];
$days = cal_days_in_month(CAL_GREGORIAN, date('m', strtotime($m . " " . $y)), $y);
?>
<div style="overflow-x: visible; width: 2000px">

    <table class="table table-bordered table-condensed">
        <tr>
            <th style="text-align: center; vertical-align: middle;" rowspan="3">Day</th>


            <td colspan="70" align="center" style="background-color: #4A96AD">PLAN</td>




        </tr>
        <tr>
            <?php
            $i = 1;
            while ($i < 36) {
                ?>
                <td align="center">
                    <select name="line_no[]" class="form-control">
                        <option selected="" disabled="">Select Line</option>
                        <?php
                        $j = 1;
                        while ($j < 21) {
                            ?>
                            <option value="<?php echo $j; ?>"><?php echo "Line $j"; ?></option>
                            <?php
                            $j++;
                        }
                        ?>
                    </select>
                </td>
                <?php
                $i++;
            }
            ?>
        </tr>
        <tr>
            <?php
            $i = 1;
            while ($i < 11) {
                ?>
                <td align="center">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="has-success">
                                <input id="inputSuccess" style="width: 100%" type="text" name="style[]" placeholder="Enter Style No." class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <input type="color" name="color[]" value="#ff0000" style="border: 0px; height: 30px; width: 30px;">
                        </div>
                    </div>
                </td>
                <?php
                $i++;
            }
            ?>
        </tr>

        <?php
        $h = 1;
        while ($h <= $days) {
            if ($h < 10) {
                $h = '0' . $h;
            }
            ?>
            <tr>
            <input type="hidden" name="date[]" value="<?php echo date('Y-m-d', strtotime($y . '-' . $m . '-' . $h)) ?>">
            <?php
            $i = 1;
            ?>
            <td align="center" style="vertical-align: middle;"><?php echo $h; ?></td>
            <?php
            while ($i <= 10) {
                ?>
                <td>
                    <div class="has-warning">
                        <input type="text" id="inputWarning" name="plan[]" placeholder="Enter Planned Qty" class="form-control">
                    </div>
                </td>
                <?php
                $i++;
            }
            ?>
            </tr>
            <?php
            $h++;
        }
        ?>
    </table>
</div>
<input type="submit" value="submit" class="btn-success">