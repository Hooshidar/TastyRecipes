<?php
/*Ser till så att personen klickade på signup-knappen*/
if (isset($_POST['signup-submit'])){
    require 'dbhLogin.inc.php';
    
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];
    
    /* Kollar om något av fälten är tomma, isåfall skickas man tillbaka till signuppage.php och den info som skrevs sparas i fältet (förutom password) */
    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
        header("Location: ../Signuppage.php?error=emtyfields&uid=".$username."&mail=".$email);
        exit();
    } 
    /* Ser till så att formatet på mailet är korrekt samt om de används de tllåtna tecken nedan.*/
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../Signuppage.php?error=invalidmailuid");
        exit();
    }
    /* Ser till så att formatet på mailet annars skickas man tillbaka till signuppage.php med ifyllt usename*/
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../Signuppage.php?error=invalidmail&uid=".$username);
        exit();
    }
    /* Ser till så att det används tillåtan tecken ananrs skickas man tillbaka till signuppage.php med ifylld email*/
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../Signuppage.php?error=invaliduid&mail=".$email);
        exit();
    }
    /*Ser till så att använder skriver korrekt password annars skickas man tillbaka till singuppage.php med ifyllt username och email*/
    else if($password !== $passwordRepeat){
        header("Location: ../Signuppage.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    }
    /* Kollar om username redan finns*/
    else {
        /*hitta usernames i databasen. använder sig av en palceholder "?" för att folk inte ska kunna förstöra databasen*/
        $sql = "SELECT uidUsers FROM users WHERE uidUsers=?"; 
        $stmt = mysqli_stmt_init($conn);
        /* Kollar om statement (stmt) är redo för exekvering i $sql*/
        if (!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../Signuppage.php?error=sqlerror");
            exit();
        }
        else {
            /* Kör det inskrivna användarnamnet mot databasen för att se om det redan finns. mysql_stmt_num_rows returnerar True eller False */
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck > 0){
                header("Location: ../Signuppage.php?error=usertaken&mail=".$email);
                exit();
            }
            /* Sista checken som ser till att vi faktsikt kan köra vårat statement mot databasen */
            else {
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../Signuppage.php?error=sqlerror");
                    exit();
                }
                /* om du tagit dig hit har du klarat alla prövningar. Här läggs informationen in i databasen*/
                else {
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../Signuppage.php?signup=success");
                    exit();
                }
            }
        }
    }  
    /* Stänger av vårat statement och stänga av connection för att spara på resurser*/
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
/* Om man kom åt formuläret på annan väg skickas man till signuppage för signup */
else{
    header("Location: ../Signuppage.php");
    exit();
}
