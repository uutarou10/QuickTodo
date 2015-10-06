<?php
include('db_config.php');

try {
    $db = new PDO(DSN, DB_USER, DB_PASS);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOExeption $e) {
    die('Database Error!! (' . $e->getMessage() . ')');
}

 ?>
