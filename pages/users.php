<?php
include "../includes/dashboard/admin/header.admin.php";
?>

<div class="wrapper">

    <?php
    include "../includes/dashboard/admin/sidebar.admin.php";
    ?>
    <div class="main-panel">
        <?php
        include "../includes/dashboard/admin/navs.admin.php";
        ?>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-7">
                        <div class="card" >
                            <div class="header cardHeader">
                                <h4 class="title">All Users(s)</h4><!-- page title -->
                            </div>

                            <hr>

                            <div class="content">
                                <button type="button" class="collapsed btn btn-success pull-right" data-toggle="collapse" data-parent="#accordion" href="#allUsers" aria-expanded="false" aria-controls="allUsers" >
                                    <i class="fa fa-eye"></i>
                                    All Users
                                </button>

                                <button type="button" data-toggle="collapse" data-parent="#accordion" href="#newUser" aria-expanded="true" aria-controls="newUser" class="btn btn-primary pull-right" id="addNewUserButton">
                                    <i class="glyphicon glyphicon-plus"></i>
                                    New User
                                </button>

                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <!-- Edit User Informaiton -->
                                    <div class="panel">
                                        <div id="editUser" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="panel-body">
                                                <h3 class="text-danger">Edit User Information</h3>
                                                <hr>

                                            </div><!-- update user Panel Body -->
                                        </div><!-- update user Panel -->
                                    </div><!-- Panel -->


                                    <!-- all Users -->
                                    <div class="panel">
                                        <div id="allUsers" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">

                                                <div class="table-responsive">
                                                    <table class="table" id="usersTable" cellspacing="0" width="100%">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Username</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>User type</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tfoot>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Username</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>User type</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </tfoot>
                                                    </table>
                                                </div><!-- table Responsive -->
                                            </div><!-- Panel Body -->
                                        </div> <!-- All Users Panel -->
                                    </div><!-- Panel -->


                                    <div class="panel">
                                        <div id="newUser" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-5">

                                                        <div class="card card-user">
                                                            <div class="image">
                                                                <img src="../assets/img/background.jpg" alt="..."/>
                                                            </div>
                                                            <div class="content">
                                                                <div class="author">
                                                                    <img class="avatar border-white" src="../assets/uploads/profiledefault.png" alt="..."/>
                                                                </div>
                                                                <div style="padding: 20px;">
                                                                    <input type="file">
                                                                </div>
                                                                <div class="col-md-12 text-center">
                                                                    <button class="btn btn-default">Upload</button>
                                                                    <button class="btn btn-primary">Remove</button>
                                                                </div>

                                                            </div>
                                                            <hr>
                                                            <div class="text-center">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <small style="padding: 10px;" class="text-danger">Only jpg files Allowed</small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-8 col-md-7">
                                                        <div class="card" style="padding: 5px;">
                                                            <form method="post" action="../validation/dashboard/admin/addNewUser.php" id="addNewUserForm" name="addNewUserForm">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="newUsername">Username</label>
                                                                            <input type="text" class="form-control border-input" name="newUsername" id="newUsername" placeholder="Username" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="userEmail">Email</label>
                                                                            <input type="email" class="form-control border-input" id="userEmail" name="userEmail" placeholder="Email" >
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="firstName">First Name</label>
                                                                            <input type="text" class="form-control border-input" placeholder="First Name" id="firstName" name="firstName" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="lastName">Last Name</label>
                                                                            <input type="text" class="form-control border-input" placeholder="Last Name" id="lastName" name="lastName" >
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="mobileNumber">Mobile</label>
                                                                            <input type="text" class="form-control border-input" id="mobileNumber" placeholder="Phone" name="mobileNumber" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="securityQuestion">Security question</label>

                                                                            <select id="securityQuestion" name="securityQuestion" class="form-control">
                                                                                <option value="">Choose a Security Question</option>
                                                                                <option value="What is your Mothers Maiden Name">What is your Mothers Maiden Name</option>
                                                                                <option value="Who is your Best Freind">Who is your Best Freind</option>
                                                                                <option value="What is the last 4 Digit of your Phone">What is the last 4 Digit of your Phone</option>
                                                                                <option value="Who is The name of your best Teacher">Who is The name of your best Teacher</option>
                                                                            </select>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="userType">User type</label>

                                                                            <select id="userType" name="userType" class="form-control">
                                                                                <option value="">Choose User Type</option>
                                                                                <option value="Admin">Admin</option>
                                                                                <option value="User">User</option>
                                                                            </select>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="answer">Answer</label>
                                                                            <input type="text" class="form-control border-input" id="answer" name="answer" placeholder="Answer to your selected question">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="text-right">
                                                                    <button type="submit" class="btn btn-info btn-fill btn-wd"> <i class="glyphicon glyphicon-plus"></i> Add User</button>
                                                                </div>
                                                            </form>

                                                            <div class="messages"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php
        include "../includes/dashboard/admin/footer.admin.php";
        ?>
