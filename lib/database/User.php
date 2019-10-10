<?php
//print 'user';
class User {
  public $id;
  public $email;
  public $name;
  public $password;

  public function __construct() {
    $this->id =-1;
    $this->email = null;
    $this->name = null;
    $this->password = null;
  }

  public function setUser($ID,$EMAIL,$NAME,$PASSWORD) {
    $this->id = $ID;
    $this->email = $EMAIL;
    $this->name = $NAME;
    $this->password = $PASSWORD;
  }
}
?>
