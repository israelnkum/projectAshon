<?php
session_start();
// database Connection
require_once ('../db_Connection.php');
// if button is actually clicked
if (isset($_POST['btn_FirstUpdate'])) {


    $newPassword = !empty($_POST['new_password']) ? trim($_POST['new_password']) : null;
    $confirmPassword = !empty($_POST['confirm_password']) ? trim($_POST['confirm_password']) : null;

    if ($newPassword != $confirmPassword){

        header("Location: ../../pages/firstLogin/update_password.php?match=" .urlencode("password is Mismatch"));
        exit();
    }else{
        if ($confirmPassword < 8){

            header("Location: ../../pages/firstLogin/update_password.php?password=" .urlencode("password is less than 8"));
            exit();
        }else{
            $hashPassword = password_hash($confirmPassword, PASSWORD_BCRYPT, array("cost" => 12));

            $sql = "UPDATE users SET  user_password= :new_password, updated=:one WHERE user_id = :userID";

            $stmt = $connection->prepare($sql);

            $stmt->bindValue(':new_password',$hashPassword);
            $stmt->bindValue(':one','1');
            $stmt->bindValue(':userID',$_SESSION['u_id']);

            $result=$stmt->execute();
            if($result){
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

                    header("Location: ../../pages/dashboard.php?Welcome=" .urlencode("loginSuccess"));


                }else{
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_name'] = $row['username'];
                    $_SESSION['logged_in'] = time();
                    header("Location: ../../pages/users/dashboard.users.php?Welcome=".urlencode("login_success"));
                    exit();
                }



            }else{
                header("Location: ../pages/firstLogin/firstLoginUpdate.php?error_updatingProfile=".urlencode("There was an error Updating Profile"));
                exit();

            }
        }
    }



}

$connection=null;
//echo json_encode($validator);
