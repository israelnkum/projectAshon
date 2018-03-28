<?php
session_start();
// database Connection
require_once ('../../db_Connection.php');
// if button is actually clicked
if ($_POST) {
    $validator = array('success' => false, 'usr_exit' => false,  'messages' => array());


//Retrieve the field values from our registration form.

    $userName = !empty($_POST['newUsername']) ? trim($_POST['newUsername']) : null;
    $userMail = !empty($_POST['userEmail']) ? trim($_POST['userEmail']) : null;
    $firstName = !empty($_POST['firstName']) ? trim($_POST['firstName']) : null;
    $lastName  = !empty($_POST['lastName']) ? trim($_POST['lastName']) : null;
    $userPhone = !empty($_POST['mobileNumber']) ? trim($_POST['mobileNumber']) : null;
    $securityQuestion = !empty($_POST['securityQuestion']) ? trim($_POST['securityQuestion']) : null;
    $userType = !empty($_POST['userType']) ? trim($_POST['userType']) : null;
    $answer = !empty($_POST['answer']) ? trim($_POST['answer']) : null;



//checking if the supplied username already exists.
    // SQL statement and prepare it.
    $sql = "SELECT COUNT(username) AS num FROM users WHERE username = :username";
    $stmt = $connection->prepare($sql);
    //Bind the provided username to our prepared statement.
    $stmt->bindValue(':username', $userName);
    //Execute.
    $stmt->execute();
    //Fetch the row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row['num'] > 0){
        $validator['success'] = false;

    }else {
        //checking if the supplied Email already exists.
        // SQL statement and prepare it.
        $sql = "SELECT COUNT(email) AS num FROM users WHERE email = :email";
        $stmt = $connection->prepare($sql);
        //Bind the provided username to our prepared statement.
        $stmt->bindValue(':email', $userMail);
        //Execute.
        $stmt->execute();
        //Fetch the row.
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row['num'] > 0) {
            $validator['success'] = false;
        } else {
            $hashPassword = password_hash($userName, PASSWORD_BCRYPT, array("cost" => 12));

            $sql = "INSERT INTO users(
      username, email, user_password, firstName, lastName, 
      phone, security_ques, answer, user_type)
      VALUES (:username, :email, :user_password, :firstName, :lastName,
              :phone,:security_ques, :answer, :user_type)";

            $stmt = $connection -> prepare($sql);
            $stmt->bindValue(':username',$userName);
            $stmt->bindValue(':email',$userMail);
            $stmt->bindValue(':user_password',$hashPassword);
            $stmt->bindValue(':firstName',$firstName);
            $stmt->bindValue(':lastName',$lastName);
            $stmt->bindValue(':phone',$userPhone);
            $stmt->bindValue(':security_ques',$securityQuestion);
            $stmt->bindValue(':answer',$answer);
            $stmt->bindValue(':user_type',$userType);

            $result = $stmt->execute();
            if($result ===true){

                $validator['success'] = true;
                $validator['messages'] = "User Added Successful";

            }else{

                $validator['success'] = false;
                $validator['messages'] = "There was an error Ading User";

            }// else echo validator
        }//else --> email validation
    }// else --> username validation

    $connection=null;
    echo json_encode($validator);

}// post

