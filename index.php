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
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/custom/css/login.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>
<body>

<section class="cover" style="padding-top: 75px;">
    <div class="cover-caption">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 text-center" style="display: flex;  align-items: center;">
                    <h1 >ITSU DUES MANAGEMENT</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading text-center">
                            <h3>Login</h3>
                        </div>
                        <form method="post" action="validation/login/login.inc.php" class="form-inline">
                            <div class="panel-body" style="max-height: 300px; background: rgba(0,0,0,0.1)">

                                <div class="form-group " style="padding: 5px;">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" id="username" name="username" required placeholder="Username">
                                </div>
                                <div class="form-group" style="padding: 5px;">
                                    <label for="user_password">Password:</label>
                                    <input type="password" class="form-control" id="user_password" name="user_password" required placeholder="Password">
                                </div>


                            </div>
                            <div class="panel-footer text-center" style="background: rgba(0,0,0,0.1)">
                                <button type="submit" name="btn_login" class="btn btn-primary">Login</button>
                                <div>
                                    <a href="#">Forgot Password</a>
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
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio.js"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</body>
</html>
