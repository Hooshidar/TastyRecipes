<?php
require 'dbhLogin.inc.php';
if(isset($_POST['commentSubmit'])){
	$uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];
        
    $sql = "INSERT INTO comments (uid, date, message) 
                VALUES ('$uid', '$date', '$message')";
    $result = mysqli_query($conn, $sql);
	header("Location: ../Meatballs.php");
}