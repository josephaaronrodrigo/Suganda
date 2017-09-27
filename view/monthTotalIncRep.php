<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Monthly Total Income Report</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="Stylesheets/bootstrap.css">
        <link rel="stylesheet" href="Stylesheets/jquery-ui.css">


        <style>
            td {
                padding: 20px;
                text-align: center;
                vertical-align: middle;
            }
            .plant1 {
                background-color: #ffff00;
            }
            .plant2 {
                background-color: lightgray;
            }
            .plant3 {
                background-color: red;
            }
            .plant4 {
                background-color: #0c7cd5;
            }
            .plant5 {
                background-color: orange;
            }
            .plant6 {
                background-color: #884ea0;
            }
            .ttl {
                background-color: #009900;
                color: white;
            }
            .gttl {
                background-color: #009900;
                color: white;
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
    </head>

    <body>

        <!-- Black Header -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Suganda Apparel</a>
                </div>

            </div>
        </nav>

        <br>

        <div class="container-fluid">


            <br>


            <div class="row">
                <form class="form-horizontal" role="form" name="monthlyReport">




                    <!-- Production Input for Line 1 -->
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-2">
                            <b><span class="col-md-2 control-label">Select:</span></b>
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <select class="form-control" onchange="getMonth(this.value)" name="year">
                                        <option selected="" disabled="" value="">Year</option>
                                        <?php
                                        $y = date('Y');
                                        while ($y >= 2017) {
                                            ?>
                                            <option value="<?php echo $y; ?>"><?php echo $y; ?></option>
                                            <?php
                                            $y--;
                                        }
                                        ?>
                                    </select>
                                </div>
                                <script>
                                    function getMonth(str) {

                                        document.getElementById("report").innerHTML = "";
                                        if (str == "") {
                                            document.getElementById("monthList").innerHTML = "";
                                        } else {
                                            if (window.XMLHttpRequest) {
                                                // code for IE7+, Firefox, Chrome, Opera, Safari
                                                xmlhttp = new XMLHttpRequest();
                                            } else {
                                                // code for IE6, IE5
                                                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                            }
                                            xmlhttp.onreadystatechange = function () {
                                                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                                    document.getElementById("monthList").innerHTML = xmlhttp.responseText;
                                                }
                                            };
                                            xmlhttp.open("GET", "Ajax/monthList.php", true);
                                            xmlhttp.send();
                                        }
                                    }
                                </script>
                                <div id="monthList" class="col-md-3"></div>
                                <script>
                                    function getStyle(str1) {
                                        if (str1 == "") {
                                            document.getElementById("report").innerHTML = "";
                                        } else {
                                            document.getElementById("report").innerHTML = "Loading Please wait...";
                                            xmlhttp.onreadystatechange = function () {
                                                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                                    document.getElementById("report").innerHTML = xmlhttp.responseText;
                                                }
                                            };
                                            var y = document.monthlyReport.year.value;
                                            xmlhttp.open("GET", "Ajax/monthTotalIncRep.php?y=" + y + "&m=" + str1, true);
                                            xmlhttp.send();
                                        }
                                    }
                                </script>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-12" id="report">

                    </div>
                </form>
            </div>

        </div>
        <script>
            $(doTTLent).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
        <script src="Scripts/jquery.js"></script>
        <script src="Scripts/jquery-ui.js"></script>
        <script src="Scripts/bootstrap.js"></script>

    </body>
</html>
