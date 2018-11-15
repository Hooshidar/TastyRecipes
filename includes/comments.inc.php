<?php

function setComments($conn) {
    if(isset($_POST['commentSubmit'])){
        $uid = $_POST['uid'];
        $date = $_POST['date'];
        $message = $_POST['message'];
        
        $sql = "INSERT INTO comments (uid, date, message) 
                VALUES ('$uid', '$date', '$message')";
        $result = mysqli_query($conn, $sql);
    }
}

function getComments($conn){
    $sql = "SELECT * FROM comments";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['uid'];
        echo "<div class='commentBox'><p>";
        echo $row['uid'].'<br>';
        echo $row['date'].'<br><br>';
        echo nl2br($row['message']);
        echo "</p>
            <form class='delete-form' method='POST' action='".deleteComment($conn)."'>
                <input type='hidden' name='cid' value='".$row['cid']."'>
                <button type='submit' name='commentDelete'>Delete</button>
            </form>
        </div>";
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