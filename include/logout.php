<?php
session_start();
if (isset($_SESSION['id'])) {
    unset($_SESSION['id']);
    unset($_SESSION['name']);
}
header('Location: ../index.php');
 ?>
