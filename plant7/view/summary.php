<hmtl>
    <title>Employee View</title>

    <!-- BEGIN META -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
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
    <link href='form/font-face.css' rel='stylesheet' type='text/css'/>

    <link type="text/css" rel="stylesheet" href="form/bootstrap.css">


    <link type="text/css" rel="stylesheet" href="Stylesheets/font-awesome.css">

    <link type="text/css" rel="stylesheet" href="form/material-design-iconic-font.min.css">


    <link type="text/css" rel="stylesheet" href="form/jquery.dataTables.css">

    <link type="text/css" rel="stylesheet" href="form/dataTables.colVis.css">

    <link type="text/css" rel="stylesheet" href="Stylesheets/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="form/dataTables.tableTools.css">
    <link type="text/css" rel="stylesheet" href="form/printdt.css" media="print">


    <!-- END STYLESHEETS -->

    </head>

    <body class="menubar-hoverable header-fixed ">
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




        <!-- BEGIN DATATABLE 1 -->

        <div class="wrapper">
            <br><br><br>
            <h1 class="text-primary">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Production Summary - Plant 1</h1>

            <div class="card-body">
                <div class="col-lg-11 col-lg-offset-half">

                    <div class="table-responsive">
                        <table id="datatable1" class="table table-striped table-hover dataTable no-footer" role="grid" aria-describedby="datatable1_info">
                            <thead>
                                <tr>
                                                    <th>Style</th>
                                                    <th>Start Date</th>
                                                    <th>Plant</th>
                                                    <th>Order Qty</th>
                                                    <th>Planned Qty</th>
                                                    <th>Completed</th>
                                                    <th>Balance</th>
                                                    <th>Rate (USD)</th>
                                                    <th>Income (USD)</th>
                                </tr>
                            </thead>
                                   
                            <tbody>
                            	<?php
                            	include '../model/production.php';
                            	$obj = new Production();
                            	$result = $obj -> getAllStyleOrders();
                            	while($row = mysql_fetch_array($result)){
                            	?>
                            		<tr>
                            			<td><?php echo $style = $row['style'];?></td>
                            			<td><?php echo $start_date = $row['start_date'];?></td>
                            			<?php $end_date = $row['end_date'];?>
                            			<td><?php echo $row['plant_no'];?></td>
                            			<td><?php echo $row['order_qty'];?></td>
                            			<td><?php echo $row['planned_qty'];?></td>
						<?php
                            			$result1 = $obj -> getCompleted($style, $start_date, $end_date);
						if(mysql_num_rows($result1) == 1){
                            				$array1 = mysql_fetch_array($result1);
                            				$completed = $array1['completed'];
                            			}else{
                            				$completed = 0;
                            			}
                            			?>
                            			<td><?php echo $completed;?></td>
                            			<td><?php echo ($row['planned_qty'] - $completed);?></td>
                            			<td align='right'><?php echo $row['unit_price'];?></td>
                            			<td align='right'><?php echo number_format(($completed * $row['unit_price']),2,'.','');?></td>
                            		</tr>
                            		<?php
                            	}
                            	?>
                            </tbody>
                        </table>
                    </div><!--end .col -->
                </div><!--end .row -->
                <!-- END DATATABLE 1 -->

            </div>
        </div>

        <!-- BEGIN JAVASCRIPT -->

        <script src="form/jquery-1.11.2.min.js"></script>
        <script src="form/jquery-migrate-1.2.1.min.js"></script>
        <script src="form/bootstrap.min.js"></script>
        <script src="form/spin.min.js"></script>
        <script src="form/jquery.autosize.min.js"></script>
        <script src="form/9782537cea5b6dc42cb13bd7821cceca.js"></script>
        <script src="form/jquery.nanoscroller.min.js"></script>
        <script src="form/63d0445130d69b2868a8d28c93309746.js"></script>
        <script src="form/Demo.js"></script>
        <script src="form/DemoTableDynamic.js"></script>


        <!-- END JAVASCRIPT -->




    </body>
</html>