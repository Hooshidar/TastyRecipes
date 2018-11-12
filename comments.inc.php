<?php

function setComments($conn) {
    if(isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $dates = $_POST['dates'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO comments (uid, dates, message) 
                VALUES ('$uid', '$dates', '$message')";
        $result = mysqli_query($conn, $sql);
    }
}

function getComments($conn){
    $sql = "SELECT * FROM comments";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['uid'];
        $sql2 = "SELECT * FROM användare WHERE id='$id'";
        $result2 = mysqli_query($conn, $sql2);
        if($row2 = mysqli_fetch_assoc($result2)){
            echo "<div class='commentBox'><p>";
            echo $row2['username'].'<br>';
            echo $row['dates'].'<br><br>';
            echo nl2br($row['message']);
            echo "</p>
                <form class='delete-form' method='POST' action='".deleteComment($conn)."'>
                    <input type='hidden' name='cid' value='".$row['cid']."'>
                    <button type='submit' name='commentDelete'>Delete</button>
                </form>
            </div>";
        }
        
        
    }
}

function deleteComment($conn){
    if (isset($_POST['commentDelete'])){
        $cid = $_POST['cid'];
        
        $sql = "DELETE FROM comments WHERE cid='$cid'";
        $result = mysqli_query($conn, $sql);
        //header("Location: Meatballs.php");
    }
}