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
                $('#datepicker').datepicker({dateFormat: 'yy-mm-dd'}).val();
            });
        </script>
        <script>
            $(function () {
                $("#datepicker1").datepicker();
            });
        </script>
        <script>
            function calculate() {
                var order_qty = document.calculatePlan.order_qty.value;
                var unit_price = document.calculatePlan.unit_price.value;
                var rqd_mos = document.calculatePlan.rqd_mos.value;
                var workhrs = document.calculatePlan.workhrs.value;
                var sdate = document.calculatePlan.sdate.value;
                var edate = document.calculatePlan.edate.value;
                var days = document.calculatePlan.days.value;
                var buyer = document.calculatePlan.buyer.value;
                if (buyer === "omega") {
                    var smv = ((Number(unit_price) / 0.114)*0.8).toFixed(2);
                } else {
                    var smv = (Number(unit_price) / 0.114).toFixed(2);
                }
                var rqpd = Number(order_qty) / Number(days);
                var rmplpd = Math.round(Number(rqpd) * Number(smv));
                var rhplpd = Math.round(Number(rmplpd) / (55 * Number(workhrs)));
                var amplpd = Math.round(Number(rqd_mos) * 55 * Number(workhrs));
                var tmrfo = Math.round(Number(order_qty) * Number(smv));
                var rlfo = Math.round(Number(rhplpd) / Number(workhrs));
                var ppl = Math.round(Number(rqpd) / Number(rlfo));
                var pph = Math.round(Number(ppl) / Number(workhrs));
                var ppmo = Math.round(Number(ppl) / Number(rqd_mos));
                document.calculatePlan.smv.value = smv;
                document.calculatePlan.rmplpd.value = rmplpd;
                document.calculatePlan.rqpd.value = rqpd;
                document.calculatePlan.rhplpd.value = rhplpd;
                document.calculatePlan.amplpd.value = amplpd;
                document.calculatePlan.tmrfo.value = tmrfo;
                document.calculatePlan.rlfo.value = rlfo;
                document.calculatePlan.ppl.value = ppl;
                document.calculatePlan.pph.value = pph;
                document.calculatePlan.ppmo.value = ppmo;
            }
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
            <form class="form-horizontal" name="calculatePlan" action="../control/production.php" method="POST">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Plan Calculator</legend>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="style">Style Number</label>  
                        <div class="col-md-4">
                            <input name="style" class="form-control input-md" id="style" required type="text" placeholder="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="qty">Buyer</label>  
                        <div class="col-md-4">
                            <select name="buyer" onchange="calculate()" class="form-control">
                                <option value="" selected="" disabled=""></option>
                                <option value="omega">Omega</option>
                                <option value="other">Other</option>
                            </select>

                        </div>
                    </div>

                   <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="uprice">Buyer Price</label>  
                        <div class="col-md-4">
                            <input name="unit_price" onkeyup="calculate()" class="form-control input-md" id="uprice" required type="text" placeholder="">

                        </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="suprice">Suganda Price</label>  
                        <div class="col-md-4">
                            <input name="sunit_price" onkeyup="calculate()" class="form-control input-md" id="suprice" required type="text" placeholder="">

                        </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="mos">Required MOs</label>  
                        <div class="col-md-4">
                            <input name="rqd_mos" onkeyup="calculate()" class="form-control input-md" id="mos" required type="text" placeholder="">

                        </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="mos_cost">MO Cost</label>  
                        <div class="col-md-4">
                            <input name="rqd_mos_cost" onkeyup="calculate()" class="form-control input-md" id="mos_cost" required type="text" placeholder="">

                        </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="avg_be">Average Break Even Qty</label>  
                        <div class="col-md-4">
                            <input name="avg_be" onkeyup="calculate()" class="form-control input-md" id="avg_be" required type="text" placeholder="">

                        </div>
                    </div>
                    
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="qty">Order Quantity</label>  
                        <div class="col-md-4">
                            <input name="order_qty" onkeyup="calculate()" class="form-control input-md" id="qty" required type="text" placeholder="">

                        </div>
                    </div>

                    

                    

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="workhrs">Working Hours</label>  
                        <div class="col-md-4">
                            <input name="workhrs" onkeyup="calculate()" class="form-control input-md" placeholder="">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="sdate">Start Date</label>  
                        <div class="col-md-4">
                            <input type="text" onchange="calculate()" class="form-control" id="datepicker" name="sdate">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="deldate">Delivery Date</label>  
                        <div class="col-md-4">
                            <input type="text" onchange="calculate()" class="form-control" id="datepicker1" name="edate">

                        </div>
                    </div>


                    <!-- Calculations -->


                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="smv">Minutes per Garment</label>  
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="smv">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="days">Duration</label>  
                        <div class="col-md-4">
                            <input type="text" onkeyup="calculate()" class="form-control" id="datepicker1" name="days">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="rqpd">Average Required Qty per Day</label>  
                        <div class="col-md-4">
                            <input type="text" onkeyup="calculate()" class="form-control" id="datepicker1" name="rqpd">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="rmplpd">Required Minutes per Line per Day</label>  
                        <div class="col-md-4">
                            <input type="text" onkeyup="calculate()" class="form-control" id="datepicker1" name="rmplpd">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="rhplpd">Required Hours per Line per Day</label>  
                        <div class="col-md-4">
                            <input type="text" onkeyup="calculate()" class="form-control" id="datepicker1" name="rhplpd">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="amplpd">Available Minutes per Line per Day</label>  
                        <div class="col-md-4">
                            <input type="text" onkeyup="calculate()" class="form-control" id="datepicker1" name="amplpd">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="tmrfo">Total Minutes Required for Order</label>  
                        <div class="col-md-4">
                            <input type="text" onkeyup="calculate()" class="form-control" id="datepicker1" name="tmrfo">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="rlfo">Required Lines for Order</label>  
                        <div class="col-md-4">
                            <input type="text" onkeyup="calculate()" class="form-control" id="datepicker1" name="rlfo">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="ppl">Plan per Line</label>  
                        <div class="col-md-4">
                            <input type="text" onkeyup="calculate()" class="form-control" id="datepicker1" name="ppl">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="pph">Plan per Hour</label>  
                        <div class="col-md-4">
                            <input type="text" onkeyup="calculate()" class="form-control" id="datepicker1" name="pph">

                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="ppmo">Plan per M/O</label>  
                        <div class="col-md-4">
                            <input type="text" onkeyup="calculate()" class="form-control" id="datepicker1" name="ppmo">

                        </div>
                    </div>


                    <!-- Button -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="submit"></label>
                        <div class="col-md-4 pull-right">

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