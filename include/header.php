<?php
session_start();
if (isset($_SESSION['id'])) {
    //ログインしてたら
    if (filter_input(INPUT_SERVER,'SCRIPT_NAME') != '/todo.php') {
        header('Location: ../todo.php');
    }
} else {
    if (filter_input(INPUT_SERVER,'SCRIPT_NAME') != '/index.php') {
        header('Location: index.php');
    }
}
 ?>
<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>QuickTodo</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="no-thank-yu">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">QuickTodo</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Top</a></li>
                    <!-- 実装が間に合わなかったシリーズ -->
                    <!-- <li class=""><a href="#">MyPage</a></li>
                    <li class=""><a href="#">Setting</a></li> -->
                    <?php
                    //ログイン中だったらログアウトのボタンを表示
                    if (isset($_SESSION['id'])) {
                     ?>
                    <li class=""><a href="include/logout.php">Logout</a></li>
                    <?php } ?>
                </ul>
            </div>

        </div>
    </nav>
