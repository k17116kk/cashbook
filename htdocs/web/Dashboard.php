<?php
session_start();
if ($_SESSION['user_id'] == null) {
      header('Location: http://localhost:8888/index.php');
}
require '../../lib/database/DataBase.php';
//$error = 1;
$error = $_GET['error'];
$id = $_SESSION['user_id'];
$Data = new DataBase();
print $id;
$List = $Data->selectCashBookList($id);
$_SESSION['list'] = $List;
header('Location: http://localhost:8888/dashboard.php?error='.$error);
exit;
 ?>
