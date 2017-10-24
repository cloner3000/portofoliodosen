<?php
session_start();
if(!isset($_SESSION["NIP"])){
header("Location: login.php");
exit(); }
?>
