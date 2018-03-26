<?php
require_once('../../db_Connection.php');
$output= array('data' =>array());
$sql = "SELECT * FROM users";
$stmt = $connection->prepare($sql);
$stmt->execute();
$x =1;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    $userType='';
    if ($row['user_type'] == 'Admin'){
        $userType = '<a class="label label-success" role="button" href="">Admin</a>';

    }else{

        $userType = '<a class="label label-primary" role="button" href="">User</a>';
    }
    $actionBtn ='
<div class="dropdown">
  <button id="dLabel" class="btn btn-default btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Action
    <span class="caret"></span>
  </button>
  <div class="dropdown-menu bg-transparent" aria-labelledby="dLabel">

    <button type="button" class=" collapsed dropdown-item btn btn-primary btn-sm"
      data-toggle="modal" data-target="#editUserModal" aria-expanded="false" aria-controls="editUser" onclick="update_userInformation('.$row['user_id'].')">
    <i class="fa fa-edit"></i> Edit</button>

<a role="button" class="dropdown-item btn btn-danger btn-sm" data-toggle="modal"
    data-target="#deleteUserModal" onclick="deleteUser('.$row['user_id'].')"><i class="fa fa-trash"></i> Delete</a>

  </div>
</div>
     ';



    $output['data'][] = array(
        $x,
        $row['username'],
        $row['firstName']." ".$row['lastName'],
        $row['email'],
        $row['phone'],
        $userType,
        $actionBtn,
    );
    $x++;
    $connection=null;

}

echo json_encode($output);
