<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Plan Report</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="Stylesheets/bootstrap.css">
        <link rel="stylesheet" href="Stylesheets/jquery-ui.css">


        <style>
            #style{

            }

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


                <div class="col-md-12">
                    <form class="form-horizontal" role="form" name="planInput">




                        <!-- Production Input for Line 1 -->
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <b><span class="col-md-2 control-label">Select:</span></b>
                                <div class="form-group row">
                                    <div class="col-md-3">
                                        <select name="plant_no" class="form-control" onchange="getYear(this.value)">
                                            <option selected="" disabled="" value="">Plant No</option>
                                            <?php
                                            $i = 1;
                                            while ($i <= 7) {
                                                ?>
                                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                                <?php
                                                $i++;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <script>
                                        function getYear(st) {
                                            document.getElementById("input").innerHTML = "";
                                            document.getElementById("yearlist").innerHTML = "";
                                            if (st == "") {
                                                document.getElementById("yearlist").innerHTML = "";
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
                                                        document.getElementById("yearlist").innerHTML = xmlhttp.responseText;
                                                    }
                                                };
                                                xmlhttp.open("GET", "Ajax/yearList.php", true);
                                                xmlhttp.send();
                                            }
                                        }
                                    </script>
                                    <div class="col-md-3" id="yearlist"></div>
                                    <script>
                                        function getMonth(str) {
                                            document.getElementById("input").innerHTML = "";
                                            if (str == "") {
                                                document.getElementById("monthList").innerHTML = "";
                                            } else {
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
                                </div>
                            </div>
                            <script>
                                function getStyle(str1) {
                                    if (str1 == "") {
                                        document.getElementById("input").innerHTML = "";
                                    } else {
                                        xmlhttp.onreadystatechange = function () {
                                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                                document.getElementById("input").innerHTML = xmlhttp.responseText;
                                            }
                                        };
                                        var y = document.planInput.year.value;
                                        var m = document.planInput.month.value;
                                        var p = document.planInput.plant_no.value;
                                        xmlhttp.open("GET", "Ajax/planDisplay.php?y=" + y + "&m=" + m + "&p=" + p, true);
                                        xmlhttp.send();
                                    }
                                }
                            </script>

                        </div>


                        <div class="table-responsive" style="max-width: none;" id="input"></div>
                        
                    </form>
                </div>
                <div class="clearfix"></div>

            </div>

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