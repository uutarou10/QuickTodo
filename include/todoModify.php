<?php

if (count($_POST)) {
    $keys = array_keys($_POST);
    $ids = array();
    foreach ($keys as $key) {
        $ids[] = substr($key, (mb_strlen($key) - 5) * (-1));
    }
    include 'db_connect.php';
    foreach ($ids as $id) {
        $stmt = $db->prepare('
        update todos set status=1 where id=:id;
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}

header('Location: ../todo.php');
exit();
