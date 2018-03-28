

var usersTable;
$(document).ready(function() {

    usersTable= $("#usersTable").DataTable({
        "ajax": "../validation/dashboard/admin/retrieveAllUsers.php",
        "order":[]
    });

    $("#addNewUserButton").on('click',function () {
        //reset the form
        $("#addNewUserForm")[0].reset();

        // remove error
        $(".form-group").removeClass('has-error').removeClass('has-success');
        $('.text-danger').remove();

        $(".messages").html("");
        //submit form
        $("#addNewUserForm").unbind('submit').bind('submit',function () {
            $('.text-danger').remove();
            var form = $(this);
            //validation
            var newUsername = $("#newUsername").val();
            var userEmail = $("#userEmail").val();
            var firstName = $("#firstName").val();
            var lastName = $("#lastName").val();
            var mobileNumber = $("#mobileNumber").val();
            var securityQuestion = $("#securityQuestion").val();
            var userType = $("#userType").val();
            var answer = $("#answer").val();

            if (newUsername === ""){
                $("#newUsername").closest('.form-group').addClass('has-error');
                $("#newUsername").after('<p class="text-danger">Username is required</p>');
            }else{
                $("#newUsername").closest('.form-group').removeClass('has-error');
                $("#newUsername").closest('.form-group').addClass('has-success');

            }
            if (userEmail === ""){
                $("#userEmail").closest('.form-group').addClass('has-error');
                $("#userEmail").after('<p class="text-danger">Email is required</p>');
            }else{
                $("#userEmail").closest('.form-group').removeClass('has-error');
                $("#userEmail").closest('.form-group').addClass('has-success');


            }
            if (firstName === ""){
                $("#firstName").closest('.form-group').addClass('has-error');
                $("#firstName").after('<p class="text-danger">First Name is required</p>');
            }else{
                $("#firstName").closest('.form-group').removeClass('has-error');
                $("#firstName").closest('.form-group').addClass('has-success');

            }
            if (lastName === ""){
                $("#lastName").closest('.form-group').addClass('has-error');
                $("#lastName").after('<p class="text-danger">Last Name is required</p>');
            }else{
                $("#lastName").closest('.form-group').removeClass('has-error');
                $("#lastName").closest('.form-group').addClass('has-success');

            }
            if (mobileNumber === ""){
                $("#mobileNumber").closest('.form-group').addClass('has-error');
                $("#mobileNumber").after('<p class="text-danger">Phone number is required</p>');
            }else{
                $("#mobileNumber").closest('.form-group').removeClass('has-error');
                $("#mobileNumber").closest('.form-group').addClass('has-success');
            }

            if (securityQuestion === ""){
                $("#securityQuestion").closest('.form-group').addClass('has-error');
                $("#securityQuestion").after('<p class="text-danger">Security Question is required</p>');
            }else{
                $("#securityQuestion").closest('.form-group').removeClass('has-error');
                $("#securityQuestion").closest('.form-group').addClass('has-success');

            }
            if (userType === ""){
                $("#userType").closest('.form-group').addClass('has-error');
                $("#userType").after('<p class="text-danger">User Type is required</p>');
            }else{
                $("#userType").closest('.form-group').removeClass('has-error');
                $("#userType").closest('.form-group').addClass('has-success');


            }
            if (answer === ""){
                $("#answer").closest('.form-group').addClass('has-error');
                $("#answer").after('<p class="text-danger">Answer is required</p>');
            }else{
                $("#answer").closest('.form-group').removeClass('has-error');
                $("#answer").closest('.form-group').addClass('has-success');


            }

            if (mobileNumber.length < 10 || mobileNumber.length > 10){
                $("#mobileNumber").closest('.form-group').addClass('has-error');
                $("#mobileNumber").after('<p class="text-danger">Phone number should be 10 digit</p>');
            }else{
                $("#mobileNumber").closest('.form-group').removeClass('has-error');
                $("#mobileNumber").closest('.form-group').addClass('has-success');


                if (newUsername && userEmail && firstName && lastName && mobileNumber && securityQuestion && userType && answer){
                    //submit the form to server

                    $.ajax({
                        url :form.attr('action'),
                        type : form.attr('method'),
                        data : form.serialize(),
                        dataType : 'json',

                        success:function (response) {
                            //     $(".invalid-feedback").removeClass('has-error');
                            if(response.success === true){

                                $(".form-group").removeClass('has-error').removeClass('has-success');
                                //reset Form after submission
                                $("#addNewUserForm")[0].reset();

                                $.notify({
                                    message: "New User Added Successfully"
                                },{
                                    type: 'success',
                                    timer: 10
                                });

                                //  usersTable.ajax.reload(false);

                            }else{
                                $.notify({
                                    message: "Username or Email Already Exist"
                                },{
                                    type: 'danger',
                                    timer: 10
                                });
                            }//else
                        }//success,
                    });//ajax submit
                }// if
            }


            return false;
        });// new user form
    });// add new user button
});//document .ready function



