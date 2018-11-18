<?php
require 'dbhLogin.inc.php';
$sql = "SELECT * FROM comments";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['uid'];
        echo "<div class='commentBox'><p>";
        echo $row['uid'].'<br>';
        echo $row['date'].'<br><br>';
        echo nl2br($row['message']);
        echo "</p>
            <form class='delete-form' method='POST' action='includes/deleteComments.inc.php'>
                <input type='hidden' name='cid' value='".$row['cid']."'>
                <button type='submit' name='commentDelete'>Delete</button>
            </form>
        </div>";
    }