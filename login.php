<?php
    session_start();
    
    $email = $_POST["email"];
    $pasaword = $_POST["password"];
    
    if ($email = "test@gmail.com" && $pasaword = "123123") {
        $_SESSION["auth"] = true;
        $_SESSION["id"] = $email;
        
        //echo "Your email address is ".$email." and ",
        "your password is ".$pasaword;
    } else {
        echo "Something went wrong!";
    }
    
    header("Location: index.php");
?>