<?php
//require '../../lib/database/User.php';
require 'User.php';
require 'CashBook.php';
class DataBase{
  //protected $DB_HOST = 'localhost:8889/HouseholdAccounts';
  //protected $DB_NAME = 'HouseholdAccounts';
  //protected $DB_CHARSET = 'utf8';
  //protected $DB_USER = 'root';
  //protected $DB_PASS = 'root';
  protected $pdo;

  public function __construct() {
      print 'createDataBase ';
  }

  public function GetConnection() {
    try{
        #$pdo = new PDO('mysql:host = '+$DB_HOST+';dbname = '+$DB_NAME+';charset = '+ $DB_CHARSET+,'root','root');
        $this->$pdo = new PDO('mysql:host=localhost:8889/HouseholdAccounts;dbname=HouseholdAccounts;charset = utf8','user','pass');
        $this->$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        print 'get connection!!';
        //$pdo = null;
        //return $pdo;
      }catch(PDOException $Exception){
          die('エラー :' . $Exception->getMessage());
      }
    }
    public function selectUserByEmail($email) {
        try{
          $this->GetConnection();
          $sql = "SELECT * FROM User WHERE email = :email limit 1";
          $stmh = $this->$pdo->prepare($sql);
          $stmh->bindValue(':email',$email,PDO::PARAM_STR);
          $stmh->execute();
          $count = $stmh->rowCount();
          $userData = $stmh->fetchAll(PDO::FETCH_ASSOC);
          print $count;
        }catch(PDOException $Exception){
            die('エラー :' . $Exception->getMessage());
        }
        $user = new User();
        if ($count >= 1) {
            //$user->id = $stmh[0]['id'];  // ユーザー名
            $user->setUser($userData[0]['id'],$userData[0]['email'],$userData[0]['name'],$userData[0]['password']);
            print 'count';
        }
        return $user;
  }

  public function insertUser($user) {
      $this->GetConnection();

      $sql = "INSERT INTO User (email,name,password) VALUES (:email,:name,:password)";
      $stmh = $this->$pdo->prepare($sql);
      $stmh->bindValue(':email',$user->email,PDO::PARAM_STR);
      $stmh->bindValue(':name',$user->name,PDO::PARAM_STR);
      $stmh->bindValue(':password',$user->password,PDO::PARAM_STR);
      $stmh->execute();
      print 'command ';
      $CUser = new User();
      print 'command ';
      $CUser = $this->selectUserByEmail($user->email);
      print $CUser->id;
      if ($CUser->id == -1){
        return False;
      }
      return True;
  }

  public function insertCashBook($CashBook) {
    try{
      $this->GetConnection();
      $sql = "INSERT INTO CashBook (user_id,ym,date,summary,detail,income,expenses,amount) VALUES (:user_id,:ym,:date,:summary,:detail,:income,:expenses,:amount)";
      $stmh = $this->$pdo->prepare($sql);
      $stmh->bindValue(':user_id',$CashBook->user_id,PDO::PARAM_INT);
      $stmh->bindValue(':ym',$CashBook->ym,PDO::PARAM_INT);
      $stmh->bindValue(':date',$CashBook->date,PDO::PARAM_STR);
      print 'a';
      $stmh->bindValue(':summary',$CashBook->summary,PDO::PARAM_STR);
      $stmh->bindValue(':detail',$CashBook->detail,PDO::PARAM_STR);
      $stmh->bindValue(':income',$CashBook->income,PDO::PARAM_INT);
      $stmh->bindValue(':expenses',$CashBook->expenses,PDO::PARAM_INT);
      $stmh->bindValue(':amount',$CashBook->amount,PDO::PARAM_INT);
      print 'a';
      $stmh->execute();
      return True;
    }catch(PDOException $Exception){
      return False;
        die('エラー :' . $Exception->getMessage());
    }
  }

  public function selectCashBookList($user_id) {
      try{
        $this->GetConnection();
        $sql = "SELECT * FROM CashBook WHERE user_id = :user_id";
        $stmh = $this->$pdo->prepare($sql);
        $stmh->bindValue(':user_id',$user_id,PDO::PARAM_INT);
        $stmh->execute();
        $count = $stmh->rowCount();

        $rows = $stmh->fetchAll(PDO::FETCH_ASSOC);
        print count($rows);
      }catch(PDOException $Exception){
          die('エラー :' . $Exception->getMessage());
      }
      return $rows;
    }

    public function selectCashBookById($id) {
        try{
          $this->GetConnection();
          $sql = "SELECT * FROM CashBook WHERE id = :id limit 1";
          $stmh = $this->$pdo->prepare($sql);
          $stmh->bindValue(':id',$id,PDO::PARAM_INT);
          $stmh->execute();
          $count = $stmh->rowCount();
          $list = $stmh->fetchAll(PDO::FETCH_ASSOC);
          print count($rows);
        }catch(PDOException $Exception){
            die('エラー :' . $Exception->getMessage());
        }
        $col = new CashBook();
        if ($count >= 1) {
            $col = $list[0];
            print 'count';
        }
        return $col;
    }

    public function updateCashBook($CashBook) {
      print $CashBook->ym;
      try{
        $this->GetConnection();
        $sql = "UPDATE CashBook SET user_id = :user_id,ym = :ym,date = :date,summary = :summary,detail = :detail,income = :income,expenses = :expenses,amount = :amount WHERE id = :id";
        $stmh = $this->$pdo->prepare($sql);
        $stmh->bindValue(':id',$CashBook->id,PDO::PARAM_INT);
        $stmh->bindValue(':user_id',$CashBook->user_id,PDO::PARAM_INT);
        $stmh->bindValue(':ym',$CashBook->ym,PDO::PARAM_INT);
        $stmh->bindValue(':date',$CashBook->date,PDO::PARAM_STR);
        $stmh->bindValue(':summary',$CashBook->summary,PDO::PARAM_STR);
        $stmh->bindValue(':detail',$CashBook->detail,PDO::PARAM_STR);
        $stmh->bindValue(':income',$CashBook->income,PDO::PARAM_INT);
        $stmh->bindValue(':expenses',$CashBook->expenses,PDO::PARAM_INT);
        $stmh->bindValue(':amount',$CashBook->amount,PDO::PARAM_INT);
        $stmh->execute();
        print 'a';
      }catch(PDOException $Exception){
        return False;
        die('エラー :' . $Exception->getMessage());
      }
      return True;
    }

    public function deleteCashBookById($id) {
        try{
          $this->GetConnection();
          $sql = "DELETE FROM CashBook WHERE id = :id ";
          $stmh = $this->$pdo->prepare($sql);
          $stmh->bindValue(':id',$id,PDO::PARAM_INT);
          $stmh->execute();
          $count = $stmh->rowCount();
          $list = $stmh->fetchAll(PDO::FETCH_ASSOC);
          print count($rows);
        }catch(PDOException $Exception){
            return False;
            die('エラー :' . $Exception->getMessage());
        }
        $col = new CashBook();
        return True;
    }

}
?>
