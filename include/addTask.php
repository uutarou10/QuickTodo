<?php
function addTask($user_id,$task){
    include('db_connect.php');
    $stmt = $db->prepare("
    insert into todos (user_id,task,created) values
    (:id,:task,current_timestamp);
    ");
    $stmt->bindParam(':id',$user_id,PDO::PARAM_INT);
    $stmt->bindParam(':task',$task,PDO::PARAM_STR);
    $stmt->execute();
}

addTask($_POST['id'],$_POST['task']);
header('Location: ../todo.php');
exit();
 ?>
