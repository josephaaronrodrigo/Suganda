<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Monthly Report</title>
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
        <!-- Black Header -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="font-size: 25px;">Suganda Apparel</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="prodReport.php" style="font-size: 20px;"> BACK&nbsp;&nbsp;&nbsp; <i class="glyphicon glyphicon-arrow-left" style="font-size: 15px;"></i></a></li>
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
                                	while($y >=2017){
                                	?>
                                		<option value="<?php echo $y;?>"><?php echo $y;?></option>
                                	<?php
                                	$y--;
                                	}
                                	?>
                                </select>
                            </div>
                            <script>
                            function getMonth(str){
				document.getElementById("styleList").innerHTML = "";
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
                            function getStyle(str1){
                            	document.getElementById("report").innerHTML = "";
                            	if (str1 == "") {
	                            document.getElementById("styleList").innerHTML = "";
	                        } else {
	                            xmlhttp.onreadystatechange = function () {
	                                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	                                    document.getElementById("styleList").innerHTML = xmlhttp.responseText;
	                                }
	                            };
	                            var y = document.monthlyReport.year.value;
	                            xmlhttp.open("GET", "Ajax/monthStyleList.php?y="+y+"&m="+str1, true);
	                            xmlhttp.send();
	                       }  
                            }
                            </script>
                            <div id="styleList" class="col-md-3"></div>
				<script>
				function getReport(str2){
					if (str2 == "") {
		                            document.getElementById("report").innerHTML = "";
		                        } else {
		                            xmlhttp.onreadystatechange = function () {
		                                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
		                                    document.getElementById("report").innerHTML = xmlhttp.responseText;
		                                }
		                            };
		                            var y = document.monthlyReport.year.value;
		                            var m = document.monthlyReport.month.value;
		                            xmlhttp.open("GET", "Ajax/monthReport.php?y="+y+"&m="+m+"&s="+str2, true);
		                            xmlhttp.send();
		                       }  
					}
				</script>
                        </div>
                    </div>
                </div>

                <div class="col-md-12" id="report">

                    

                </div>
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