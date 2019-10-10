<?php
session_start();
if ($_SESSION['user_id'] == null) {
      header('Location: http://localhost:8888/index.php');
}
print$_POST["form-date"];
require '../../lib/database/DataBase.php';

$DataBase = new DataBase();
$icashbook = new CashBook();
$s = False;
//$error = 1;
//print $_GET['id'];
if ($_POST["mode"] == 'new') {
  date_default_timezone_set('Asia/Tokyo');
  $date = strtotime($_POST["form-date"]);
  $y = idate('y',$date);
  $m = idate('m',$date);
  $ym = $m + $y*100 + 200000;
  $amount = $_POST["form-income"] - $_POST["form-expenses"];
  print $ym;
  $icashbook->setCashBook(0,$_SESSION["user_id"],$ym,$_POST["form-date"],$_POST["form-summary"],$_POST["form-detail"],$_POST["form-income"],$_POST["form-expenses"],$amount);
  $s = $DataBase->insertCashBook($icashbook);
  if ($s == True) {
    header('Location: http://localhost:8888/web/DashBoard.php');
    exit;
  } else {
    $error = "登録に失敗しました";
    header('Location: http://localhost:8888/web/DashBoard.php?error='.$error);
    exit;
  }
} elseif ($_POST["mode"] == "update") {
    $amount = $_POST["form-income"] - $_POST["form-expenses"];
    $date = strtotime($_POST["form-date"]);
    $y = idate('y',$date);
    $m = idate('m',$date);
    $ym = $m + $y*100 + 200000;
    $icashbook->setCashBook($_POST["form-id"],$_SESSION["user_id"],$ym,$_POST["form-date"],$_POST["form-summary"],$_POST["form-detail"],$_POST["form-income"],$_POST["form-expenses"],$amount);
    $s = $DataBase->updateCashBook($icashbook);
    if ($s == True) {
      header('Location: http://localhost:8888/web/DashBoard.php');
      exit;
    } else {
      $error = "変更に失敗しました";
      header('Location: http://localhost:8888/web/DashBoard.php?error='.$error);
      exit;
    }
} elseif ($_POST["mode"] == "delete") {
  $s = $DataBase->deleteCashBookById($_POST['form-id']);
  if ($s == True) {
    header('Location: http://localhost:8888/web/DashBoard.php');
    exit;
  } else {
    $error = "削除に失敗しました";
    header('Location: http://localhost:8888/web/DashBoard.php?error='.$error);
    exit;
  }
} else {
  print 'end';
}
?>
