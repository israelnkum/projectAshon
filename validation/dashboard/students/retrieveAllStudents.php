<?php
require_once('../../db_Connection.php');
$output= array('data' =>array());
$sql = "SELECT * FROM students";
$stmt = $connection->prepare($sql);
$stmt->execute();
$x =1;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){

    $lacost='';
    if ($row['lacost'] == '1'){
        $lacost = '<a class="label label-success" role="button" >Received</a>';

    }else{

        $lacost = '<a class="label label-danger" role="button" >Not Received</a>';
    }


    $payment_stats ='';
    if ($row['payment_status'] == 'Part Payment'){
        $payment_stats = '<a class="label label-primary" role="button" >Part Payment</a>';

    }else if ($row['payment_status'] == 'Oweing'){

        $payment_stats = '<a class="label label-danger" role="button" >Oweing</a>';
    }else if($row['payment_status'] == 'Full Payment'){
        $payment_stats = '<a class="label label-success" role="button" >Full Payment</a>';

    }

    $actionBtn ='
<div class="dropdown">
  <button id="dLabel" class="btn btn-default btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Action
    <span class="caret"></span>
  </button>
  <div class="dropdown-menu bg-transparent" aria-labelledby="dLabel">

    <button type="button" class=" collapsed dropdown-item btn btn-primary btn-sm"
      data-toggle="modal" data-target="#editStdModal" aria-expanded="false" aria-controls="editUser" onclick="update_studentsInformation('.$row['std_id'].')">
    <i class="fa fa-edit"></i></button>

<a role="button" class="dropdown-item btn btn-danger btn-sm" data-toggle="modal"
    data-target="#deleteUserModal" onclick="deleteUser('.$row['std_id'].')"><i class="fa fa-trash"></i></a>

  </div>
</div>
     ';

    $output['data'][] = array(
        $x,
        $row['lastName']." ".$row['firstName']." ".$row['otherName'],
        $row['index_number'],
        $row['class'],
        $lacost,
        $row['amount_paid'],
        $payment_stats,
        $row['datePaid'],
        $actionBtn

    );
    $x++;
    $connection=null;

}

echo json_encode($output);
