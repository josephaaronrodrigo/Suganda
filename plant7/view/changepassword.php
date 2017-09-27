<?php
session_start();
if (!isset($_SESSION['user_level'])) {
    header("location:index.php?err=1");
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Change Password</title>
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
        <script src="Scripts/jquery-1.12.4.js"></script>
        <script>
            function confirm() {
                $('#myModal').modal('hide');
                validation();

            }
            function validation() {
                var op = document.changePassword.oldpw.value;
                var np = document.changePassword.newpw.value;
                var rnp = document.changePassword.renewpw.value;
                if(op == ""){
                    document.changePassword.oldpw.focus();
                    document.getElementById("e_op").innerHTML = "Cannot be empty";
                    return false;
                }
                else if(np == ""){
                    document.changePassword.newpw.focus();
                    document.getElementById("e_np").innerHTML = "Cannot be empty";
                    return false;
                }
                else if(rnp == ""){
                    document.changePassword.renewpw.focus();
                    document.getElementById("e_rnp").innerHTML = "Cannot be empty";
                    return false;
                }
                
                else if (np !== rnp) {
                    document.changePassword.renewpw.focus();
                    document.getElementById("e_rnp").innerHTML = "Passwords don't match";
                    return false;
                }
                else {
                    document.getElementById("changePassword").submit();
                }

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
                    <li class=""><a href="../control/logout.php" style="font-size: 25px;"> LOGOUT&nbsp;&nbsp;&nbsp; <i class="glyphicon glyphicon-log-out" style="font-size: 20px;"></i></a></li>           
                </ul>
            </div>
        </nav>
        <br>
        <div class="container">
            <form class="form-horizontal" id="changePassword" name="changePassword" action="../control/general.php" method="POST">
                <fieldset>                    
                    <legend>Change Password</legend>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="uname">Username</label>  
                        <div class="col-md-4">
                            <input name="username" class="form-control input-md" required="" type="text" readonly="" value="<?php echo $username; ?>">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="oldpw">Current Password</label>  
                        <div class="col-md-4">
                            <input type="password" name="oldpw" class="form-control input-md" required="" type="text" placeholder=" ">
                            <span style="font-size: small; color: red" id="e_op"></span>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="newpw">New Password</label>  
                        <div class="col-md-4">
                            <input type="password" name="newpw" class="form-control input-md" required="" type="text" placeholder="">
                            <span style="font-size: small; color: red" id="e_np"></span>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="renewpw">Re-enter New Password</label>  
                        <div class="col-md-4">
                            <input type="password" name="renewpw" class="form-control input-md" required="" type="text" placeholder="">
                            <span style="font-size: small; color: red" id="e_rnp"></span>

                        </div>
                    </div>
                    <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for=""></label>
                        <div class="col-md-8">
                            <input type="hidden" name="switch" value="2">
                            <input type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" value="Submit Changes">
                            <a class="btn btn-danger" href="prodUpdate.php">Cancel</a>
                        </div>
                    </div>

                </fieldset>
            </form>



            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Confirm Changes</h4>
                        </div>
                        <div class="modal-body">
                            <p>Are you sure you want to change your password?</p>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-success" value="Submit" onclick="confirm()">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>

                        </div>
                    </div>

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