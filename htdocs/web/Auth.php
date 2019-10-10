<?php
session_start();
//$email =$_POST["form-email"]
print 'Auth s ';
require '../../lib/database/DataBase.php';
//require '../../lib/database/User.php';
//require '../06/8-1.php';
$User = new DataBase();
$userData = new User();
//$User->GetConnection();
print $_POST["form-pwd"];
$userData = $User->selectUserByEmail($_POST["form-email"]);
if ($userData->id != -1 && $userData->password == $_POST["form-pwd"]) {
  echo session_status();
  echo $userData->id;
  $_SESSION['user_id'] = $userData->id;
  $_SESSION['name'] = $userData->name;
  //$_SESSION['user_id'] = 600;
  echo$_SESSION['user_id'];
  header('Location: ./DashBoard.php');
  exit;
} else {
  header('Location: http://localhost:8888/index.php?error=ログインできませんでした');
  exit;
}
print 'Auth e ';
?>
