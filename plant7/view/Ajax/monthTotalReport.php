<?php
$m = $_GET['m'];
$y = $_GET['y'];
$period = date('Y-m', strtotime($m . " " . $y));
$days = cal_days_in_month(CAL_GREGORIAN, date('m', strtotime($m . " " . $y)), $y);
?>
<div class="table-responsive" style="max-width: none;">


    <div style="overflow-x: visible; width: 2800px">

        <table class="table table-bordered table-condensed">

            <tr>
                <td></td>
                <td></td>
                <td colspan="2" style="border-right-width: 6px; border-right-color: black;">PLAN</td>
                <td colspan="2" style="border-right-width: 6px; border-right-color: black;">ACTUAL</td>
                <td colspan="2" rowspan="2" style="vertical-align: middle">+/-</td>
            </tr>
            <tr>
                <td rowspan="2" style="vertical-align: middle">DATE</td>
                <td rowspan="2" style="vertical-align: middle;">DAY</td>
                <td class="plant7" colspan="2">PLANT 7</td>

                <td class="plant7" colspan="2">PLANT 7</td>

            </tr>
            <tr>
                <td class="plant7">PCS</td>                                
                <td class="plant7">CUM</td>

                <td class="plant7">PCS</td>                                
                <td class="plant7">CUM</td>
                <td>PCS</td>
                <td>CUM</td>


            </tr>
            <?php
            $i = 1;
            include '../../model/production.php';
            $obj = new Production();
            while ($i <= $days) {
                if ($i < 10) {
                    $i = '0' . $i;
                }
                $date = date('Y-m-d', strtotime($i . ' ' . $m . ' ' . $y));
                $day = date('D', strtotime($date));
                ?>
                <tr>
                    <td><?php echo $date; ?></td>
                    <td><?php echo $day; ?></td>
                    <td class="plant7"><?php echo $p7 = $obj->getDailyPlannedOut(7, $date, '%', '%'); ?> </td>                                
                    <td class="plant7"><?php echo $pp7 += $p7; ?></td>
                    
                    <td class="plant7"><?php echo $a7 = $obj->totDailyOut(7, $date, '%', '%'); ?>  </td>                                
                    <td class="plant7"><?php echo $ap7 += $a7; ?></td>
                    
                    <td><?php echo ($a7 - $p7); ?></td>
                    <td><?php echo ($ap7 - $pp7); ?></td>

                </tr>
                <?php
                $i++;
            }
            ?>
        </table>
    </div>
</div>