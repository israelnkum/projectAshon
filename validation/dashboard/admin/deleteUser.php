<?php
require_once('../../db_Connection.php');
$output = array('success' => false, 'messages' => array());

$user_ID = $_POST['users_id'];

$sql = "DELETE FROM users WHERE user_id = :u_id";

$stmt =$connection->prepare($sql);

$stmt->bindValue(':u_id', $user_ID);

$result = $stmt->execute();

if($result === TRUE){
    $output['success'] = true;
    $output['messages']= 'Successfully Deleted';
}else{
    $output['success'] = false;
    $output['messages']= 'Error Deleting User';
}

$connection=null;
echo json_encode($output);
