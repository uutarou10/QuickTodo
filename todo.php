<?php include('include/header.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h2>Welcome!</h2>
            <p>
                <?php echo $_SESSION['name'] ?>さん、ようこそ。</p>
            <p>今日は
                <?php echo date('n月j日（D）'); ?>、○○の日です。</p>
        </div>
        <div class="col-sm-4">
            <!-- 未完了タスク数を表示 -->
            <p>残りタスクは…</p>
            <p style="font-size:250%;">
                <strong>○件</strong>
            </p>
            <p class="">です！</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="well bs-component">
                <form action="include/todo.php" method="post">
                    <div class="form-group">
                        <label for="add-task">Add Your Task</label>
                        <input name="task" type="text" class="form-control" id="add-task" placeholder="（例）大型建造を回す・春イベを攻略する">
                    </div>
                    <div class="row">
                        <input type="submit" class="btn btn-primary pull-right" value="ADD">
                    </div>
                </form>
            </div>
        </div>

        <div class="col-sm-12">
            <form action="include/todo.php" method="post">
                <div class="row">
                    <div class="col-sm-12">
                        <input type="submit" value="チェックしたタスクを実行済みにする" class="btn btn-primary" style="margin-bottom:20px;">
                    </div>
                </div>
                <table class="table table-hover">
                    <tr>
                        <th>
                            <span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
                        </th>
                        <th>Your Task(s)</th>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>ゆあたすく。</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>ゆあたすく。</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>ゆあたすく。</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>ゆあたすく。</td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div><?php include('include/footer.php'); ?>
