

var std_Table;
$(document).ready(function() {

    std_Table= $("#std_Table").DataTable({

    });

    $("#addNewStudent").on('click',function () {
        //reset the form
        $("#addNewStudentForm")[0].reset();

        // remove error
        $(".form-group").removeClass('has-error').removeClass('has-success');
        $('.text-danger').remove();

        $(".messages").html("");
        //submit form
        $("#addNewStudentForm").unbind('submit').bind('submit',function () {
            $('.text-danger').remove();
            var form = $(this);
            //validation
            var stdFirstName = $("#stdFirstName").val();
            var stdLastName = $("#stdLastName").val();
            var otherName = $("#otherName").val();
            var indexNumber = $("#indexNumber").val();
            var stdClass = $("#stdClass").val();
            var amount = $("#amount").val();
            var stdLacost = $("#stdLacost").val();
            var stdPhone = $("#stdPhone").val();

            if (stdFirstName === ""){
                $("#stdFirstName").closest('.form-group').addClass('has-error');
                $("#stdFirstName").after('<p class="text-danger">First Name is required</p>');
            }else{
                $("#stdFirstName").closest('.form-group').removeClass('has-error');
                $("#stdFirstName").closest('.form-group').addClass('has-success');

            }
            if (stdLastName === ""){
                $("#stdLastName").closest('.form-group').addClass('has-error');
                $("#stdLastName").after('<p class="text-danger">Last Name is required</p>');
            }else{
                $("#stdLastName").closest('.form-group').removeClass('has-error');
                $("#stdLastName").closest('.form-group').addClass('has-success');


            }
            if (otherName === ""){
                $("#otherName").closest('.form-group').addClass('has-error');
                $("#otherName").after('<p class="text-danger">Other Name is required</p>');
            }else{
                $("#otherName").closest('.form-group').removeClass('has-error');
                $("#otherName").closest('.form-group').addClass('has-success');

            }
            if (indexNumber === ""){
                $("#indexNumber").closest('.form-group').addClass('has-error');
                $("#indexNumber").after('<p class="text-danger">Index Number is required</p>');
            }else{
                $("#indexNumber").closest('.form-group').removeClass('has-error');
                $("#indexNumber").closest('.form-group').addClass('has-success');

            }
            if (stdClass === ""){
                $("#stdClass").closest('.form-group').addClass('has-error');
                $("#stdClass").after('<p class="text-danger">Class is is required</p>');
            }else{
                $("#stdClass").closest('.form-group').removeClass('has-error');
                $("#stdClass").closest('.form-group').addClass('has-success');
            }

            if (amount === ""){
                $("#amount").closest('.form-group').addClass('has-error');
                $("#amount").after('<p class="text-danger">Amount is required</p>');
            }else{
                $("#amount").closest('.form-group').removeClass('has-error');
                $("#amount").closest('.form-group').addClass('has-success');

            }
            if (stdLacost === ""){
                $("#stdLacost").closest('.form-group').addClass('has-error');
                $("#stdLacost").after('<p class="text-danger">Lacost field is required</p>');
            }else{
                $("#stdLacost").closest('.form-group').removeClass('has-error');
                $("#stdLacost").closest('.form-group').addClass('has-success');


            }
            if (stdPhone === ""){
                $("#stdPhone").closest('.form-group').addClass('has-error');
                $("#stdPhone").after('<p class="text-danger">Phone number is required</p>');
            }else{
                $("#stdPhone").closest('.form-group').removeClass('has-error');
                $("#stdPhone").closest('.form-group').addClass('has-success');


            }

            if (stdPhone.length < 10 || stdPhone.length > 10){
                $("#stdPhone").closest('.form-group').addClass('has-error');
                $("#stdPhone").after('<p class="text-danger">Phone number shoudl be 10 digit</p>');
            }else{
                $("#stdPhone").closest('.form-group').removeClass('has-error');
                $("#stdPhone").closest('.form-group').addClass('has-success');


                if (stdFirstName && stdLastName && otherName && indexNumber && stdClass && amount && stdLacost && stdPhone){
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
                                $("#addNewStudentForm")[0].reset();
                                $("#newStdModal").hide();

                                $.notify({
                                    message: "New Student Added Successfully"
                                },{
                                    type: 'success',
                                    timer: 10
                                });

                                //  usersTable.ajax.reload(false);

                            }else{
                                $.notify({
                                    message: "There Was an Error While Adding Student"
                                },{
                                    type: 'danger',
                                    timer: 10
                                });
                            }//else
                        }//success
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
