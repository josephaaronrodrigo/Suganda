<?php
session_start();
if (!isset($_SESSION['user_level']) || $_SESSION['user_level'] != 'super admin' && $_SESSION['user_level']!= 'admin' && $_SESSION['user_level']!= 'plant_man') {
    header("location:index.php?err=1");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Main Menu</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
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
        <link rel="stylesheet" href="Stylesheets/tiles.css">
        <link rel="stylesheet" href="Stylesheets/bootstrap.css">
        <link rel="stylesheet" href="Stylesheets/jquery-ui.css">
        <link rel="stylesheet" href="Stylesheets/font-awesome.css">


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
                          <li class=""><a href="../control/logout.php" style="font-size: 25px;"> LOGOUT&nbsp;&nbsp;&nbsp; <i class="glyphicon glyphicon-log-out" style="font-size: 20px;"></i></a></li>
                          
                        </ul>

            </div>
        </nav>
        <br>

        <div class="container">
            <br>
            <h2>Select an option from the menu below.</h2>
            <br><br>
            <div class="row col-sm-12">
                <div class="col-sm-5">
                    <a href="prodReport.php">
                        <div class="tile green">
                            <h3 class="title">Production Report</h3>
                            <p><i class="fa fa-user pull-right" style="font-size:30px; color: white;"></i></p>
                        </div>
                </div></a>

                <div class="col-sm-3">
                    <a href="addstyle.php">
                        <div class="tile orange">
                            <h3 class="title">Add Style</h3>
                            <p><i class="glyphicon glyphicon-th-list pull-right" style="font-size:30px; color: white;"></i></p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4">
                    <a href="prodUpdate.php">
                        <div class="tile blue">
                            <h3 class="title">Update Production</h3>
                            <p><i class="glyphicon glyphicon-th-list pull-right" style="font-size:30px; color: white;"></i></p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Line 2 -->
            <div class="row col-sm-12 ">
                <div class="col-sm-3">
                    <a href="planFormat.php">
                        <div class="tile red">
                            <h3 class="title">Update Plan</h3>
                            <p><i class="glyphicon glyphicon-th-list pull-right" style="font-size:30px; color: white;"></i></p>
                        </div>
                    </a>
                </div>


                <div class="col-sm-4">
                    <a href="monthTotalIncRep.php">
                        <div class="tile purple">
                            <h3 class="title">Monthly Income Report</h3>
                            <p><i class="glyphicon glyphicon-th-list pull-right" style="font-size:30px; color: white;"></i></p>
                        </div>
                    </a>
                </div>

                <div class="col-sm-5">
                    <a href="lineReport.php">
                        <div class="tile aqua">
                            <h3 class="title">Line Wise M/O Report</h3>
                            <p><i class="glyphicon glyphicon-paperclip pull-right" style="font-size:30px; color: white;"></i></p>
                        </div>
                </div></a>

            </div>

            <!-- Line 3 -->
            <div class="row col-sm-12 ">


                <div class="col-sm-5">
                    <a href="monthReport.php">
                        <div class="tile blue">
                            <h3 class="title">Monthly Report</h3>
                            <p><i class="glyphicon glyphicon-paperclip pull-right" style="font-size:30px; color: white;"></i></p>
                        </div></a>
                </div>

                <div class="col-sm-4">
                    <a href="attReport.php">
                        <div class="tile green">
                            <h3 class="title">Attendance Report</h3>
                            <p><i class="glyphicon glyphicon-th-list pull-right" style="font-size:30px; color: white;"></i></p>
                        </div>
                    </a>
                </div>
                
                <div class="col-sm-3">
                    <a href="onroll.php">
                        <div class="tile purple">
                            <h3 class="title">Update Attendance</h3>
                            <p><i class="glyphicon glyphicon-th-list pull-right" style="font-size:30px; color: white;"></i></p>
                        </div>
                    </a>
                </div>
		<!-- Line 3 END -->
		</div>
		<!-- Line 4 -->
            <div class="row col-sm-12 ">
		
		<div class="col-sm-3">
                    <a href="monthTotalReport.php">
                        <div class="tile orange">
                            <h3 class="title">Monthly Prod. Report</h3>
                            <p><i class="glyphicon glyphicon-th-list pull-right" style="font-size:30px; color: white;"></i></p>
                        </div>
                    </a>
                </div>

                <div class="col-sm-5">
                    <a href="packingReport.php">
                        <div class="tile aqua">
                            <h3 class="title">Packing Report </h3>
                            <p><i class="glyphicon glyphicon-paperclip pull-right" style="font-size:30px; color: white;"></i></p>
                        </div></a>
                </div>

                <div class="col-sm-4">
                    <a href="hourPlanEntry.php">
                        <div class="tile red">
                            <h3 class="title">Work Schedule</h3>
                            <p><i class="glyphicon glyphicon-th-list pull-right" style="font-size:30px; color: white;"></i></p>
                        </div>
                    </a>
                </div>
                
                
		<!-- Line 4 END -->

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