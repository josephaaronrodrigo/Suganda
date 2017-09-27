<!DOCTYPE html>
<html>
    <head>
        <title>Calendar</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap-3.3.7/dist/css/bootstrap.css">
        <script src="jquery-3.2.1.min.js"></script>
        <script src="bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
        <style>
            * {box-sizing:border-box;}
            ul {list-style-type: none;}
            body {font-family: Verdana,sans-serif;}

            .month {
                padding: 70px 25px;
                width: 100%;
                background: #1abc9c;
            }

            .calendar-below{
                height: 1200px;
            }

            .month ul {
                margin: 0;
                padding: 0;
            }

            .month ul li {
                color: white;
                font-size: 20px;
                text-transform: uppercase;
                letter-spacing: 3px;
            }

            .month .prev {
                float: left;
                padding-top: 10px;
            }

            .month .next {
                float: right;
                padding-top: 10px;
            }

            .weekdays {
                margin: 0;
                padding: 10px 0;
                background-color: #ddd;
            }

            .weekdays li {
                display: inline-block;
                width: 13.85%;
                color: #666;
                text-align: center;
            }

            .days {
                padding: 0;
                height: 600px;
                background: #white;
                margin: 0;
            }

            .days li {
                list-style-type: none;
                display: inline-block;
                width: 13.6%;
                text-align: center;
                margin-bottom: 5px;
                font-size:12px;
                color: #777;
            }

            .days li .active {
                padding: 5px;
                background: #1abc9c;
                color: white !important
            }

            /* Add media queries for smaller screens */
            @media screen and (max-width:720px) {
                .weekdays li, .days li {width: 13.1%;}
            }

            @media screen and (max-width: 420px) {
                .weekdays li, .days li {width: 12.5%;}
                .days li .active {padding: 2px;}
            }

            @media screen and (max-width: 290px) {
                .weekdays li, .days li {width: 12.2%;}
            }
        </style>
        <style>
            * {
                box-sizing: border-box;
            }

            .col-container {
                display: table;
                width: 100%;
            }

            .col-active-even{
                width: 13.85%;
                display: table-cell;
                padding: 15px;
                padding-bottom: 0px;
                background-color: #b1deb2;
            }           

            .col-active-odd{
                width: 13.85%;
                display: table-cell;
                padding: 15px;
                padding-bottom: 0px;
                background-color: #9ed69f;
            }

            .col-inactive-odd {
                display: table-cell;
                padding: 15px;
                padding-bottom: 0px;
                width: 13.85%;
                background-color: #e1e1e1;                
                color: #989898;

            }

            .col-inactive-even{
                width: 13.85%;
                display: table-cell;
                padding: 15px;
                padding-bottom: 0px;
                background-color: #d8d8d8;
                color: #989898;
            }

            .col-active-sunday{
                width: 13.85%;
                display: table-cell;
                padding: 15px;
                padding-bottom: 0px;
                background-color: #de9a9e;
            }

            .col-active-sunday2{
                width: 13.85%;
                display: table-cell;
                padding: 15px;
                padding-bottom: 0px;
                background-color: #d68186;
            }

            .col-active-saturday{
                width: 13.85%;
                display: table-cell;
                padding: 15px;
                padding-bottom: 0px;
                background-color: #f8cd9a;
            }
            .col-active-saturday2{
                width: 13.85%;
                display: table-cell;
                padding: 15px;
                padding-bottom: 0px;
                background-color: #f7c181;
            }

            .col-active-poya{
                width: 13.85%;
                display: table-cell;
                padding: 15px;
                padding-bottom: 0px;
                background-color: #fff7ac;
            }

            .col-active-cover{
                width: 13.85%;
                display: table-cell;
                padding: 15px;
                padding-bottom: 0px;
                background-color: #aecbe4;
            }
            @media only screen and (max-width: 600px) {
                .col { 
                    display: block;
                    width: 100%;
                }
            }
        </style>
        <style>
            .btn-circle.btn-xl {
                width: 100px;
                height: 100px;
                padding: 10px 16px;
                font-size: 28px;
                line-height: 1.33;
                border-radius: 50px;
            }
        </style>
        <style>
            @import url(http://fonts.googleapis.com/css?family=Raleway:400,500,700);
            *, *::after, *::before {
                box-sizing: border-box; }

            .toggle-button {
                margin: 0 5px; }

            /*
             * Toggle button styles
             */
            .toggle-button {
                position: relative;
                display: inline-block;
                color: #fff; }
            .toggle-button label {
                display: inline-block;
                text-transform: uppercase;
                cursor: pointer;
                text-align: left; }
            .toggle-button input {
                display: none; }
            .toggle-button__icon {
                cursor: pointer;
                pointer-events: none; }
            .toggle-button__icon:before, .toggle-button__icon:after {
                content: "";
                position: absolute;
                top: 45%;
                left: 35%;
                transition: 0.2s ease-out; }


            .toggle-button--aava label {
                height: 50px;
                line-height: 50px;
                transition: all 0.2s;
                border-radius: 2rem; }
            .toggle-button--aava label:before, .toggle-button--aava label:after {
                position: absolute;
                right: 1.5rem;
                transition: all 0.2s .1s ease-out; }
            .toggle-button--aava label:before {
                content: attr(data-on-text); }
            .toggle-button--aava label:after {
                content: attr(data-off-text); }

            .toggle-button--aava input[type=checkbox] + label {
                width: 120px;
                background: #F04A45; }
            .toggle-button--aava input[type=checkbox] + label:before {
                opacity: 0;
                transform: translate(0, 20px); }
            .toggle-button--aava input[type=checkbox] + label:after {
                opacity: 1;
                transform: translate(0, 0); }

            .toggle-button--aava input[type=checkbox]:checked ~ label {
                width: 120px;
                background: #3bc293; }
            .toggle-button--aava input[type=checkbox]:checked ~ label:before {
                opacity: 1;
                transform: translate(0, 0); }
            .toggle-button--aava input[type=checkbox]:checked ~ label:after {
                opacity: 0;
                transform: translate(0, -20px); }

            .toggle-button--aava input[type=checkbox]:checked ~ .toggle-button__icon:before {
                transform: translate(-10%, 100%) rotate(45deg);
                width: 16.66667px; }

            .toggle-button--aava input[type=checkbox]:checked ~ .toggle-button__icon:after {
                transform: translate(30%) rotate(-45deg); }

            .toggle-button--aava .toggle-button__icon {
                position: absolute;
                left: 0;
                top: 0;
                height: 50px;
                width: 50px; }
            .toggle-button--aava .toggle-button__icon:before, .toggle-button--aava .toggle-button__icon:after {
                height: 3px;
                border-radius: 3px;
                background: #fff;
                box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1); }
            .toggle-button--aava .toggle-button__icon:before {
                width: 25px;
                transform: rotate(45deg); }
            .toggle-button--aava .toggle-button__icon:after {
                width: 25px;
                transform: rotate(-45deg); }


        </style>
    </head>

    <body>
        <?php

        function getColor($plant_no, $date) {
            include_once '../model/production.php';
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
        <div class="container-fluid">
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src=""></a>
                </div>
                <ul class="nav navbar-nav" style="float: right;">
                    <li class="active"><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">SERVICES</a></li>
                    <li><a href="#">PROCESS</a></li>
                    <li><a href="#">PRODUCTS</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </nav>
        </div>
        <br><Br><br>
        <form name="calendar" onsubmit="return(false)">
            <div class="container" >
                <input type="hidden" name="month" value="<?php echo date('m'); ?>">
                <input type="hidden" name="year" value="<?php echo date('Y'); ?>">
                <div id="calendar">
                    <input type="hidden" name="monthtext" value="<?php echo date('M'); ?>">
                    <?php
                    $yeardef = date('Y');
                    $monthdef = date('M');
                    ?>
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
                </div>
            </div>
            <script>
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                function getnext() {
                    var m = document.calendar.month.value;
                    var y = document.calendar.year.value;
                    if (Number(m) !== 12) {
                        m = Number(m) + 1;
                        if (m < 10) {
                            m = '0' + m;
                        }
                        document.calendar.month.value = m;
                    } else {
                        m = '01';
                        y = Number(y) + 1;
                        document.calendar.month.value = m;
                        document.calendar.year.value = y;
                    }

                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("calendar").innerHTML = xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET", "Ajax/calendar.php?m=" + m + "&y=" + y, true);
                    xmlhttp.send();
                }

                function getprev() {
                    var m = document.calendar.month.value;
                    var y = document.calendar.year.value;
                    if (Number(m) !== 1) {
                        m = Number(m) - 1;
                        if (m < 10) {
                            m = '0' + m;
                        }
                        document.calendar.month.value = m;
                    } else {
                        m = '12';
                        y = Number(y) - 1;
                        document.calendar.month.value = m;
                        document.calendar.year.value = y;
                    }

                    xmlhttp.onreadystatechange = function () {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("calendar").innerHTML = xmlhttp.responseText;
                        }
                    };
                    xmlhttp.open("GET", "Ajax/calendar.php?m=" + m + "&y=" + y, true);
                    xmlhttp.send();
                }

                function openModal(str) {
                    var d = str;
                    var m = document.calendar.month.value;
                    var mo = document.calendar.monthtext.value;
                    var y = document.calendar.year.value;
                    document.getElementById("calModalDate").innerHTML = d;
                    document.getElementById("calModalYear").innerHTML = y;
                    document.getElementById("calModalMonth").innerHTML = mo;
                    document.calModal.date.value = y + "-" + m + "-" + d;
                    document.getElementById('modalOpen').click();
                }
            </script>
            <button id='modalOpen' data-toggle="modal" data-target="#myModal" class='hidden'></button>
        </form>
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><text style="font-size: 100px;">&times;</text></button>
                    </div>
                    <div class="modal-body">
                        <form name="calModal" action="../control/production.php" method="POST">
                            <div class="row">
                                <div class="col-md-3">
                                    <table class="table">
                                        <tr>
                                            <td rowspan="2" style="padding: 0; margin: 0; "><p style="margin-top: 200px; text-align: right; font-size:150px; margin: 0; padding: 0" id="calModalDate">01</td>
                                            <td style="vertical-align: bottom; padding: 0; padding-top: 28px; margin: 0; font-size: 40px;text-transform: uppercase" id="calModalMonth">May</td>
                                        </tr>
                                        <tr>
                                            <td style="padding: 0; margin: 0; padding-top: 0px; padding-bottom:7px; font-size: 70px;" id="calModalYear">2017</td>
                                        </tr>
                                    </table>
                                    <br><br><br><br>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <select class="form-control" name="daytype">
                                            <option disabled=""></option>
                                            <option>Normal Work</option>
                                            <option>Cover Day</option>
                                            <option>Poya Day</option>
                                            <option>Half Day</option>
                                            <option>Public Holiday</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <input name="date" value="" class="form-control" placeholder="Date" readonly>
                                    </div>
                                    <br><br><br>
                                </div>                                
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input name="wh" value="9" required="" class="form-control" placeholder="Working Hours">
                                    </div>
                                    <div class="col-md-6">
                                        <input name="ot" value="1" required="" class="form-control" placeholder="Overtime Period">
                                    </div>
                                </div><br>                                
                            </div>
                            <div class="form-group">
                                <div style="text-align: center; margin: 0 auto; padding: 5px 0;">
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButton" type="checkbox" value="1" checked  name="plant_no[]">
                                        <label for="toggleButton" data-on-text="1" data-off-text="1"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButton2" type="checkbox" value="2" checked name="plant_no[]">
                                        <label for="toggleButton2" data-on-text="2" data-off-text="2"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButton3" type="checkbox" value="3" checked name="plant_no[]">
                                        <label for="toggleButton3" data-on-text="3" data-off-text="3"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                </div>                               
                            </div>
                            <div class="form-group">
                                <div style="text-align: center;  margin: 0 auto;  padding: 5px 0;">
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButton4" type="checkbox" value="4" checked name="plant_no[]">
                                        <label for="toggleButton4" data-on-text="4" data-off-text="4"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButton5" type="checkbox" value="5" checked name="plant_no[]">
                                        <label for="toggleButton5" data-on-text="5" data-off-text="5"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButton6" type="checkbox" value="6" checked name="plant_no[]">
                                        <label for="toggleButton6" data-on-text="6" data-off-text="6"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                </div>                               
                            </div>
                            <div class="form-group">
                                <div style="text-align: center;  margin: 0 auto;  padding: 5px 0;">
                                    <div class="toggle-button toggle-button--aava">
                                        
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        <input id="toggleButton7" type="checkbox" value="7" checked name="plant_no[]">
                                        <label for="toggleButton7" data-on-text="7" data-off-text="7"></label>
                                        <div class="toggle-button__icon"></div>
                                    </div>
                                    <div class="toggle-button toggle-button--aava">
                                        
                                    </div>
                                </div>                               
                            </div><br><br>
                            <div class="form-group">
                                <div style="text-align: center;">
                                    <button type="reset" class="btn btn-circle btn-xl btn-danger" style="border: none;margin-right: 100px"><i class="glyphicon glyphicon-remove"></i></button>
                                    <button type="submit" class="btn btn-default btn-circle btn-xl" style="border: none; background-color: #3bc293; color: white;" ><i class="glyphicon glyphicon-ok"></i></button>
                                    <input type="hidden" name="switch" value="10">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <br>                            
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>