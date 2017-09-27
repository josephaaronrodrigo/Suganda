<?php
$y = $_GET['y'];
$m = $_GET['m'];
$p = $_GET['p'];
$period = date('Y-m', strtotime($m . " " . $y));
$days = cal_days_in_month(CAL_GREGORIAN, date('m', strtotime($m . " " . $y)), $y);
?>
<div style="overflow-x: visible; width: 100%">

    <table class="table table-bordered table-condensed fixed">
        <?php
        include '../../model/production.php';
        $obj = new Production();
        $result = $obj->getStylesPlan($period, $p);
        $i = mysql_num_rows($result);
        $style = array();
        $color = array();
        $line_no = array();
        ?>

        <tr>
            <th style="text-align: center; vertical-align: middle; background-color: #61d647;" rowspan="3">Day</th>
            <td colspan="<?php echo (2 * $i); ?>" align="center" style="background-color: #299eff">PLAN</td>
        </tr>
        <tr>
            <?php
            $k = 0;
            while ($row = mysql_fetch_array($result)) {
                $style[$k] = $row['style'];
                $color[$k] = $row['color'];
                $line_no[$k] = $row['line_no'];
                ?>
                <td align="center" colspan="2" style="width: 100px">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="has-success" id="inputSuccess"><?php echo $row['style']; ?></div>
                        </div>
                        <div class="col-sm-3">
                            <?php echo "Line $line_no[$k]";?>
                        </div>
                        <div class="col-sm-2">
                            <input type="color" value="<?php echo $row['color']; ?>" style="border: 0px; height: 30px; width: 30px;">
                        </div>
                    </div>
                </td>
                <?php
                $k++;
            }
            ?>
        </tr>
        <tr>
            <?php
            $j = 0;
            while ($j < $i) {
                ?>
                <td align="center" style="background-color: #299eff">PLAN</td>
                <td align="center" style="background-color: #299eff">TTL</td>
                <?php
                $j++;
            }
            ?>
        </tr>

        <?php
        $h = 1;
        $cumPlan = array();
        while ($h <= $days) {
            if ($h < 10) {
                $h = '0' . $h;
            }
            ?>
            <tr>
                <?php
                $j = 0;
                ?>
                <td align="center" style="vertical-align: middle; background-color: #61d647"><b><?php echo $h;?></b></td>
                <?php
                $date = date('Y-m-d', strtotime($h." ".$m." ".$y));
                while ($j < $i) {
                    $plan = $obj -> dailyMonthPlan($p, $style[$j], $color[$j], $date, $line_no[$j]);
                    $cumPlan[$j] += $plan;
                    ?>
                    <td align="center"><?php echo $plan;?></td>
                    <td align="center"><?php echo $cumPlan[$j];?></td>
                    <?php
                    $j++;
                }
                ?>
            </tr>
            <?php
            $h++;
        }
        ?>
    </table>
</div>
