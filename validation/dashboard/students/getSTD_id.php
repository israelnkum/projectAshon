<?php
require_once('../../db_Connection.php');
$currentStudent = $_POST['student_id'];
$sql = "SELECT * FROM students WHERE std_id = :student_ID";
$stmt = $connection->prepare($sql);
$stmt->bindValue(':student_ID',$currentStudent);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$connection=null;
echo json_encode($row);