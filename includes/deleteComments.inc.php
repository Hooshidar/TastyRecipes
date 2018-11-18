<?php
session_start();
require 'dbhLogin.inc.php';
if (isset($_POST['commentDelete'])){
    $cid = $_POST['cid'];
	$uid = $_SESSION['userUid'];
      
    $sql = "DELETE FROM comments WHERE cid='$cid' AND uid='$uid'";
    $result = mysqli_query($conn, $sql);
	header("Location: ../Meatballs.php");
}