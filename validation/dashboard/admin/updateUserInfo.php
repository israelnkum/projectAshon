<?php
// database Connection
require_once ('../../db_Connection.php');
// if button is actually clicked
if ($_POST) {

    $validator = array('success' => false, 'messages' => array());

//Retrieve the field values from our registration form.
    $id =$_POST['users_id'];
    $editUsername = !empty($_POST['editUsername']) ? trim($_POST['editUsername']) : null;
    $editEmail = !empty($_POST['editEmail']) ? trim($_POST['editEmail']) : null;
    $editFirstName = !empty($_POST['editFirstName']) ? trim($_POST['editFirstName']) : null;
    $editLastName = !empty($_POST['editLastName']) ? trim($_POST['editLastName']) : null;
    $editPassword = !empty($_POST['editPassword']) ? trim($_POST['editPassword']) : null;
    $editPhoneNumber = !empty($_POST['editMobileNumber']) ? trim($_POST['editMobileNumber']) : null;
    $editUserType = !empty($_POST['editUserType']) ? trim($_POST['editUserType']) : null;

    if ($editPassword == ""){
        $sql = "UPDATE users SET username =:username,email = :email,
      firstName =:firstName,lastName = :lastName,phone =:phoneNumber,user_type = :user_type
       WHERE user_id =:user_id";

        $stmt = $connection->prepare($sql);

        $stmt->bindValue(':username',$editUsername);
        $stmt->bindValue(':email',$editEmail);
        $stmt->bindValue(':firstName',$editFirstName);
        $stmt->bindValue(':lastName',$editLastName);
        $stmt->bindValue(':phoneNumber',$editPhoneNumber);
        $stmt->bindValue(':user_type',$editUserType);
        $stmt->bindValue(':user_id',$id);

        $result=$stmt->execute();
        if($result){
            $validator['success'] = true;
            $validator['messages'] = "User Information Updated Successfully";

        }else{
            $validator['success'] = false;
            $validator['messages'] = "There was an error Updating User Information!";

        }
    }else{
        $hashPassword = password_hash($editPassword, PASSWORD_BCRYPT, array("cost" => 12));

        $sql = "UPDATE users SET username =:username,email = :email,user_password = :userPassword,
      firstName =:firstName,lastName = :lastName,phone =:phoneNumber,user_type = :user_type
       WHERE user_id =:user_id";

        $stmt = $connection->prepare($sql);

        $stmt->bindValue(':username',$editUsername);
        $stmt->bindValue(':email',$editEmail);
        $stmt->bindValue(':userPassword',$hashPassword);
        $stmt->bindValue(':firstName',$editFirstName);
        $stmt->bindValue(':lastName',$editLastName);
        $stmt->bindValue(':phoneNumber',$editPhoneNumber);
        $stmt->bindValue(':user_type',$editUserType);
        $stmt->bindValue(':user_id',$id);

        $result=$stmt->execute();
        if($result){
            $validator['success'] = true;
            $validator['messages'] = "User Information Updated Successfully";

        }else{
            $validator['success'] = false;
            $validator['messages'] = "There was an error Updating User Information!";

        }
    }

    $connection=null;
    echo json_encode($validator);

}