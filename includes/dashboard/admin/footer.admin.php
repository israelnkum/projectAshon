
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="#">
                                <i class="ti-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, Powered by Emmanuel Ashon.
                </div>
            </div>
        </footer>

    </div>
</div>

        <!-- edit user Modal -->
        <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-danger" id="myModalLabel"><i class="fa fa-edit"></i> Edit User Information</h4>
                    </div>
                    <div class="modal-body">
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
                                    <form method="post" action="../validation/dashboard/admin/updateUserInfo.php" id="updateUserForm" name="updateUserForm">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="editUsername">Username</label>
                                                    <input type="text" class="form-control border-input" name="editUsername" id="editUsername" placeholder="Username" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="editEmail">Email</label>
                                                    <input type="email" class="form-control border-input" id="editEmail" name="editEmail" placeholder="Email" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="editFirstName">First Name</label>
                                                    <input type="text" class="form-control border-input" placeholder="First Name" id="editFirstName" name="editFirstName" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="editLastName">Last Name</label>
                                                    <input type="text" class="form-control border-input" placeholder="Last Name" id="editLastName" name="editLastName" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="editMobileNumber">Mobile</label>
                                                    <input type="text" class="form-control border-input" id="editMobileNumber" placeholder="Phone" name="editMobileNumber" value="" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="editPassword">Generate New Password</label>
                                                    <input type="text" class="form-control border-input" id="editPassword" name="editPassword" placeholder="New Password">
                                                </div>
                                            </div>

                                            <div class="col-md-1">
                                                <div class="form-group">
                                                    <label for="generate"><i class="fa fa-hand-o-down"></i></label>
                                                    <button type="button" class="btn btn-warning"><i class="fa fa-lock"></i></button>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="editUserType">User type</label>

                                                    <select id="editUserType" name="editUserType" class="form-control">
                                                        <option value="">Choose User Type</option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="User">User</option>
                                                    </select>

                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer editUserId">
                                            <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-close"></i> Close</button>
                                            <button  id="editUserBtn" type="submit" class="btn btn-primary"> <i class="fa fa-edit"></i> Confirm</button>
                                        </div>

                                    </form><!-- edit user form -->

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- edit User Modal -->

<!-- Modal -->
<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-danger" id="myModalLabel"><i class="fa fa-trash"></i> Delete User</h4>
            </div>
            <div class="modal-body">
                <h5 class="text-primary">Do You Really Want to Delete This User</h5>
           </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-close"></i> Close</button>
                <button  id="deleteUserBtn" type="button" class="btn btn-primary"> <i class="fa fa-trash"></i> Delete</button>
            </div>
        </div>
    </div>
</div><!-- Delete User Modal -->

        <!-- Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-danger" id="myModalLabel"><i class="fa fa-sign-out"></i> Logout</h4>
                    </div>
                    <div class="modal-body">
                        <h5 class="text-primary">Ready To Leave?</h5>
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="../validation/login/logout.inc.php">
                            <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-close"></i> Cancel</button>
                            <button  id="btn_logout" name="btn_logout" type="submit" class="btn btn-primary"> <i class="fa fa-sign-out"></i> Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- Delete User Modal -->


        <!-- New Student Modal -->
       <div class="modal fade" id="newStdModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title"> <i class="fa fa-graduation-cap "></i>   New Student</h4>
                </div>
                <form method="post" action="../validation/dashboard/students/addNewStudent.php" class="form-horizontal" id="addNewStudentForm">
                <div class="modal-body">

                           <div class="form-group">

                             <div class="col-sm-4">
                                  <label for="stdFirstName" >First Name</label>
                               <input type="text" class="form-control border-input" id="stdFirstName" name="stdFirstName" placeholder="First Name">
                             </div>

                             <div class="col-sm-4">
                                  <label for="stdLastName" >Last Name</label>
                               <input type="text" class="form-control border-input" id="stdLastName" name="stdLastName" placeholder="Last Name">
                             </div>


                             <div class="col-sm-4">
                                  <label for="otherName" >Other Name</label>
                               <input type="text" class="form-control border-input" id="otherName" name="otherName" placeholder="Other Name">
                             </div>
                           </div>
                           <div class="form-group">
                             <div class="col-sm-4">
                                   <label for="indexNumber" >Index Number</label>
                               <input type="text" class="form-control border-input" id="indexNumber" name="indexNumber" placeholder="Index Number">
                             </div>

                             <div class="col-sm-4">
                                  <label for="stdClass" >Class</label>
                                  <select name="stdClass" id="stdClass" class="form-control border-input">
                                    <option value="">Select</option>
                                    <option value="HND Level 100">HND Level 100</option>
                                    <option value="HND Level 200">HND Level 200</option>
                                    <option value="HND Level 300">HND Level 300</option>
                                    <option value="Diploma Level 100">Diploma Level 100</option>
                                    <option value="Diploma Level 200">Diploma Level 200</option>
                                    <option value="BTECH Level 100">BTECH Level 100</option>
                                    <option value="BTECH Level 200">BTECH Level 200</option>
                                  </select>
                             </div>

                             <div class="col-sm-4">
                                   <label for="amount" >Amount (GH₵)</label>
                               <input type="text" class="form-control border-input" id="amount" name="amount" placeholder="Amount">
                             </div>
                         </div>


                         <div class="form-group">
                              <div class="col-sm-4">
                                   <label for="stdLacost" >Lacost</label>
                                   <select name="stdLacost" id="stdLacost" class="form-control border-input">
                                     <option value="">Select</option>
                                     <option value="1">Recieved</option>
                                     <option value="0">Not Recieved</option>
                                   </select>
                              </div>

                              <div class="col-sm-4">
                                    <label for="stdPhone" >Phone Number</label>
                                <input type="text" class="form-control border-input" id="stdPhone" name="stdPhone" placeholder="Phone Number">
                              </div>
                         </div>


                    </div>
                     <div class="modal-footer">
                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       <button type="submit" name="btn_addStudent" class="btn btn-primary">Add Student</button>
                     </div>
                </form>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->

