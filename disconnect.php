<?php
session_start();
session_destry();

header ('Location:login.php');
exit;
?>