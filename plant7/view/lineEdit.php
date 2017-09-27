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
        <title>Line Wise M/O Update</title>
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

        <div class="container">
                                <form class="form-horizontal" role="form" action="../control/production.php" method="POST"  name="lineEdit">
            <div class="form-group">

                <div class="col-md-3 form-group has-feedback">

                    <input type="text" placeholder="Select the Date" class="form-control" id="datepicker" name="date" onchange="getLineInp(this.value)">
                    <input type="hidden" name="plant_no" value="<?php echo $plant_no;?>">
                    <br><br>
                </div>
                <script>
                            function getLineInp(str) {
                                if (str == "") {
                                    document.getElementById("lineUpd").innerHTML = "";
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
                                            document.getElementById("lineUpd").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    var p = document.lineEdit.plant_no.value;
                                    xmlhttp.open("GET", "Ajax/lineEd.php?d="+str+'&p='+p, true);
                                    xmlhttp.send();
                                }
                            }
                        </script>



            </div>
            <div class="btn-group btn-group-justified">
                <a href="" class="btn btn-success">Line Wise M/O Edit</a>
                
            </div>
            
            
            
            <!-- Start of Form -->

                <br><br><br>
                        <div id="lineUpd"></div>


               
                
               

                    </form>


                
        </div>
            </div>
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