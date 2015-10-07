<?php
session_start();
if (isset($_SESSION['id'])) {
    //ログイン状態だったらindex.phpに移動
    header('Location: ../index.php');
    exit();
} elseif (isset($_POST['id']) && isset($_POST['pass'])) {
    //ログインしてないけどidとパスワードが送られてきたら
    include('db_connect.php');
    $stmt = $db->prepare("
    select * from users where user_id=:id and password=:pass;
    ");
    $stmt->bindParam(':id',$_POST['id'],PDO::PARAM_STR);
    $stmt->bindParam(':pass',sha1($_POST['pass']));
    $stmt->execute();

    $row = $stmt->fetch();
    if($row){
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        header('Location: ../todo.php');
        exit();
    } else {
        //ログイン情報が間違っていたらログイン画面へ遷移
        header('Location: ../login.php');
        exit();
    }
} else {
    //入力不足があったらログイン画面へ遷移
    header('Location: ../login.php');
    exit();
}
 ?>
