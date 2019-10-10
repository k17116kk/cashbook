<?php
//print 'user';
class CashBook {
  public $id;
  public $user_id;
  public $ym;
  public $date;
  public $summary;
  public $detail;
  public $income;
  public $expenses;
  public $amount;

  public function __construct() {
    $this->id =-1;
    $this->user_id =-1;
    $this->ym =0;
    $this->date = null;
    $this->summary = null;
    $this->detail = null;
    $this->income = null;
    $this->expenses = null;
    $this->amount = null;
  }

  public function setCashBook($ID,$USER_ID,$YM,$DATE,$SUMMARY,$DETAIL,$INCOME,$EXPENSES,$AMOUNT) {
    $this->id = $ID;
    $this->user_id =$USER_ID;
    $this->ym =$YM;
    $this->date = $DATE;
    $this->summary = $SUMMARY;
    $this->detail = $DETAIL;
    $this->income = $INCOME;
    $this->expenses = $EXPENSES;
    $this->amount = $AMOUNT;
  }
}
?>
