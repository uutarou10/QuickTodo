<?php
include('include/header.php');
 ?>
 <div class="container">
     <h1>Welcome to QuickTodo!!</h1>
     <p>The most simple todo in the world.</p>

     <div class="row">
         <div class="col-sm-7">
             <h2>How to use?</h2>
             <p>使い方はとっても簡単。</p>
             <p>ログインしたら、タスクを入力するだけ。</p>
             <p>終わったタスクはチェックを入れて削除。</p>
             <p>これであなたもいけいけキャンパスライフを送ろう。</p>
         </div>
         <div class="col-sm-4">
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
     <div class="row">
         <div class="col-sm-12">
             <h2 class="text-center"><strong>Sign Up!</strong></h2>
             <p class="text-center">新規登録は下のボタンから。30秒くらいで終わります（たぶん）。</p>
             <div class="text-center">
             <a href="signup.php" class="btn btn-primary btn-lg">新規登録</a>
         </div>
         </div>
     </div>
<?php
include('include/footer.php');
 ?>
