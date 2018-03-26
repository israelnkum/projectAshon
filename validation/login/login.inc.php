<?php
session_start();
require_once ('../db_Connection.php');
if (isset($_POST['btn_login'])){
    //Retrieve the field values from our registration form.

    $userName = !empty($_POST['username']) ? trim($_POST['username']) : null;
    $userPassword = !empty($_POST['user_password']) ? trim($_POST['user_password']) : null;

    //Construct the SQL statement and prepare it.
//Retrieve the user account information for the given username.
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $connection->prepare($sql);
    //Bind value.
    $stmt->bindValue(':username', $userName);
    //Execute.
    $stmt->execute();
    //Fetch row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //If $row is FALSE.
    if($row === false){
        //Could not find a user with that username!

        header("Location: ../../index.php?err=".urlencode("Oops! Username does Not Match any Record!"));
    } else{

        //User account found. Check to see if the given password matches the
        //password hash that we stored in our supervisors table.

        //Compare the passwords.
        $validPassword = password_verify($userPassword, $row['user_password']);

        //If $validPassword is TRUE, the login has been successful.
        if($validPassword){
            if ($row['updated'] == '0'){
                //Provide the user with a login session.
                $_SESSION['u_id'] = $row['user_id'];
                $_SESSION['u_name'] = $row['username'];
                $_SESSION['user_type'] =$row['user_type'];
                $_SESSION['logged_in_time'] = time();
                $_SESSION['loggedin'] = true;

                //Redirect to our protected page, which we called home.php
                //header('Location: ../pages/admin_dashboard.php?loginSucess');
                header('Location: ../../pages/firstLogin/update_password.php?password_update');
                exit;

            }else{

                if ($row['user_type'] == 'Admin'){
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_name'] = $row['username'];
                    $_SESSION['user_type'] =$row['user_type'];
                    $_SESSION['logged_in'] = time();
                    header("Location: ../../pages/dashboard.php?loginSuccess=".urlencode("Welcome"));
                    exit();
                }else{
                    $_SESSION['u_id'] = $row['user_id'];
                    $_SESSION['u_name'] = $row['username'];
                    $_SESSION['logged_in'] = time();
                    $_SESSION['user_type'] =$row['user_type'];
                    header("Location: ../../pages/users/dashboard.users.php?Welcome=".urlencode("login_success"));
                    exit();
                }
                //Provide the user with a login session.
            }

        } else{
            //$validPassword was FALSE. Passwords do not match.
            header("Location: ../../index.php?err=".urlencode("Incorrect Username or Password Combination!"));
            exit();
        }
    }

}
