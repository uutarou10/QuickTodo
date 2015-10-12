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
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2>サインアップ</h2>
            <p>情報を入力してください。</p>
            <form action="include/addUser.php" method="post">
                <div class="form-group">
                    <label class="control-label">User ID</label>
                    <input type="text" class="form-control" placeholder="ID" name="id">
                </div>

        </div>
    </div>

<?php include('include/footer.php') ?>
