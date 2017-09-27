<?php
session_start();
if (!isset($_SESSION['user_level'])) {
    header("location:index.php?err=1");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Style</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="57x57" href="../favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="../favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="../favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="../favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="../favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="../favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="../favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
        <link rel="manifest" href="../favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="../favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="Stylesheets/bootstrap.css">
        <link rel="stylesheet" href="Stylesheets/jquery-ui.css">


        <style>
            td {
                padding: 20px;
            }
            .note {
                position: relative;
            }
            .note:after { /* Magic Happens Here!!! */
                content: "";
                position: absolute;
                top: 0;
                right: 0;
                width: 0; 
                height: 0; 
                display: block;
                border-left: 10px solid transparent;
                border-bottom: 10px solid transparent;

                border-top: 10px solid #f00;
            } /* </magic> */
        </style>
        <script src="Scripts/jquery-1.12.4.js"></script>
        <script>
            $(function () {
                $("#datepicker").datepicker({dateFormat: 'yy-mm-dd'}).val();
            });
        </script>
        <script>
            $(function () {
                $("#datepicker1").datepicker({dateFormat: 'yy-mm-dd'}).val();
            });
        </script>
    </head>
    <body>
        <!-- Black Header -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="font-size: 25px;">Suganda Apparel</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="menu.php" style="font-size: 20px;"> BACK&nbsp;&nbsp;&nbsp; <i class="glyphicon glyphicon-arrow-left" style="font-size: 15px;"></i></a></li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li class=""><a href="changepassword.php" style="font-size: 20px;"> SETTINGS&nbsp;&nbsp;&nbsp; <i class="glyphicon glyphicon-cog" style="font-size: 15px;"></i></a></li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li class=""><a href="../control/logout.php" style="font-size: 20px;"> LOGOUT&nbsp;&nbsp;&nbsp; <i class="glyphicon glyphicon-log-out" style="font-size: 15px;"></i></a></li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul>

            </div>
        </nav>
        <br>
        <br>
        <!-- Orange and Blue Buttons -->
        <div class="container">
            <form class="form-horizontal" name="allocateStyles" action="../control/production.php" method="POST">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Add New Style</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="style">Style</label>  
                        <div class="col-md-4">
                            <input name="style" class="form-control input-md" id="style" required type="text" placeholder="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="plant">Plant</label>  
                        <div class="col-md-4">
                            <select name="plant_no" required class="form-control">
                                <?php
                                include '../model/general.php';

                                $obj = new General();
                                $result = $obj->getData(style_allocation, plant_no);
                                $array = mysql_fetch_array($result);

                                $enumList = explode(",", str_replace("'", "", substr($array['COLUMN_TYPE'], 5, (strlen($array['COLUMN_TYPE']) - 6))));
                                foreach ($enumList as $value) {
                                    echo "<option value=\"$value\">$value</option>";
                                }
                                ?>
                            </select>

                        </div>
                    </div>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="status">Status</label>
                        <div class="col-md-4">
                            <select name="status" class="form-control" id="status" required="">
                                <?php
                                $result1 = $obj->getData(style_allocation, status);
                                $array1 = mysql_fetch_array($result1);

                                $enumList1 = explode(",", str_replace("'", "", substr($array1['COLUMN_TYPE'], 5, (strlen($array1['COLUMN_TYPE']) - 6))));
                                foreach ($enumList1 as $value) {
                                    echo "<option value=\"$value\">$value</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="qty">Order Quantity</label>  
                        <div class="col-md-4">
                            <input name="order_qty" class="form-control input-md" id="qty" required type="text" placeholder="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="planqty">Planned Quantity</label>  
                        <div class="col-md-4">
                            <input name="planned_qty" class="form-control input-md" id="planqty" required type="text" placeholder="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="sdate">Start Date</label>  
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="datepicker" name="start_date" onchange="calcRDays()">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="edate">End Date</label>  
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="datepicker1" name="end_date" onchange="calcRDays()">

                        </div>
                    </div>
                    <script>
                        function calcRDays() {
                            var s = document.allocateStyles.start_date.value;
                            var e = document.allocateStyles.end_date.value;
                            var start = new Date(s);
                            var end = new Date(e);
                            var diff = (end.getTime() - start.getTime()) / (24 * 60 * 60 * 1000) + 1;
                            if (s !== "" && e !== "") {
                                document.allocateStyles.running_day.value = diff;
                            }
                        }
                    </script>
                    
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="running_day">Running Days</label>  
                        <div class="col-md-4">
                            <input name="running_day" class="form-control input-md" id="uprice" required type="text" readonly="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="uprice">Unit Price</label>  
                        <div class="col-md-4">
                            <input name="unit_price" class="form-control input-md" id="uprice" required type="text" placeholder="" onkeyup="calcSMV()">

                        </div>
                    </div>

                    <script>
                        function calcSMV() {
                            var up = document.allocateStyles.unit_price.value;
                            var smv = up / 0.114;
                            document.allocateStyles.smv.value = smv;
                        }
                    </script>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="smv">SMV</label>  
                        <div class="col-md-4">
                            <input name="smv" class="form-control input-md" id="smv" required type="text" placeholder="" readonly>

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="helpers">Required Helpers</label>  
                        <div class="col-md-4">
                            <input name="rqd_helpers" class="form-control input-md" id="helpers" required type="text" placeholder="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="mos">Required MOs</label>  
                        <div class="col-md-4">
                            <input name="rqd_mos" class="form-control input-md" id="mos" required type="text" placeholder="">

                        </div>
                    </div>
                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-4 pull-right">
                            <input type="hidden" name="switch" value="2">
                            <input type="submit" name="submit" class="btn btn-info" value="Submit"></button>
                        </div>
                    </div>

                </fieldset>
            </form>

        </div>
        <script>
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
        <script src="Scripts/jquery.js"></script>
        <script src="Scripts/jquery-ui.js"></script>
        <script src="Scripts/bootstrap.js"></script>

    </body>
</html>