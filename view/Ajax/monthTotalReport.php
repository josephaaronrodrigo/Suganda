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
                <td colspan="14" style="border-right-width: 6px; border-right-color: black;">PLAN</td>
                <td colspan="14" style="border-right-width: 6px; border-right-color: black;">ACTUAL</td>
                <td colspan="2" rowspan="2" style="vertical-align: middle">+/-</td>
            </tr>
            <tr>
                <td rowspan="2" style="vertical-align: middle">DATE</td>
                <td rowspan="2" style="vertical-align: middle;">DAY</td>
                <td class="plant1" colspan="2">PLANT 1</td>
                <td class="plant2" colspan="2">PLANT 2</td>
                <td class="plant3" colspan="2">PLANT 3</td>
                <td class="plant4" colspan="2">PLANT 4</td>
                <td class="plant5" colspan="2">PLANT 5</td>
                <td class="plant6" colspan="2">PLANT 6</td>
                <td class="ttl" colspan="2"  style="border-right-width: 6px; border-right-color: black;" ><b>TOTAL</b></td>

                <td class="plant1" colspan="2">PLANT 1</td>
                <td class="plant2" colspan="2">PLANT 2</td>
                <td class="plant3" colspan="2">PLANT 3</td>
                <td class="plant4" colspan="2">PLANT 4</td>
                <td class="plant5" colspan="2">PLANT 5</td>
                <td class="plant6" colspan="2">PLANT 6</td>
                <td class="ttl" colspan="2" style="border-right-width: 6px; border-right-color: black;"><b>TOTAL</b></td>

            </tr>
            <tr>
                <td class="plant1">PCS</td>                                
                <td class="plant1">CUM</td>
                <td class="plant2">PCS</td>                                
                <td class="plant2">CUM</td>
                <td class="plant3">PCS</td>                                
                <td class="plant3">CUM</td>
                <td class="plant4">PCS</td>                                
                <td class="plant4">CUM</td>
                <td class="plant5">PCS</td>                                
                <td class="plant5">CUM</td>
                <td class="plant6">PCS</td>                                
                <td class="plant6">CUM</td>
                <td class="ttl">PCS</td>                                
                <td class="ttl" style="border-right-width: 6px; border-right-color: black;"  >CUM</td>

                <td class="plant1">PCS</td>                                
                <td class="plant1">CUM</td>
                <td class="plant2">PCS</td>                                
                <td class="plant2">CUM</td>
                <td class="plant3">PCS</td>                                
                <td class="plant3">CUM</td>
                <td class="plant4">PCS</td>                                
                <td class="plant4">CUM</td>
                <td class="plant5">PCS</td>                                
                <td class="plant5">CUM</td>
                <td class="plant6">PCS</td>                                
                <td class="plant6">CUM</td>
                <td class="ttl">PCS</td>                                
                <td class="ttl" style="border-right-width: 6px; border-right-color: black;">CUM</td>
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
                    <td class="plant1"><?php echo $p1 = $obj->getDailyPlannedOut(1, $date, '%', '%'); ?></td>
                    <td class="plant1"><?php echo $pp1 += $p1; ?></td>
                    <td class="plant2"><?php echo $p2 = $obj->getDailyPlannedOut(2, $date, '%', '%'); ?> </td>                                
                    <td class="plant2"><?php echo $pp2 += $p2; ?></td>
                    <td class="plant3"><?php echo $p3 = $obj->getDailyPlannedOut(3, $date, '%', '%'); ?> </td>                                
                    <td class="plant3"><?php echo $pp3 += $p3; ?></td>
                    <td class="plant4"><?php echo $p4 = $obj->getDailyPlannedOut(4, $date, '%', '%'); ?> </td>                                
                    <td class="plant4"><?php echo $pp4 += $p4; ?></td>
                    <td class="plant5"><?php echo $p5 = $obj->getDailyPlannedOut(5, $date, '%', '%'); ?> </td>                                
                    <td class="plant5"><?php echo $pp5 += $p5; ?></td>
                    <td class="plant6"><?php echo $p6 = $obj->getDailyPlannedOut(6, $date, '%', '%'); ?> </td>                                
                    <td class="plant6"><?php echo $pp6 += $p6; ?></td>
                    <td class="ttl">
                        <?php
                        echo $ptot = $obj->getDailyPlannedOut('%', $date, '%', '%');
                        $pgrand += $ptot;
                        ?>
                    </td>                                
                    <td class="ttl"  style="border-right-width: 6px; border-right-color: black;" >
                        <?php
                        echo $pgrand;
                        ?>
                    </td>

                    <td class="plant1"><?php echo $a1 = $obj->totDailyOut(1, $date, '%', '%'); ?> </td>                                
                    <td class="plant1"><?php echo $ap1 += $a1; ?></td>
                    <td class="plant2"><?php echo $a2 = $obj->totDailyOut(2, $date, '%', '%'); ?>  </td>                                
                    <td class="plant2"><?php echo $ap2 += $a2; ?></td>
                    <td class="plant3"><?php echo $a3 = $obj->totDailyOut(3, $date, '%', '%'); ?>  </td>                                
                    <td class="plant3"><?php echo $ap3 += $a3; ?></td>
                    <td class="plant4"><?php echo $a4 = $obj->totDailyOut(4, $date, '%', '%'); ?>  </td>                                
                    <td class="plant4"><?php echo $ap4 += $a4; ?></td>
                    <td class="plant5"><?php echo $a5 = $obj->totDailyOut(5, $date, '%', '%'); ?>  </td>                                
                    <td class="plant5"><?php echo $ap5 += $a5; ?></td>
                    <td class="plant6"><?php echo $a6 = $obj->totDailyOut(6, $date, '%', '%'); ?>  </td>                                
                    <td class="plant6"><?php echo $ap6 += $a6; ?></td>
                    <td class="ttl">
                        <?php
                        echo $atot = $obj->totDailyOut('%', $date, '%');
                        $agrand += $atot;
                        ?>
                    </td>                                
                    <td class="ttl" style="border-right-width: 6px; border-right-color: black;">
                        <?php
                        echo $agrand;
                        ?>
                    </td>
                    <td><?php echo ($atot - $ptot); ?></td>
                    <td><?php echo ($agrand - $pgrand); ?></td>

                </tr>
                <?php
                $i++;
            }
            ?>
        </table>
    </div>
</div>