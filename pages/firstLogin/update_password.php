<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/itsu.jpeg">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/itsu.jpeg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>iTSU Department</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../../assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../assets/custom/css/login.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="../../assets/css/themify-icons.css" rel="stylesheet">
</head>
<body>

<section class="cover" style="padding-top: 75px;">
    <div class="cover-caption">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 text-center" style="display: flex;  align-items: center;">
                    <?php
                    echo $_SESSION['u_name'];
                    echo $_SESSION['u_id'];
                    ?>
                    <div>
                        <h1 >ITSU DUES MANAGEMENT</h1>
                        <small class="text-danger" style="font-size: 15px;">You must Set a new Password before you Continue</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="panel panel-primary" style="background: rgba(0,0,0,0.2)">
                        <div class="panel-heading text-center">
                            <h2>Update Password</h2>
                        </div>
                        <form method="post" action="../../validation/login/firstLoginUpdate.php" id="updatePassowrdForm" name="updatePassowrdForm"  style="padding: 5px;">
                            <div class="row ">
                                <div class="col-md-8 col-sm-push-2">
                                    <div class="form-group">
                                        <label for="new_password">New Password</label>
                                        <input type="password" class="form-control" id="new_password" name="new_password" required placeholder="New Password" >

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-push-2">
                                    <div class="form-group">
                                        <label for="confirm_password">Password</label>
                                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-8 col-sm-push-2">
                                    <label>Password Strength</label>
                                    <progress value="0" max="100"   id="strength" style="width: 180px; height: 5px; ">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="btn_FirstUpdate" id="btn_FirstUpdate" class="btn btn-primary">Update</button>
                                <div>
                                    <a style="color: red" href="#">Forgot Password</a>
                                </div>
                            </div>


                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--   Core JS Files   -->
<script src="../../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="../../assets/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="../../assets/js/chartist.min.js"></script>

<script src="../../assets/custom/js/password_update.js"></script>
<!--  Notifications Plugin    -->
<script src="../../assets/js/bootstrap-notify.js"></script>
<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="../../assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="../../assets/js/demo.js"></script>

</body>
</html>
