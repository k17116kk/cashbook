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

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <title>Cash Book - Dashboard</title>
    </head>


<!-- ダッシュボードのレポート表示 -->

    <body>
        <nav class="navbar navbar-dark bg-dark mb-4">
            <a class="navbar-brand" href="#">
              Dashboard
            </a>
            <div>
                <a class="navbar-brand" href="web/Signout.php">SignOut</a>
            </div>
        </nav>
        <main role="main">
            <div class="card m-2">
              <?php
              session_start();
              echo'<div class="card-header">サインインユーザー :'.$_SESSION['name'].'</div>';
              ?>
            </div>
            <div class="row m-2 no-gutters">
</div>
            <div class="card m-2">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5>現金出納張</h5>
                    <a href="web/InputCashBook.php?mode=new" class="btn btn-primary">現金出納の新規登録</a>
                </div>
                <div class="card-body p-5">

                  <?php
                  if ($_GET['error'] != null) {
                      print '<div class="alert alert-danger" role="alert">'.$_GET['error'].'</div>';
                  }
                  ?>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">#</th>
                                <th scope="col">年月</th>
                                <th scope="col">日付</th>
                                <th scope="col">摘要</th>
                                <th scope="col">詳細</th>
                                <th scope="col" class="text-right">収入</th>
                                <th scope="col" class="text-right">支出</th>
                                <th scope="col" class="text-right">差引金額</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                          session_start();
                          $list = $_SESSION['list'];
                          for($i = 0 ;$i < count($list);$i++) {
                            print '<tr>
                                <td class="p-2">
                                    <div class="btn-group" role="group">
                                        <a href="web/InputCashBook.php?mode=update&id='.$list[$i]['id'].'" class="btn btn-sm btn-info">変更</a>
                                        <a href="web/InputCashBook.php?mode=delete&id='.$list[$i]['id'].'" class="btn btn-sm btn-light">削除</a>
                                    </div>
                                </td>
                                <th scope="row">'.$i.'</th>
                                <td>'.$list[$i]['ym'].'</td>
                                <td>'.$list[$i]['date'].'</td>
                                <td>'.$list[$i]['summary'].'</td>
                                <td>'.$list[$i]['detail'].'</td>
                                <td class="text-right">'.$list[$i]['income'].'</td>
                                <td class="text-right">'.$list[$i]['expenses'].'</td>
                                <td class="text-right">'.$list[$i]['amount'].'</td>
                            </tr>';
                          }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="assets/vendor/js/jquery-3.3.1.slim.min.js"></script>
        <script src="assets/vendor/js/popper.min.js"></script>
        <script src="assets/vendor/js/bootstrap.min.js"></script>
    </body>
</html>
