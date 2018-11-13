<?php
session_start();
include 'dba.inc.php';

$username = $_POST['username'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM användare WHERE username='$username' AND pwd='$pwd'";
$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_assoc($result)){
    echo "Your username or password is incorrect!";
} else {
    //echo "you are logged in";
    $_SESSION['id'] = $row['id'];
}

header("Location: index.php");