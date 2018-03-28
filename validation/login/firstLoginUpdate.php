<?php
session_start();
// database Connection
require_once ('../db_Connection.php');
// if button is actually clicked
if ($_POST) {
    $validator = array('success' => false, 'messages' => array());

    $newPassword = !empty($_POST['new_password']) ? trim($_POST['new_password']) : null;
    $confirmPassword = !empty($_POST['confirm_password']) ? trim($_POST['confirm_password']) : null;

            $hashPassword = password_hash($confirmPassword, PASSWORD_BCRYPT, array("cost" => 12));

            $sql = "UPDATE users SET  user_password= :new_password, updated=:one WHERE user_id = :userID";

            $stmt = $connection->prepare($sql);

            $stmt->bindValue(':new_password',$hashPassword);
            $stmt->bindValue(':one','1');
            $stmt->bindValue(':userID',$_SESSION['u_id']);

            $result=$stmt->execute();
            if($result === true){
                $currentUser ="SELECT  * FROM `users` WHERE `user_id` = :currentUserId";
                $stmt = $connection->prepare($currentUser);
                //Bind the provided username to our prepared statement.
                $stmt->bindValue(':currentUserId', $_SESSION['u_id']);
                //Execute.
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($row['user_type'] == 'Admin'){
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_name'] = $row['username'];
                    $_SESSION['logged_in'] = time();
                    $validator['success'] = true;
                    $validator['messages'] = "User Added Successful";

            }else{
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_name'] = $row['username'];
                    $_SESSION['logged_in'] = time();
                    $validator['success'] = false;
                    $validator['messages'] = "User Added Successful";
                }



            }else{
                header("Location: ../pages/firstLogin/firstLoginUpdate.php?error_updatingProfile=".urlencode("There was an error Updating Profile"));
                exit();

            }

}
echo json_encode($validator);

$connection=null;
//echo json_encode($validator);