/*
*Update User information
 */
function update_userInformation(id) {

    //remove hosteler id
    $(".editMessages").html("");
    $(".messages").html("");
    $(".alertmessages").remove();
    $(".deleteMessages").html("");
    $("#users_id").remove();
    $("#updateUserForm").removeClass();
    if(id){

        // fetch Data for the hosteler with the current selected id
        $.ajax({
            url:'../validation/dashboard/admin/getUser_id.php',
            type : 'post',
            data :{users_id :id},
            dataType : 'json',
            success:function (response) {

                $("#editUsername").val(response.username);
                $("#editEmail").val(response.email);
                $("#editFirstName").val(response.firstName);
                $("#editLastName").val(response.lastName);
                $("#editMobileNumber").val(response.phone);
                $("#editUserType").val(response.user_type);


// supervisors id
                $(".editUserId").append('<input type="text" name="users_id" id="users_id" value="'+response.user_id+'">');


                // Update Data
                $("#updateUserForm").unbind('submit').bind('submit',function () {
                    var form = $(this);

                    //validation
                    var editUsername = $("#editUsername").val();
                    var editEmail = $("#editEmail").val();
                    var editFirstName = $("#editFirstName").val();
                    var editLastName = $("#editLastName").val();
                    var editMobileNumber = $("#editMobileNumber").val();
                    var editUserType = $("#editUserType").val();



                    if (editFirstName && editLastName && editUsername && editEmail && editMobileNumber && editUserType ) {
                        //submit the form to server
                        $.ajax({
                            url :form.attr('action'),
                            type : form.attr('method'),
                            data : form.serialize(),
                            dataType : 'json',
                            success:function (response) {
                                //     $(".invalid-feedback").removeClass('has-error');
                                if(response.success === true){
                                    //close the modal after deleting
                                    $("#editUserModal").modal('hide');

                                    $.notify({
                                        message: "User Information Updated Successfully"
                                    },{
                                        type: 'success',
                                        timer: 10
                                    });


                                    /* reload the database after the submission to
                                    * update the table
                                    * this is a built in function of database
                                    */
                                    usersTable.ajax.reload(false);

                                }else{
                                    $.notify({
                                        message: "Error while Updating User Information"
                                    },{
                                        type: 'danger',
                                        timer: 10
                                    });

                                }//else
                            }//success
                        });//ajax submit
                    }
                    return false;
                })
            }// success
        });// fetch selected hosteler's data
    }else{
        alert("Error: Please Refresh This Page");
    }
}// update user information -->Function



/*
* Delete hostelers
 */
function deleteUser(id) {
    $(".messages").html("");
    $(".alertmessages").remove();
    $(".editMessages").html("");
    $(".deleteMessages").html("");
    if(id){
        //click on delete button
        $("#deleteUserBtn").unbind('click').bind('click',function () {
            $.ajax({
                url:'../validation/dashboard/admin/deleteUser.php',
                type :'post',
                data :{users_id :id},
                dataType : 'json',
                success:function (response) {
                    if (response.success === true){

                        //close the modal after deleting
                        $("#deleteUserModal").modal('hide');

                        $.notify({
                            message: "User Deleted Successfully"
                        },{
                            type: 'success',
                            timer: 10
                        });
                        // refresh table after deleting
                        usersTable.ajax.reload(false);


                    }else {
                       //close the modal after deleting
                        $("#deleteUserModal").modal('hide');


                        $.notify({
                            message: "Error While Deleting User"
                        },{
                            type: 'danger',
                            timer: 10
                        });
                    }//else
                }//success
            });//ajax submit
        });//click on delete button
    }//if
}// delete user Function