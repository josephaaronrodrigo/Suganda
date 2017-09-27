<?php
session_start();
if (!isset($_SESSION['user_level'])) {
    header("location:index.php?err=1");
}
$plant_no = $_SESSION['plant_no'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update Production</title>
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
        <link rel="stylesheet" href="/resources/demos/style.css">
        <style>
            .error-message{
                color: red;
                font-size: small;
            }
        </style>
        
        <script src="Scripts/jquery-1.12.4.js"></script>
        <script>
            $(function () {
                $("#datepicker").datepicker();
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
            <div class="btn-group btn-group-justified">
                <a href="prodUpdate.php" class="btn btn-warning active">Production</a>
                <a href="packingUpdate.php" class="btn btn-info">Packing</a>
            </div>
            <br>
            <br>

            <!-- Start of Form -->
            <form class="form-horizontal" role="form" name="updateProd" action="../control/production.php" method="POST" onsubmit="return(validation())">
                <div class="col-md-10 col-md-offset-1">
                    <div class="form-group">
                        <div class="col-md-3 form-group has-feedback">

                            <input type="text" placeholder="Select the Date" required="" class="form-control" id="datepicker" onchange="getTime(this.value)" name="date">
                            <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                            <input type="hidden" name="plant_no" value="<?php echo $plant_no; ?>">
                        </div>
                        <script>
                            function getTime(str) {
                                                                document.getElementById("inputs").innerHTML = "";
                                if (str == "") {
                                    document.getElementById("times").innerHTML = "";
                                    return;
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
                                            document.getElementById("times").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    xmlhttp.open("GET", "Ajax/times.php", true);
                                    xmlhttp.send();
                                }
                            }
                        </script>
                        <div id="times"></div>
                        <script>
                            function getInput(str1) {
                                if (str1 == "") {
                                    document.getElementById("inputs").innerHTML = "";
                                    return;
                                } else {
                                    xmlhttp.onreadystatechange = function () {
                                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                            document.getElementById("inputs").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    var date = document.updateProd.date.value;
                                    var p = document.updateProd.plant_no.value;
                                    xmlhttp.open("GET", "Ajax/inputs.php?session=" + str1 + "&d=" + date + "&p=" + p, true);
                                    xmlhttp.send();


                                }
                            }
                        </script>
                    </div>
                    <br><br>
                </div>
                <div id="inputs"></div>


            </form>
        </div>
        <div id="test"></div>
        <script>
            $("#datepicker").datepicker({
                inline: true
            });

        </script>
        <script src="Scripts/jquery.js"></script>
        <script src="Scripts/jquery-ui.js"></script>
        <script src="Scripts/bootstrap.js"></script>
    </body>
</html>