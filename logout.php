<?php
    session_start();
    unset($_SESSION["auth"]);
    unset($_SESSION["email"]);
    header("location: index.php");
?>