<?php include_once('include/header.php'); ?>
<?php include_once('include/todo.php'); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <h2>Welcome!</h2>
            <p>
                <?php echo $_SESSION['name'] ?>さん、ようこそ。</p>
            <p>今日は
                <?php echo date('n月j日（D）'); ?>です。</p>
        </div>
        <div class="col-sm-4">
            <!-- 未完了タスク数を表示 -->
            <p>残りタスク数</p>
            <p style="font-size:250%;">
                <strong><?php echo countByStatus($_SESSION['id'],0); ?>件</strong>
            </p>
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
                    <div class="clearfix">
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
                    <!-- <tr>
                        <td>
                            <input type="checkbox">
                        </td>
                        <td>ゆあたすく。</td>
                    </tr> -->
                    <?php
                     $rows = getAllTodos($_SESSION['id']);
                     foreach ($rows as $row) :
                    ?>
                    <tr>
                        <td><input type="checkbox" name="task_<?php echo $row['id']; ?>" <?php if ($row['status'] == 1) echo "checked"; ?>></td>
                        <td><?php echo $row['task']; ?>
                    <?php endforeach; ?>
                </table>
            </form>
        </div>
    </div>
</div><?php include_once('include/footer.php'); ?>
