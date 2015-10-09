<?php
function getTodos($id,$status) {
    include('db_connect.php');
    //$idは投稿したユーザーのid
    //$statusは完了・未完了（0が未完了、1が完了）
    $stmt=$db->prepare("
    select * from todos where user_id=:id and status=:status order by id;
    ");
    $stmt->bindParam(':status',$status,PDO::PARAM_INT);
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->execute();

    $rows = false;
    while($row=$stmt->fetch()) {
        $rows[] = $row;
    }

    return $rows;
}

function getAllTodos($id) {
    include('db_connect.php');
    //$idは投稿したユーザーのid
    //すべてのステータスのタスクを取得する。
    $stmt=$db->prepare("
    select * from todos where user_id=:id order by id;
    ");
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->execute();

    $rows = false;
    while($row=$stmt->fetch()) {
        $rows[] = $row;
    }

    return $rows;
}

function countByStatus($id,$status) {
    include('db_connect.php');
    $stmt=$db->prepare("
    select count(*) from todos where user_id=:id and status=:status;
    ");
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->bindParam(':status',$status,PDO::PARAM_INT);
    $stmt->execute();

    $row = $stmt->fetch();

    return $row[0];
}

 ?>
