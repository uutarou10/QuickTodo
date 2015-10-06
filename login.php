<?php include('include/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">
                <h2>Login</h2>
                <p>ログイン情報を入力してください。</p>
                <form action="include/login.php" method="post">
                    <div class="form-group">
                        <label class="control-label">User ID</label>
                        <input type="text" class="form-control" placeholder="ID" name="id">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <input type="password" class="form-control" placeholder="PASSWORD" name="pass">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="LOGIN" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include('include/footer.php'); ?>
