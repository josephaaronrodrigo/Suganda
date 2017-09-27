<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Plan Entry</title>
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

        <div class="container">


            <br>
            <div class="container">
                <div class="row">
                    <h1>Set the Calendar for the Month</h1><br/><br/>
                    <form name="hourPlan" action="../control/production.php" method="POST">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-4"><br/>
                                <select class="form-control" id="sel1" name="plant_no"><br/>
                                    <option value="" disabled="" selected="">Select Plant</option>
                                    <?php
                                    $i = 1;
                                    while ($i < 8) {
                                        ?>
                                        <option value='<?php echo $i; ?>'><?php echo $i; ?></option>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </select>     
                                </br>                   
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" placeholder="Select the Date" class="form-control" id="datepicker" name="date">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="working_h" id="pwd" placeholder="No. of Working Hours">
                                    <br/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="pwd" name="ot_h" placeholder="Allowed O/T Period">
                                </div>
                            </div>
                        </div><br/>
                        <div class="row pull-right">
                            <input type="hidden" name="switch" value="9">
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>
                    </form>
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