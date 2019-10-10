<?php
  print 'hello ';
  require '../../lib/database/DataBase.php';
  print 'hello ';
  $User = new DataBase();
  $s = False;
  print 'hello ';
  if ($User->selectUserByEmail($_POST["form-email"])->id == -1){
    print 'hello ';
    $iuser = new User();
    $iuser->setUser(0,$_POST["form-email"],$_POST["form-name"],$_POST["form-pwd"]);
    $s = $User->insertUser($iuser);
    print $s;
    print 'a';
  } else {
    header('Location: http://localhost:8888/create_user.php?error=登録できませんでした');
  }
  if ($s == True) {
    header('Location: http://localhost:8888/index.php');
    exit;
  } else {
    header('Location: http://localhost:8888/create_user.php?error=登録できませんでした');
    exit;
  }
 ?>
