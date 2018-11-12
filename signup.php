<?php
session_start();
include 'dba.inc.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$pwd = $_POST['pwd'];

$sql ="INSERT INTO användare (firstname, lastname, username, pwd) 
       VALUES ('$firstname', '$lastname', '$username', '$pwd')";
$result = mysqli_query($conn, $sql);

header("Location: index.php");