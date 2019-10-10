<?php
session_start();
if ($_SESSION['user_id'] == null) {
      header('Location: http://localhost:8888/index.php');
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>CASH BOOK -現金出納登録</title>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark mb-4">
            <a class="navbar-brand" href="#">
                <!--<img src="assets/img/top-icon.svg" width="30" height="30" class="d-inline-block align-top" alt="">-->
                CASH BOOK
            </a>
            <div>
                <a class="navbar-brand" href="Signout">SignOut</a>
            </div>
        </nav>
        <main role="main" class="container">
          <!--
            <% if (request.getParameter("info") != null) {%>
            <div class="alert alert-info" role="alert"><%= request.getParameter("info")%></div>
            <% }%>
            <% if (request.getParameter("error") != null) {%>
            <div class="alert alert-danger" role="alert"><%= request.getParameter("error")%></div>
            <% }%>
          -->
            <form action="web/CashBookRegister.php" method="POST" enctype="multipart/form-data">
              <?php
                date_default_timezone_set('Asia/Tokyo');
                echo'<input type="hidden" name="mode" value="'.$_GET['mode'].'">';
                if (mode == null || $_GET['mode'] == 'new') {
                echo'
                <div class="card">
                    <h5 class="card-header">現金出納データ - 新規登録</h5>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="form-date">日付</label>
                                <input type="date" class="form-control" name="form-date" id="form-date" value="'.date("Y-m-d").'" required>
                            </div>
                            <div class="form-group col-6 invisible">
                                <label for="form-id">対象データID</label>
                                <input type="number" class="form-control" name="form-id" id="form-id" value="0">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="form-summary">摘要</label>
                            <input type="text" class="form-control form-control-lg" name="form-summary" id="form-summary" required>
                            <small class="form-text text-muted">支出の場合、飲食費、交通費、消耗品費など。収入の場合、給料、雑収入など</small>
                        </div>

                        <div class="form-group">
                            <label for="form-detail">詳細</label>
                            <textarea class="form-control form-control-sm" name="form-detail" id="form-detail" rows="4"></textarea>
                        </div>

                        <div class="form-row">
                            <<div class="form-group col-6">
                                <label for="form-income">収入</label>
                                <input type="number" class="form-control" name="form-income" id="form-income" value="0" min="0" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="form-expenses">支出</label>
                                <input type="number" class="form-control" name="form-expenses" id="form-expenses" value="0" min="0" required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="./web/Dashboard.php" class="btn btn-light" tabindex="-1">キャンセル</a>
                        <button type="submit" class="btn btn-primary">新規登録</button>
                    </div>
                </div>
                ';
              } elseif ($_GET['mode'] == 'update'){
                echo'
                <div class="card">
                    <h5 class="card-header">現金出納データ - 変更</h5>
                    <div class="card-body">

                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="form-date">日付</label>
                                <input type="date" class="form-control" name="form-date" id="form-date" value="'.$_GET['date'].'" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="form-id">対象データID</label>
                                <input type="number" class="form-control" name="form-id" id="form-id" value="'.$_GET['id'].'" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="form-summary">摘要</label>
                            <input type="text" class="form-control form-control-lg" name="form-summary" id="form-summary" value="'.$_GET['summary'].'" required>
                        </div>

                        <div class="form-group">
                            <label for="form-detail">詳細</label>
                            <textarea class="form-control form-control-sm" name="form-detail" id="form-detail" rows="4">'.$_GET['detail'].'</textarea>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="form-income">収入</label>
                                <input type="number" class="form-control" name="form-income" id="form-income" value="'.$_GET['income'].'" min="0" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="form-expenses">支出</label>
                                <input type="number" class="form-control" name="form-expenses" id="form-expenses" value="'.$_GET['expenses'].'" min="0" required>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="./web/Dashboard.php" class="btn btn-light" tabindex="-1">キャンセル</a>
                        <button type="submit" class="btn btn-primary">変更登録</button>
                    </div>
                </div>
                ';
              } else {
                echo'
                <div class="card">
                    <h5 class="card-header">現金出納データ - 削除</h5>
                    <div class="card-body">

                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="form-date">日付</label>
                                <input type="date" class="form-control" name="form-date" id="form-date" value="'.$_GET['date'].'" readonly>
                            </div>
                            <div class="form-group col-6">
                                <label for="form-id">対象データID</label>
                                <input type="number" class="form-control" name="form-id" id="form-id" value="'.$_GET['id'].'" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="form-summary">摘要</label>
                            <input type="text" class="form-control form-control-lg" name="form-summary" id="form-summary" value="'.$_GET['summary'].'" readonly>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-6">
                                <label for="form-income">収入</label>
                                <input type="number" class="form-control" name="form-income" id="form-income" value="'.$_GET['income'].'" min="0" readonly>
                            </div>
                            <div class="form-group col-6">
                                <label for="form-expenses">支出</label>
                                <input type="number" class="form-control" name="form-expenses" id="form-expenses" value="'.$_GET['expenses'].'" min="0" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="./web/Dashboard.php" class="btn btn-light" tabindex="-1">キャンセル</a>
                        <button type="submit" class="btn btn-secondary" onclick="return window.confirm('.'表示されたデータを1件削除します。'.')">削除</button>
                    </div>
                </div>
                    ';
                  }

                ?>

            </form>
        </main>
    </body>
</html>
