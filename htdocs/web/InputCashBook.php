<?php
session_start();
if ($_SESSION['user_id'] == null) {
      header('Location: http://localhost:8888/index.php');
}
require '../../lib/database/DataBase.php';
$mode = $_GET['mode'];
print $mode;
$id = $_GET['id'];
if ($_GET["mode"] != 'new') {
  $Data = new DataBase();
  $CashBook = $Data->selectCashBookById($id);
  print $CashBook['date'];
  $url = $CashBook['id'].'&date='.$CashBook['date'].'&summary='.$CashBook['summary'].'&detail='.$CashBook['detail'].'&income='.$CashBook['income'].'&expenses='.$CashBook['expenses'];

}
if ($mode == 'new') {
  print 'new';
  header('Location: http://localhost:8888/input_cashbook.php?mode=new');

} elseif ($mode == "update") {
  print "update";
  header('Location: http://localhost:8888/input_cashbook.php?mode=update&id='.$url);

} elseif ($mode == "delete") {
  print 'delite';
  header('Location: http://localhost:8888/input_cashbook.php?mode=delete&id='.$url);

} else {
  print 'end';
}
?>
