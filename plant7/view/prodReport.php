<?php
session_start();
if (!isset($_SESSION['user_level'])) {
    header("location:index.php?err=1");
}
$s = $_SESSION['user_level'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Production Report</title>

        <meta charset="utf-8">
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
            .table-responsive .table {

                -webkit-overflow-scrolling: touch !important;
            }
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
        <div class="container-fluid">
            <form class="form-horizontal" role="form" name="viewReport">
                <div class="form-group">
                    <div class="col-md-3 form-group has-feedback">
                        <?php
                        if ($s == "plant_man") {
                            ?>
                            <input type="hidden" name="plant_no" value="<?php echo $_SESSION['plant_no']; ?>">
                            <?php
                        } else {
                            ?>
                            <input type="hidden" name="plant_no" value="<?php echo $plant_no = 7; ?>">
                            <?php
                        }
                        ?>
                        <input type="hidden" name="user_level" value="<?php echo $s; ?>">
                        <input type="text" placeholder="Select the Date" class="form-control" id="datepicker" name="date" onchange="getData(this.value)">
                        <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                    </div>
                </div>
                <script>
                    function getData(str) {
                        var p = document.viewReport.plant_no.value;
                        var s = document.viewReport.user_level.value;
                        var d = str;
                        if (d == "") {
                            document.getElementById("details").innerHTML = " ";
                        } else {
                            document.getElementById("details").innerHTML = "<div class='col-md-12' align='center'><img src='Images/3pBvnYC.gif' style='align: center' height='150px' width='330px' alt='Loading...Please Wait...'></div>";
                            if (window.XMLHttpRequest) {
                                // code for IE7+, Firefox, Chrome, Opera, Safari
                                xmlhttp = new XMLHttpRequest();
                            } else {
                                // code for IE6, IE5
                                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                            }
                            xmlhttp.onreadystatechange = function () {
                                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                    document.getElementById("details").innerHTML = xmlhttp.responseText;
                                }
                            };
                            xmlhttp.open("GET", "Ajax/report.php?d=" + d + "&p=" + p + "&s=" + s, true);
                            xmlhttp.send();
                        }
                    }
                </script>
                <br><br>
            </form>
            <div class="btn-group btn-group-justified">
                <?php
                if ($s == "plant_man") {
                    ?>
                    <a href="#" class="btn btn-brown active" <?php if($_SESSION['plant_no'] != 7){ echo "disabled=\"\"";}?> onclick="getPlantData(7)">Plant 7</a>
                    
                    <?php
                } else {
                    ?>
                    <a href="#" class="btn btn-brown active" onclick="getPlantData(7)">Plant 7</a>
                    <?php
                }
                ?>
            </div>
            <script>
                function getPlantData(str1) {
                    var p = str1;
                    var s = document.viewReport.user_level.value;
                    var d = document.viewReport.date.value;
                    document.viewReport.plant_no.value = str1;
                    if (d == "") {
                        document.getElementById("details").innerHTML = "Please Select the Date";
                    } else {
                        document.getElementById("details").innerHTML = "<div class='col-md-12' align='center'><img src='Images/3pBvnYC.gif' style='align: center' height='150px' width='330px' alt='Loading...Please Wait...'></div>";
                        xmlhttp.onreadystatechange = function () {
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                document.getElementById("details").innerHTML = xmlhttp.responseText;
                            }
                        };
                        xmlhttp.open("GET", "Ajax/report.php?d=" + d + "&p=" + p + "&s=" + s, true);
                        xmlhttp.send();
                    }
                }

                function next() {
                    var p = document.viewReport.plant_no.value;
                    var next = Number(p) + Number(1);
                    if (next !== 7) {
                        getPlantData(next);
                    }
                }

                function prev() {
                    var p = document.viewReport.plant_no.value;
                    var prev = Number(p) - Number(1);
                    if (prev !== 0) {
                        getPlantData(prev);
                    }
                }

                function getAlert(str) {
                    alert(str);
                }
            </script>
            <br>
            <div id="details"></div>
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