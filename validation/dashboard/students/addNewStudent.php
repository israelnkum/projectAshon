<?php
session_start();
// database Connection
require_once ('../../db_Connection.php');
// if button is actually clicked
if ($_POST) {
    $validator = array('success' => false, 'messages' => array());

//Retrieve the field values from our registration form.

    $stdFirstName = !empty($_POST['stdFirstName']) ? trim($_POST['stdFirstName']) : null;
    $stdLastName = !empty($_POST['stdLastName']) ? trim($_POST['stdLastName']) : null;
    $stdOtherName = !empty($_POST['otherName']) ? trim($_POST['otherName']) : null;
    $indexNumber  = !empty($_POST['indexNumber']) ? trim($_POST['indexNumber']) : null;
    $stdClass = !empty($_POST['stdClass']) ? trim($_POST['stdClass']) : null;
    $amount = !empty($_POST['amount']) ? trim($_POST['amount']) : null;
    $stdLacost = !empty($_POST['stdLacost']) ? trim($_POST['stdLacost']) : null;
    $stdPhone = !empty($_POST['stdPhone']) ? trim($_POST['stdPhone']) : null;



//checking if the supplied username already exists.
    // SQL statement and prepare it.
    $sql = "SELECT COUNT(index_number) AS num FROM students WHERE index_number = :index_number";
    $stmt = $connection->prepare($sql);
    //Bind the provided username to our prepared statement.
    $stmt->bindValue(':index_number', $indexNumber);
    //Execute.
    $stmt->execute();
    //Fetch the row.
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row['num'] > 0){
header("Location: ../../../pages/users.php?user=".urlencode("Index Number Already Exist"));
exit();
    }else {


         $sql = "INSERT INTO `students`(`firstName`, `lastName`, `otherName`,
              `index_number`, `class`, `lacost`, `amount_paid`,`payment_status`)
             VALUES (:firstName, :lastName, :otherName, :indexNumber, :class,
           :lacost,:amountPaid, :payment_status)";

         if ($amount >= 25 & $amount < 45){
             $p_status = "Part Payment";
         }elseif ($amount >= 0 && $amount < 25){
             $p_status = "Oweing";
         }elseif ($amount == 45){
             $p_status = "Full Payment";
         }

         $stmt = $connection -> prepare($sql);
         $stmt->bindValue(':firstName',$stdFirstName);
         $stmt->bindValue(':lastName',$stdLastName);
         $stmt->bindValue(':otherName',$stdOtherName);
         $stmt->bindValue(':indexNumber',$indexNumber);
         $stmt->bindValue(':class',$stdClass);
         $stmt->bindValue(':lacost',$stdLacost);
         $stmt->bindValue(':amountPaid',$amount);
         $stmt->bindValue(':payment_status',$p_status);


         $result = $stmt->execute();
         if($result === true){

             $validator['success'] = true;
             $validator['messages'] = "User Added Successful";

         }else{

             $validator['success'] = false;
             $validator['messages'] = "There was an error Ading User";

         }// else echo validator
     }// else --> username validation

    $connection=null;
    echo json_encode($validator);

}// post
