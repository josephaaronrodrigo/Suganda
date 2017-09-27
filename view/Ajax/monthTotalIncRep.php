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
                <td rowspan="2" colspan='2'>+/-</td>
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
                <td class="ttl" style="border-right-width: 6px; border-right-color: black;" colspan="2"><b>TOTAL</b></td>

                <td class="plant1" colspan="2">PLANT 1</td>
                <td class="plant2" colspan="2">PLANT 2</td>
                <td class="plant3" colspan="2">PLANT 3</td>
                <td class="plant4" colspan="2">PLANT 4</td>
                <td class="plant5" colspan="2">PLANT 5</td>
                <td class="plant6" colspan="2">PLANT 6</td>
                <td class="ttl" colspan="2" style="border-right-width: 6px; border-right-color: black;"><b>TOTAL</b></td>
            </tr>
            <tr>
                <td class="plant1">USD</td>                                
                <td class="plant1">TTL</td>
                <td class="plant2">USD</td>                                
                <td class="plant2">TTL</td>
                <td class="plant3">USD</td>                                
                <td class="plant3">TTL</td>
                <td class="plant4">USD</td>                                
                <td class="plant4">TTL</td>
                <td class="plant5">USD</td>                                
                <td class="plant5">TTL</td>
                <td class="plant6">USD</td>                                
                <td class="plant6">TTL</td>
                <td class="ttl">USD</td>                                
                <td class="ttl" style="border-right-width: 6px; border-right-color: black;">TTL</td>

                <td class="plant1">USD</td>                                
                <td class="plant1">TTL</td>
                <td class="plant2">USD</td>                                
                <td class="plant2">TTL</td>
                <td class="plant3">USD</td>                                
                <td class="plant3">TTL</td>
                <td class="plant4">USD</td>                                
                <td class="plant4">TTL</td>
                <td class="plant5">USD</td>                                
                <td class="plant5">TTL</td>
                <td class="plant6">USD</td>                                
                <td class="plant6">TTL</td>
                <td class="ttl">USD</td>                                
                <td class="ttl" style="border-right-width: 6px; border-right-color: black;">TTL</td>
                <td>USD</td>
                <td>TTL</td>

            </tr>
            <?php
            $i = 1;
            Include '../../model/production.php';
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
                    <td class="plant1"><?php echo $i1 = $obj->getPlannedDailyIncome(1, $date); ?></td>                                
                    <td class="plant1"><?php echo $pi1 += $i1; ?></td>
                    <td class="plant2"><?php echo $i2 = $obj->getPlannedDailyIncome(2, $date); ?> </td>                                
                    <td class="plant2"><?php echo $pi2 += $i2; ?></td>
                    <td class="plant3"><?php echo $i3 = $obj->getPlannedDailyIncome(3, $date); ?> </td>                                
                    <td class="plant3"><?php echo $pi3 += $i3; ?></td>
                    <td class="plant4"><?php echo $i4 = $obj->getPlannedDailyIncome(4, $date); ?> </td>                                
                    <td class="plant4"><?php echo $pi4 += $i4; ?></td>
                    <td class="plant5"><?php echo $i5 = $obj->getPlannedDailyIncome(5, $date); ?> </td>                                
                    <td class="plant5"><?php echo $pi5 += $i5; ?></td>
                    <td class="plant6"><?php echo $i6 = $obj->getPlannedDailyIncome(6, $date); ?> </td>                                
                    <td class="plant6"><?php echo $pi6 += $i6; ?></td>
                    <td class="ttl">
                        <?php
                        echo $ptot = $obj->getPlannedDailyIncome('%', $date);
                        $pgrand += $ptot;
                        ?>
                    </td>                                
                    <td class="ttl" style="border-right-width: 6px; border-right-color: black;">
                        <?php
                        echo $pgrand;
                        ?>
                    </td>

                    <td class="plant1"><?php echo $a1 = $obj->getActualDailyIncome(1, $date); ?> </td>                                
                    <td class="plant1"><?php echo $ai1 += $a1; ?></td>
                    <td class="plant2"><?php echo $a2 = $obj->getActualDailyIncome(2, $date); ?>  </td>                                
                    <td class="plant2"><?php echo $ai2 += $a2; ?></td>
                    <td class="plant3"><?php echo $a3 = $obj->getActualDailyIncome(3, $date); ?>  </td>                                
                    <td class="plant3"><?php echo $ai3 += $a3; ?></td>
                    <td class="plant4"><?php echo $a4 = $obj->getActualDailyIncome(4, $date); ?>  </td>                                
                    <td class="plant4"><?php echo $ai4 += $a4; ?></td>
                    <td class="plant5"><?php echo $a5 = $obj->getActualDailyIncome(5, $date); ?>  </td>                                
                    <td class="plant5"><?php echo $ai5 += $a5; ?></td>
                    <td class="plant6"><?php echo $a6 = $obj->getActualDailyIncome(6, $date); ?>  </td>                                
                    <td class="plant6"><?php echo $ai6 += $a6; ?></td>
                    <td class="ttl">
                        <?php
                        echo $atot = $obj->getActualDailyIncome('%', $date);
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