<!-- New Student Modal -->

<!-- Upload students Modal -->
<div class="modal fade" id="uploadStdModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog" role="document">
     <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"> <i class="fa fa-upload"></i> Upload Student(s)</h4>
        </div>
        <div class="modal-body">
          <h1>Upload</h1>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
     </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
 </div><!-- /.modal -->

<!-- Upload students Modal -->

        <!-- edit students Modal -->
        <div class="modal fade" id="editStdModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title text-danger" id="myModalLabel"><i class="fa fa-edit"></i> Edit User Information</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-10">
                                <div class="card" style="padding: 5px;">
                                    <form method="post" action="../validation/dashboard/students/updateStudentInfo.php" id="updateUserForm" name="updateUserForm">

                                        <div class="row">
                                            <div class="form-group">

                                                <div class="col-sm-4">
                                                    <label for="edit_stdFirstName" >First Name</label>
                                                    <input type="text" class="form-control border-input" id="edit_stdFirstName" name="edit_stdFirstName" placeholder="First Name">
                                                </div>

                                                <div class="col-sm-4">
                                                    <label for="edit_stdLastName" >Last Name</label>
                                                    <input type="text" class="form-control border-input" id="edit_stdLastName" name="edit_stdLastName" placeholder="Last Name">
                                                </div>


                                                <div class="col-sm-4">
                                                    <label for="edit_otherName" >Other Name</label>
                                                    <input type="text" class="form-control border-input" id="edit_otherName" name="edit_otherName" placeholder="Other Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <label for="edit_indexNumber" >Index Number</label>
                                                    <input type="text" class="form-control border-input" id="edit_indexNumber" name="edit_indexNumber" placeholder="Index Number">
                                                </div>

                                                <div class="col-sm-4">
                                                    <label for="edit_stdClass" >Class</label>
                                                    <select name="edit_stdClass" id="edit_stdClass" class="form-control border-input">
                                                        <option value="">Select</option>
                                                        <option value="HND Level 100">HND Level 100</option>
                                                        <option value="HND Level 200">HND Level 200</option>
                                                        <option value="HND Level 300">HND Level 300</option>
                                                        <option value="Diploma Level 100">Diploma Level 100</option>
                                                        <option value="Diploma Level 200">Diploma Level 200</option>
                                                        <option value="BTECH Level 100">BTECH Level 100</option>
                                                        <option value="BTECH Level 200">BTECH Level 200</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label for="edit_amount" >Amount (GH₵)</label>
                                                    <input type="text" class="form-control border-input" id="edit_amount" name="edit_amount" placeholder="Amount">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group">
                                                <div class="col-sm-4">
                                                    <label for="edit_stdLacost" >Lacost</label>
                                                    <select name="edit_stdLacost" id="edit_stdLacost" class="form-control border-input">
                                                        <option value="">Select</option>
                                                        <option value="1">Recieved</option>
                                                        <option value="0">Not Recieved</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label for="edit_stdPhone" >Phone Number</label>
                                                    <input type="text" class="form-control border-input" id="edit_stdPhone" name="edit_stdPhone" placeholder="Phone Number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer editStudentsId">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" name="btn_addStudent" class="btn btn-primary">Add Student</button>
                                        </div>

                                    </form><!-- edit user form -->

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- edit students Modal -->

</body>


<!--   Core JS Files   -->
<script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="../assets/js/bootstrap-checkbox-radio.js"></script>

<script src="../assets/dataTables/datatables.min.js"></script>

<script src="../assets/custom/js/users.js"></script>
<script src="../assets/custom/js/students.js"></script>


<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>


<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="../assets/js/paper-dashboard.js"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

            },{
                type: 'success',
                timer: 4000
            });

    	});
	</script>

</html>
