<?php
$monthdef = $_GET['m'];
$yeardef = $_GET['y'];
?>
<input type="hidden" name="monthtext" value="<?php echo date('M', strtotime($yeardef . "-" . $monthdef . "-01")); ?>">
<div class="month">      
    <ul>
        <a onclick="getprev()" href="#"><li class="prev">&#10094;</li></a>                    
        <a onclick="getnext()" href="#"><li class="next">&#10095;</li></a>
        <li style="text-align:center">
            <?php echo date('F', strtotime($yeardef . "-" . $monthdef . "-01")); ?><br>
            <?php
            $month = date('M', strtotime($yeardef . "-" . $monthdef . "-01"));
            $mo = date('m', strtotime($yeardef . "-" . $monthdef . "-01"));
            ?>
            <span style="font-size:18px"><?php echo $year = $yeardef; ?></span>
        </li>
    </ul>
</div>

<ul class="weekdays">
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
</ul>

<ul class="days">
    <?php
    $days = cal_days_in_month(CAL_GREGORIAN, $mo, $year);
    $dayst = date('N', strtotime($year . "-" . $mo . "-01"));
    $dayen = date('N', strtotime($year . "-" . $mo . "-" . $days));

    $mweek_start = date('d-m-Y', strtotime($year . "-" . $mo . '-01 -' . ($dayst - 1) . ' days'));
    $mweek_end = date('d-m-Y', strtotime($year . "-" . $mo . '-' . $days . ' + ' . (7 - $dayen) . ' days'));

    $date = $mweek_start;
    while (strtotime($date) <= strtotime($mweek_end)) {
        ?>
        <div class="col-container">
            <?php
            if (date('M', strtotime($date)) != $month) {
                $a = "col-inactive-odd";
                if ((date('d', strtotime($date)) % 2) == 0) {
                    $a = "col-inactive-even";
                }
                $openModal = "";
            } else {
                $a = "col-active-odd";
                if ((date('d', strtotime($date)) % 2) == 0) {
                    $a = "col-active-even";
                }
                $openModal = "onclick=\"openModal('" . date('d', strtotime($date)) . "')\"";
            }
            ?>
            <div class="<?php echo $a; ?>" <?php echo $openModal; ?>>
                <p style="float: right;">
                    <?php
                    echo date('d', strtotime($date));
                    $date = date('d-m-Y', strtotime($date . ' + 1 days'));
                    if (date('M', strtotime($date)) != $month) {
                        $a = "col-inactive-odd";
                        if ((date('d', strtotime($date)) % 2) == 0) {
                            $a = "col-inactive-even";
                        }
                        $openModal = "";
                    } else {
                        $a = "col-active-odd";
                        if ((date('d', strtotime($date)) % 2) == 0) {
                            $a = "col-active-even";
                        }
                        $openModal = "onclick=\"openModal('" . date('d', strtotime($date)) . "')\"";
                    }
                    ?>
                </p>
                <div style="padding-top:30px; padding-bottom: 13px">
                    <table class="table">
                        <?php
                        $d = date('Y-m-d', strtotime($date . ' - 1 days'));
                        $x = 1;
                        while ($x < 8) {
                            if (date('M', strtotime($d)) != $month) {
                                ?>
                                <tr class="hidden">
                                    <?php
                                } else {
                                    ?>
                                <tr>
                                    <?php
                                }
                                ?>
                                <td>Plant <?php echo $x; ?></td>
                                <td style="color: <?php echo getColor($x, $d); ?>; text-align: right; padding-bottom: 2px;"><span class="glyphicon glyphicon-record"></span></td>
                            </tr>
                            <?php
                            $x++;
                        }
                        ?>                                            
                    </table>
                </div>
            </div>

            <div class="<?php echo $a; ?>" <?php echo $openModal; ?>>
                <p style="float: right;">
                    <?php
                    echo date('d', strtotime($date));
                    $date = date('d-m-Y', strtotime($date . ' + 1 days'));
                    if (date('M', strtotime($date)) != $month) {
                        $a = "col-inactive-odd";
                        if ((date('d', strtotime($date)) % 2) == 0) {
                            $a = "col-inactive-even";
                        }
                        $openModal = "";
                    } else {
                        $a = "col-active-odd";
                        if ((date('d', strtotime($date)) % 2) == 0) {
                            $a = "col-active-even";
                        }
                        $openModal = "onclick=\"openModal('" . date('d', strtotime($date)) . "')\"";
                    }
                    ?>                                
                </p>
                <div style="padding-top:30px; padding-bottom: 13px">
                    <table class="table">
                        <?php
                        $d = date('Y-m-d', strtotime($date . ' - 1 days'));
                        $x = 1;
                        while ($x < 8) {
                            if (date('M', strtotime($d)) != $month) {
                                ?>
                                <tr class="hidden">
                                    <?php
                                } else {
                                    ?>
                                <tr>
                                    <?php
                                }
                                ?>
                                <td>Plant <?php echo $x; ?></td>
                                <td style="color: <?php echo getColor($x, $d); ?>; text-align: right; padding-bottom: 2px;"><span class="glyphicon glyphicon-record"></span></td>
                            </tr>
                            <?php
                            $x++;
                        }
                        ?>                                            
                    </table>
                </div>

            </div>
            <div class="<?php echo $a; ?>" <?php echo $openModal; ?>>
                <p style="float: right;">
                    <?php
                    echo date('d', strtotime($date));
                    $date = date('d-m-Y', strtotime($date . ' + 1 days'));
                    if (date('M', strtotime($date)) != $month) {
                        $a = "col-inactive-odd";
                        if ((date('d', strtotime($date)) % 2) == 0) {
                            $a = "col-inactive-even";
                        }
                        $openModal = "";
                    } else {
                        $a = "col-active-odd";
                        if ((date('d', strtotime($date)) % 2) == 0) {
                            $a = "col-active-even";
                        }
                        $openModal = "onclick=\"openModal('" . date('d', strtotime($date)) . "')\"";
                    }
                    ?>
                </p>
                <div style="padding-top:30px; padding-bottom: 13px">
                    <table class="table">
                        <?php
                        $d = date('Y-m-d', strtotime($date . ' - 1 days'));
                        $x = 1;
                        while ($x < 8) {
                            if (date('M', strtotime($d)) != $month) {
                                ?>
                                <tr class="hidden">
                                    <?php
                                } else {
                                    ?>
                                <tr>
                                    <?php
                                }
                                ?>
                                <td>Plant <?php echo $x; ?></td>
                                <td style="color: <?php echo getColor($x, $d); ?>; text-align: right; padding-bottom: 2px;"><span class="glyphicon glyphicon-record"></span></td>
                            </tr>
                            <?php
                            $x++;
                        }
                        ?>                                            
                    </table>
                </div>
            </div>

            <div class="<?php echo $a; ?>" <?php echo $openModal; ?>>
                <p style="float: right;">
                    <?php
                    echo date('d', strtotime($date));
                    $date = date('d-m-Y', strtotime($date . ' + 1 days'));
                    if (date('M', strtotime($date)) != $month) {
                        $a = "col-inactive-odd";
                        if ((date('d', strtotime($date)) % 2) == 0) {
                            $a = "col-inactive-even";
                        }
                        $openModal = "";
                    } else {
                        $a = "col-active-odd";
                        if ((date('d', strtotime($date)) % 2) == 0) {
                            $a = "col-active-even";
                        }
                        $openModal = "onclick=\"openModal('" . date('d', strtotime($date)) . "')\"";
                    }
                    ?>
                </p>
                <div style="padding-top:30px; padding-bottom: 13px">
                    <table class="table">
                        <?php
                        $d = date('Y-m-d', strtotime($date . ' - 1 days'));
                        $x = 1;
                        while ($x < 8) {
                            if (date('M', strtotime($d)) != $month) {
                                ?>
                                <tr class="hidden">
                                    <?php
                                } else {
                                    ?>
                                <tr>
                                    <?php
                                }
                                ?>
                                <td>Plant <?php echo $x; ?></td>
                                <td style="color: <?php echo getColor($x, $d); ?>; text-align: right; padding-bottom: 2px;"><span class="glyphicon glyphicon-record"></span></td>
                            </tr>
                            <?php
                            $x++;
                        }
                        ?>                                            
                    </table>
                </div>
            </div>
            <div class="<?php echo $a; ?>" <?php echo $openModal; ?>>
                <p style="float: right;">
                    <?php
                    echo date('d', strtotime($date));
                    $date = date('d-m-Y', strtotime($date . ' + 1 days'));
                    if (date('M', strtotime($date)) != $month) {
                        $a = "col-inactive-odd";
                        if ((date('d', strtotime($date)) % 2) == 0) {
                            $a = "col-inactive-even";
                        }
                        $openModal = "";
                    } else {
                        $a = "col-active-saturday2";
                        if ((date('d', strtotime($date)) % 2) == 0) {
                            $a = "col-active-saturday";
                        }
                        $openModal = "onclick=\"openModal('" . date('d', strtotime($date)) . "')\"";
                    }
                    ?>
                </p>
                <div style="padding-top:30px; padding-bottom: 13px">
                    <table class="table">
                        <?php
                        $d = date('Y-m-d', strtotime($date . ' - 1 days'));
                        $x = 1;
                        while ($x < 8) {
                            if (date('M', strtotime($d)) != $month) {
                                ?>
                                <tr class="hidden">
                                    <?php
                                } else {
                                    ?>
                                <tr>
                                    <?php
                                }
                                ?>
                                <td>Plant <?php echo $x; ?></td>
                                <td style="color: <?php echo getColor($x, $d); ?>; text-align: right; padding-bottom: 2px;"><span class="glyphicon glyphicon-record"></span></td>
                            </tr>
                            <?php
                            $x++;
                        }
                        ?>                                            
                    </table>
                </div>
            </div>

            <div class="<?php echo $a; ?>" <?php echo $openModal; ?>>
                <p style="float: right;">
                    <?php
                    echo date('d', strtotime($date));
                    $date = date('d-m-Y', strtotime($date . ' + 1 days'));
                    if (date('M', strtotime($date)) != $month) {
                        $a = "col-inactive-odd";
                        if ((date('d', strtotime($date)) % 2) == 0) {
                            $a = "col-inactive-even";
                        }
                        $openModal = "";
                    } else {
                        $a = "col-active-sunday2";
                        if ((date('d', strtotime($date)) % 2) == 0) {
                            $a = "col-active-sunday";
                        }
                        $openModal = "onclick=\"openModal('" . date('d', strtotime($date)) . "')\"";
                    }
                    ?>
                </p>
                <div style="padding-top:30px; padding-bottom: 13px">
                    <table class="table">
                        <?php
                        $d = date('Y-m-d', strtotime($date . ' - 1 days'));
                        $x = 1;
                        while ($x < 8) {
                            if (date('M', strtotime($d)) != $month) {
                                ?>
                                <tr class="hidden">
                                    <?php
                                } else {
                                    ?>
                                <tr>
                                    <?php
                                }
                                ?>
                                <td>Plant <?php echo $x; ?></td>
                                <td style="color: <?php echo getColor($x, $d); ?>; text-align: right; padding-bottom: 2px;"><span class="glyphicon glyphicon-record"></span></td>
                            </tr>
                            <?php
                            $x++;
                        }
                        ?>                                            
                    </table>
                </div>
            </div>
            <div class="<?php echo $a; ?>" <?php echo $openModal; ?>>
                <p style="float: right;">                                        
                    <?php
                    echo date('d', strtotime($date));
                    $date = date('d-m-Y', strtotime($date . ' + 1 days'));
                    ?>
                </p>
                <div style="padding-top:30px; padding-bottom: 13px">
                    <table class="table">
                        <?php
                        $d = date('Y-m-d', strtotime($date . ' - 1 days'));
                        $x = 1;
                        while ($x < 8) {
                            if (date('M', strtotime($d)) != $month) {
                                ?>
                                <tr class="hidden">
                                    <?php
                                } else {
                                    ?>
                                <tr>
                                    <?php
                                }
                                ?>
                                <td>Plant <?php echo $x; ?></td>
                                <td style="color: <?php echo getColor($x, $d); ?>; text-align: right; padding-bottom: 2px;"><span class="glyphicon glyphicon-record"></span></td>
                            </tr>
                            <?php
                            $x++;
                        }
                        ?>                                            
                    </table>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <br><br>
</ul>
<?php

function getColor($plant_no, $date) {
    include_once '../../model/production.php';
    $obj = new Production();
    $dayt = $obj->getDayType($plant_no, $date);
    switch ($dayt) {
        case 'Normal Work': echo "#329932";
            break;
        case 'Cover Day': echo "#1c5188";
            break;
        case 'Poya Day':echo "#f82831";
            break;
        case 'Half Day':echo "#ffa500";
            break;
        case 'Public Holiday':echo "#f82831";
            break;
        case NULL: echo "#000000";
            break;
    }
}
?>  