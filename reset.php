<?php
session_start();

unset($_SESSION['receipt_items']);
unset($_SESSION['total_amount']);

header("Location: ICEDCOFFEE.php");
exit();
?>
