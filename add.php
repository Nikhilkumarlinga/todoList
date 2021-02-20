<?php
include('db_connection.php');

//Add a todo task to $todos PHP array
$taskName = $_POST['taskName'];
//echo $taskName;

$getTodosQuery = mysqli_query($con,"INSERT INTO `tbl_todo` (`taskId`,  `currentStatus`, `taskName`, `createDateTime`) VALUES ('0','1','$taskName',NOW())");
$taskId = mysqli_insert_id($con);

if ($getTodosQuery)
{
    $jsonResp = json_encode(['success'=>true,'taskId'=>$taskId,'taskName'=>$taskName,'message'=>'Todo added Successfully','status'=>200]); 
}
else
{
    $jsonResp = json_encode(['success'=>false,'message'=>'Todo not added please try again','status'=>409]); 
}


echo $jsonResp;
?>