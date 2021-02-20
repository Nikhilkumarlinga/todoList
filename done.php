<?php


include('db_connection.php');

//Add a todo task to $todos PHP array
$taskId = $_POST['taskId'];

$deleteTodosQuery = mysqli_query($con,"UPDATE `tbl_todo` SET `currentStatus` = 2, `modifiedDateTime`= NOW() WHERE `taskId` = '$taskId'");

if ($deleteTodosQuery)
{
    $jsonResp = json_encode(['success'=>true,'message'=>'Todo updated Successfully','status'=>200]); 
}
else
{
    $jsonResp = json_encode(['success'=>false,'message'=>'Todo not deleted','status'=>409]); 
}


echo $jsonResp;
?>