<?php
session_start();
$_SESSION = array();
session_destroy();
header('Location: http://localhost:8888/index.php');
exit;
?>
